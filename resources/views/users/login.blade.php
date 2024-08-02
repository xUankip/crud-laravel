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
