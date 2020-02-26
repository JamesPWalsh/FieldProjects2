<!DOCTYPE html>
<html>
 
	 <body>
<?php
echo "out";
if(isset($_POST['submit']))

{
echo "in";
    $name = $_POST['name'];

    echo "User Has submitted the form and entered this name : <b> $name </b>";

    echo "<br>You can use the following form again to enter a new name.";

}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

   <input type="text" name="name"><br>

   <input type="submit" name="submit" value="Subm Form"><br>

</form>
	 </body>
 </html>