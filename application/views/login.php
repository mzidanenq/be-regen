<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>

</head>
<body>

<div id="container">
	<h1>Login!</h1>

<form action="<?php echo base_url('login/index')?>" method="post">
  <label for="id">ID Karyawan:</label><br>
  <input type="text" id="id" name="id" placeholder="KAR001"><br>
  <small><?php echo form_error('id') ?></small>
  <label for="pass">Password:</label><br>
  <input type="password" id="pass" name="pass" placeholder="ayamatautelur123"><br><br>
  <small><?php echo form_error('id') ?></small>
  <button type="submit">Register</button>
</form> 
<a href="/<?php echo base_url('register')?>">register here</a>
</div>

</body>
</html>
