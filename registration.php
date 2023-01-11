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
	</script>
<title>New Registration</title>
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
		
	
.newReg {
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
	form{
		padding:10px;
		
	}
#name{
	width:100%;
	height:100px;
	}
	.name{
		margin-left:90px;
		margin-top: 30px;
		width:125px;
		font-size:18px;
		font-weight:700;
		}
	.firstname{
		position:relative;
		left:90px;
		top:-5px;
		line-height: 32px;
		border-radius:6px;
		padding:0 22px;
		font-size:16px;
		}
	.lastname{
		position:relative;
		left:300px;
		top:-44px;
		line-height:9px;
		border-radius:6px;
		padding: 8px 22px;
		font-size:16px;	
	}
	.firstlabel{
		position: relative;
		text-transform: capitalize;
		font-size: 14px;
		left:90px;
		top:-17px;
	}
	.lastlabel {
	
		position:relative;
		text-transform: capitalize;
		font-size: 14px;
		left: 55px;
		top: -17px;
	}
	.email{
		position: relative;
		left:90px;
		top: -4px;
		line-height: 30px;
		width:532px;
		border-radius: 6px;
		padding: 2px 22px;
		font-size:16px;
	}
	.phone_number{
		position: relative;
		left:90px;
		top: -4px;
		line-height: 30px;
		width:200px;
		border-radius: 6px;
		padding: 0 22p;
		font-size:16px;
	}
	.address{
		position: relative;
		left:90px;
		top: -4px;
		line-height: 30px;
		width:532px;
		border-radius: 6px;
		padding: 0 22px;
		font-size:16px;
	}	
	.button{
		height: 55px;
		margin: 20px 555px;
		
	}
	
	.button input{
		height: 100%;
		width: 100%;
		outline: none;
		
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
<div class= "newReg"><h1>New Registration</h1></div>
<div class ="main">
	<form>
	 <h2 class ="name">Username</h2>
	<input class= "address" type = "text" name= "username">
		
		<div id ="name">
			<h2 class = "name">Name</h2>
			<input class ="firstname" type="text" name = "first_name"><br>
			<label class ="firstlabel">Firstname</label>
			<input class="lastname" type="text" name = "Last_name">
			<label class ="lastlabel">Lastname</label>
		</div>
	
	<h2 class ="name">E-mail</h2>
	<input class = "email" type = "type" name="email">
	
	<h2 class = "name" >Phone Number</h2>
	<input class= "phone_number" type = "text" name="phone">
	
	<h2 class ="name">Address</h2>
	<input class= "address" type = "text" name= "address">
	</form>
	</div>
	<div class= "button">
	<input type = "submit" value= " Register" onClick="Redirect();">
	</div>
	<div class="footer">
  <p>Copyright (C) Star 2021</p>
</div>
</body>
</html>
