<!DOCTYPE html>
<html xmnls="http://www.w3.org/1999/xhtml">
<head>
	<title>Voluntús | Nationwide Events</title>

	<link href="assets/styles/popup.css" rel="stylesheet" type="text/css"/>
	<link href="assets/styles/login.css" rel="stylesheet" type="text/css"/>

	<link href="http://fonts.googleapis.com/css?family=Wellfleet" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Script for pop-up login/ ajax login wwww.adam-bray.com/blog/108/html-5-css-jquery-login-registration-popup-box/
		-->
		
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<script>
	<!-- Script (jQuery) for popup box -->
	
		$(document).ready(function() {
    $("#loginLink").click(function( event ){
           event.preventDefault();
           $(".overlay").fadeToggle("fast");
     });
    
    $(".overlayLink").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');
        
        $("#loginTarget").load("ajax/" + action);
        
        $(".overlay").fadeToggle("fast");
    });
    
    $(".close").click(function(){
        $(".overlay").fadeToggle("fast");
    });
    
    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) { 
            event.preventDefault();
            $(".overlay").fadeToggle("fast");
        }
    });
});
	</script>

</head>
<header>
		<!-- Start of popup sign-in box test -->
	
	<div id="nav">
<!-- Start of a Navigation Bar. -->

	<!--<a href="login.php" id="loginLink">Login</a>-->

<div class="logo"><a href="/"<img src="logo.png" width="X" height="Y" alt="OurLogo"/></a></div>

<ul>
	<li id="menu-home"><a href="homepage.html">home</a></li>
	<li id="menu-events"><a href="eventspage.html">events</a></li>
	<li id="menu-contact"><a href="contactus.html">contact</a><li>
    <li><a href="login.php" class="overlayLink" data-action="login-form.html">login</a></li>
    <li><a href="register.php"><small>Sign Up</small></a></li>
</ul>

<!-- Start of popup sign-in box test -->


<div class="overlay" style="display: none;">
    <div class="login-wrapper">
        <div class="login-content" id="loginTarget">
            <a class="close">x</a>
            <h3>Sign in</h3>
            <form method="post" action="login.php">
                <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="Username must be between 8 and 20 characters" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]$" required />
                </label>
                <label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="Password must contain 1 uppercase, lowercase and number" pattern="(?=^.$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required />
                </label>
                <button type="submit">Sign in</button>
            </form>
        </div>
    </div>
</div>

	<!-- End of popup box test -->

		</nav>
		<!-- End of Menu -->

</div>
	<!-- End of Frame -->


</header>





<body class="home">
	
	<div class="form">

		
 
  <p><small>Hello there, Want to make an account? Just fill in the form provided and hit submit</small></p>

		<form action="abc.php" method="post"> <!-- User Info form -->
			<p><input type="text" name="First Name" id="firstname" placeholder="Your First Name" required></p>
			<p><input type="text" name="Surname" id ="surname" placeholder="Your Last Name" required></p>
			<p><input type="text" name="Email" id="email" placeholder="example123@domain.com" required></p>
			<p><input type="text" name="Address Line 1" placeholder="Address Line 1" required></p>
			<p><input type="text" name="Address Line 2" placeholder="Address Line 2" required></p>
			<p><input type="text" name="Address Line 3" placeholder="Address Line 3"></p>
			<p><input type="text" name="County" placeholder="County" required></p>
			<input type="submit" value="submit">
		</form>
		
	</div>
</body>


<footer></footer>

</html>
