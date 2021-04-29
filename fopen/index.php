<?php
  $handle = fopen("https://www.google.com/", "rb");
  $contents = '';
  while (!feof($handle)) {
  $contents .= fread($handle, 8192);
}
  echo $contents;
  fclose($handle);
?>
