<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.html");
    exit;
}
require_once("gravatar.php");
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
		<!-- mcmgnl, mcmgnl.me, mcmg nl -->
    </head>
    <body>
        <div id="wrap">
            <div id=header>
                    <ul id="links">
			             <li id="Logo"><a href="/">Chronaium - O&amp;O Site</a></li>
						 <li class="opdrachten"><a href="kalender.php">Home</a></li>
						
                        						 <li class="" id="logged-in"><a href="account.php">
								<?PHP								
								$email = $account_email;
								$gravatar = new Gravatar($email);
								$gravatar->size = 45;
								$gravatar->rating = "G";
								$gravatar->border = "FF0000";
								echo $gravatar;
						 ?></a></li>
						 <li class="opdrachten" id="log-out"><a href="logout.php">Logout</a></li>
						 
                    </ul>
            </div>          <div id=mobileheader>
                <ul id="mobilelinks">
                    <li id="MobileLogo"><a href="/">O&amp;O Site</a></li>
                    <li id="pull-li"><a href="menu.html">&equiv;</a></li>
                </ul>
            </div>
            <div id="main">
                <div id="content">
                    <section>
                        <article>
							<div id='fg_membersite_content'>
<p><h2>Membership website</h2></p>
<ul>
<li><a href='register.php'>Register</a></li>
<li><a href='confirmreg.php'>Confirm registration</a></li>
<li><a href='login.php'>Login</a></li>
<li><a href='access-controlled.php'>A sample member's only page</a></li>
</ul>
</div>
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