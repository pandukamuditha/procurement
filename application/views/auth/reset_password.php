<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/auth/reset_password.css">

</head>
<body>
    <div class="container">
        <div class="card card-container">
            <p id="profile-name" class="profile-name-card">Enter Username</p>
            <?php echo form_open('Auth/email_password_reset','class="form-signin"'); ?>
                <span id="reauth-email" class="reauth-email"></span>
                <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Reset Password</button>
            <?php echo form_close(); ?>
						<?php
						echo "<div class='error_msg'>";
						if (isset($error_msg)) {
							echo $error_msg;
						}
						echo validation_errors();
						echo "</div>";
					?>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
