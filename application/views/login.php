<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<center>
		<div class="col-md-5 col-md-offset-3">
			<div class="alert alert-danger">
				<div class="panel-heading">
					<h2>
						<Toko><span class="glyphicon glyphicon-cutlery" aria hidden="true"></span>  login Restoran Vera
					</h2>
					<p><span class="glypicon glypicon" aria-hidden="true"></span></h3>
					<h3>Login System</h3>
					<p><span class="glyphicon glyphicon-road" aria-hidden="true"></span> jln.Bangsri-jepara</p>
					
				</div>
				<div class="panel-body">
					<div class="alert alert-success">
						<span class="glypicon glypicon-exlamation-sign" aria-hidden="true"></span>
						masukkan Username dengan Benar!
					</div>
					
				</div>
				<div class="panel-body">
					<div class="col-md-11">	
						<div method="post">	
							<div class="input group">
								<span class="input_group-addon1">Username</span>
								<input type="text" name="user" class="form-control" placeholder="Username"aria-descridby="basic-addon1"required="required">
							</div>
							<br>
							<div class="input group">
								<span class="input_group-addon1">Password</span>
								<input type="text" name="user" class="form-control" placeholder="Password"aria-descridby="basic-addon1"required="required">	
							</div>
							<br>	
					</div>
					<input type="submit" class="btn-btn-block btn-danger" value="login">
				</div>
				
			</div>
		</div>
	</center>



</body>
</html>