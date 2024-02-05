
<html>
<?php
  	session_start();
  	if(isset($_SESSION['voter'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<style>

body.login-page{
		 background-image:url('../../sdVote/dist/img/votebg2.jpeg');
		 background-size: cover;
  background-position: center;
	}
	/* .login-box-body{
		display:none;
	}	
	.main-button {
  background-color: #337ab7;
  display: flex;
  justify-content: center;
  align-items: center;
  height:60vh;
  border-radius:5px;
}

button {
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  padding: 10px 20px;
  margin: 0 10px;
  font-size: 18px;
  cursor: pointer;
  transition: all 0.3s ease;
  border-radius:6px;
}

button:hover {
  background-color: #fff;
  color: #337ab7;
}

 */
.login-box-body{
  display:none;
} 
.login-logo{
  color: black;
  letter-spacing:4px;
}
#signin,.login-box-body{
	border-radius:5px;
}
.login-logo{
  display: inline-block;
}

.login-logo > * {
	position: relative;
	left:8vw;
  display: inline-block;
  opacity: 0;
  animation-name: fadeIn;
  animation-duration: 8s;
  animation-fill-mode: forwards;
  animation-delay:2s;
  animation-timing-function: cubic-bezier(0.2, 0.8, 0.2, 1);
  transform: translateY(1em);
}

.login-logo > *:nth-child(1) {
  animation-delay: 0s;
}

.login-logo > *:nth-child(2) {
  animation-delay: 0.1s;
}

.login-logo > *:nth-child(3) {
  animation-delay: 0.2s;
}

/* Add more nth-child selectors as needed for longer headings */
  
@keyframes fadeIn {
  to {
    opacity: 1;
	transform: translateY(0);
  }
}
.main-button {
  background-color: #2d72ae;
  display: flex;
  justify-content: center;
  align-items: center;
  height:30vh;
  border-radius:5px;
}

button {
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  padding: 10px 20px;
  margin: 0 10px;
  font-size: 18px;
  cursor: pointer;
  transition: all 0.3s ease;
  border-radius:6px;
}

button:hover {
  background-color: #fff;
  color: #337ab7;
}



</style>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>E-Voting</b>
  	</div>
	  <div class="box">
	  <div class="main-button">
		<button id="voteButton">Admin Login</button>
		<button id="myButton">Voter's Login</button>
	</div>
	  </div>
	
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
	  <script>
// 			var button = document.getElementById("myButton");
			
// var loginBox = document.querySelector(".login-box-body");

// button.onclick = function() {
//   if (loginBox.style.display === "none") {
// 	  button.style.display = "none"
// 	  voterButton.style.display = "none"
//     loginBox.style.display = "block";
//   } else {
//     loginBox.style.display = "none";
//   }
// }
// var voterButton = document.getElementById("voteButton");
// voterButton.onclick= function(){
// 	if (loginBox.style.display === "none") {
// 	voterButton.style.display = "none"
// 	button.style.display = "none"
// 	window.location = "../../sdVote/admin/index.php";
// 	}else{
// 		loginBox.style.display = "none";
// 	}
// }
var voteButton = document.getElementById("voteButton");
var myButton = document.getElementById("myButton");
var buttonContainer = document.querySelector(".main-button");
var loginBox = document.querySelector(".login-box-body");

voteButton.addEventListener("click", function(){
  buttonContainer.style.display = "none";
  loginBox.style.display = "block";
  location.href = "../../sdVote/admin/index.php"; // Redirect to index.php in the admin folder
});

myButton.addEventListener("click", function(){
  buttonContainer.style.display = "none";
  loginBox.style.display = "block";
});


		</script>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>