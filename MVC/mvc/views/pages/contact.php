<?php 
//chứa những thành phần thay đổi 
?>
<h2>contact</h2>
<?php
echo $data["Number"];
echo "<br>";
?>
<?php 
while($row = mysqli_fetch_array($data["SV"]))
{
    echo $row["hoten"] ;
    echo $row["namsinh"];
    echo "<br>";    
}
?>