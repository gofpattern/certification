<?php
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style type="text/css">
.field{background:lightyellow;
border:10px solid yellow;
margin-bottom:10px;
width:720px}

.label{<!--style here please for lable class-->}

textarea{width:360px;
height:50px}

label:hover{font-size:40px}
input:hover{font-size:40px}

</style>
</head>
<body>
<h1>Please Enter Your Detail For Our Dating Website!</h1>
<form action="http://ihome.ust.hk/~rossiter/cgi-bin/show_everything.php" method="post" enctype="multipart/form-data">
<fieldset class="field">
<legend>Your Face</legend>
<label for="photo" class="label">Your image:</label>
<input type="file" id="photo" name="photo" required>
<br>
<label for="preview" class="label">Image preview:</label>
<img id="preview" name="preview">
</fieldset>


<fieldset class="field">
<legend>Your General Details</legend>
<label for="yourname" class="label">Your Name:</label>
<input type="text" id="yourname" name="yourname" required>
<br>
<label class="label">Gender:</label>

<input type="radio" id="male" name="male" value="Male" required>
<label for="male" class="label">Male</label>
<input type="radio" id="female" name="female" value="Female" required>
<label for="female" class="label">Female</label>
<br>
<label for="age" class="label">Age:</label>
<input type="number" id="age" name="name" required>
<br>
<label for="yourbirthday" class="label">Date of birth:</label>
<input type="date" id="yourbirthday" name="yourbirthday">
<br>
<label for="yourfavcolor" class="label">Your favriout color:</label>
<input type="color" id="yourfavcolor" name="yourfavcolor">
<br>
<label for="country" class="label">Which contry:</label>


<select name="contry">
<option></option>
<option value="pakistan">Pakistan</option>
<option value="usa">USA</option>
<option value="uk">UK</option>
<option value="france">France</option>
<option value="italy">Italy</option>
</select>
</fieldset>


<fieldset class="field">
<legend>Your indicator</legend>
<label for="yourheight" class="label">Height:</label>Short
<input type="range" min="0" max="100" id="yourheight" name="yourheight">Tall
<br>
<label for="salary" class="label">Salary:</label>Poor
<input type="range" min="0" max="100" id="salary" name="salary">Rich
</fieldset>


<fieldset class="field">
<legend>Your contacr information</legend>
<label for="youremail" class="label">Email:</label>
<input type="email" id="youremail" name="youremail" required>
<br>
<br>

<label for="mobile" class="label">Mobile:</label>
<input type="tel" id="mobile" name="mobile">
<br>
<label for="adress" class="label">Adress:</label>

<textarea id="adress" name="address"></textarea>
<br>

<label class="label">Method to contact you:</label>
<input type="checkbox" id="email" name="email">
<label for="email" class="label">Email</label>
<input type="checkbox" id="whatsapp" name="whatsapp">
<label for="whatsapp" class="label">Whatsapp</label>
<input type="checkbox" id="inappchat" name="inappchat">
<label for="inappchat" class="label">Inapp-chat</label>
</fieldset>


<input type="submit" value="Submit">
</form>

<script src="https://www.cse.ust.hk/~rossiter/dating_web_site.js"></script>
</body>
</html>
?>