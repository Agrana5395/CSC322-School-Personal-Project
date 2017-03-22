<?php
	// new comment this is from Youtube Video. For some reason does not work in my form, I will try to fix it later and watch the video again 
	if(isset($_POST['new_comment'])) {
		$new_com_name = $_SESSION['user'];
		$new_com_text = $_POST['comment'];
		$new_com_date = date('Y-m-d H:i:s');
		$new_com_code = generateRandomString();

		if(isset($new_com_text)) {
			mysqli_query($connect, "INSERT INTO 'Rating' ('user_name', 'rating_coment', 'rating_date', 'course_code') VALUES ('$new_com_name', '$new_com_text', '$new_com_date', '$new_com_code')");
		}
		header("Location: ");
	}
	// new reply
	if(isset($_POST['new_reply'])) {
		$new_reply_name = $_SESSION['user'];
		$new_reply_text = $_POST['new-reply'];
		$new_reply_date = date('Y-m-d H:i:s');
		$new_reply_code = $_POST['code'];

		if(isset($new_reply_text)) {
			mysqli_query($connect, "INSERT INTO `Course` (`user_name`, `course_short_description`, `course_review_date`, `course_name`) VALUES ('$new_reply_name', '$new_reply_text', '$new_reply_date', '$new_reply_code')") or die(mysqli_error());
		}
		header("Location: ");
	}
?>