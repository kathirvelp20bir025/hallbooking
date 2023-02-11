<?php 

include "config.php";

  if (isset($_POST['submit'])) {

$Check_in_Date=$_POST['checkin'];
$Check_out_Date=$_POST['checkout'];
$Choose_seminar_hall=$_POST['room_preference'];
$Name=$_REQUEST["name"];
$Email=$_REQUEST['email'];
$Phone=$_REQUEST['phone'];
$Number_of_persons_expected=$_POST['total_adults'];
$Choose_session=$_POST['session_preference'];
$Purpose_of_the_event=$_POST['Purpose_of_the_event'];
$id=$_POST['id'];

$csql="SELECT  * FROM rrr";
$cresult = $conn->query($csql);

$count=1;
while ($row1 = $cresult->fetch_array()) {
if(($row1['Check_in_Date']==$Check_in_Date)&&($row1['Choose_seminar_hall']==$Choose_seminar_hall)&&($row1['Choose_session']==$Choose_session))
{
$count=0;
}
}
if($count!=0)

{
$sql="insert into rrr VALUES('$Check_in_Date','$Check_out_Date','$Choose_seminar_hall','$Name','$Email','$Phone','$Number_of_persons_expected','$Choose_session','$Purpose_of_the_event','$id')";
$result = $conn->query($sql);
if ($result == TRUE) {

  echo "hall booking has been done sucessfully";

}else{

  echo "Error:". $sql . "<br>". $conn->error;

} 
}else{
    echo "hall has been already been booked ";
}

$conn->close(); 

}

?>