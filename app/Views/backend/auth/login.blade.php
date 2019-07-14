<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php loadImageBackEnd('favicon.ico')?>" type="image/ico"/>

    <title>Pl - Training</title>

    <title>Login Management | Arsenal Plus</title>

    <!-- Bootstrap -->
    <link href="<?php loadFileBackend('vendors/bootstrap4.min.css')?>" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php loadFileBackend('vendors/font-awesome.min.css')?>" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php loadFileBackend('vendors/font-awesome.min.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php loadFileBackend('vendors/build.min.css');?>" rel="stylesheet">
    <link href="<?php loadFileBackend('system.css');?>" rel="stylesheet">
    <link href="<?php loadFileBackend('autoload/login.css');?>" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="{{route('backend.post.login')}}">
                    @csrf
                    <h1>Login Form</h1>

                    <div class="error-validate">
                        <ul class="list-errors">
                            @foreach ($errors->all() as $error)
                                <li class="error-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required=""
                               value="{{old('email')}}"/>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">Log in</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Training	</h1>
                            <p>©2019 All Rights Reserved by <a href="http://paraline.com.vn/">ParaLine VietNam Co., Ltd.</a></p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Training - 	ParaLine VietNam Co., Ltd.</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>

<!-- jQuery -->
<script src="<?php loadFileBackend('vendors/jquery.min.js')?>"></script>

<!-- Bootstrap -->
<script src="<?php loadFileBackend('vendors/bootstrap4.min.js')?>"></script>

<!-- Loadingoverlay -->
<script src="<?php loadFileBackend('vendors/loadingoverlay.min.js')?>"></script>

<script src="<?php loadFileBackend('xhr.js')?>"></script>

<!-- Common -->
<script src="<?php loadFileBackend('common.js');?>"></script>

<!-- System -->
<script src="<?php loadFileBackend('system.js');?>"></script>

<script src="<?php loadFileBackend('autoload/login.js');?>"></script>
