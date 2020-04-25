

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="img/png" href="img/5g.png">
        <title>ARCHITECTURE</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" type="text/css" href="{{asset('css/styllr.css')}}">
    </head>
    <body>
        <!-- 
            <div class="loader">
              <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
              </div>
            </div> -->
        <div class="sidenav">
            <div class="login-main-text">
                <p><a href="login">Login</a> or <a href="select-register">Register</a> from here to access.</p>
            </div>
        </div>
        
        <div class="main">
            @yield('content')             
        </div>
        
    </body>
</html>

