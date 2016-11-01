<div id="signup" class="hvr-glow">
    <img onclick="closeSign()" alt="close" src=visitor/images/general/close.png class="close_Log_Sign">
    <div id="register-messages"></div>

    <form name="RegisterForm" method="post" id="RegisterForm" action="{{ route('auth.registerUser') }}">
        {!! csrf_field() !!}
        <div class="login_Signup_Area">
            <!--username-->
            <input required placeholder="Full Name" type="text" name="registername" id="registername" class="StyleTxtField inputBg" style="background: url('visitor/images/general/username.png') no-repeat left center;  background-color:white;">
            <!--password-->
            <input required  placeholder="Choose your password" type="password" name="password" id="password" class="StyleTxtField inputBg" style="background: url('visitor/images/general/key.png') no-repeat left center;  background-color:white; ">
            <!--confirm-->
            <input required  placeholder="Confirm password" type="password" name="confirmPassword" id="confirmPassword" class="StyleTxtField inputBg" style="background: url('visitor/images/general/key.png') no-repeat left center; background-color:white;">
            <!--email-->
            <input required  placeholder="Email" type="email" name="registeremail" id="registeremail" class="StyleTxtField inputBg" style="background: url('visitor/images/general/email.png') no-repeat left center; background-color:white;">
            <!--fname-->
            <input required  placeholder="Organization Name" type="text" name="orgname" id="orgname" class=StyleTxtField style="background: url('visitor/images/general/orgname.png') no-repeat left center;  background-color:white;">
            <!--button-->
            <input value="Sign-up" type="submit" name="submit" class="btn btn-primary btn-block btn-up-spacing"><br>

        </div>
    </form>

</div>