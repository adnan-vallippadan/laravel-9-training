<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/form/submit">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="text" name="username" placeholder="Enter your username">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="text" name="contact" placeholder="Enter your contact number">
        <button type="submit">Submit</button>
    </form>
</body>
</html>