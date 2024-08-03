<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QuizAI</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/style.css">
    <link rel="stylesheet" href="/dist/css/reponsive.css">
    <link rel="stylesheet" href="/dist/css/mode.css">
    <link rel="stylesheet" href="/dist/css/course.css">
    <link rel="stylesheet" href="/dist/css/login.css">
</head>
<div class="form">
    <div class="form__box">
        <div class="form__left">
            <div class="form__padding bounce_auto">
                <img class="form__image bounce" src="./assets/img/ico/frog-bc.png">
            </div>
        </div>
        <div class="form__right">
            <div class="form__padding-right">
                <form class="ng-pristine ng-valid">
                    <h1 class="form__title">Đăng nhập vào <span style="color: #15825a;">QuizAI</span>
                    </h1>
                    <div class="user__email">
                        <span>Tên đăng nhập:</span>
                        <input class="form__email ng-pristine ng-untouched ng-valid" ng-model="email" type="text" placeholder="">
                        <!-- <div class="check">
                            <small ng-show="login.inpEmail.$error.required"
                                class="form-text text-danger">Vui lòng nhập email</small>
                            <small ng-show="login.inpEmail.$error.email" class="form-text text-danger">Không
                                đúng định dạng email</small>

                        </div>
                    </div> -->

                        <div class="user__pass">
                            <span class="pass__title">Mật khẩu:</span>
                            <i id="show" class="turn__pass bx bxs-hide"></i>
                        </div>
                        <input id="password" ng-model="pass" class="form__password ng-pristine ng-untouched ng-valid" type="password" placeholder="">
                        <!-- <div class="check">
                            <small ng-show="login.inpPass.$error.required" class="form-text text-danger">Vui lòng nhập mật khẩu</small>

                        </div> -->

                        <input ng-click="login()" class="form__submit-btn" type="button" value="Đăng nhập">

                        <span><a class="form__link" href="#forgetpassword">Quên mật khẩu?</a></span>
                        <p>
                            <a class="form__link" href="#register">Tạo tài khoản mới</a>
                        </p>
                    </div></form>
            </div>
        </div>
    </div>
</div>
