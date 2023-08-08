<?php
// (A) SAVE IMAGE INTO DATABASE
if (isset($_FILES["upload"])) {
  require "2-lib-store.php";
  echo "<div class='note'>". 
    ($_STORE->save() ? "OK" : $_STORE->error)
  ."</div>";
}
?>
 
<!-- (B) HTML FILE UPLOAD FORM -->
<form method="post" enctype="multipart/form-data">
  <input type="file" name="upload" required>
  <input type="submit" name="submit" value="Upload File">
</form>