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
              background: url('yottomo-jet-image/background.jpg') no-repeat; 
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
          
          section.flex{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
          }
          
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
          
          @media screen and (min-width:651px) {　/* 中画面用 */
          
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
          }
       
          @media screen and (min-width:961px) {　/* 大画面用 */
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
          }
          
           /**/
          
          /* .panel-heading1 {*/
          /*    font-family:'HuiFontP109';*/
          /*    font-size: 700%;*/
          /*    color:#75A9FF;*/
          /*    font-weight:bold;*/
          /*}*/
          
          /* .panel-heading2 {*/
          /*    font-family:'HuiFontP109';*/
          /*    font-size: 700%;*/
          /*    color:#FF33FF;*/
          /*    font-weight:bold;*/
          /*}*/
          /*.panel-heading3 {*/
          /*    font-family:'HuiFontP109';*/
          /*    font-size: 300%;*/
          /*    color:#5507FF;*/
          /*}*/
          
          /* .panel-heading {*/
          /*    font-family:'HuiFontP109';*/
          /*    font-size: 100%;*/
          /*    color: black;*/
          /*}*/
          
          /*h4 .panel-heading {*/
          /*    font-family:'HuiFontP109';*/
          /*    font-size: 20px;*/
          /*    color: black;*/
          /*}*/
          
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
        </style>
        
        
    </head>
    <!--------------------------------------------------------------------ヘッダーここまで-------------------------------------------------------------------->
    <!----------------------------------------------------------------------Bodyここから---------------------------------------------------------------------->
    <body>
      <div class="container">
        @include('commons.error_messages')
    
        @if (Auth::check())
            <?php $user = Auth::user(); ?>
            {{ $user->name }}
        @else
        
        <div class="row">
            
          <div class="col-xs-7 col-xs-offset-1">
            <div class="col-xs-11 col-xs-offset-1"><section class='panel-heading1'>ときめき<br></section></div>
            <div class="col-xs-10 col-xs-offset-2"><section class='panel-heading2'>フレンズ<br></section></div>
            <div class="col-xs-9 col-xs-offset-3"><section class='panel-heading3'>～forever with you～<br></section></div>
          </div>
          
          <div class="col-xs-3">
              <img src="yottomo-jet-image/jet3.png" class="img-responsive">
          </div>
                    
          <div class="col-xs-12">
            <section class='flex'>
                
                <div class="col-xs-12 col-sm-6">        
                <figure  class="box" ontouchstart="">
                  <img src="/yottomo-jet-image/nakayoshi.jpg" />
                  <figcaption>
                    <h3>ときめきフレンズとは？？</h3>
                    <p>同期ともっと仲良くなれるアプリだよ☆彡</p>
                  </figcaption>
                </figure>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-sm-offset-6">
                <figure  class="box2" ontouchstart="">
                  <img src="/yottomo-jet-image/button.png" />
                  <figcaption>
                    <h3>同期と仲良くなるにはどうしたらいいの？？</h3>
                    <p>いろんな人に“友達になる！”ボタンを押してみよう！</p>
                  </figcaption>
                </figure>
                </div>
                
                <div class="col-xs-12 col-sm-6">  
                <figure  class="box3" ontouchstart="">
                  <img src="/yottomo-jet-image/matching.jpg" />
                  <figcaption>
                    <h3>同期に“友達になる！”ボタンを押すとどうなるの？？</h3>
                    <p>お互いがそのボタンを押すとマッチングするよ！</p>
                  </figcaption>
                </figure>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-sm-offset-6">  
                <figure  class="box4" ontouchstart="">
                  <img src="/yottomo-jet-image/profile.jpg" />
                  <figcaption>
                    <h3>“友達になる！”ボタンを押してもらうためには<br>どうすればいいの？？</h3>
                    <p>自分のプロフィールを書いてみんなにアピール！</p>
                  </figcaption>
                </figure>
                </div>
                
            </section>
          </div>
          <div class="col-xs-12">
            <p><br></p>
          </div>
          <div class="col-xs-offset-3 col-xs-4 col-sm-offset-5 col-sm-4">
              <div class='btn'>
                  {!! link_to_route('login', 'はじめよう！', null) !!}
              </div>
          </div>
          <div class="col-xs-12">
            <p><br></p>
          </div>
        </div>     
        @endif
      </div>
      @include('commons.footer')
    </body>
    <!----------------------------------------------------------------------Bodyここまで---------------------------------------------------------------------->

</html>
