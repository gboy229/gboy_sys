<!DOCTYPE html>
<html>
<head>
    <title>登录</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blue Moon - Responsive Admin Dashboard" />
    <meta name="keywords" content="Notifications, Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Wrapbootstrap, Bootstrap, bootstrap.gallery" />
    <link rel="shortcut icon" href="img/favicon.ico">

    <link href="{{statics('css/bootstrap.min.css')}}"  rel="stylesheet">

    <link href="{{statics('css/new.css')}}" rel="stylesheet">
    <!-- Important. For Theming change primary-color variable in main.css  -->

    <link href="{{statics('fonts/font-awesome.min.css')}}" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{statics('js/html5shiv.js')}}"></script>
    <script src="{{statics('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<!-- Main Container start -->
<div class="dashboard-container">
    <div class="container">

        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-md-offset-4">




                @if (count($errors) > 0)
                    <div class="alert alert-block alert-danger fade in">

                        <button data-dismiss="alert" class="close" type="button">×</button>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="sign-in-container">
                    <form action="{{route('login')}}" class="login-wrapper" method="post">
                        {{ csrf_field() }}
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <h3 style="text-align: center;"><img src="{{statics('img/logo1.png')}}" alt="Logo" ></h3>

                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="form-group">
                                <label for="userName">登录账号</label>
                                <input type="text" class="form-control" name="username" id="userName" placeholder="登录账号" value="admin">
                            </div>
                            <div class="form-group">
                                <label for="Password">登录密码</label>
                                <input type="password" class="form-control" name="password" id="Password" placeholder="登录密码" value="123456">
                            </div>
                            <div class="form-group" style="position: relative;">
                                <label for="captcha">验证图</label>
                                <input type="text" class="form-control"  name="captcha" id="captcha" placeholder="图形验证码">
                                <img src="{{captcha_src('math')}}" style="cursor: pointer;position: absolute;right:0;top:24px;border-radius:4px;" onclick="this.src='{{captcha_src('math')}}'+Math.random()">
                            </div>
                        </div>
                        <div class="actions">
                            <input class="btn btn-danger" name="Login" type="submit" value="登录">
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Row End -->

    </div>
</div>
<!-- Main Container end -->

<script src="{{statics('js/jquery.js ')}}"></script>
<script src="{{statics('js/bootstrap.min.js')}}"></script>

</body>
</html>