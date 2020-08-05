<!DOCTYPE html>
<html>
<head>
<style>
fieldset {
  background-color: #eeeeee;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
</head>
<body>

<h1 style="text-align: center;">Send Email Using PHPMailer</h1>

<form  style="max-width:500px;margin:auto; class="user" action="email.php" method="POST" enctype="multipart/form-data">
 <fieldset>
  <legend>Personalia:</legend>
  <label for="fname">Email Subject:</label>
  <input type="text" autocomplete="off"   name="post_sub" placeholder="Post subject"><br><br>
  <label for="lname">Email Title:</label>
  <input type="text" autocomplete="off"   name="post_name" placeholder="Post name"><br><br>
  <label for="email">Email:</label>
  <input type="email"   id="search"  name="post_email" placeholder="Post email" autocomplete="off"><br><br>
  <label for="birthday">Email Desciption:</label>
  <input type="textarea" autocomplete="off"   name="post_description" placeholder="Post Description"><br><br>
  <label for="birthday">Email Link:</label>
  <input type="text" autocomplete="off"   name="post_link" placeholder="Post Link"><br><br>
  <input type="submit" value="Submit">
 </fieldset>
</form>

</body>
</html>
