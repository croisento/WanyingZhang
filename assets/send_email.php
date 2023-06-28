<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = 'wanying.20@intl.zju.edu.cn'; // 改为你的邮箱地址
	$subject = 'New Message from Website';
	$body = "Name: $name\nEmail: $email\n\n$message";

	if (mail($to, $subject, $body)) {
		echo 'Email sent successfully.';
	} else {
		echo 'Failed to send email.';
	}
}
?>
