
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BlogSpot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<!-- <header id="fh5co-header"> -->
		
		<!-- <div class="container-fluid"> -->

			<div class="row">
				<!-- <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a> -->
				<!-- <ul class="fh5co-social">
					<li><a href="#"><i class="index.php">All Posts</i></a></li>
					<li><a href="#"><i class="">Categories</i></a></li>
				</ul>  -->
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="index.php" style="color: Black;text-decoration:none;font-size:46px">Blog Spot</a></h1>
				</div>
			</div>
		<!-- </div> -->
<!-- 
	</header>	 -->
    <div class="main">
			<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
                <a href="index.php" style="color: Black;text-decoration:none;font-size:30px" id="fh5co-logo"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Blog Categories</a>
				<!-- <a href="index.php" style="color: Black;text-decoration:none;font-size:30px" id="fh5co-logo"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Add Blog</a> -->

                
	    		<div class="panel container" style="padding:10px;">
		    		<button data-target="#editMezalta" class="btn btn-primary btn-sm" data-toggle="modal">Add File Category</button>

			    	<div class="modal fade" id="editMezalta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
				        <div class="modal-dialog" role="document">
					        <div class="modal-content">
					            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">Add New File Category</h4>
                                </div>
					            <div class="modal-body">
                                    <form action="Controller/addcat.php" method="POST">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Category :</label>
                                        <input type="text" class="form-control" name="cat_name" id="recipient-name" required>
                                    </div>
					            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <input type="submit" name="addblogcatt" value="ADD" class="btn btn-primary">
                                </div>
					                </form>
					        </div>
				</div>
				</div>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
					
				<table class="table">
				<thead class="thead-dark">
					<tr>
					
					<th width="200" scope="col">File Category</th>
					<th width="100" scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
				
				<?php
				//including the database connection file
				include_once("db.php");

				// select data in descending order from table/collection "users"
				$result = $db->Categories->find();

				?>
									
				<?php   
					foreach ($result as $res) {
						echo "<tr>";

						echo "<td>".$res['cat_name']."</td>";  
						echo "<td><a href=\"editcat.php?id=$res[_id]\">Edit</a> | <a href=\"Controller/deletecat.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";     
					}
					?>
				</tbody>
					
				</table>



					</div>
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

	
	<?php include 'footer.php' ?>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
    
	<script src="js/tinymce/tinymce.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<script src="js/tinymce/init-tinymce.js"></script>

	</body>
</html>

