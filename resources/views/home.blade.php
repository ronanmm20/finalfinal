@extends('layouts.app')

@section('content')
    <style>
        .wrapper {
            width: 300px;
            height: 500px;
            background: white;
            margin: auto;
            position: relative;
            overflow: hidden;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0;
            transform: scale(0.95);
            transition: box-shadow 0.5s, transform 0.5s;
        }
        .wrapper:hover {
            transform: scale(1);
            box-shadow: 5px 20px 30px rgba(0, 0, 0, 0.2);
        }
        .wrapper .container {
            width: 100%;
            height: 100%;
        }
        .wrapper .container .top {
            height: 80%;
            width: 100%;
            background: url(https://s-media-cache-ak0.pinimg.com/736x/49/80/6f/49806f3f1c7483093855ebca1b8ae2c4.jpg) no-repeat center center;
            -webkit-background-size: 100%;
            -moz-background-size: 100%;
            -o-background-size: 100%;
            background-size: 100%;
        }
        .wrapper .container .bottom {
            width: 200%;
            height: 20%;
            transition: transform 0.5s;
        }
        .wrapper .container .bottom.clicked {
            transform: translateX(-50%);
        }
        .wrapper .container .bottom h1 {
            margin: 0;
            padding: 0;
        }
        .wrapper .container .bottom p {
            margin: 0;
            padding: 0;
        }
        .wrapper .container .bottom .left {
            height: 100%;
            width: 50%;
            background: #f4f4f4;
            position: relative;
            float: left;
        }
        .wrapper .container .bottom .left .details {
            padding: 20px;
            float: left;
            width: calc(70% - 40px);
        }
        .wrapper .container .bottom .left .buy {
            float: right;
            width: calc(30% - 2px);
            height: 100%;
            background: #f1f1f1;
            transition: background 0.5s;
            border-left: solid thin rgba(0, 0, 0, 0.1);
        }
        .wrapper .container .bottom .left .buy i {
            font-size: 30px;
            padding: 30px;
            color: #254053;
            transition: transform 0.5s;
        }
        .wrapper .container .bottom .left .buy:hover {
            background: #A6CDDE;
        }
        .wrapper .container .bottom .left .buy:hover i {
            transform: translateY(5px);
            color: #00394B;
        }
        .wrapper .container .bottom .right {
            width: 50%;
            background: #A6CDDE;
            color: white;
            float: right;
            height: 200%;
            overflow: hidden;
        }
        .wrapper .container .bottom .right .details {
            padding: 20px;
            float: right;
            width: calc(70% - 40px);
        }
        .wrapper .container .bottom .right .done {
            width: calc(30% - 2px);
            float: left;
            transition: transform 0.5s;
            border-right: solid thin rgba(255, 255, 255, 0.3);
            height: 50%;
        }
        .wrapper .container .bottom .right .done i {
            font-size: 30px;
            padding: 30px;
            color: white;
        }
        .wrapper .container .bottom .right .remove {
            width: calc(30% - 1px);
            clear: both;
            border-right: solid thin rgba(255, 255, 255, 0.3);
            height: 50%;
            background: #BC3B59;
            transition: transform 0.5s, background 0.5s;
        }
        .wrapper .container .bottom .right .remove:hover {
            background: #9B2847;
        }
        .wrapper .container .bottom .right .remove:hover i {
            transform: translateY(5px);
        }
        .wrapper .container .bottom .right .remove i {
            transition: transform 0.5s;
            font-size: 30px;
            padding: 30px;
            color: white;
        }
        .wrapper .container .bottom .right:hover .remove, .wrapper .container .bottom .right:hover .done {
            transform: translateY(-100%);
        }
        .wrapper .inside {
            z-index: 9;
            background: #92879B;
            width: 140px;
            height: 140px;
            position: absolute;
            top: -70px;
            right: -70px;
            border-radius: 0px 0px 200px 200px;
            transition: all 0.5s, border-radius 2s, top 1s;
            overflow: hidden;
        }
        .wrapper .inside .icon {
            position: absolute;
            right: 85px;
            top: 85px;
            color: white;
            opacity: 1;
        }
        .wrapper .inside:hover {
            width: 100%;
            right: 0;
            top: 0;
            border-radius: 0;
            height: 80%;
        }
        .wrapper .inside:hover .icon {
            opacity: 0;
            right: 15px;
            top: 15px;
        }
        .wrapper .inside:hover .contents {
            opacity: 1;
            transform: scale(1);
            transform: translateY(0);
        }
        .wrapper .inside .contents {
            padding: 5%;
            opacity: 0;
            transform: scale(0.5);
            transform: translateY(-200%);
            transition: opacity 0.2s, transform 0.8s;
        }
        .wrapper .inside .contents table {
            text-align: left;
            width: 100%;
        }
        .wrapper .inside .contents h1, .wrapper .inside .contents p, .wrapper .inside .contents table {
            color: white;
        }
        .wrapper .inside .contents p {
            font-size: 13px;
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @foreach($products as $product)

                        <a href="{{ route("viewproduct", ['products' => $product->id]) }}">
                            <div class="wrapper">
                                <div class="container">
                                    <div class="top" style="background: url({{ $product->image }}) no-repeat center center"></div>
                                    <div class="bottom">
                                        <div class="left">
                                            <div class="details">
                                                <h1>Chair</h1>
                                                <p>£250</p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="details">
                                                <h1>Chair</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>



                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
