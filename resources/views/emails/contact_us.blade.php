<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Email </title>
</head>
<body style="background: #eee;font-family: Arial, Helvetica, sans-serif">
    <div style="background: #fff;width:600px;border: 2px solid #979797;padding: 30px;margin: 0 auto;margin-top: 40px;">
        {{-- We can make a master page for all emails and change the content of the email --}}
        <h2>Welcome Dear,</h2>
        <p>Hope this email finds you</p>
        <br>
        <p>There is new contact us with with the following data: </p>
        <p><b>Name:</b>{{ $data['name'] }}</p>
        <p><b>Email:</b>{{ $data['email'] }}</p>
        <p><b>Message:</b>{{ $data['message'] }}</p>
        <br>
        <br>
        <p>Best Regards</p>
        <p>Ahmed Salama Ztr</p>
    </div>


</body>
</html>
