<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact form</h1>
    <form action="{{route('sendMsg')}}" method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="sender_name" placeholder="Enter Your email Name"> <br>
        <label>Email</label>
        <input type="email" name="sender_email" placeholder="Enter Your email Name"> <br>
        <textarea name="message" id="" cols="30" rows="10">Message</textarea> <br>
        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>