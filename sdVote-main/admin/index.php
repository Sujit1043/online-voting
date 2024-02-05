<html><?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<style>
	
	body.login-page{
		 background-image:url('../dist/img/votebg4.jpeg');
		
	}
	.login-logo{
  color: #102757;
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

</style>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>E-Voting</b>
  	</div>
   
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your Admin  session</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button id="signin" type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
	
  	</div>
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