
<!DOCTYPE html>
<head></head>
<h3>Confirm Registration</h3>
<body style='margin:0; padding:0;'>
<img src='<?php echo $message->embed('visitor/images/general/logo.jpg');?>' style='width:40%; margin-left:30%;'>

<div style='border:1px solid rgb(29, 91, 144); margin-left:15%; margin-top:10%; width:70%;'>
    <div style='padding:5%;'>
        <p>Hello {{ $name }}! Thank you for your registration.
            <br><br>
            Help us secure your Foren account by verifying your email address ({{ $email }}). This lets you access all of Foren features like <a href="{{ route('3dmodel') }}" class="blueLink">3D Model Builder</a>. </p>
        <div style='width:50%; text-align:center; padding:2%; margin:10% auto; border:4px solid rgb(29, 91, 144); border-radius:4px; background-color:rgb(29, 91, 144); color:white;'><a href="{{ $link }}" style='display:block; color:white; text-decoration:none; font-size:20px;'>Verify email address</a></div>
        <hr>
        <p>
            Button not working? Paste the following link into your browser:<br> {{ $link }}
            </p>
        </div>
    </div>
</body>

</html>