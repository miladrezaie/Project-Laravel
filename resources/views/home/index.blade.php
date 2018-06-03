@extends('home.layout.container')


@section('content')
    <!-- banner -->
    <div class="banner">
        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000"
             data-pause="hover">

            <!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First-Slide -->
                <div class="item active">
                    <img src="images/banner.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption">
                        <h3 data-animation="animated flipInX">استعداد های درخشان</h3>
                        <h4 data-animation="animated flipInX">سینتیک دانشگاه</h4>
                    </div>
                </div>

                <!-- Second-Slide -->
                <div class="item">
                    <img src="images/amozesh.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_left">
                        <h3 data-animation="animated flipInX">ربات انسان نما</</h3>
                        <h4 data-animation="animated flipInX">کارگاه ساخت رباتیک</h4>
                    </div>
                </div>

                <!-- Third-Slide -->
                <div class="item">
                    <img src="images/banner2.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated flipInX">جهان در نابودی </</h3>
                        <h4 data-animation="animated flipInX">فناوری های نوین</h4>
                    </div>
                </div>

            </div>

            <!-- Right-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">قبلی</span>
            </a>

            <!-- Left-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">بعدی</span>
            </a>

        </div>
        <script src="js/custom.js"></script>
    </div>
    <!--banner-->
    <div class="our-services-w3">
        <div class="container">
            <h3 class="tittle">اطلاعیه ها</h3>
            <div class="ourser-grids">
                @foreach($news as $new)
                    <div class="col-md-4 ourser-grid" style="margin: 0px">
                        <div class="mask">
                            @foreach($upload as $image)
                                @if($new->id==$image->news_id )
                                    <img src="news/photos/{{$image->name}}" class="img-responsive zoom-img"/>
                                @endif
                            @endforeach
                        </div>
                        <h4>{{$new->title}} </h4>
                        <p>{{$new->body}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>







    <!--content-->
    <div class="content">
        <!--banner-bottom-->
        <div class="banner-bottom">
            <div class="col-md-3 ban-grid">
                <div class="ban-right">
                    <h4>معلمان متخصص</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                </div>
                <div class="ban-left">
                    <i class="glyphicon glyphicon-user"> </i>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 ban-grid">
                <div class="ban-right">
                    <h4>دوره های ویدئویی</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                </div>
                <div class="ban-left">
                    <i class="glyphicon glyphicon-facetime-video"> </i>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 ban-grid">
                <div class="ban-right">
                    <h4>کتابخانه</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
                </div>
                <div class="ban-left">
                    <i class="glyphicon glyphicon-book"> </i>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 ban-grid">
                <div class="ban-right">
                    <h4>دوره های آنلاین</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
                </div>
                <div class="ban-left">
                    <i class="glyphicon glyphicon-blackboard"> </i>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--banner-bottom-->
        <!--welcome-->
        <div class="welcome-w3">
            <div class="container">
                <h2 class="tittle">به دانشگاه ما خوش آمدید </h2>
                <div class="wel-grids">
                    <div class="col-md-4 wel-grid">
                        <div class="port-7 effect-2">
                            <div class="image-box">
                                <img src="images/w1.jpg" class="img-responsive" alt="Image-2">
                            </div>
                            <div class="text-desc">
                                <h4>مطالعات</h4>
                            </div>
                        </div>
                        <div class="port-7 effect-2">
                            <div class="image-box">
                                <img src="images/w2.jpg" class="img-responsive" alt="Image-2">
                            </div>
                            <div class="text-desc">
                                <h4>مطالعات</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wel-grid">
                        <img src="images/w3.jpg" class="img-responsive" alt="Image-2">
                        <div class="text-grid">
                            <h4>مطالعات</h4>
                        </div>
                    </div>
                    <div class="col-md-4 wel-grid">
                        <div class="port-7 effect-2">
                            <div class="image-box">
                                <img src="images/w4.jpg" class="img-responsive" alt="Image-2">
                            </div>
                            <div class="text-desc">
                                <h4>مطالعات</h4>
                            </div>
                        </div>
                        <div class="port-7 effect-2">
                            <div class="image-box">
                                <img src="images/w5.jpg" class="img-responsive" alt="Image-2">
                            </div>
                            <div class="text-desc">
                                <h4>مطالعات</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--welcome-->
        <!--student-->
        <div class="student-w3ls">
            <div class="container">
                <h3 class="tittle"> مرکز رشد واحدهای فناور دانشگاه بزرگمهر</h3>
                <div class="student-grids">
                    <div class="col-md-6 student-grid">
                        <h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                            شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                            شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                            ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط
                            سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                        <ul class="grid-part">
                            <li><i class="glyphicon glyphicon-ok-sign"> </i>لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </li>
                            <li><i class="glyphicon glyphicon-ok-sign"> </i>لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </li>
                            <li><i class="glyphicon glyphicon-ok-sign"> </i>لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </li>
                            <li><i class="glyphicon glyphicon-ok-sign"> </i>لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </li>
                            <li><i class="glyphicon glyphicon-ok-sign"> </i>لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-6 student-grid">
                        <img src="images/w6.jpg" class="img-responsive" alt="Image-2">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--student-->
        <!--testimonials-->
        <div class="testimonials-w3">
            <div class="container">
                <h3 class="tittle2">از زبان مشتریان</h3>
                <div class="test-grid">
                    <img src="images/quote.png" alt=/>
                    <h5>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </h5>
                    <p><i>ایمان مدائنی</i></p>
                </div>
            </div>
        </div>
        <!--testimonials-->
        <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
        <!--news-->

    </div>
    <!--news-->
    </div>
    <!--content-->
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
                    <h4>نمایش مشخصات</h4>
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
                        <li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>کلیه حقوق مربوط به دانشگاه
                            بزرگمهر قابنات می باشد.
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection