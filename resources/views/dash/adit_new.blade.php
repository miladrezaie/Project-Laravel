@extends('dash.layout.container')

@section('header')
    افزودن خبر
@endsection


@section('content')
    <div class="form ">
        <form action="/dashboard/forms/update/{{$news->id}}" method="post" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
           {{  method_field('PATCH') }}

            <div class="form-group">
                <label for="title">عنوان خبر</label>
                <input type="text" class="form-control" id="title" name="title"  value="{{$news->title}}">
            </div>

            <div class="form-group">
                <label for="body">متن خبر</label>
                <textarea class="form-control" id="text" name="body" >{{$news->body}}</textarea>
            </div>

            <div class="form-group">
                <label for="file">تصویر</label>
                <input name="file" id="file" class="form-control display-none" type="file"
                       accept="image/x-png, image/jpg, image/jpeg" >
            </div>

            <button type="submit" class="btn btn-primary">اعمال تغیرات</button>
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

