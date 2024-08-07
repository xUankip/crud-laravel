!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
<main ng-view="" class="ng-scope"><section class="ng-scope">
        <style>
            .main {
                margin-top: 100px;
            }

            .content {
                margin-bottom: 50px;
            }

            .content p {
                font-size: 30px;
                max-width: 75%;
            }


            .get-start {
                display: inline-block;
                border-radius: 4px;
                background-color: #ffffff;
                border: 2px solid black;
                color: #FFFFFF;
                text-align: center;
                font-size: 17px;
                padding: 16px;
                width: auto;
                height: 50px;
                line-height: 22px;
                padding-top: 14px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                border-radius: 20px;
            }

            .get-start span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                color: #000000;
            }

            .get-start2 {
                background-color: #424242;
                border: 2px solid rgb(0, 195, 255);
            }

            .get-start2 span {
                color: #ffffff;
            }

            .get-start span:after {
                content: '»';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -15px;
                transition: 0.5s;
            }

            .get-start:hover span {
                padding-right: 15px;
            }

            .get-start:hover span:after {
                opacity: 1;
                right: 0;
            }

            .main {
                padding: 50px;
            }

            hr {
                margin-bottom: 100px;
            }


            .learn-more {
                position: relative;
                display: inline-block;
                cursor: pointer;
                outline: none;
                border: 0;
                vertical-align: middle;
                text-decoration: none;
                background: transparent;
                padding: 0;
                font-size: inherit;
                font-family: inherit;
                width: 100px;
            }

            .learn-more {
                width: 16rem;
                height: 40px;
            }

            .learn-more .circle {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                position: relative;
                display: block;
                margin: 0;
                width: 3rem;
                height: 30px;
                background: #282936;
                border-radius: 1.625rem;
            }

            .learn-more .circle .icon {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                position: absolute;
                top: 0;
                bottom: 0;
                margin: auto;
                background: #fff;
            }

            .learn-more .circle .icon.arrow {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                left: 0.625rem;
                width: 1.125rem;
                height: 0.125rem;
                background: none;
            }

            .learn-more .circle .icon.arrow::before {
                position: absolute;
                content: "";
                top: -0.29rem;
                right: 0.0625rem;
                width: 0.625rem;
                height: 0.625rem;
                border-top: 0.125rem solid #fff;
                border-right: 0.125rem solid #fff;
                transform: rotate(45deg);
            }

            .learn-more .button-text {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                padding: 0.75rem 0;
                margin: 0 0 0 1.85rem;
                color: #282936;
                font-weight: 700;
                line-height: 1.6;
                text-align: center;
                text-transform: uppercase;
            }

            .learn-more:hover .circle {
                width: 100%;
            }

            .learn-more:hover .circle .icon.arrow {
                background: #fff;
                transform: translate(1rem, 0);
            }

            .learn-more:hover .button-text {
                color: #fff;
            }

            h1 {
                font-size: 60px;
            }

            h1 span,
            p span {
                background: -webkit-linear-gradient(#09ae2a, #0092bb);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            a {
                text-decoration: none;
            }

            a:hover {
                text-decoration: none;
            }

            .main {
                margin-bottom: 600px;
            }

            .left,
            .right {}

            .left h2 {
                font-size: 38px;
            }

            .left p {
                font-size: 20px;
            }


            .right img,
            .right .img-temp {
                width: 80%;
            }

            .dark-mode .main {
                background-color: #1f1f2600;
            }

            .dark-mode h1,
            .dark-mode h2 {
                color: #fff;
            }

            .dark-mode p {
                color: #cbcbcb;
            }

            .dark-mode .get-start1 {
                border-color: #079724;
            }

            /* input{
                display: none;
            } */


            .timer {
                margin-bottom: 10px;
            }

            .dark-mode .cau-hoi {
                color: white;
            }

            .dark-mode .panel,
            .dark-mode .panel-heading,
            .dark-mode .panel-footer {
                background-color: #1f1f2600;
                border: none;
            }

            .dark-mode .panel-heading span {
                color: white;
            }

            .dark-mode .radio-item label {
                background-color: #494b4af0;
                color: white;
            }

            /* PC */
            @media (min-width: 64em) {
                .butt {
                    margin-top: 50px;
                    margin-bottom: 200px;
                }


                .message {
                    height: 400px;
                }
            }

            /* Mobile */
            @media (max-width: 46.1875em) {
                h1 {
                    font-size: 40px;
                    padding: 0px -50px;
                    text-align: center;
                }

                #title {
                    font-size: 30px;
                    display: none;
                }

                .get-start {
                    width: 100%;
                    margin-top: 20px;
                }

                .content p {
                    text-align: center;
                    font-size: 20px;
                    max-width: 100%;
                }

                .message {
                    margin-top: 100px;
                    margin-left: -50px;
                    width: 100%;
                }

                .right {
                    margin-top: 50px;
                    width: 100%;
                    margin-left: 50px
                }

                .right img {
                    text-align: center;
                    width: 90%;
                }

                .thuc-chien {
                    width: 100%;
                }

                .left {
                    margin: 0px 0px;
                    padding: 0 0 0 90px;
                    width: 100%;
                }

                .main {
                    padding: 0 0;
                }

                .message {
                    width: 100%;
                }

                .mobile {
                    padding: 40px;
                }

                .main-quiz {
                    max-width: 90%;
                    display: flex;
                    margin: 0 auto;
                }

                .quiz {
                    max-width: 100%;
                    margin: 0 0;
                }

                .ans {
                    height: auto;
                    word-wrap: break-word;
                }

                .panel-body p {
                    word-wrap: break-word;
                }

                .kq {
                    margin-left: 0px;
                }

                /* .panel-body-kq{
                    padding: 0;
                } */

                .check-finish {
                    width: 100%;
                }

                .form-check label {
                    word-wrap: break-word;
                    flex-wrap: wrap;
                }
            }
        </style>
        <div class="main" id="content">
            <div class="show">

                <div class=" main-quiz">
                    <div class="quiz" ng-hide="checkFinish == true">
                        <div class="row timer">
                            <div class="col text-center ">
                                <h2 class="ng-binding"><i class="fa fa-clock-o" style="color: #23B5E1; "></i>"Thời gian đếm ngược cho câu hỏi"</h2>

                            </div>
                            <!-- <button ng-disabled="expression[indexquestion].count==0" ng-click="submit()"
                                class="btn btn-primary ">Submit</button> -->
                            <button ng-click="submit()" class="finish">
                                Kết thúc
                                <div class="arrow-wrapper">
                                    <div class="arrow"></div>

                                </div>
                            </button>
                        </div>
                        <div class="panel panel-default ">
                            <div class="panel-heading ">
                                <span style="font-size: 27px; font-weight: bold; " class="ng-binding">Tên topic</span>
                                <span class="badge badge-dark ng-binding">"số tứ tự câu hỏi trong tổng câu hỏi" vd: (1/10)</span>
                            </div>
                            <div class="panel-body">
                                <p class="cau-hoi ng-binding" style="font-weight: bold;  font-size: 18px;">
                                    Nội dung Câu hỏi 1

                                </p>

                                <hr style="margin: 10px 0;">
                                <!-- ngRepeat: an in answers --><div ng-repeat="an in answers" class="ng-scope">
                                    <div class="radio-item">
                                        <input class="form-check-input ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="expression[indexquestion].answer" ng-click="replace()" type="radio" id="104396" value="104396" required="" name="radio">
                                        <label class="ans ng-binding" for="104396">answer_content</label>
                                    </div>
                                    <!-- <div class="form-check">

                                    <input ng-disabled="expression[indexquestion].count==0" class="form-check-input"
                                        ng-model="expression[indexquestion].answer " ng-click="replace(an.Id )"
                                        name="bgroup " type="radio" id=" " value=" " required>
                                    <label class="form-check-label " for=" "></label>
                                    </label>
                                </div> -->
                                </div><!-- end ngRepeat: an in answers --><div ng-repeat="an in answers" class="ng-scope">
                                    <div class="radio-item">
                                        <input class="form-check-input ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="expression[indexquestion].answer" ng-click="replace()" type="radio" id="104397" value="104397" required="" name="radio">
                                        <label class="ans ng-binding" for="104397">answer_content</label>
                                    </div>
                                    <!-- <div class="form-check">

                                    <input ng-disabled="expression[indexquestion].count==0" class="form-check-input"
                                        ng-model="expression[indexquestion].answer " ng-click="replace(an.Id )"
                                        name="bgroup " type="radio" id=" " value=" " required>
                                    <label class="form-check-label " for=" "></label>
                                    </label>
                                </div> -->
                                </div><!-- end ngRepeat: an in answers --><div ng-repeat="an in answers" class="ng-scope">
                                    <div class="radio-item">
                                        <input class="form-check-input ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="expression[indexquestion].answer" ng-click="replace()" type="radio" id="104398" value="104398" required="" name="radio">
                                        <label class="ans ng-binding" for="104398">answer_content</label>
                                    </div>
                                </div><!-- end ngRepeat: an in answers --><div ng-repeat="an in answers" class="ng-scope">
                                    <div class="radio-item">
                                        <input class="form-check-input ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="expression[indexquestion].answer" ng-click="replace()" type="radio" id="104399" value="104399" required="" name="radio">
                                        <label class="ans ng-binding" for="104399">answer_content</label>
                                    </div>
                                </div><!-- end ngRepeat: an in answers -->


                            </div>
                            <div class="panel-footer ">
                                <button ng-click="moveQuestion(indexquestion-1) " ng-disabled="indexquestion==0 " class="btn btn-primary " disabled="disabled"><i>Previous</i></button>
                                <button ng-click="moveQuestion(indexquestion+1) " ng-disabled="indexquestion==9 " class="btn btn-primary "><i class="ti-angle-double-right">Next</i></button>


                            </div>


                        </div>

                    </div>
                </div>


            </div>

        </div>








        <style>
            .dark-mode .questext strong {
                color: white;
            }

            .dark-mode .check-finish label {
                color: white;
            }
            .dark-mode .ans {
                color: white;
            }
            .result {
                margin-bottom: 50px;
                margin-top: 20px;
            }

            .result-text {
                margin-right: 5px;
            }


            .radio-item [type="radio"] {
                display: none;
            }

            .radio-item+.radio-item {
                margin-top: 15px;
            }

            .radio-item label {
                display: block;
                padding: 20px 60px;
                background: #eff3ff;
                border: 2px solid rgba(255, 255, 255, 0.1);
                border-radius: 6px;
                cursor: pointer;
                font-size: 17px;
                font-weight: 400;
                min-width: 250px;
                position: relative;
            }

            .radio-item label:after,
            .radio-item label:before {
                content: "";
                position: absolute;
                border-radius: 50%;
            }

            .radio-item label:after {
                height: 20px;
                width: 20px;
                border: 2px solid #006d1d;
                left: 22px;
                top: calc(50% - 10px);
            }

            .radio-item label:before {
                background: #006103;
                height: 10px;
                width: 10px;
                left: 27px;
                top: calc(50% - 5px);
                transform: scale(5);
                transition: .4s ease-in-out 0s;
                opacity: 0;
                visibility: hidden;
            }

            .radio-item [type="radio"]:checked~label {
                border-color: #009b3e;
            }

            .radio-item [type="radio"]:checked~label:before {
                opacity: 1;
                visibility: visible;
                transform: scale(1);
            }

            .radio-item {
                width: 100%;
                margin-top: 10px;
            }

            /* next */
            .finish {
                height: 40px;
                float: right;

                margin-right: 10px;
                --primary-color: #1d9637;
                --secondary-color: #fff;
                --hover-color: #304f7e;
                --arrow-width: 10px;
                --arrow-stroke: 2px;
                box-sizing: border-box;
                border: 0;
                border-radius: 20px;
                color: var(--secondary-color);
                padding: 1em 1.8em;
                background: var(--primary-color);
                display: flex;
                transition: 0.2s background;
                align-items: center;
                gap: 0.6em;
                font-weight: bold;

            }


            .finish .arrow-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .finish .arrow {
                margin-top: 1px;
                width: var(--arrow-width);
                background: var(--primary-color);
                height: var(--arrow-stroke);
                position: relative;
                transition: 0.2s;
            }

            .finish .arrow::before {
                content: "";
                box-sizing: border-box;
                position: absolute;
                border: solid var(--secondary-color);
                border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
                display: inline-block;
                top: -3px;
                right: 3px;
                transition: 0.2s;
                padding: 3px;
                transform: rotate(-45deg);
            }

            .finish:hover {
                background-color: var(--hover-color);
            }

            .finish:hover .arrow {
                background: var(--secondary-color);
            }

            .finish:hover .arrow:before {
                right: 0;
            }
        </style>
    </section>
</main>

