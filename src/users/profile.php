<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include("../include/url_users.php");

if(!isset($_REQUEST['user'])) {
	header('Location:../index.php');
} else {
	$user=$_REQUEST['user'];
}

/* fetch user detail */
$query="SELECT *
		FROM users
		WHERE username='$user'
		";

$result=mysqli_query($conn , $query );

if($result) {
	if(mysqli_num_rows($result)==1) {
		while($row=mysqli_fetch_assoc($result)) {
			if($row['usertype']=='admin') {
					header("location:admin.php");
			}
			include("../include/frame_profile_detail.php");
		}
	}
} else {
	echo "failed";
}

/*
$query="SELECT *
		FROM  users as u , user_post as up
		WHERE up.postAuthor='$user' AND u.username='$user'
		";

$result=mysqli_query($conn , $query);

if($result) {

	if(mysqli_num_rows($result) > 0 ) {
		while($post=mysqli_fetch_assoc($result)) {
			echo "<br>";
			print_r($post);
		}
	}

} else {
	echo "No such Posts";
}
*/
?>
