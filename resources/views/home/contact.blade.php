@extends('home.layout.container')

@section('content')

    <div class="banner-w3agile">
        <div class="container">
            <h3><a href="index.html">صفحه اصلی</a> / <span>تماس با ما</span></h3>
        </div>
    </div>
    <!--content-->


    <div class="footer-w3">
        <div class="container">
            <div class="footer-grids">

            <div class="row">



                <div class="portfolio_grid_w3lss col-md-9">
                    <div class="container">

                    <form action="mailto:m.rezai2724@gmail.com" method="post" enctype="text/plain">
                        <div class="form-group">
                            <label for="name">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                   placeholder="نام و نام خانوادگی">
                        </div>
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control" id="name" name="email" required
                                   placeholder="ایمیل">
                        </div>
                        <div class="form-group">
                            <label for="body">پیام</label>
                            <textarea class="form-control" id="text" name="body" placeholder="پیام" required></textarea>
                        </div>

                        <input type="submit" class="btn btn-primary" value="ارسال">
                        <button  class="btn btn-primary">انصراف</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    <!--content-->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <!--footer-->
    <div class="footer-w3">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-4 footer-grid">
                    <h4>درباره ما</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </span>
                    </p>

                </div>
                <div class="col-md-4 footer-grid">
                    <h4>Instagram Posts</h4>
                    <div class="footer-grid1">
                        <img src="images/w1.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="footer-grid1">
                        <img src="images/w2.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="footer-grid1">
                        <img src="images/w4.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="footer-grid1">
                        <img src="images/w5.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="footer-grid1">
                        <img src="images/w6.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="footer-grid1">
                        <img src="images/w2.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 footer-grid">
                    <h4>اطلاعات</h4>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>لورم ایپسوم متن ساختگی با
                            تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+98 123456789</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                                    href="mailto:example@mail.com"> example@mail.com</a></li>
                        <li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>لورم ایپسوم متن ساختگی با تولید
                            سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


@endsection