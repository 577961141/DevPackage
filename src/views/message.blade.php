<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        姓名:<input type="text" name="name" placeholder="请输入你的名字">
        信息: <input type="text" name="message" placeholder="请输入信息">
        <input type="submit">
    </form>
</body>
</html>
