<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <form method="POST">
        @csrf
        <div>Name: <input type="text" name="name" placeholder="Enter Name"></div>
        <div>Contact: <input type="text" name="contact" placeholder="Enter Contact"></div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>