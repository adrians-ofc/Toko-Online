@extends('shop::layouts.master')

@section('content')
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Lato', sans-serif;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        .head {
            text-align: center;
            margin: auto;
        }

        .sub-head {
            text-align: center;
            margin: auto;
        }
    </style>

    <div class="container">
        <h2 class="head">Ini header euy</h2>
        <p class="sub-head">Sub-head ini mahh</p>
    </div>
    <p>
        This view is loaded from module: {!! config('shop.name') !!}
    </p>
@endsection
