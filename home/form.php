<form method="POST" name="contact_form" 
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 

<label for="name">Name: </label>
<input type="text" name="name" 
value="<?php echo htmlentities($name) ?>">

<label for="email">Email: </label>
<input type="text" name="email" 
value="<?php echo htmlentities($visitor_email) ?>">

<label for="message">Message:</label> 
<textarea name="message" rows=8 cols=30
><?php echo htmlentities($user_message) ?></textarea>

<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" 
id="captchaimg" >
<label for="message">Enter the code above here :</label>
<input id="6_letters_code" name="6_letters_code" type="text">

<input type="submit" value="Submit" name="submit">
</form>	