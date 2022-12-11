@extends('layouts.app')

@section('content')
    <style>
        form {
            max-width: 420px;
            margin: 50px auto;
        }

        .feedback-input {
            color: black;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 500;
            font-size: 18px;
            border-radius: 5px;
            line-height: 22px;
            background-color: transparent;
            border: 2px solid gray;
            transition: all 0.3s;
            padding: 13px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
            outline: 0;
        }

        .feedback-input:focus {
            border: 2px solid black;
        }

        textarea {
            height: 150px;
            line-height: 150%;
            resize: vertical;
        }

        [type="submit"] {
            font-family: "Montserrat", Arial, Helvetica, sans-serif;
            width: 100%;
            background: gray;
            border-radius: 5px;
            border: 0;
            cursor: pointer;
            color: white;
            font-size: 24px;
            padding-top: 10px;
            padding-bottom: 10px;
            transition: all 0.3s;
            margin-top: -4px;
            font-weight: 700;
        }
        [type="submit"]:hover {
            background: darkgray;
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


                            <div class="flex items-center justify-center p-12">
                                <!-- Author: FormBold Team -->
                                <!-- Learn More: https://formbold.com -->
                                <form method="POST" action="{{ route("storeproduct") }}" enctype="multipart/form-data">
@csrf
                                    <input name="name" type="text" class="feedback-input" placeholder="Name" />
                                    <input name="price" type="text" class="feedback-input" placeholder="Price" />
                                    <input name="code" type="text" class="feedback-input" placeholder="Code" />
                                    <label for="image">image</label>
                                    <input name="image" type="file" class="feedback-input" placeholder="" />
                                    <input name="brand" type="text" class="feedback-input" placeholder="Brand" />
                                    <input type="submit" value="SUBMIT"/>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
