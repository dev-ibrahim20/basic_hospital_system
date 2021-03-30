<?php 

include "header.php";


$host = "localhost";
$user = "root";
$dbName = "hospital";
$password = "";

$conn = mysqli_connect($host, $user, $password,$dbName);
$data = mysqli_query($conn,'SELECT * FROM patients');


// استردات معلومات المرضى من قاعدة البيانات 
$query = "SELECT * FROM patients";
$result = mysqli_query($conn,$query);
?>


<table>
  <tr>
  <th>الرقم</th>
  <th>اسم المريض</th>
  <th> البريد الالكروانى او رقم الهاتف</th>
  <th>التاريخ</th>
  </tr>
<?php
if($result){
while($data = mysqli_fetch_assoc($result)){
  ?>
  <tr>
    <td><?=$data['id']?></td>
    <td><?=$data['name']?></td>
    <td><?=$data['email']?></td>
    <td><?=$data['date']?></td>
  </tr>
  <?php
}
  ?>
</table>
  <?php
}
?>




<?php 
  



