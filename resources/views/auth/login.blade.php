<style>
    body {
        background-color: #486d46;
        background-image: url("../yottomo-jet-image/tukue2.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
        }
    
    .form-wrapper {
        background-color: rgba(255,255,255,0.9);
        opacity:0.8;
        height: 400px;
        margin: 3em auto;
        padding: 0 1em;
        border-radius: 10px;
        /*max-width: 1000px;*/
        font-family:'HuiFontP109';
        }
    
    @font-face{
        font-family:'HuiFontP109';
        src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot');
        src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot?#iefix') format('embedded-opentype'),
        url('https://dl.dropboxusercontent.com/s/7pscemjdvt0wyiq/HuiFontP109.woff') format('woff'),
        url('https://dl.dropboxusercontent.com/s/0w9uuopxrns8ehi/HuiFontP109.ttf') format('truetype'),
        url('https://dl.dropboxusercontent.com/s/xnnsbxtz8o6d98i/HuiFontP109.svg#HuiFontP109') format('svg');
        }
       
    .form-group {
        font-size: 20px;
    }
   
</style>

@extends('layouts.app')

@section('content')
    <div class="form-wrapper col-xs-8 col-xs-offset-2">
        <br><br>
    <div class="text-center">
        <h1>ログイン画面</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'なまえ(ニックネーム)') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード(社員番号)') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン！', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p>18卒以外の方は {!! link_to_route('signup.get', 'こちらから') !!}</p>
        </div>
    </div>
    </div>
@endsection