@extends('home.layout.container ')

@section('content')
    <div class="banner-w3agile">
        <div class="container">
            <h3><a href="#">صفحه اصلی</a> / <span>هیت علمی گروه کامپیوتر</span></h3>
        </div>
    </div>
        <div class="content">
            <div class="projects-agile">
                <div class="container">
                    <div class="portfolio_grid_w3lss ">
                        @foreach($profosor as $profos)
                            <div class="col-md-4 w3agile_Projects_grid">
                                <div class="w3agile_Projects_image">
                                    <a class="sb" href="">
                                        <figure >
                                            @foreach($profesorimage as $image)
                                                @if($profos->id ==$image->profosor_id)
                                                <img src="profosor/photos/{{$image->name}}" alt="circle" class="img-responsive statistic"/>
                                                @endif
                                            @endforeach
                                            <figcaption>
                                                <h4>{{$profos->name}}{{$profos->family}} </h4>
                                                <p>
                                                    {{$profos->degree}}
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        @endforeach


                        <div class="clearfix"></div>
                    </div>

                    <div class="staff-w3l">
                        <div class="container">
                            <h3 class="tittle">کارکنان ما</h3>
                            <div class="staff-grids">
                                @foreach($profosor as $profos)

                                <div class="col-md-6 staff-grid">
                                    <div class="staff-right">
                                        @foreach($profesorimage as $image)
                                            @if($profos->id ==$image->profosor_id)
                                        <img src="profosor/photos/{{$image->name}}" class="img-responsive statistic" alt="/">
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="staff-left">
                                        <h4>{{$profos->name}}{{$profos->family}}</h4>
                                        @foreach($degree as $deg)
                                            @if($profos->id==$deg->profosor_id)
                                                <ul>
                                                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> مدرک : {{$deg->degree}}</li>
                                                    <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> ارتباط :{{$deg->email}}</li>
                                                    <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i>  ارتباط :{{$deg->contact}}</li>
                                                </ul>
                                            @endif
                                            @endforeach
                                        <div class="social-icons">
                                            <a href="#"><i class="icon1"></i></a>
                                            <a href="#"><i class="icon2"></i></a>
                                            <a href="#"><i class="icon3"></i></a>
                                            <a href="#"><i class="icon4"></i></a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                @endforeach

                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

            </div>
        </div>

        </div>
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