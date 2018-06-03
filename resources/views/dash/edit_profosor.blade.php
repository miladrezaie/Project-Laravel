@extends('dash.layout.container')

@section('header')
    مدیریت فرم ها
@endsection

@section('content')

    <div class="row">
        <h2 class="text-center">مدیریت اساتید هییت علمی</h2>
        <br/>
        <div class="form ">
            <div class="col-md-10 align-content-md-center">
                <form action="/dashboard/profosor/update/{{$profosor->id}}" method="post" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{  method_field('PATCH') }}
                    <div class="form-group">
                        <label for="name">نام استاد</label>
                        <input type="text" class="form-control" id="name" name="name" required
                                value="{{$profosor->name}}">
                    </div>
                    <div class="form-group">
                        <label for="family">نام خانوادگی</label>
                        <input type="text" class="form-control" id="family" name="family" required placeholder="نام خانوادگی" value="{{$profosor->family}}">
                    </div>
                    <div class="form-group">
                        <label for="degree">مدرک تحصیلی</label>
                        <input type="text" class="form-control" id="degree" name="degree" required placeholder="مدرک تحصیلی" value="{{$profosor->degree}}">
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="location_birth">محل تولد</label>--}}
                        {{--<input type="text" class="form-control" id="location_birth" name="location_birth" required placeholder="محل تولد" value="{{$degree->location_birth}}">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="birthday">تاریخ تولد</label>--}}
                        {{--<input type="text" class="form-control" id="birthday" name="birthday" required placeholder="تاریخ تولد" value="{{$degree->birthday}}">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="address">آدرس</label>--}}
                        {{--<input type="text" class="form-control" id="address" name="address" required placeholder="آدرس" value="{{$degree->address}}">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="mobile">شماره موبایل</label>--}}
                        {{--<input type="number" class="form-control" id="mobile" name="mobile" required placeholder="شماره موبایل" value="{{$degree->mobile}}">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="email">نشانی الکترونیکی</label>--}}
                        {{--<input type="email" class="form-control" id="email" name="email" required placeholder="نشانی الکترونیکی" value="{{$degree->email}}">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="contact">آدرس اینترنتی </label>--}}
                        {{--<input type="text" class="form-control" id="contact" name="contact" required placeholder="آدرس اینترنتی " value="{{$degree->contact}}">--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label for="file">تصویر</label>
                        <input name="file" id="file" class="form-control display-none" type="file"
                               accept="image/x-png, image/jpg, image/jpeg">
                    </div>

                    <button type="submit" class="btn btn-primary">ثبت</button>
                </form>
            </div>
        </div><!-- /.panel panel-default -->
    </div><!-- /.col-md-8 -->
@endsection
