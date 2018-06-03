@extends('dash.layout.container')

@section('header')
    مدیریت فرم ها
@endsection

@section('content')
    <div class="row">
        <h2 class="text-center">مدیریت اساتید هییت علمی</h2>
        <br/>
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="btn btn-primary" href="{{url('/dashboard/profosor/create')}}">
                    افزودن استاد
                </a>
            </div>
            <div class="panel-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">شماره</th>
                        <th scope="col">نام</th>
                        <th scope="col">نام خانوادگی</th>
                        <th scope="col">نوع مدرک</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($profosor as $new)
                        <tr>
                            <th>{{$new->id }}</th>
                            <th>{{$new->name }}</th>
                            <th>{{$new->family }}</th>
                            <th>{{$new->degree }}</th>
                            <th class="actional">
                                <form action="{{route('profosor.delete', $new->id)}}" method="post">
                                    {{ method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button class="btn btn-primary">
                    <span data-id="{{$new->id}}"
                          data-title="delete_news"
                          class="flaticon-trash-2 delete_news_button "
                          data-toggle="tooltip" title="حذف">delete</span>
                                    </button>
                                </form>
                            </th>
                            <th><a class="btn btn-primary" href="/dashboard/profosor/{{$new->id}}/edit">
                                    آپدیت
                                </a></th>
                        </tr>
                    @endforeach

                    </tbody>
                </table>


            </div>
        </div><!-- /.panel panel-default -->
    </div><!-- /.col-md-8 -->
@endsection
