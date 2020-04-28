<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

  <!-- Campos de texto  -->
  Name: <input type="text" name="name">
E-mail <input type="email" name="email">
Website <input type="text"  name="website">
Comment <textarea  name="comment" rows="5" cols="40"></textarea>
<!-- Botones de radio -->
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other


</form>

</body>
</html>