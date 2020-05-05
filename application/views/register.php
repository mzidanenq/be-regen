<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>

</head>
<body>

<div id="container">
	<h1>Register!</h1>


<form method="post" action="<?php echo base_url('register/index')?>">
  <label for="id">ID Karyawan:</label><br>
  <input type="text" id="id" name="id" placeholder="KAR001"><br>
  <small><?php echo form_error('id') ?></small>
  <label for="pass">Password:</label><br>
  <input type="password" id="pass" name="pass" placeholder="ayamatautelur123"><br>
  <small><?php echo form_error('pass') ?></small>
  <label for="konpass">Konfirmasi Password:</label><br>
  <input type="password" id="konpass" name="konpass" placeholder="ayamatautelur123"><br>
  <small><?php echo form_error('konpass') ?></small>
  <br>
  <button type="submit">Register</button>
</form> 

	<a href="<?php echo base_url('login')?>">login here</a>
</div>

</body>
</html>
