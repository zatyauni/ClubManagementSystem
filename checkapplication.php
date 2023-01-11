<!DOCTYPE html>
<html>
<head>
<script type = "text/javascript">
            function Redirect() {
               window.location = "http://localhost:7882/assignment/home.html";
            }
		 	function Redirect2(){
				window.location = "http://localhost:7882/assignment/about.html";
			}
			function Redirect3(){
				window.location = "http://localhost:7882/assignment/registration.php";
			}
			function Redirect4(){
				window.location = "http://localhost:7882/assignment/checkapplication.php";
			}
			function Redirect5(){
				window.location = "http://localhost:7882/assignment/clubmemberlogin.html";
			}
			function Redirect6(){
				window.location = "http://localhost:7882/assignment/AdminLogin.html";
			}
			function Redirect7(){
				window.location = "http://localhost:7882/assignment/approved.html";
			}
</script>
<title>Check Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color:#c2f7fc;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.Registration {
  float: left;
  overflow: hidden;
}

.Registration .dropbtn-regis {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .Registration:hover .dropbtn-regis {
  background-color: cadetblue;
}

.Registration-content {
  display: none;
  position: absolute;
  background-color: #FBF5F6;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.Registration-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.Registration-content a:hover {
  background-color: #ddd;
}

.Registration:hover .Registration-content {
  display: block;
	}
	
.login {
  float: right;
  overflow: hidden;
}

.login .dropbtn-login {
  font-size: 16px; 
  border: none;
  outline: none;
  color: black;
  padding: 18px 60px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .login:hover .dropbtn-login {
  background-color: cadetblue;
}

.login-content {
  display: none;
  position: absolute;
  background-color: #FBF5F6;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.login-content b {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.login-content b:hover {
  background-color: #ddd;
}

.login:hover  .login-content {
  display: block;
	}
	
	
	.CheckApp {
	width: 800px;
	margin:auto;
	color:#000000;
	padding:10px 0px 10px 0px;
	text-align: center; 
	}	
	.main {
		width:800px;
		margin:auto;
	}
	
	#name{
	width:80%;
	height:100px;
	}
	.name{
		margin-left:120px;
		margin-top: 30px;
		width:100px;
		font-size:18px;
		font-weight:700;
		}
	.email{
		position:relative;
		left:200px;
		top:-40px;
		line-height: 32px;
		border-radius:6px;
		padding:0 90px;
		font-size:16px;
		}
	.button {
  		border: none;
  		color: white;
 	 	padding: 12px 32px;
  		text-align: center;
  		text-decoration: none;
  		font-size: 16px;
  		margin-left: 600px;
		margin-top: -80px;
		}
		.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#c2f7fc ;
   color: black;
   text-align: center;
}
	
	</style>
</head>
<body>

<div class="navbar">
  <a onClick="Redirect();">Home</a>
  <a onClick="Redirect2();">About</a>
	
  <div class="Registration">
    <button class="dropbtn-regis">Registration
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="Registration-content">
      <a onClick="Redirect3();">New Registration</a>
      <a onClick="Redirect4();">Check Application</a>
  </div> 
</div>
<div class="login">
    <button class="dropbtn-login">Login
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="login-content">
      <b onClick="Redirect5();">Club Member</b>
      <b onClick="Redirect6();">Club Administrator</b>
  </div> 	
</div>
</div>
<div class= "CheckApp"><h1>Check Application</h1></div>
<div class ="main">
	<div id ="name">
			<h2 class = "name">Email</h2>
			<input class ="email" type="text" name = "email">
	<div class= "button">
	<input type = "submit" value= " Check" onClick="Redirect7();">
	</div>
	</div>
	</div>
	<div class="footer">
  <p>Copyright (C) Star 2021</p>
</div>
</body>
</html>	