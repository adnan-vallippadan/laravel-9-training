<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.header {
    text-align: center;
    background: yellow;
    margin: 25px;
    font-weight: 500;
    font-size: 22px;
}

.footer {
    text-align: center;
    background: yellowgreen;
    margin: 25px;
    font-weight: 400;
    font-size: 18px;
}

</style>
<body>
    <h1 class="header">This is my header section</h1>

    @section("contents")
        <p>Contents from layout</p>

    @show

    

    <h1 class="footer">This is my footer section</h1>
    @yield("my-contents-2")
</body>
</html>