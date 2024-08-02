<div class="form__box">
    <div class="form__left">
        <div class="form__padding bounce_auto"><img class="form__image form__image__register bounce" src="./assets/img/ico/frog-crekphone.png"></div>
    </div>
    <div class="form__right" ng-init="Student.fullname='Frog Quiz User';Student.gender=true;Student.birthday=null;Student.schoolfee=0;Student.mark=0;">
        <div class="form__padding-right">
            <form class="ng-pristine ng-valid ng-valid-email">
                <h1 class="form__title">Đăng ký tài khoản <span style="color: #15825a;">Frog
                                        Quiz</span>
                </h1>
                <div class="user__email">
                    <span>Tên đăng nhập:</span>
                    <input class="form__email ng-pristine ng-untouched ng-valid" type="text" ng-model="Student.username" placeholder="">
                </div>
                <div class="user__email">
                    <span>Email:</span>
                    <input class="form__email ng-pristine ng-untouched ng-valid ng-valid-email" type="email" ng-model="Student.email" placeholder="">
                </div>

                <div class="user__pass">
                    <span class="pass__title">Mật khẩu:</span>
                    <i id="show" class="turn__pass bx bxs-hide"></i>

                </div>
                <input id="password" ng-model="Student.password" class="form__password ng-pristine ng-untouched ng-valid" type="password" placeholder="">

                <!-- <div class="user__pass">
                    <span class="pass__title">Nhập lại mật khẩu:</span>

                </div> -->
                <!-- <input id="password__confirm" ng-model="confirm_pass" class="form__password" type="password" placeholder="" /> -->

                <input ng-click="register()" class="form__submit-btn " type="button" value="Đăng ký">
            </form>
            <span><a class="form__link" href="#login">Đã có tài khoản?</a></span>

        </div>
    </div>
</div>
