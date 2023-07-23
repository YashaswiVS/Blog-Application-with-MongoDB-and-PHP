<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
				<img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
			</figure>
			<h3 class="heading">About Me</h3>
			
			<?php
				//including the database connection file
				include_once("db.php");

				// select data in descending order from table/collection "users"
				$id = '6465fab9315d5acc1601b4a1';
				$result = $db->Profile->findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));

				?>
									
				<?php   
					
						echo "<tr>";
						echo "<td>".$result['name']."</td></tr><br>";  
						echo "<tr>";
						echo "<td>".$result['email']."</td></tr><br>";
						echo "<tr>";
						echo "<td>".$result['num']."</td></tr><br>";
						
					?>
			<form action="profile.php" method="post">
				<input type="submit" class="btn btn-primary" name="Edit Profile" value="Edit Profile" />
				
			</form>
		</div>

		<div class="fh5co-menu">
			<div class="fh5co-box">
				<h3 class="heading">My Blog</h3>
				<ul>
					<li><a href="add.php">Add Post</a></li>
					<li><a href="addcat.php">Categories</a></li>
				</ul>
			</div>
			<div class="fh5co-box">
				<h3 class="heading">Search</h3>
				<form action="#">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Type a keyword">
					</div>
				</form>
			</div>
		</div>
	</div>