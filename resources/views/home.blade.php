@extends('layouts.app')

@section('content')
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

                    {{ __('Giriş Yaptın!') }}

                </div>
                <button class="button button1" style="border: none;
            color: white;
            padding: 15px 32px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;" onclick="location.href='/video_chat'">
                    Video Chat Sayfasına Git
                </button>

            </div>



        </div>


    </div>

</div>
@endsection
