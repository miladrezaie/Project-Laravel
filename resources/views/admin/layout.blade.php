<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    {{Html::style('../vendor/bootstrap/css/bootstrap.min.css')}}

    {{Html::style('../vendor/metisMenu/metisMenu.min.css')}}

    {{Html::style('../dist/css/sb-admin-2.css')}}
    {{--<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}
    {{Html::style('../vendor/font-awesome/css/font-awesome.min.css')}}
    {{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
    {{Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}

    {{Html::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}
</head>

<body>
<div id="wrapper">
    @include('admin.nav.nav')
    @include('admin.pageWrapper.pagewrapper')
    @include('admin.footer.footer')
</div>

{{Html::script('../vendor/jquery/jquery.min.js')}}
{{Html::script('../vendor/bootstrap/js/bootstrap.min.js')}}
{{Html::script('../vendor/metisMenu/metisMenu.min.js')}}
{{Html::script('../dist/js/sb-admin-2.js')}}

</body>

</html>
