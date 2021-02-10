<?php
 $fn=$_SERVER['SCRIPT_FILENAME'];
  echo date('F d Y H:i:s',filemtime($fn));
?>