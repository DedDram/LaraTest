<?php

namespace App\Http\Controllers;

use App\Jobs\Notification;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductsController extends Controller
{
    public function products()
    {
        $availableProducts = Product::available()->get();
        return view('content.products', ['availableProducts' => $availableProducts]);
    }

    public function edit(Request $request)
    {
        if($request->filled('id')){
            $product = Product::find($request->query('id'));
            return view('content.edit', ['product' => $product]);
        }else{
            abort(404);
        }
    }

    public function show(Request $request)
    {
        if($request->filled('id')){
            $product = Product::find($request->query('id'));
            return view('content.show', ['product' => $product]);
        }else{
            abort(404);
        }
    }

    public function delete(Request $request): array
    {
        if ($request->filled('id')) {
            $productId = $request->query('id');

            $product = Product::find($productId);
            if (!$product) {
                echo "Товар не найден!";
                exit;
            }
            $product->delete();
            echo "Товар успешно удален, перезагрузите страницу.";
            exit;
        }

        echo "Отсутствует параметр id";
        exit;
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('content.add', []);
        }else{
            $rules =  [
                'name' => 'required|string|min:10',
                'article' => 'required|string|regex:/[a-zA-Z0-9]/|unique:products',
                'productStatus' => 'required|string',
                'size' => 'required|string',
                'color' => 'required|string',
            ];
            $messages = [
                'name.required' => 'Поле Name обязательно для заполнения.',
                'name.string' => 'Поле Name должно быть строкой.',
                'name.min' => 'Длина поля Name должна быть не менее 10 символов.',
                'article.required' => 'Поле Article обязательно для заполнения.',
                'article.string' => 'Поле Article должно быть строкой.',
                'article.regex' => 'Поле Article должно состоять из латинских букв или цифр.',
                'article.unique' => 'Такой Article уже существует в базе данных.',
                'productStatus.required' => 'Поле Product Status обязательно для заполнения.',
                'productStatus.string' => 'Поле Product Status должно быть строкой.',
                'size.required' => 'Поле Size обязательно для заполнения.',
                'size.string' => 'Поле Size должно быть строкой.',
                'color.required' => 'Поле Color обязательно для заполнения.',
                'color.string' => 'Поле Color должно быть строкой.',
            ];

            $validatedData = Validator::make($request->all(), $rules, $messages);

            if ($validatedData->fails()) {
                $errors = $validatedData->errors()->messages();
                return [
                    'status' => 2,
                    'msg' => 'Ошибка сохранения данных!',
                    'errors' => $errors,
                ];
            }

            $product = new Product();
            $product->name = $validatedData->validated()['name'];
            $product->article = $validatedData->validated()['article'];
            $product->status = $validatedData->validated()['productStatus'];
            $product->data = json_encode(['size' => $validatedData->validated()['size'], 'color' => $validatedData->validated()['color']]);
            $product->save();

            // Добавления задания в очередь
            dispatch(new Notification());

            return [
                'status' => 1,
                'msg' => 'Данные обновлены, перезагрузите страницу!'
            ];
        }
    }

    /**
     * @throws ValidationException
     */
    public function save(Request $request): array
    {
        $rules =  [
            'id' => 'required|numeric',
            'name' => 'required|string|min:10',
            'article' => 'required|string|regex:/[a-zA-Z0-9]/',
            'productStatus' => 'required|string',
            'size' => 'required|string',
            'color' => 'required|string',
        ];
        $messages = [
            'id.required' => 'Поле ID обязательно для заполнения.',
            'id.numeric' => 'Поле ID должно быть числовым значением.',
            'name.required' => 'Поле Name обязательно для заполнения.',
            'name.string' => 'Поле Name должно быть строкой.',
            'name.min' => 'Длина поля Name должна быть не менее 10 символов.',
            'article.required' => 'Поле Article обязательно для заполнения.',
            'article.string' => 'Поле Article должно быть строкой.',
            'article.regex' => 'Поле Article должно состоять из латинских букв или цифр.',
            'productStatus.required' => 'Поле Product Status обязательно для заполнения.',
            'productStatus.string' => 'Поле Product Status должно быть строкой.',
            'size.required' => 'Поле Size обязательно для заполнения.',
            'size.string' => 'Поле Size должно быть строкой.',
            'color.required' => 'Поле Color обязательно для заполнения.',
            'color.string' => 'Поле Color должно быть строкой.',
        ];

        $validatedData = Validator::make($request->all(), $rules, $messages);

        if ($validatedData->fails()) {
            $errors = $validatedData->errors()->messages();
            return [
                'status' => 2,
                'msg' => 'Ошибка сохранения данных!',
                'errors' => $errors,
            ];
        }

        $product = Product::find($validatedData->validated()['id']);

        if (!$product) {
            return [
                'status' => 2,
                'msg' => 'Ошибка сохранения данных!'
            ];
        }

        $product->update([
            'name' => $validatedData->validated()['name'],
            'article' => $validatedData->validated()['article'],
            'status' => $validatedData->validated()['productStatus'],
            'data' => json_encode(['size' => $validatedData->validated()['size'], 'color' => $validatedData->validated()['color']]),
        ]);

        return [
            'status' => 1,
            'msg' => 'Данные обновлены, перезагрузите страницу!'
        ];
    }

}
