@extends('layouts.app')

@section('content')
<style type="text/css">
    
    /*body {*/
    /*  background-image: url('/images/welcome.jpg');*/
    /*  background-size: contain;*/
    /*  background-repeat: no-repeat;*/
    /*  color:#fff;*/
    /*}*/
    
    .img {
        background: url('yottomo-jet-image/welcome.jpg') no-repeat; 
        background-size: cover;
        height: 600px;
        width: 100%;
    }
    
    .btn1{
      display: inline-block;
      text-decoration: none;
      color: #668ad8;
      width: 110px;
      height: 110px;
      line-height: 80px;
      border-radius: 50%;
      border: double 6px #668ad8;
      text-align: center;
      vertical-align: middle;
      overflow: hidden;
      transition: .6s;
      font-size:170%;
      font-weight:bold;
      align-items: center;
    }
    
    .btn1:hover{
      -webkit-transform: rotateY(360deg);
      -ms-transform: rotateY(360deg);
      transform: rotateY(360deg);
    }
    
    .btn2{
      display: inline-block;
      text-decoration: none;
      color: #668ad8;
      width: 105px;
      height: 105px;
      line-height: 80px;
      border-radius: 50%;
      border: double 6px #668ad8;
      text-align: center;
      vertical-align: middle;
      overflow: hidden;
      transition: .6s;
      font-size:200%;
      font-weight:bold;
      align-items: center;
    }
    
    .btn2:hover{
      -webkit-transform: rotateY(360deg);
      -ms-transform: rotateY(360deg);
      transform: rotateY(360deg);
    }
    
    
    section.flex{
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }
    
    
    
    section.bt-samp55{
      display: block;
      text-decoration:none;
      position: relative;
      bottom: 0; 
      width: 172px;
      height: 172px;
      position:relative;
      bottom:0;
      display:inline-block;
      
    }
    section.bt-samp55:before{
      content: "";
      position: absolute;
      bottom:0;
      display:inline-block;
      top: -10px;
      right: 0px;
      border-radius: 10px;
      box-shadow: inset 1px 1px 2px rgba(255,255,255,0.5), inset 0 -1px 3px rgba(0,0,0,0.2);
      width: 20px;
      height: 20px;
      background: #ffc833;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp55 div{
      position: absolute;
      top: 0;
      box-shadow: 0 0 5px rgba(0,0,0,0.1), inset 0 0 40px 15px #fff;
      position: absolute;
      height: 172px;
      width: 172px;
      display: block;
      border: 10px solid #ffd800;
      background: #fff4b5;
      color: #ffd119;
      -webkit-transform-origin: 97% 0;
      transform-origin: 97% 0;
      -webkit-transition: all 0.5s ease-out;
      transition: all 0.5s ease-out;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp55:hover div{
      -webkit-transform: rotate(75deg);
      transform: rotate(75deg);
      z-index: 5;
    }
    
    section.bt-samp55 div h .tokimeki{
      position: absolute;
      top: 65%;
      left: 0;
      font-size: 12px;
      font-weight: bold;
      text-align: center;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp55 p{
      color: #fff;
      font-weight: bold;
      font-size:18px;
      line-height: 1;
      text-shadow: 1px 1px 0 rgba(0,0,0,0.1);
      width: 150px;
      height: 170px;
      padding: 100px 10px 50px;
      background: #ffc833;
      border: 10px solid #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    
    
    section.bt-samp56{
      display: block;
      text-decoration:none;
      position: relative;
      bottom: 0; 
      width: 172px;
      height: 172px;
      
    }
    section.bt-samp56:before{
      content: "";
      position: absolute;
      top: -10px;
      right: 0px;
      border-radius: 10px;
      box-shadow: inset 1px 1px 2px rgba(255,255,255,0.5), inset 0 -1px 3px rgba(0,0,0,0.2);
      width: 20px;
      height: 20px;
      background: #ffc833;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp56 div{
      position: absolute;
      top: 0;
      box-shadow: 0 0 5px rgba(0,0,0,0.1), inset 0 0 40px 15px #fff;
      position: absolute;
      height: 172px;
      width: 172px;
      display: block;
      border: 10px solid #ffd800;
      background: #fff4b5;
      color: #ffd119;
      -webkit-transform-origin: 97% 0;
      transform-origin: 97% 0;
      -webkit-transition: all 0.5s ease-out;
      transition: all 0.5s ease-out;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp56:hover div{
      -webkit-transform: rotate(75deg);
      transform: rotate(75deg);
      z-index: 5;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    section.bt-samp56 div h .tokimeki{
      position: absolute;
      top: 65%;
      left: 0;
      font-size: 12px;
      font-weight: bold;
      text-align: center;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp56 p{
      color: #fff;
      font-weight: bold;
      font-size:18px;
      line-height: 1;
      text-shadow: 1px 1px 0 rgba(0,0,0,0.1);
      width: 150px;
      height: 170px;
      padding: 100px 10px 50px;
      background: #ffc833;
      border: 10px solid #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp57{
      display: block;
      text-decoration:none;
      position: relative;
      bottom: 0; 
      width: 172px;
      height: 172px;
      
    }
    section.bt-samp57:before{
      content: "";
      position: absolute;
      top: -10px;
      right: 0px;
      border-radius: 10px;
      box-shadow: inset 1px 1px 2px rgba(255,255,255,0.5), inset 0 -1px 3px rgba(0,0,0,0.2);
      width: 20px;
      height: 20px;
      background: #ffc833;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp57 div{
      position: absolute;
      top: 0;
      box-shadow: 0 0 5px rgba(0,0,0,0.1), inset 0 0 40px 15px #fff;
      position: absolute;
      height: 172px;
      width: 172px;
      display: block;
      border: 10px solid #ffd800;
      background: #fff4b5;
      color: #ffd119;
      -webkit-transform-origin: 97% 0;
      transform-origin: 97% 0;
      -webkit-transition: all 0.5s ease-out;
      transition: all 0.5s ease-out;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp57:hover div{
      -webkit-transform: rotate(75deg);
      transform: rotate(75deg);
      z-index: 5;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    section.bt-samp57 div h .tokimeki{
      position: absolute;
      top: 65%;
      left: 0;
      font-size: 12px;
      font-weight: bold;
      text-align: center;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp57 p{
      color: #fff;
      font-weight: bold;
      font-size:18px;
      line-height: 1;
      text-shadow: 1px 1px 0 rgba(0,0,0,0.1);
      width: 150px;
      height: 170px;
      padding: 100px 10px 50px;
      background: #ffc833;
      border: 10px solid #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    
    section.bt-samp58{
      display: block;
      text-decoration:none;
      position: relative;
      bottom: 0; 
      width: 172px;
      height: 172px;
      
    }
    section.bt-samp58:before{
      content: "";
      position: absolute;
      top: -10px;
      right: 0px;
      border-radius: 10px;
      box-shadow: inset 1px 1px 2px rgba(255,255,255,0.5), inset 0 -1px 3px rgba(0,0,0,0.2);
      width: 20px;
      height: 20px;
      background: #ffc833;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp58 div{
      position: absolute;
      top: 0;
      box-shadow: 0 0 5px rgba(0,0,0,0.1), inset 0 0 40px 15px #fff;
      position: absolute;
      height: 172px;
      width: 172px;
      display: block;
      border: 10px solid #ffd800;
      background: #fff4b5;
      color: #ffd119;
      -webkit-transform-origin: 97% 0;
      transform-origin: 97% 0;
      -webkit-transition: all 0.5s ease-out;
      transition: all 0.5s ease-out;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    section.bt-samp58:hover div{
      -webkit-transform: rotate(75deg);
      transform: rotate(75deg);
      z-index: 5;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    section.bt-samp58 div h .tokimeki{
      position: absolute;
      top: 65%;
      left: 0;
      font-size: 12px;
      font-weight: bold;
      text-align: center;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size:25px;
    }
    section.bt-samp58 p{
      color: #fff;
      font-weight: bold;
      font-size:18px;
      line-height: 1;
      text-shadow: 1px 1px 0 rgba(0,0,0,0.1);
      width: 150px;
      height: 170px;
      padding: 100px 10px 50px;
      background: #ffc833;
      border: 10px solid #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
     .panel-heading1 {
        font-family:'HuiFontP109';
        font-size: 700%;
        color:#75A9FF;
        font-weight:bold;
    }
    
     .panel-heading2 {
        font-family:'HuiFontP109';
        font-size: 700%;
        color:#FF33FF;
        font-weight:bold;
    }
    .panel-heading3 {
        font-family:'HuiFontP109';
        font-size: 300%;
        color:#5507FF;
    }
    
     .panel-heading {
        font-family:'HuiFontP109';
        font-size: 100%;
        color: black;
    }
    
    h4 .panel-heading {
        font-family:'HuiFontP109';
        font-size: 20px;
        color: black;
    }
    
    @font-face{
    font-family:'HuiFontP109';
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot');
    src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot?#iefix') format('embedded-opentype'),
    url('https://dl.dropboxusercontent.com/s/7pscemjdvt0wyiq/HuiFontP109.woff') format('woff'),
    url('https://dl.dropboxusercontent.com/s/0w9uuopxrns8ehi/HuiFontP109.ttf') format('truetype'),
    url('https://dl.dropboxusercontent.com/s/xnnsbxtz8o6d98i/HuiFontP109.svg#HuiFontP109') format('svg');
    
    
    }
</style>

        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        
        
   
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
    
        
             <div class="row">
                <!--<div class="col-xs-12">-->
                    <div class="img">
                    <div class="text-right">
                        <div class='btn1'>
                            {!! link_to_route('signup.get', 'Signup', null) !!}
                        </div>
                        <div class='btn2'>
                            {!! link_to_route('login', 'Login', null) !!}
                        </div>
                    </div>
                    <section class='panel-heading1'>ときめき<br></section> 
                    <div class="col-xs-10 col-xs-offset-2"><section class='panel-heading2'>フレンズ<br></section></div>
                    <div class="col-xs-9 col-xs-offset-3"><section class='panel-heading3'>～forever with you～<br></section></div>
                    </div>
                    <div class="col-xs-12">
                    <section class='flex'>
                        <!--<div class="col-xs-10 col-xs-offset-2">-->
                        <section class="bt-samp55" >
                            <div><h3 class='tokimeki, panel-heading'>ときめきフレンズとは？？</h3></div>
                            <p class='panel-heading'>ときめきフレンズとは、同期ともっと仲良くなれるアプリだよ☆彡</p>
                        </section>
                        <!--</div>-->
                        
                        <!--<div class="col-xs-4 col-xs-offset-8">-->
                        <section class="bt-samp56">
                            <div><h3 class='tokimeki, panel-heading'>同期と仲良くなるにはどうしたらいいの？？</h3></div>
                            <p class='panel-heading'>仲良くなりたい同期に“いいね”を押してみよう！</p>
                        </section>
                        <!--</div>-->
                        
                        <!--<div class="col-xs-10 col-xs-offset-2">-->
                        <section class="bt-samp57">
                            <div><h3 class='tokimeki, panel-heading'>同期に“いいね”を押すとどうなるの？？</h3></div>
                            <p class='panel-heading'>お互いが“いいね”を押すとマッチングするよ！</p>
                        </section>
                        <!--</div>-->
                        
                        <!--<div class="col-xs-4 col-xs-offset-8">    -->
                        <section class="bt-samp58">
                            <div><h2 class='tokimeki, panel-heading'>“いいね”を押してもらうにはどうすればいいかな？？</h2></div>
                            <p class='panel-heading'>自分のプロフィールを書いて、みんなにアピールしよう！</p>
                        </section>
                        <!--</div>-->
                    </section>
                    </div>
                <!--</div> -->
            </div>     
        
    
    
    @endif
@endsection