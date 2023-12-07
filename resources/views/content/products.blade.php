<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="{{ mix('/js/simpleModal.js') }}" defer></script>
    <style>
        /* Ваш CSS-код здесь */
        .screen {
            background-color: #ffffff;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
        }

        .screen .overlap-wrapper {
            background-color: #ffffff;
            overflow: hidden;
            width: 1440px;
            height: 1080px;
        }

        .screen .overlap {
            position: relative;
            width: 1441px;
            height: 1080px;
            left: -1px;
        }

        .screen .view {
            position: absolute;
            width: 1441px;
            height: 1080px;
            top: 0;
            left: 0;
        }

        .screen .overlap-group {
            position: relative;
            height: 1080px;
        }

        .screen .rectangle {
            position: absolute;
            width: 1440px;
            height: 1015px;
            top: 64px;
            left: 0;
            background-color: #f2f6fa;
        }

        .screen .div {
            position: absolute;
            width: 181px;
            height: 1080px;
            top: 0;
            left: 0;
            background-color: #374050;
        }

        .screen .rectangle-2 {
            position: absolute;
            width: 79px;
            height: 59px;
            top: 0;
            left: 0;
            background-color: #ffffff;
            border-radius: 0px 0px 20px 0px;
        }

        .screen .rectangle-3 {
            position: absolute;
            width: 1260px;
            height: 1020px;
            top: 59px;
            left: 181px;
            background-color: #f2f6fa;
        }

        .screen .rectangle-4 {
            position: absolute;
            width: 629px;
            height: 55px;
            top: 88px;
            left: 181px;
            background-color: #ffffff;
        }

        .screen .view-2 {
            position: absolute;
            width: 631px;
            height: 109px;
            top: 88px;
            left: 180px;
        }

        .screen .line {
            top: 55px;
            left: 1px;
            position: absolute;
            width: 630px;
            height: 1px;
            object-fit: cover;
        }

        .screen .img {
            top: -1px;
            left: 0;
            position: absolute;
            width: 630px;
            height: 1px;
            object-fit: cover;
        }

        .screen .line-2 {
            top: 108px;
            left: 1px;
            position: absolute;
            width: 630px;
            height: 1px;
            object-fit: cover;
        }

        .screen .text-wrapper {
            position: absolute;
            top: 67px;
            left: 199px;
            font-family: "Roboto", Helvetica;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 9px;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .group {
            position: absolute;
            top: 107px;
            left: 185px;
            width: 625px;
            height: 27px;
            background-color: white;
            border-bottom: 1px solid #FAFAFA;
        }

        .screen .text-wrapper-2 {
            position: absolute;
            top: 3px;
            left: 0;
            font-family: "Roboto", Helvetica;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 11px;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .text-wrapper-3 {
            position: absolute;
            top: 3px;
            left: 152px;
            font-family: "Roboto", Helvetica;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 11px;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .text-wrapper-4 {
            top: 3px;
            left: 302px;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 11px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .text-wrapper-5 {
            top: 0;
            left: 453px;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 11px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .text-wrapper-6 {
            position: absolute;
            top: 13px;
            left: 453px;
            font-family: "Roboto", Helvetica;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 11px;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .group-2 {
            position: absolute;
            top: 158px;
            left: 199px;
            width: 527px;
            height: 24px;
        }

        .screen .text-wrapper-7 {
            top: 67px;
            left: 351px;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 9px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .text-wrapper-8 {
            top: 67px;
            left: 501px;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 9px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .text-wrapper-9 {
            top: 67px;
            left: 652px;
            font-weight: 400;
            color: #6e6d6e;
            font-size: 9px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .enterprise-resource {
            position: absolute;
            top: 6px;
            left: 91px;
            font-family: "Roboto", Helvetica;
            font-weight: 400;
            color: #ffffff;
            font-size: 11px;
            letter-spacing: 0;
            line-height: 11px;
        }

        .screen .text-wrapper-10 {
            top: 24px;
            left: 198px;
            font-weight: 400;
            color: #ed1c24;
            font-size: 11px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .text-wrapper-11 {
            top: 24px;
            left: 1287px;
            font-weight: 400;
            color: #a6afb8;
            font-size: 11px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .view-3 {
            position: absolute;
            width: 60px;
            height: 3px;
            top: 56px;
            left: 199px;
            background-color: #ed1c24;
        }

        .screen .text-wrapper-12 {
            top: 71px;
            left: 34px;
            font-weight: 400;
            color: #ffffffb2;
            font-size: 12px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .overlap-group-wrapper {
            position: absolute;
            width: 138px;
            height: 30px;
            top: 76px;
            left: 1287px;
        }

        .screen .div-wrapper {
            position: relative;
            width: 136px;
            height: 30px;
            background-color: #0ec5ff;
            border-radius: 6px;
        }

        .screen .text-wrapper-13 {
            top: 9px;
            left: 43px;
            font-weight: 500;
            color: #ffffff;
            font-size: 11px;
            position: absolute;
            font-family: "Roboto", Helvetica;
            letter-spacing: 0;
            line-height: 11px;
            white-space: nowrap;
        }

        .screen .image {
            position: absolute;
            width: 53px;
            height: 23px;
            top: 18px;
            left: 13px;
        }
    </style>
</head>
<body>
<div class="screen">
    <div class="overlap-wrapper">
        <div class="overlap">
            <div class="view">
                <div class="overlap-group">
                    <div class="rectangle"></div>
                    <div class="div"></div>
                    <div class="rectangle-2"></div>
                    <div class="rectangle-3"></div>
                </div>
            </div>
            <div class="view-2">
                <img class="img" src="/images/line-11.svg" />
            </div>
            <div class="text-wrapper">АРТИКУЛ</div>
            <?php $topPosition = 90; ?>
            @foreach($availableProducts as $product)
                <a href="/show?id={{$product->id}}" class="simplemodal" data-width="550" data-height="350">
                <div class="group" style="top: {{$topPosition}}px;" >
                    <div class="text-wrapper-2">{{$product->article}}</div>
                    <div class="text-wrapper-3">{{$product->name}}</div>
                    <div class="text-wrapper-4">{{$product->status}}</div>
                    <div class="text-wrapper-5">{{ json_decode($product->data)->color }}</div>
                    <div class="text-wrapper-6">{{ json_decode($product->data)->size }}</div>
                </div>
                </a>
                    <?php $topPosition += 30; ?>
            @endforeach
            <div class="text-wrapper-7">НАЗВАНИЕ</div>
            <div class="text-wrapper-8">СТАТУС</div>
            <div class="text-wrapper-9">АТРИБУТЫ</div>
            <div class="enterprise-resource">Enterprise<br />Resource<br />Planning</div>
            <div class="text-wrapper-10">ПРОДУКТЫ</div>
            <div class="text-wrapper-11">
                @if(auth()->check())
                    {{ auth()->user()->name }} /
                    <form action="{{ route('logout') }}" method="post" style="display: inline;">
                        @csrf
                        <button type="submit">Выход</button>
                    </form>
                @else
                    <a href="/login">Авторизация</a>
                @endif
            </div>
            <div class="view-3"></div>
            <div class="text-wrapper-12">Продукты</div>
            <div class="overlap-group-wrapper">
                <a href="/add" class="simplemodal" data-width="550" data-height="350">
                <div class="div-wrapper">
                    <div class="text-wrapper-13">Добавить</div>
                </div>
                </a>
            </div>
            <img class="image" src="/images/2x.png" />
        </div>
    </div>
</div>
</body>
</html>
