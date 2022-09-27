<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        This is our Add Post Page
    </h1>
    <h1>Form</h1>
    <form action="{{ route('createpost')}}" method="post">
        @csrf
        <input type="text" placeholder="Enter your post" name="post">
        <button type="submit">Add POST</button>
    </form>
</body>
</html>