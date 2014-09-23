<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>ProjectWork | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.2.0 -->
        {{ HTML::style('assets/css/bootstrap.css')}}
        <!-- font Awesome -->
        {{ HTML::style('assets/css/font-awesome.css')}}
        <!-- Theme style -->
        {{ HTML::style('assets/css/AdminLTE.css')}}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          include html5shiv and respond.js for ie less than 9
        <![endif]-->
    </head>
    <body class="bg-black">
        <div class="form-box" id="login-box">
            <div class="header">Aviation Mgmt System</div>
        @yield('body')

        </div>
        <!-- jQuery 2.0.2 -->
        {{ HTML::script('assets/js/jquery.js')}}
        <!-- Bootstrap -->
        {{ HTML::script('assets/js/bootstrap.js')}}  
        @show
        
    </body>
</html>