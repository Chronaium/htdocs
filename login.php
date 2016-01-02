<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("kalender.php");
   }
}

?>
<!DOCTYPE html>
<html>
    <head>
		<meta name="description" content="Op deze site staan al mijn O&amp;O opdrachten die ik tot nu toe heb uitgevoerd voor het Libanon Lyceum te Rotterdam" />
		<meta name="keywords" content="mcmgnl.me, mcmgnl, o&amp;o, middelbare school, libanonlyceum, libanon, o&amp;o libanon, chronaium, o en o, oeno, o en o libanon, oeno libanon, chronium, fynn van den berg, fynn, van den berg, blijdorp, boor," />
		<meta name="author" content="Chronaium">
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 days" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>MCMGNL - O&amp;O opdrachten site</title>
		<link rel="stylesheet" type="text/css" href="style/final.css">
		<link rel="icon" type="image/png" href="favicon.png" />
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
		<!-- mcmgnl, mcmgnl.me, mcmg nl -->
    </head>
    <body>
        <div id="wrap">
            <div id=header>
                    <ul id="links">
			             <li id="Logo"><a href="/">Chronaium - O&amp;O Site</a></li>
			             <li class="opdrachten"><a href="login.php">Login</a></li>
			             <li class="opdrachten"><a href="register.php">Register</a></li>
                    </ul>
            </div>
            <div id=mobileheader>
                <ul id="mobilelinks">
                    <li id="MobileLogo"><a href="/">O&amp;O Site</a></li>
                    <li id="pull-li"><a href="menu.html">&equiv;</a></li>
                </ul>
            </div>
            <div id="main">
                <div id="content">
                    <section>
                        <article>
<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
                        </article>
                    </section>
                </div>
                <div id="side">
                </div>
            </div>
        </div>
        <div id="footer">
            <p>&copy; 2015 MCMGNL, Inc &copy; <a href=https://github.com/Chronaium/>Chronaium</a>
            <br />
            <a href="errors/errorpage.html">Errors</a>
            <br />
            <a href="admin.html">Admin pagina</a>
            </p>
    </div>
        </div>
    </body>
</html>