<?php
// (A) GET FILES
require "2-lib-store.php";
$files = $_STORE->get();
// (A) GET FILE & FORCE DOWNLOAD
require "2-lib-store.php";
if (isset($_POST["file"])) {
  if (!$_STORE->load($_POST["file"])) { echo $_STORE->error; }
}
?>
 
<form method="post" action="4b-retrieve.php" target="_blank">
  <select name="file"><?php
  foreach ($files as $f) {
    echo "<option>$f</option>";
  }
  ?></select>
  <input type="submit" value="Download">
 
</form>