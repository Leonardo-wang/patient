<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type='text/javascript' src="{{ url('assets/js/jquery.js') }}"></script>
    <title>Document</title>
</head>
<body>
<form action="{{ url('patient/manager') }}" method="post">
    姓名:<input type="text" name="name"><br>
    性别: <input type="text" name="sex"><br>
    <input type="submit" value="提交">
</form>
</body>
<script>
    $(document).on('input change',function () {
        $('input').each(function () {
            console.log($(this).val());
        })
    })
</script>
</html>