
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Scheduler Express</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="DLM80tZvlmOzMSB6NMOOVIITpbCFLwf4FF5pFrjJ">
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://schedulerexpress.com/img/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://schedulerexpress.com/img/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://schedulerexpress.com/img/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Personal Organisation App" name="description" />
    <meta content="Jean Neftin" name="author" />
    <!-- BEGIN PLUGINS -->
    <link rel="stylesheet" href="http://schedulerexpress.com/css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- END PLUGINS -->
    <!-- BEGIN PAGES CSS -->
    <link rel="stylesheet" href="http://schedulerexpress.com/css/landing.css">
    <!-- END PAGES CSS -->
</head>
<body class="pace-dark">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="header bg-header transparent-light" data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark">
    <div class="container relative">
        <!-- BEGIN LEFT CONTENT -->
        <div class="pull-left">
            <!-- .header-inner Allows to vertically Align elements to the Center-->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <img src="http://schedulerexpress.com/img/logo_white.png" width="152" height="21" data-src-retina="http://schedulerexpress.com/img/logo_white_2x.png" alt="">
            </div>
        </div>
        <!-- BEGIN HEADER TOGGLE FOR MOBILE & TABLET -->
        <div class="pull-right">
            <div class="header-inner">
                <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>
        </div>
        <!-- END HEADER TOGGLE FOR MOBILE & TABLET -->
        <!-- BEGIN RIGHT CONTENT -->
        <div class="pull-right menu-content clearfix" data-pages-direction="slideRight" id="header">
            <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
            <div class="pull-right">
                <a href="#" class="padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
                    <i class=" pg-close_line"></i>
                </a>
            </div>
            <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
            <!-- BEGIN MENU ITEMS -->
            <div class="header-inner">
                <ul class="menu">
                    <li><a href="/" data-text="Home" >Home</a></li>
                    <li><a href="/blog" data-text="Blog" class=active>Blog</a></li>
                    <li><a href="/support" data-text="Support" >Support</a></li>
                    <li><a href="/about" data-text="About" >About</a></li>
                    <li><a href="/login" data-text="Log in" >Log in</a></li>
                    <li>
                        <a class="btn btn-sm btn-bordered fs-12 btn-white hidden-sm hidden-xs " href="/register" data-text="Sign up">Sign up</a>
                        <a class="btn btn-bordered fs-12 btn-black  font-montserrat fs-12 all-caps pull-bottom visible-sm visible-xs buy-now sm-static sm-m-l-20 sm-m-r-20 sm-m-t-20" href="/register">Sign up</a>
                    </li>
                </ul>
            </div>
            <!-- END MENU ITEMS -->
        </div>
    </div>
</nav>
<!-- END HEADER -->
<!-- START CONTENT SECTION -->
<section class="p-b-50 p-t-50 bg-master-dark">
    <div class="container p-b-50 p-t-50">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h3 class="text-white col-sm-12 p-b-10">Edit Post</h3>
                {!! Form::model($post,['url'=>'posts/'.($post->id),'method'=>'PATCH']) !!}

                <div class="form-group {{$errors->has('title')?'has-error':''}}">
                    {!! Form::label('title','Title',['class'=>'text-white col-sm-12 p-b-10']) !!}
                    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Title']) !!}
                    {!!  $errors->first('title','<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{$errors->has('slug')?'has-error':''}}">
                    {!! Form::label('slug','Slug',['class'=>'text-white col-sm-12 p-b-10']) !!}
                    {!! Form::text('slug',null,['class'=>'form-control','placeholder'=>'Slug']) !!}
                    {!!  $errors->first('slug','<span class="help-block">:message</span>') !!}

                </div>

                <div class="form-group {{$errors->has('content')?'has-error':''}}">
                    {!! Form::label('content','Content',['class'=>'text-white col-sm-12 p-b-10']) !!}
                    {!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Content Goes Here']) !!}
                    {!!  $errors->first('content','<span class="help-block">:message</span>') !!}
                </div>
                {!! Form::submit('Update',['class'=>'btn btn-primary btn-lg btn-block']) !!}

                {!! Form::close() !!}





            </div>
        </div>
    </div>
</section>
<!-- END CONTENT SECTION -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="http://schedulerexpress.com/js/jquery-1.11.3.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://schedulerexpress.com/js/landing.js"></script>
<!-- START FOOTER -->
<section class="p-b-30 p-t-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="http://schedulerexpress.com/img/logo_black.png" class="logo inline m-r-50" alt="">
                <div class="m-t-10 ">
                    <ul class="no-style fs-11 no-padding font-arial">
                        <li class="inline no-padding"><a href="/" class=" text-master p-r-10 b-r b-grey">Home</a></li>
                        <li class="inline no-padding"><a href="/blog" class="hint-text text-master p-l-10 p-r-10 b-r b-grey">Blog</a></li>
                        <li class="inline no-padding"><a href="/support" class="hint-text text-master p-l-10 p-r-10 b-r b-grey">Support</a></li>
                        <li class="inline no-padding"><a href="about" class="hint-text text-master p-l-10 p-r-10 xs-no-padding xs-m-t-10">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 text-right font-arial sm-text-left">
                <p class="fs-11 muted">Copyright &copy; 2015 Scheduler Express. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- END FOOTER -->
</body>
</html>
