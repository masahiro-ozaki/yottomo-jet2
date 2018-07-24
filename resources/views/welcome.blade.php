<!DOCTYPE html>
<html>
    <!--------------------------------------------------------------------ヘッダーここから-------------------------------------------------------------------->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ときめきフレンズ</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        <style type="text/css">
          
          body {
            /*background-color:pink;*/
            /*background: url('yottomo-jet-image/background.jpg') no-repeat; */
            /*background-size: contain;*/
            background: linear-gradient(-45deg, rgba(255, 255, 255, .3), rgba(255, 25, 255, .3)) fixed, url('yottomo-jet-image/back2.png') fixed;
            background-size: cover;
          }
          
          .btn{
            display: inline-block;
            text-decoration: none;
            color: #668ad8;
            /*width: 100%;*/
            /*height: 100%;*/
            /*line-height: 80px;*/
            /*border-radius: 50%;*/
            border: double 6px #668ad8;
            text-align: center;
            vertical-align: middle;
            overflow: hidden;
            transition: .6s;
            /*font-size: 30px;*/
            font-weight:bold;
            align-items: center;
          }
          
          .btn:hover{
            -webkit-transform: rotateY(360deg);
            -ms-transform: rotateY(360deg);
            transform: rotateY(360deg);
          }
          
          a:hover {
          text-decoration: none;
          }
          
          section.flex{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
          }
          
          @media screen and (min-width:1px) {
          .panel-heading1 {
              font-family:'HuiFontP109';
              font-size: 30px;
              color:#75A9FF;
              font-weight:bold;
          }
          
           .panel-heading2 {
              font-family:'HuiFontP109';
              font-size: 30px;
              color:#FF33FF;
              font-weight:bold;
              
          }
          .panel-heading3 {
              font-family:'HuiFontP109';
              font-size: 20px;
              color:#5507FF;
            }
            
          a {
            font-size: 20px;
          }
          }
          
          @media screen and (min-width:480px) {
            .panel-heading1 {
              font-family:'HuiFontP109';
              font-size: 50px;
              color:#75A9FF;
              font-weight:bold;
            }
            .panel-heading2 {
              font-family:'HuiFontP109';
              font-size: 50px;
              color:#FF33FF;
              font-weight:bold;
            }
            .panel-heading3 {
              font-family:'HuiFontP109';
              font-size: 30px;
              color:#5507FF;
            }
            
            a {
              font-size: 20px;
            }
          }
          
          @media screen and (min-width:651px) {
            .panel-heading1 {
              font-family:'HuiFontP109';
              font-size: 60px;
              color:#75A9FF;
              font-weight:bold;
            }
            
            .panel-heading2 {
              font-family:'HuiFontP109';
              font-size: 60px;
              color:#FF33FF;
              font-weight:bold;
                
            }
            .panel-heading3 {
              font-family:'HuiFontP109';
              font-size: 30px;
              color:#5507FF;
            }
            
            a {
              font-size: 20px;
            }
          }
       
          @media screen and (min-width:961px) {
            .panel-heading1 {
              font-family:'HuiFontP109';
              font-size: 100px;
              color:#75A9FF;
              font-weight:bold;
            }
            
            .panel-heading2 {
              font-family:'HuiFontP109';
              font-size: 100px;
              color:#FF33FF;
              font-weight:bold;
                
            }
            .panel-heading3 {
              font-family:'HuiFontP109';
              font-size: 50px;
              color:#5507FF;
            }
            
            a {
              font-size: 40px;
            }
          }
          
          
          figure {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
          }
          
          figcaption {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,.6);
            -webkit-transition: .3s;
            transition: .3s;
            opacity: 0;
          }
          
          figcaption h3,
          figcaption p {
            position: absolute;
            left: -100%;
            width: 100%;
            -webkit-transition: .3s;
            transition: .3s;
            font-family:'HuiFontP109';
          }
          
          figcaption h3 {
            top: 30px;
            color:white;
            font-family:'HuiFontP109';
          }
          
          figcaption p {
            top: 120px;
            color:white;
            font-family:'HuiFontP109';
            font-size:25px;
          }
          figure:hover figcaption {
            opacity: 1;
          }
          figure:hover figcaption h3,
          figure:hover figcaption p {
            left: 10px;
          }
          figure:hover figcaption h3 {
            -webkit-transition-delay: .2s;
            transition-delay: .2s;
          }
          figure:hover figcaption p {
            -webkit-transition-delay: .5s;
            transition-delay: .5s;
          }
          
          
          .box:hover {
            -webkit-transition-delay: .5s;
            transition-delay: .5s;
          }
          .box2:hover {
            -webkit-transition-delay: .5s;
            transition-delay: .5s;
          }
          
          .box3:hover {
            -webkit-transition-delay: .5s;
            transition-delay: .5s;
          }
          
          .box4:hover {
            -webkit-transition-delay: .5s;
            transition-delay: .5s;
          }
          
          .box5:hover {
            -webkit-transition-delay: .5s;
            transition-delay: .5s;
          }
          
          .img-responsive {
            display: block;
            height: auto;
            max-width: 100%;
          }
          
          @font-face{
          font-family:'HuiFontP109';
          src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot');
          src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot?#iefix') format('embedded-opentype'),
          url('https://dl.dropboxusercontent.com/s/7pscemjdvt0wyiq/HuiFontP109.woff') format('woff'),
          url('https://dl.dropboxusercontent.com/s/0w9uuopxrns8ehi/HuiFontP109.ttf') format('truetype'),
          url('https://dl.dropboxusercontent.com/s/xnnsbxtz8o6d98i/HuiFontP109.svg#HuiFontP109') format('svg');
          }
          
          
          /*********************************************スライダー*********************************************/
          *, *:before, *:after {
            box-sizing: border-box;
          }
          
          html, body {
            height: 100%;
          }
          
          body {
            color: #333;
            font-family: 'HuiFontP109', sans-serif;
            font-size: 2rem;
            line-height: 1.5;
          }
          
          .slider {
            height: 100%;
            position: relative;
            overflow: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-flow: row nowrap;
                -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
                -ms-flex-align: end;
                    align-items: flex-end;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
                -ms-flex-pack: center;
                    justify-content: center;
          }
          .slider__nav {
            width: 20px;
            height: 20px;
            margin: 2rem 12px;
            border-radius: 50%;
            z-index: 10;
            outline: 6px solid #ccc;
            outline-offset: -6px;
            box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
            cursor: pointer;
            -webkit-appearance: none;
               -moz-appearance: none;
                    appearance: none;
            -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
          }
          .slider__nav:checked {
            -webkit-animation: check 0.4s linear forwards;
                    animation: check 0.4s linear forwards;
          }
          .slider__nav:checked:nth-of-type(1) ~ .slider__inner {
            left: 0%;
          }
          .slider__nav:checked:nth-of-type(2) ~ .slider__inner {
            left: -100%;
          }
          .slider__nav:checked:nth-of-type(3) ~ .slider__inner {
            left: -200%;
          }
          .slider__nav:checked:nth-of-type(4) ~ .slider__inner {
            left: -300%;
          }
          .slider__nav:checked:nth-of-type(5) ~ .slider__inner {
            left: -400%;
          }
          .slider__inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 500%;
            height: 100%;
            -webkit-transition: left 0.4s;
            transition: left 0.4s;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-flow: row nowrap;
                -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
          }
          .slider__contents {
            height: 100%;
            padding: 2rem;
            text-align: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
                -ms-flex: 1;
                    flex: 1;
            -webkit-flex-flow: column nowrap;
                -ms-flex-flow: column nowrap;
                    flex-flow: column nowrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
                -ms-flex-align: center;
                    align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
                -ms-flex-pack: center;
                    justify-content: center;
          }
          .slider__image {
            font-size: 2.7rem;
                color: #2196F3;
          }
          .slider__caption {
            font-weight: 500;
            margin: 2rem 0 1rem;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
          }
          .slider__txt {
            color: #999;
            margin-bottom: 3rem;
            max-width: 350px;
          }
          
          @-webkit-keyframes check {
            50% {
              outline-color: #333;
              box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
            }
            100% {
              outline-color: #333;
              box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
            }
          }
          
          @keyframes check {
            50% {
              outline-color: #333;
              box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
            }
            100% {
              outline-color: #333;
              box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
            }
          }
          /*********************************************スライダー*********************************************/
         
         /*.carousel-wrapper{*/
         /*   height:700px;*/
         /*   position:relative;*/
         /*   width:1365px;*/
         /*   margin:0 auto;*/
         /* }*/
         /* .carousel-item{*/
         /*   position:absolute;*/
         /*   top:0;*/
         /*   bottom:0;*/
         /*   left:0;*/
         /*   right:0;*/
         /*   padding:25px 50px;*/
         /*   opacity:0;*/
         /*   transition: all 0.5s ease-in-out;*/
         /* }*/
         /* .arrow{*/
         /*   position:absolute;*/
         /*   top:0;*/
         /*   display:block;*/
         /*   width:50px;*/
         /*   height:100%;*/
         /*   -webkit-tap-highlight-color: rgba(0,0,0,0);*/
         /*   background: url("http://dancort.es/assets/img/css-carousel/carousel-arrow-dark.png") 50% 50% / 20px no-repeat;*/
         /* }*/
          
         /* .arrow-prev{*/
         /*   left:0;*/
         /* }*/
           
         /* .arrow-next{*/
         /*     right:0;*/
         /*     -webkit-transform: rotate(180deg);*/
         /*      transform: rotate(180deg);*/
         /*   }*/
          
         /* .light{*/
         /*   color:white;*/
         /* }*/
          
         /* @media (max-width: 480px) {*/
         /*       .arrow, .light .arrow {*/
         /*         background-size: 10px;*/
         /*         background-position: 10px 50%;*/
         /*       }*/
         /*     }*/
          
          
         /* [id^="item"] {*/
         /*     display: none;*/
         /*   }*/
          
         /* .item-1 {*/
         /*     z-index: 2;*/
         /*     opacity: 1;*/
         /*   background:url(/yottomo-jet-image/tokimeki2.png);*/
         /*   background-size:cover;*/
         /*   }*/
         /* .item-2{*/
         /*   background:url(/yottomo-jet-image/button2-1.png);*/
         /*    background-size:cover;*/
         /* }*/
         /* .item-3{*/
         /*   background:url(/yottomo-jet-image/matching2.png);*/
         /*    background-size:cover;*/
         /* }*/
         /* .item-4{*/
         /*   background:url(/yottomo-jet-image/users2.png);*/
         /*    background-size:cover;*/
         /* }*/
         /* .item-5{*/
         /*   background:url(/yottomo-jet-image/profile2.png);*/
         /*    background-size:cover;*/
         /* }*/
          
         /* *:target ~ .item-1 {*/
         /*     opacity: 0;*/
         /*   }*/
          
         /* #item-1:target ~ .item-1 {*/
         /*     opacity: 1;*/
         /*   }*/
          
         /* #item-2:target ~ .item-2, #item-3:target ~ .item-3, #item-4:target ~ .item-4, #item-5:target ~ .item-5 {*/
         /*     z-index: 3;*/
         /*     opacity: 1;*/
            
         /* }*/

