
<!DOCTYPE html>
<head></head>
<h3>Password Reset</h3>
<body style='margin:0; padding:0;'>
<img src='<?php echo $message->embed('visitor/images/general/logo.jpg');?>' style='width:40%; margin-left:30%;'>

<div style='border:1px solid rgb(29, 91, 144); margin-left:15%; margin-top:10%; width:70%;'>
    <div style='padding:5%;'>
        <p>Password reset for user {{ $email }}.
            <br><br>
        <div style='width:50%; text-align:center; padding:2%; margin:10% auto; border:4px solid rgb(29, 91, 144); border-radius:4px; background-color:rgb(29, 91, 144); color:white;'><a href="{{ $link }}" style='display:block; color:white; text-decoration:none; font-size:20px;'>Reset your password here</a></div>
        <hr>
        <p>
            Button not working? Paste the following link into your browser:<br> {{ $link }}
        </p>
    </div>
</div>
</body>

</html>