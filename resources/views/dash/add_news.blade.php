@extends('dash.layout.container')
@section('style')

@endsection

@section('header')
    افزودن خبر
@endsection


@section('content')
    <div class="form ">
        <form action="{{url('/dashboard/forms/add')}}" method="post" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">عنوان خبر</label>
                <input type="text" class="form-control" id="title" name="title" required placeholder="عنوان خبر">
            </div>

            <div class="form-group">
                <label for="text">متن خبر</label>
                <textarea class="form-control" id="text" name="text" required placeholder="متن خبر" ></textarea>
            </div>

            <div class="form-group">
                <label for="file">تصویر</label>
                <input name="file" id="file" class="form-control display-none" type="file"
                       accept="image/x-png, image/jpg, image/jpeg">
            </div>

            <button type="submit" class="btn btn-primary">ارسال خبر</button>
        </form>
    </div>
@endsection

@section('js')

@endsection
{{--<div class="row">--}}
{{--<div class="colxs-12 col-md-2 pull-right">--}}
{{--<label>افزودن تصویر</label>--}}
{{--</div>--}}
{{--<div class="col-xs-12 col-md-5 pull-right">--}}

{{--</div>--}}
{{--</div>--}}

