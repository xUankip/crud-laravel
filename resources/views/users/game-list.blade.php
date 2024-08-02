<article class="col-sm-9">
    <div class="row-items row">
        <!-- ngRepeat: subject in Subjects|limitTo: 6:begin --><div style="margin-bottom: 50px;" class="item ng-scope" ng-repeat="subject in Subjects|limitTo: 6:begin">
            <a ng-click="checkAccount(subject.Id)">
                <!-- ./images/course/ctdl.png -->
                <img src="images/logos/ADAV.jpg" alt="">
                <!-- <img src="./images/course/ctdl.png " alt=""> -->
                <div class="content">
                    <p class="tag">Kiến thức nền tảng</p>
                    <p class="name ng-binding">Lập trình Android nâng cao</p>
                    <hr class="line-bott">
                    <p class="price">Miễn phí</p>
                </div>
            </a>

        </div><!-- end ngRepeat: subject in Subjects|limitTo: 6:begin --><div style="margin-bottom: 50px;" class="item ng-scope" ng-repeat="subject in Subjects|limitTo: 6:begin">
            <a ng-click="checkAccount(subject.Id)">
                <!-- ./images/course/ctdl.png  -->
                <img src="images/logos/ADBS.jpg" alt="">
                <!-- <img src="./images/course/ctdl.png " alt=""> -->
                <div class="content">
                    <p class="tag">Kiến thức nền tảng</p>
                    <p class="name ng-binding">Lập trình Android cơ bản</p>
                    <hr class="line-bott">
                    <p class="price">Miễn phí</p>
                </div>
            </a>

        </div><!-- end ngRepeat: subject in Subjects|limitTo: 6:begin --><div style="margin-bottom: 50px;" class="item ng-scope" ng-repeat="subject in Subjects|limitTo: 6:begin">
            <a ng-click="checkAccount(subject.Id)">
                <!-- ./images/course/ctdl.png  -->
                <img src="images/logos/ADTE.jpg" alt="">
                <!-- <img src="./images/course/ctdl.png " alt=""> -->
                <div class="content">
                    <p class="tag">Kiến thức nền tảng</p>
                    <p class="name ng-binding">Kiểm thử ứng dụng Android</p>
                    <hr class="line-bott">
                    <p class="price">Miễn phí</p>
                </div>
            </a>

        </div><!-- end ngRepeat: subject in Subjects|limitTo: 6:begin --><div style="margin-bottom: 50px;" class="item ng-scope" ng-repeat="subject in Subjects|limitTo: 6:begin">
            <a ng-click="checkAccount(subject.Id)">
                <!-- ./images/course/ctdl.png  }-->
                <img src="images/logos/ADUI.jpg" alt="">
                <!-- <img src="./images/course/ctdl.png " alt=""> -->
                <div class="content">
                    <p class="tag">Kiến thức nền tảng</p>
                    <p class="name ng-binding">Thiết kế giao diện trên Android</p>
                    <hr class="line-bott">
                    <p class="price">Miễn phí</p>
                </div>
            </a>

        </div><!-- end ngRepeat: subject in Subjects|limitTo: 6:begin --><div style="margin-bottom: 50px;" class="item ng-scope" ng-repeat="subject in Subjects|limitTo: 6:begin">
            <a ng-click="checkAccount(subject.Id)">
                <!-- ./images/course/ctdl.png  -->
                <img src="images/logos/ASNE.png" alt="">
                <!-- <img src="./images/course/ctdl.png " alt=""> -->
                <div class="content">
                    <p class="tag">Kiến thức nền tảng</p>
                    <p class="name ng-binding">Lập trình ASP.NET</p>
                    <hr class="line-bott">
                    <p class="price">Miễn phí</p>
                </div>
            </a>

        </div><!-- end ngRepeat: subject in Subjects|limitTo: 6:begin --><div style="margin-bottom: 50px;" class="item ng-scope" ng-repeat="subject in Subjects|limitTo: 6:begin">
            <a ng-click="checkAccount(subject.Id)">
                <!-- ./images/course/ctdl.png  -->
                <img src="images/logos/CLCO.jpg" alt="">
                <!-- <img src="./images/course/ctdl.png " alt=""> -->
                <div class="content">
                    <p class="tag">Kiến thức nền tảng</p>
                    <p class="name ng-binding">Điện toán đám mây</p>
                    <hr class="line-bott">
                    <p class="price">Miễn phí</p>
                </div>
            </a>

        </div><!-- end ngRepeat: subject in Subjects|limitTo: 6:begin -->



    </div>

    <div class="text-center">
        <button style="margin-left: 50px; float: left;width: 130px;" class="slider__control slider__control--prev" ng-disabled="count<=1" ng-click="prev()" disabled="disabled"><i class="ti-arrow-left slder-control-icon" style="margin-right: 10px;"></i> Trước</button>
        <!-- <ol class="js__slider__pagers slider__pagers"></ol> -->
        <span ng-model="count" class="ng-pristine ng-untouched ng-valid ng-binding">1</span>
        <button style="margin-right: 20px; width: 130px; float: right;" class="slider__control slider__control--next" ng-disabled="count>=4" ng-click="next()">Sau <i class="ti-arrow-right slder-control-icon" style="margin-left: 10px;"></i></button>
    </div>



</article>
