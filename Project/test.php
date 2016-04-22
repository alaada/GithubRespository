<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="main.css" type="text/css">
</head>

<body>

<div class="topLoginBar">
    <div style="width:930px;margin:auto">
        <div style="float:left">
        </div>
        <div style="float:right">
            <div style="display:inline;cursor:pointer;padding-right:25px;" id="signUpButton" class="signup">Sign up</div>
            <div style="display:inline;cursor:pointer;" id="loginButton" class="login">Log in</div>
        </div>
    </div>
</div>
<div id="loginDialog" class="loginDialog" style="display: none;">
    <div class="loginDialogBox" style="">
        <div class="closeButton">x</div>
        <form method="post">
            <input type="text" name="username" placeholder="Username" class="loginInput">
            <input type="password" name="password" placeholder="Password" class="loginInput">

            <div class="rememberMe"><input type="checkbox" name="autologin" checked=""> Remember me</div>
            <div class="forgotPassword"><a href="/?pageid=70">Forgot password</a></div>
            <button type="submit" class="loginButton" style="width:100%;padding:0;" name="login">Log in
            </button>
        </form>
        <hr class="loginTypeDivider">
        <div>No account? <a class="signup" style="cursor: pointer;">Sign up</a></div>
    </div>
</div>
<div id="signUpDialog" class="signUpDialog" style="display: none;">
    <div class="signUpDialogBox" style="">
        <div class="closeButton">x</div>
        <div id="signUpForm">
            <form method="post">
                <input type="hidden" value="" name="steamid" id="steamId">
                <input id="signupNickname" type="text" name="nickname" placeholder="Username" class="loginInput" required="">
                <input id="signupEmail" type="email" name="email" placeholder="Email" class="loginInput" required="">
                <input type="password" name="password" placeholder="Password" class="loginInput">
                <input type="password" name="passwordagain" placeholder="Password again" class="loginInput">

                <div style="text-align: center;width:298px;margin-top: 10px;">
                    <div class="g-recaptcha" data-sitekey="6LdC-eESAAAAAGjTB5dN7dNg4eUR2TGKYCAvh2Mb"><div><div style="width: 304px; height: 78px;"><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LdC-eESAAAAAGjTB5dN7dNg4eUR2TGKYCAvh2Mb&amp;co=aHR0cDovL3d3dy5obHR2Lm9yZzo4MA..&amp;hl=ru&amp;v=r20160411084021&amp;size=normal&amp;cb=25l8lo8wks55" title="виджет reCAPTCHA" width="304" height="78" role="presentation" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
                </div>

                <button type="submit" class="loginButton" style="width:100%;padding:0;" name="createAccount">Sign up
                </button>
            </form>
            <hr class="loginTypeDivider">
        </div>
        <div id="accountAlreadyQuestion">Already have an account? <a class="login" style="cursor: pointer;">Sign in</a></div>
    </div>
</div>

<div id="bg" class="background" data-enabled="true">
    <ul class="bg-gallery" data-delay="2">


        <li data-image="images/background.jpg"><span class="bg"
                                                    style="display: none; opacity: 1; background-image: url(&quot;images/background.jpg&quot;);"></span>
        </li>
        <li data-image="images/c13.jpg"><span class="bg"
                                                    style="display: none; opacity: 1; background-image: url(&quot;images/c13.jpg&quot;);"></span>
        </ul>
</div>
<script src="test.js"></script>

<div class="backgroundsect">
    <table>
         <h1>everything is good</h1>
    </table>
</div>

</body>

<html>