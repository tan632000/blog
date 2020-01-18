<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Info</title>
</head>
<body>
    <form action="submit" method="post">
        @csrf
        <input type="text" value="" name="user">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
