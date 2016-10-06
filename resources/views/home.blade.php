@extends('app')

@section('content')
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
        }

        .container {
            text-align: center;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

        .sub {
            font-size: 20px;
        }

        .container {
            display: table;
            height: 100%;
            text-align: center;
        }

        .container .content {
            display: table-cell;
            vertical-align: middle;
        }

    </style>

    <div class="container">
        <div class="content">
            <div class="title">Lumen 5.1</div>
            <p class="sub">Easy auth by <a target="_blank" href="https://github.com/Freeongoo">Freeongoo</a></p>
        </div>
    </div>
@endsection
