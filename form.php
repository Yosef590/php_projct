<!-- <form action="form.php" method="GET">
Name: <input type="text" name="f_name">
<input type="submit" >

</form>

<?php

echo $_GET["f_name"]



?> -->

<form action="form.php" method="GET">
F_Name: <input type="text" name="f_name">
L_Name: <input type="text" name="l_name">
<input type="submit" >

</form>

<?php

echo $_GET["f_name"];
echo " ";
echo $_GET["l_name"];




?>