<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $Title; ?></title>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div id="container" class="container">
	
	<div class="row">
		<div class="col-sm">
			<div class="jumbotron bg-primary">
				<h1 class="display-4 text-white"><?php echo $Title; ?></h1>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href=<?php echo base_url(); ?>>Jokes</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href=<?php echo base_url('Joke'); ?>>New</a>
							</li>
						</ul>
						<form class="form-inline my-2 my-lg-0" action="<?php echo base_url(); ?>jokes_list/search">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="SearchText">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</nav>
				<br>
		</div>
	</div>