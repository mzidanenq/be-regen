<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/be-regen-master/assets/forms.css">

    <title>Forms</title>
</head>
<body>
	<div class="container" id="forms">
		<div class="overlay-container">
		  <div class="overlay">
			<div class="overlay-left">
			  <h2>Welcome Back!</h2>
			  <p>Udah punya akun ya? Yuk, sign in!</p>
			  <button class="invert" id="signIn">Sign In</button>
			</div>
			<div class="overlay-right">
			  <h2>Hello, New Friend!</h2>
			  <p>Kamu staff baru? Yuk, sign up dulu!</p>
			  <button class="invert" id="signUp">Sign Up</button>
			</div>
		  </div>
		</div>
		<form class="sign-up" action="<?php echo base_url('login/register')?>" method="post">
		  <h2>Sign Up</h2>
		  <div>Use your staff id for registration</div>
		  <input type="text" id="id" name="id" placeholder="Name" />
		  <small><?php echo form_error('id') ?></small> 
		  <input type="password" id="pass" name="pass" placeholder="Password" />
		  <small><?php echo form_error('pass') ?></small>
		  <input type="password" id="konpass" name="konpass" placeholder="Confirm Password" />
		  <small><?php echo form_error('konpass') ?></small>
		  <button type="submit">Sign Up</button>
		</form>
		<form class="sign-in" action="<?php echo base_url('login/index')?>" method="post">
		  <h2>Sign In</h2>
		  <div>Use your account</div>
		  <input type="text" id="id" name="id" placeholder="Staff ID" />
		  <small><?php echo form_error('id') ?></small>
		  <input type="password" id="pass" name="pass" placeholder="Password" />
		  <small><?php echo form_error('pass') ?></small>
		  <a href="#">Forgot your password?</a>
		  <button type="submit">Sign In</button>
		</form>
	  </div>
	  <script src="/be-regen-master/assets/forms.js"></script>
</body>
</html>