<!DOCTYPE html>
<html>
<head>
    <meta name="robots" content="noindex, nofollow"/>
</head>
<body>
<style>
    .custom-button input {
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }
    .postmsg {
        margin-bottom: 7px;
        color: blue;
        font-weight: bold;
    }
    .custom-button label {
        display: block;
        width: 100%;
        height: 100%;
        color: white;
        font-size: 15px;
        font-family: Roboto;
        font-weight: 500;
        line-height: 30px;
        border-radius: 5px;
        background: #0FC5FF;
        cursor: pointer;
        text-align: center;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('myForm');
        var submitButton = document.getElementById('submitButton');

        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/save', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            xhr.responseType = 'json';
            xhr.onload = function () {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    let msgElement = document.getElementById('msg');

                    if (msgElement) {
                        if(data.status === '1'){
                            msgElement.innerHTML = data.msg;
                            form.remove();
                        }else{
                            msgElement.innerHTML = data.msg;
                            if (data.errors) {
                                for (var fieldName in data.errors) {
                                    if (data.errors.hasOwnProperty(fieldName)) {
                                        var errorMessages = data.errors[fieldName];
                                        msgElement.innerHTML += '<br>' + errorMessages;
                                    }
                                }
                            }
                            window.scrollTo(0, 0);
                        }

                    }
                }
            };
            xhr.send(new URLSearchParams(new FormData(form)).toString());
        });
    });
</script>
<div id="msg" class="postmsg"></div>
<form id="myForm" method="POST" action="/save">
    @csrf
<div style="width: 100%; height: 494px; position: relative; background: #374050; border: 1px black solid">
    <div style="left: 12px; top: 27px; position: absolute; color: white; font-size: 20px; font-family: Roboto; font-weight: 700; line-height: 11px; word-wrap: break-word">
        {{$product->name}}
    </div>
    <div style="width: 472px; height: 30px; left: 12px; top: 87px; position: absolute; background: white; border-radius: 5px">
        <input name="article" value="{{$product->article}}" style="width: 100%; height: 100%;" {{!auth()->user()->isAdmin() ? "disabled" : ""}}>
    </div>
    <div style="width: 472px; height: 30px; left: 12px; top: 149px; position: absolute; background: white; border-radius: 5px">
        <input name="name" value="{{$product->name}}" style="width: 100%; height: 100%;">
    </div>
    <select name="productStatus" id="productStatus" style="width: 472px; height: 30px; left: 12px; top: 211px; position: absolute; background: white; border-radius: 5px">
            <option value="available" {{ $product->name == 'available' ? 'selected' : '' }}>Доступен</option>
            <option value="unavailable" {{ $product->name == 'unavailable' ? 'selected' : '' }}>Недоступен</option>
        </select>

    <div style="width: 209px; height: 30px; left: 12px; top: 311px; position: absolute; background: white; border-radius: 5px;line-height: 30px; padding-left: 10px;">
        Цвет
    </div>
    <div style="width: 219px; height: 30px; left: 242px; top: 311px; position: absolute; background: white; border-radius: 5px">
        <input name="color" value="{{json_decode($product->data)->color}}" style="width: 100%; height: 100%;">
    </div>
    <div style="left: 12px; top: 68px; position: absolute; color: white; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Артикул {{!auth()->user()->isAdmin() ? " - редактировать может только админ" : ""}}
    </div>
    <div style="left: 12px; top: 130px; position: absolute; color: white; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Название
    </div>

    <div style="left: 12px; top: 192px; position: absolute; color: white; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Статус
    </div>
    <div style="width: 139px; height: 30px; left: 12px; top: 400px; position: absolute">
        <div class="custom-button">
            <input type="submit" value="Сохранить" id="submitButton">
            <label for="submitButton">Сохранить</label>
        </div>
    </div>
    <div style="left: 12px; top: 254px; position: absolute; color: white; font-size: 14px; font-family: Roboto; font-weight: 700; line-height: 11px; word-wrap: break-word">
        Атрибуты
    </div>

    <div style="width: 209px; height: 30px; left: 12px; top: 374px; position: absolute; background: white; border-radius: 5px;line-height: 30px; padding-left: 10px;">
        Размер
    </div>
    <div style="width: 219px; height: 30px; left: 242px; top: 374px; position: absolute; background: white; border-radius: 5px">
        <input name="size" value="{{json_decode($product->data)->size}}" style="width: 100%; height: 100%;">
    </div>
    <div style="left: 12px; top: 290px; position: absolute; color: white; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Название
    </div>
    <div style="left: 12px; top: 354px; position: absolute; color: white; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Название
    </div>
    <div style="left: 241px; top: 290px; position: absolute; color: white; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Значение
    </div>
    <div style="left: 241px; top: 354px; position: absolute; color: white; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 11px; word-wrap: break-word">
        Значение
    </div>
    <input type="hidden" name="id" value="{{$product->id}}">
</div>
</form>
</body>
</html>
