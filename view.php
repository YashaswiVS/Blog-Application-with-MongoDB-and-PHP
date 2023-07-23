<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <?php
//including the database connection file
include_once("db.php");

if(isset($_POST['View'])) {   
    $document = array (
                'name' => $_POST['name'],
                'fcid' => $_POST['fcid'],
                // //'file' => $_POST['file'],
                'desc' => $_POST['desc']
            );
        
    // checking empty fields
    $errorMessage = '';
    foreach ($document as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }
    
    if ($errorMessage) {
        // print error message & link to the previous page
        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";  
    } else {
        //insert data to database table/collection named 'users'
        $db->Blogs->findOne(
			array('_id' => new MongoDB\BSON\ObjectId($id)),
			array('$set' => $document)
		);

		
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='../index.php'>View Result</a>";
    }
}
$id = $_GET['id'];

//deleting the row from table/collection
$db->Blogs->findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = $db->Blogs->findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));

$name = $result['name'];
$fcid = $result['fcid'];
$desc = $result['desc'];
?>

</body>
</html>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Magazine &mdash; Free Fully Responsive HTML5 Bootstrap Template by FREEHTML5.co</title>
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

	<!-- END #fh5co-header -->
	<!-- <a href="#" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> Prev</span></a>
	<a href="#" class="fh5co-post-next"><span>Next <i class="icon-chevron-right"></i></span></a> -->
	<!-- END #fh5co-header -->
	<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<!-- <div class="container-fluid"> -->
					<a href="index.php" style="color: Black;text-decoration:none;font-size:30px" id="fh5co-logo"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Back to HomePage</a>

					<div class="panel container" style="padding:10px;">
		
					<div class="row fh5co-post-entry single-entry">
			
		<?php
				//including the database connection file
				include_once("db.php");

				// select data in descending order from table/collection "users"
				$id = $_GET['id'];

//deleting the row from table/collection


				
				$result = $db->Blogs->findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));

				?>
									
				<?php   
					
						echo "<tr>";
						echo "<td><b>Blog Name:</b> ".$result['name']."</td></tr><br>";  
						//echo "<tr><td>".$result['file']."</td></tr>";
						echo "<tr>";
						echo "<td><b> Description: </b>".$result['desc']."</td></tr><br>";
						
					?>
		</div>
	</div></div></div>

	<?php include 'footer.php' ?>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	
	<script src="js/tinymce/tinymce.min.js"></script>
	<script src="js/tinymce/init-tinymce.js"></script>

	</body>
</html>