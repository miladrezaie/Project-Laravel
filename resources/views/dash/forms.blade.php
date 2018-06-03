@extends('dash.layout.container')
@section('header')
    مدیریت فرم ها
@endsection


@section('content')
    <div class="row">
        <h2 class="text-center">مدیریت پست ها</h2>
        <br/>
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="btn btn-primary" href="{{url('/dashboard/forms/add')}}">
                    افزودن خبر
                </a>
            </div>
            <div class="panel-body">
                <table class="table ">
                    <thead>
                    <tr>
                        <th valign="middle">#</th>
                        <th>عنوان</th>
                        <th>متن پیام</th>
                        <th>تصویر</th>
                        <th>تاریخ</th>
                        <th>آپدیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $new)
                        <tr>
                            <th>{{$new->id }}</th>
                            <th>{{$new->title }}</th>
                            <th>{{$new->body }}</th>
                            @foreach($upload as $image)
                                @if($new->id==$image->news_id )
                                    <th>{{$image->name}}</th>
                                @endif
                            @endforeach
                            <th>{{$new->created_at }}</th>
                            <th>{{$new->updated_at }}</th>

                            <th class="actional">
                                <form action="{{route('form.delete', $new->id)}}" method="post">
                                    {{ method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button class="btn btn-primary">
                                                                <span data-id="{{$new->id}}"
                                                                      data-title="delete_news"
                                                                      class="flaticon-trash-2 delete_news_button "
                                                                      data-toggle="tooltip" title="حذف">حذف</span>
                                    </button>
                                </form>
                            </th>
                            <th><a class="btn btn-primary" href="/dashboard/forms/{{$new->id}}/edit">
                                آپدیت
                                </a></th>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.panel-body -->
        </div><!-- /.panel panel-default -->
    </div><!-- /.col-md-8 -->
@endsection