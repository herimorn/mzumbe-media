<?php  


$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("localhost", "root", "", "social"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}


include("classes/Users.php");
include("classes/Post_category.php");
include("includes/classes/Message.php");
include("includes/classes/Notification.php");


if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}

?>
<html>
<head>
	<title>Welcome to mzumbe news system</title>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- <script src="assets/js/bootstrap.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="assets/js/bootbox.min.js"></script>
	<script src="assets/js/demo.js"></script>
	<script src="assets/js/jquery.Jcrop.js"></script>
	<script src="assets/js/jcrop_bits.js"></script>


	<!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/jquery.Jcrop.css" type="text/css" />
</head>
<body>

	<div class="top_bar"> 

		<div class="logo">
			<a href="index.php">MNES</a>
		</div>
		<div class="logo">
			<a href="staff_post.php">staff</a>
	   </div>
   	<div class="logo">
			<a href="muso_posts.php">muso</a>
	   </div>

		<div class="search">

			<form action="search.php" method="GET" name="search_form">
				<input type="text" onkeyup="getLiveSearchUsers(this.value, '<?php echo $userLoggedIn; ?>')" name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

				<div class="button_holder">
					<img src="assets/images/icons/magnifying_glass.png">
				</div>

			</form>

			<div class="search_results">
			</div>

			<div class="search_results_footer_empty">
			</div>


		
		</div>
        
		<nav>
		
			<?php
				//Unread messages 
				$messages = new Message($con, $userLoggedIn);
				$num_messages = $messages->getUnreadNumber();

				//Unread notifications 
				$notifications = new Notification($con, $userLoggedIn);
				$num_notifications = $notifications->getUnreadNumber();

				//Unread notifications 
				$user_obj = new User($con, $userLoggedIn);
				$num_requests = $user_obj->getNumberOfFriendRequests();
			?>


			<a href="<?php echo $userLoggedIn; ?>">
				<?php echo $user['first_name']; ?>
			</a>
			
			<a href="index.php">
				<i class="fa fa-home fa-lg"></i>
			</a>
			<a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'message')">
				<i class="fa fa-envelope fa-lg"></i>
				<?php
				if($num_messages > 0)
				 echo '<span class="notification_badge" id="unread_message">' . $num_messages . '</span>';
				?>
			</a>
			<a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'notification')">
				<i class="fa fa-bell fa-lg"></i>
				<?php
				if($num_notifications > 0)
				 echo '<span class="notification_badge" id="unread_notification">' . $num_notifications . '</span>';
				?>
			</a>
			<a href="requests.php">
				<i class="fa fa-users fa-lg"></i>
				<?php
				if($num_requests > 0)
				 echo '<span class="notification_badge" id="unread_requests">' . $num_requests . '</span>';
				?>
			</a>
			<a href="settings.php">
				<i class="fa fa-cog fa-lg"></i>
			</a>
			<a href="includes/handlers/logout.php">
				<i class="fa fa-sign-out fa-lg"></i>
			</a>
			<div class="col-4" style="position:relative;left:20px;background:white">
			 <h1 style="color:indigo" class="bg-info">catagories</h1>
			<!--the php to select news based on the category-->
			<?php 
			$sql_category="select * from category";
			$sql_result=mysqli_query($con,$sql_category);
			if($sql_result){
				while($row=mysqli_fetch_array($sql_result)){
					        $category_id=$row['category_id'];
							$name=$row['name'];
							?>
							<h4>
				 <a href="category.php?category=<?php echo $category_id;?>" style="color:blue"><?php echo $name?></a>
				</h4>
							<?php
				}
			}

			?>
		<div>
		</nav>

		<div class="dropdown_data_window" style="height:0px; border:none;"></div>
		<input type="hidden" id="dropdown_data_type" value="">

    	
	</div>

<?php 
if(isset($_GET['category'])){
	echo $category=$_GET['category'] ;
}
?>
	<script>
	// var userLoggedIn = '<?php echo $userLoggedIn; ?>';

	// $(document).ready(function() {

	// 	$('.dropdown_data_window').scroll(function() {
	// 		var inner_height = $('.dropdown_data_window').innerHeight(); //Div containing data
	// 		var scroll_top = $('.dropdown_data_window').scrollTop();
	// 		var page = $('.dropdown_data_window').find('.nextPageDropdownData').val();
	// 		var noMoreData = $('.dropdown_data_window').find('.noMoreDropdownData').val();

	// 		if ((scroll_top + inner_height >= $('.dropdown_data_window')[0].scrollHeight) && noMoreData == 'false') {

	// 			var pageName; //Holds name of page to send ajax request to
	// 			var type = $('#dropdown_data_type').val();


	// 			if(type == 'notification')
	// 				pageName = "ajax_load_notifications.php";
	// 			else if(type == 'message')
	// 				pageName = "ajax_load_messages.php"


	// 			var ajaxReq = $.ajax({
	// 				url: "includes/handlers/" + pageName,
	// 				type: "POST",
	// 				data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
	// 				cache:false,

	// 				success: function(response) {
	// 					$('.dropdown_data_window').find('.nextPageDropdownData').remove(); //Removes current .nextpage 
	// 					$('.dropdown_data_window').find('.noMoreDropdownData').remove(); //Removes current .nextpage 


	// 					$('.dropdown_data_window').append(response);
	// 				}
	// 			});

	// 		} //End if 

	// 		return false;

	// 	}); //End (window).scroll(function())


	// });

	</script>

	<script>
	$(function(){

		var userLoggedIn = '<?php echo $userLoggedIn; ?>';
		var dropdownInProgress = false;

	    $(".dropdown_data_window").scroll(function() {
	    	var bottomElement = $(".dropdown_data_window a").last();
			var noMoreData = $('.dropdown_data_window').find('.noMoreDropdownData').val();

	        // isElementInViewport uses getBoundingClientRect(), which requires the HTML DOM object, not the jQuery object. The jQuery equivalent is using [0] as shown below.
	        if (isElementInView(bottomElement[0]) && noMoreData == 'false') {
	            loadPosts();
	        }
	    });

	    function loadPosts() {
	        if(dropdownInProgress) { //If it is already in the process of loading some posts, just return
				return;
			}
			
			dropdownInProgress = true;

			var page = $('.dropdown_data_window').find('.nextPageDropdownData').val() || 1; //If .nextPage couldn't be found, it must not be on the page yet (it must be the first time loading posts), so use the value '1'

			var pageName; //Holds name of page to send ajax request to
			var type = $('#dropdown_data_type').val();

			if(type == 'notification')
				pageName = "ajax_load_notifications.php";
			else if(type == 'message')
				pageName = "ajax_load_messages.php";

			$.ajax({
				url: "includes/handlers/" + pageName,
				type: "POST",
				data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
				cache:false,

				success: function(response) {

					$('.dropdown_data_window').find('.nextPageDropdownData').remove(); //Removes current .nextpage 
					$('.dropdown_data_window').find('.noMoreDropdownData').remove();

					$('.dropdown_data_window').append(response);

					dropdownInProgress = false;
				}
			});
	    }

	    //Check if the element is in view
	    function isElementInView (el) {
	        var rect = el.getBoundingClientRect();

	        return (
	            rect.top >= 0 &&
	            rect.left >= 0 &&
	            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && //* or $(window).height()
	            rect.right <= (window.innerWidth || document.documentElement.clientWidth) //* or $(window).width()
	        );
	    }
	});

	</script>


	<div class="wrapper">