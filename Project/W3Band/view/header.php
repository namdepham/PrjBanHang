
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="view/css/css.css" />
	
 
</head>
<body>
	<section class="header">
		<nav class="top-nav">
			<div class="container">
					<div class="row ">
						<div class="col-md-12">
							<nav class="navbar navbar-expand navbar-light justify-content-start bg-light fixed-top">
								<a class="navbar-brand" href="index.php"><img src="view/image/deNPcut.png" width="100px"></a>
								<ul class="navbar-nav">
									<li class="nav-items text-uppercase"><a href="index.php" class="nav-link">Home</a></li>
									<li class="nav-items text-uppercase"><a href="index.php?act=aboutus" class="nav-link">About us</a></li>
                                    <li class="nav-items text-uppercase"><a href="index.php?act=contact" class="nav-link">Contact</a></li>
									<li class="nav-items text-uppercase  dropdown">
				                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SALE</a>
				                        <div class="dropdown-menu">
											<?php
													foreach ($listdm as $dm) {
														extract($dm);
														$linkdm = "index.php?act=sanpham&iddm=".$id;
														echo '
														<a class="dropdown-item" href="'.$linkdm.'">'.$name.'</a>				
														';
													}
												
											?>
				                        </div>
				                    </li>

								</ul>
								
								<form class="form-inline ml-auto" action="#">
									<?php
										if (isset($_SESSION['user'])) {
											extract ($_SESSION['user']);
											echo'Hello, '.$user;
										}
										?>
                                    <button name="login" type="button" class="btn btn-default nutan">
										<a href ="https://www.facebook.com/profile.php?id=100054322059789"><i style="color: black" class="fab fa-facebook-f"></i></a>
				                    </button> 
                                    <button name="search" type="button" class=" btn btn-default nutan">
										<a href ="https://www.facebook.com/profile.php?id=100054322059789"><i style="color: black" class="fab fa-instagram"></i></a> 
				                    </button> 
				                    <button name="search" type="button" class=" btn btn-default nutan">
                                        <a href="index.php?act=viewcart"><i style="color: black" class="fas fa-shopping-cart"></i></a>
				                    </button> 
				                    <button name="search" type="button" class=" btn btn-default nutan">
									<a href="index.php?act=thoat"><i style="color: black" class="fas fa-sign-in-alt"></i></a>
				                    </button> 
									
                 				</form>
								
							</nav>
						</div>					
					</div>
				</div>	
		</nav>			
	</section>