<?php
	$message_sent=false;
	if(isset($_POST['email']) && $_POST['email'] != '') {
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			
			$to = "mbedge2000@live.com"
			$body = "";
			
			$body .= "From: ".$name. "\r\n";
			$body .= "Email: ".$email. "\r\n";
			$body .= "Subject: ".$subject. "\r\n";
			$body .= "Message: ".$message. "\r\n";

			mail($to,$subject,$body);
			
			$message_sent = false;
		}
	}
?>

<!DOCTYPE html>
	<html>
		<head>
			<Title> Kovacs for Columbus </Title>
			<link rel="stylesheet" type="text/css" href="styles/contact.css">
		</head>
		<body>
			<div id="AboveHeaderDiv"></div>
			
			<div id="Navbar">
				<a href="#Home" style="float:left">HOME</a>
				<a href="#About Edina" style="float:left">ABOUT EDINA</a>
				<a href="#Contact" style="float:left">CONTACT</a>
				<a href="#Issues" style="float:left">ISSUES</a>
				<a href="#Issues" style="float:left">UPDATES</a>
				<a href="#Donate" style="float:right;background-color:#BB1F14;color:#FFFFFF;font-weight:700;padding:5px;top:10px;">DONATE</a>
			</div>
			
			<?php
				if($message_sent);
			?>
				<h3> Hello </h3>
			<?php
				else:
			?>
			
			 <div class="container">
			  <form action="contact.php" method="POST" class="form">

				<label for="name">Name</label>
				<input type="text" id="name" name="fullname" required>

				<label for="email">Email Address</label>
				<input type="text" id="email" name="emailaddress" required>

				<label for="subject">Subject</label>
				<input type="text" id="subject" name="subject" required>

				<label for="message">Message</label>
				<textarea id="message" name="message" placeholder="" style="height:200px"  required></textarea>

				<input type="submit" value="Submit">

			  </form>
			</div> 
			
			<?php
				endif;
			?>
		</body>
	</html>