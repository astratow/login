<html>

	<head>
		<title>Login</title>
		<meta http-eqiuv="Content-Type" content="text/html" charset="utf-8"/>
		<link href="views/styles.css" media="screen" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h1>Log IN</h1>
		<div id="content">
			<form action="" method="post">
			<div>
				<?php if ($error['alert'] !=''){
				echo "<div class='alert'>$error['error_alert']</div>"}?>
				}
				<label for="username">Username: *</label>
				<input type="text" name="username" 
				value="<php echo $input['user'];?>">
				<div class="error"><?php echo $error['user']; ?></div>
				
				<label for="password">Password: *</label>
				<input type="password" name="password" 
				value="<php echo $input['pass']?>">
				<div class="error">
				<?php echo $error['pass']; ?>
				</div>
				
				<p class="required">* required fields</p>
				
				<input type="submit" name="submit" class="submit" value="Submit">
			</div>
		
		</div>


	</body>

</html>