/*         .memox{*/
/*   position:relative;*/
/*   background:#fffde7;*/
/*   width:30%;*/
/*   margin:2em auto;*/
/*   padding:1.5em 1em;*/
/*   transform: rotate(-2deg);*/
/*   box-shadow:1px 1px 4px rgba(0,0,0,0.2);*/
/*   color:#795548;*/
/*}*/
/*.memox::before{*/
/*   content:'ときめきフレンズ';*/
/*   position:relative;*/
/*   display:inline-block;*/
/*   border-bottom:3px solid #795548;*/
/*   border-radius: 0 0 40% 5% / 0 0 15% 20%;*/
/*   padding:0 1em 0.1em 0.2em;*/
/*   font-size:110%;*/
/*   font-weight:bold;*/
/*   transform: rotate(-5deg);*/
/*}*/
/*.memox::after{*/
/*   content:'';*/
/*   position:absolute;*/
/*   left:50%;*/
/*   top:-15px;*/
/*   margin-left:-75px;*/
/*   width:150px;*/
/*   height:30px;*/
/*   background:rgba(245,245,245,0.7);*/
/*   box-shadow:1px 1px 4px rgba(0,0,0,0.2);*/
/*   transform: rotate(-4deg);*/
/*}*/
/*.memox ol{*/
/*   margin:1em 0.5em 0 2em;*/
/*   padding:0 0 0 0;*/
/*}*/
/*.memox ol li{*/
/*   margin-bottom:0.5em;*/
/*}*/
        </style>
        
        
    </head>
    <!--------------------------------------------------------------------ヘッダーここまで-------------------------------------------------------------------->
    <!----------------------------------------------------------------------Bodyここから---------------------------------------------------------------------->
    <body>
      <!--<div class="container">-->
        @include('commons.error_messages')
    
        @if (Auth::check())
            <?php $user = Auth::user(); ?>
            {{ $user->name }}
        @else
        
        <!--<div class="memox huifont">-->
        <!-- <br>～forever with you～-->
        <!--</div>-->
        
        <div class="slider">
          <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
          <input type="radio" name="slider" title="slide2" class="slider__nav"/>
          <input type="radio" name="slider" title="slide3" class="slider__nav"/>
          <input type="radio" name="slider" title="slide4" class="slider__nav"/>
          <input type="radio" name="slider" title="slide5" class="slider__nav"/>
          <div class="slider__inner">
            <div class="slider__contents"><i class="slider__image fa fa-codepen"></i>
              <img src="/yottomo-jet-image/tokimeki2.png" />
              <h2 class="slider__caption">ときめきフレンズとは？？</h2>
              <p class="slider__txt">同期ともっと仲良くなれるアプリだよ☆彡<br>知られざる一面を発見できるかも？</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-newspaper-o"></i>
              <img src="/yottomo-jet-image/button2-1.png" />
              <h2 class="slider__caption">どうやって使うの？？</h2>
              <p class="slider__txt">仲良くなりたい人に‘気になる！'ボタンを押してみよう！<br>お互いがボタンを押すとマッチングするよ！</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-television"></i>
              <img src="/yottomo-jet-image/matching2.png" />
              <h2 class="slider__caption">マッチングしたかはどうやってわかるの？？</h2>
              <p class="slider__txt">My Profileで確認できるよ！<br>マッチングしたらその人に話しかけに行ってみよう！</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-diamond"></i>
              <img src="/yottomo-jet-image/users2.png" />
              <h2 class="slider__caption">どうやって友達になりたい同期を探すの？？</h2>
              <p class="slider__txt">同期一覧から探すことができるよ！<br>名前のリンクから詳しいプロフィールが見れるよ！</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-diamond2"></i>
              <img src="/yottomo-jet-image/profile2.png">
              <h2 class="slider__caption">マッチングするためにはどうすればいいの？？</h2>
              <p class="slider__txt">自分のプロフィールを書いてみんなにアピールしよう！<br>面白いことを書けばマッチングしやすいかも？</p>
              
              <div class='btn'>
                  {!! link_to_route('login', 'はじめる', null) !!}
              </div>
          
            </div>
          </div>
        </div>
        
        <!--<div class="carousel-wrapper">-->
        <!--  <span id="item-1"></span>-->
        <!--  <span id="item-2"></span>-->
        <!--  <span id="item-3"></span>-->
        <!--  <span id="item-4"></span>-->
        <!--  <span id="item-5"></span>-->
        <!--  <div class="carousel-item item-1">-->
        <!--    <h2>ときめきフレンズとは？？</h2>-->
        <!--    <p>同期ともっと仲良くなれるアプリだよ☆彡<br>知られざる一面を発見できるかも？</p>-->
        <!--    <a class="arrow arrow-prev" href="#item-5"></a>-->
        <!--    <a class="arrow arrow-next" href="#item-2"></a>-->
        <!--  </div>-->
          
        <!--  <div class="carousel-item item-2">-->
        <!--    <h2>どうやって使うの？？</h2>-->
        <!--    <p>仲良くなりたい人に‘気になる！'ボタンを押してみよう！<br>お互いがボタンを押すとマッチングするよ！</p>-->
        <!--    <a class="arrow arrow-prev" href="#item-1"></a>-->
        <!--    <a class="arrow arrow-next" href="#item-3"></a>-->
        <!--  </div>-->
          
        <!--  <div class="carousel-item item-3">-->
        <!--    <h2>マッチングしたかはどうやってわかるの？？</h2>-->
        <!--    <p>My Profileで確認できるよ！<br>マッチングしたらその人に話しかけに行ってみよう！</p>-->
        <!--    <a class="arrow arrow-prev" href="#item-2"></a>-->
        <!--    <a class="arrow arrow-next" href="#item-4"></a>-->
        <!--  </div>-->
          
        <!--  <div class="carousel-item item-4">-->
        <!--    <h2>どうやって友達になりたい同期を探すの？？</h2>-->
        <!--    <p>同期一覧から探すことができるよ！<br>名前のリンクから詳しいプロフィールが見れるよ！</p>-->
        <!--    <a class="arrow arrow-prev" href="#item-3"></a>-->
        <!--    <a class="arrow arrow-next" href="#item-5"></a>-->
        <!--  </div>-->
          
        <!--  <div class="carousel-item item-5">-->
        <!--    <h2>マッチングするためにはどうすればいいの？？</h2>-->
        <!--    <p>自分のプロフィールを書いてみんなにアピールしよう！<br>面白いことを書けばマッチングしやすいかも？</p>-->
        <!--    <a class="arrow arrow-prev" href="#item-4"></a>-->
        <!--    <a class="arrow arrow-next" href="#item-1"></a>-->
        <!--  </div>-->
        <!--</div>-->
        
        
        <!--<div class="row">-->
          
          <!--<div class="col-xs-7 col-xs-offset-1">-->
          <!--  <div class="col-xs-11 col-xs-offset-1"><section class='panel-heading1'>ときめき<br></section></div>-->
          <!--  <div class="col-xs-10 col-xs-offset-2"><section class='panel-heading2'>フレンズ<br></section></div>-->
          <!--  <div class="col-xs-9 col-xs-offset-3"><section class='panel-heading3'>～forever with you～<br></section></div>-->
          <!--</div>-->
          
          <!--<div class="col-xs-3">-->
          <!--    <img src="yottomo-jet-image/jet3.png" class="img-responsive">-->
          <!--</div>-->
                    
          <!--<div class="col-xs-12">-->
          <!--  <section class='flex'>-->
                <!--一つ目-->
          <!--      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">        -->
          <!--      <figure  class="box" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/tokimeki2.png" />-->
          <!--        <figcaption>-->
          <!--          <h3>ときめきフレンズとは？？</h3>-->
          <!--          <p>同期ともっと仲良くなれるアプリだよ☆彡<br>知られざる一面を発見できるかも？</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
          <!--      <div class="hidden-xs col-sm-8">-->
          <!--      <figure  class="box" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/tokimeki.png" />-->
          <!--        <figcaption>-->
          <!--           <h3>ときめきフレンズとは？？</h3>-->
          <!--          <p>同期ともっと仲良くなれるアプリだよ☆彡<br>知られざる一面を発見できるかも？</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
                <!--二つ目-->
          <!--      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">-->
          <!--      <figure  class="box2" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/button2-1.png" />-->
          <!--        <figcaption>-->
          <!--          <h3>どうやって使うの？？</h3>-->
          <!--          <p>仲良くなりたい人に‘気になる！’ボタンを押してみよう！<br>お互いがボタンを押すとマッチングするよ！</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
          <!--      <div class="hidden-xs col-sm-8 col-sm-offset-4">-->
          <!--      <figure  class="box2" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/button2.png" />-->
          <!--        <figcaption>-->
          <!--          <h3>どうやって使うの？？</h3>-->
          <!--          <p>仲良くなりたい人に‘気になる！’ボタンを押してみよう！<br>お互いがボタンを押すとマッチングするよ！</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
                <!--三つ目-->
          <!--      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">  -->
          <!--      <figure  class="box3" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/matching2.png" />-->
          <!--        <figcaption>-->
          <!--          <h3>マッチングしたかはどうやってわかるの？？</h3>-->
          <!--          <p>My Profileで確認できるよ！<br>マッチングしたらその人に話しかけに行ってみよう！</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
          <!--      <div class="hidden-xs col-sm-8">  -->
          <!--      <figure  class="box3" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/matching.png" />-->
          <!--        <figcaption>-->
          <!--          <h3>マッチングしたかはどうやってわかるの？？</h3>-->
          <!--          <p>My Profileで確認できるよ！<br>マッチングしたらその人に話しかけに行ってみよう！</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
                <!--四つ目-->
          <!--      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">  -->
          <!--      <figure  class="box4" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/users2.png" />-->
          <!--        <figcaption>-->
          <!--          <h3>どうやって友達になりたい同期を探すの？？</h3>-->
          <!--          <p>同期一覧から探すことができるよ！<br>名前をクリックすると詳しいプロフィールが見れるよ！</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
          <!--      <div class="hidden-xs col-sm-8 col-sm-offset-4">-->
          <!--      <figure  class="box4" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/users.png" />-->
          <!--        <figcaption>-->
          <!--          <h3>どうやって友達になりたい同期を探すの？？</h3>-->
          <!--          <p>同期一覧から探すことができるよ！<br>名前をクリックすると詳しいプロフィールが見れるよ！</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
                <!--五つ目-->
          <!--      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">  -->
          <!--      <figure  class="box5" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/profile2.png">-->
          <!--        <figcaption>-->
          <!--          <h3>マッチングするためにはどうすればいいの？？</h3>-->
          <!--          <p>自分のプロフィールを書いてみんなにアピールしよう！<br>面白いことを書けばマッチングしやすいかも？</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
          <!--      <div class="hidden-xs col-sm-8">  -->
          <!--      <figure  class="box5" ontouchstart="">-->
          <!--        <img src="/yottomo-jet-image/profile.png" />-->
          <!--        <figcaption>-->
          <!--          <h3>マッチングするためにはどうすればいいの？？</h3>-->
          <!--          <p>自分のプロフィールを書いてみんなにアピールしよう！<br>面白いことを書けばマッチングしやすいかも？</p>-->
          <!--        </figcaption>-->
          <!--      </figure>-->
          <!--      </div>-->
                
          <!--  </section>-->
          <!--</div>-->
          
          <!--<div class="col-xs-12">-->
          <!--  <p><br></p>-->
          <!--</div>-->
          
          
          <!--<div class="col-xs-12">-->
          <!--  <p><br></p>-->
          <!--</div>-->
          
        <!--</div>     -->
        @endif
      <!--</div>-->
      <!--@include('commons.footer')-->
    </body>
    <!----------------------------------------------------------------------Bodyここまで---------------------------------------------------------------------->

</html>
