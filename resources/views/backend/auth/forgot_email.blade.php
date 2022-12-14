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


<h2>Hi {{$user->name}}</h2>,

<p>You recently requested to reset the password for your account. Click the button below to proceed.</p>

<a href="{{route('reset_password',['_token'=>base64_encode($user->email)])}}">{{route('reset_password',['_token'=>base64_encode($user->email)])}}</a>

<p>If you did not request a password reset, please ignore this email or reply to let us know. This password reset link is only valid for the next 30 minutes.</p>

<p>Thanks, the team</p>

</body>
</html>
