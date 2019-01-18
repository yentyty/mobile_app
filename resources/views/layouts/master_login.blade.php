<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin Mobile**Store</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <link rel="stylesheet" href="admin_login/css/bootstrap.min.css">
    <script src="admin_login/js/jquery-3.3.1.min.js"></script>
    <script src="admin_login/js/bootstrap.min.js"></script>
    <link href="admin_login/css/fontawesome-all.css" rel="stylesheet" />
    <link href="admin_login/css/style.css" rel="stylesheet" type="text/css" />
    <style>
            .thongbao{
                position: absolute;
                top: 15px;
                right: 5px;
                z-index: 3000;
            }
            .close{
                text-align: right;
            }
        </style>
</head>
<body>
        @if(session('message'))
        <div class="alert alert-danger alert-dismissible fade show thongbao ">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{session('message')}}
              </div>
        @endif
    @yield('content')
    <script>
            $("div.alert-danger").delay(4000).slideUp();
    </script>
</body>
</html>