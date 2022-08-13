<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "loginsystem";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
    
if(isset($_POST['save']))
{


    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $pgender=$_POST['pgender'];
    $rstatus=$_POST['rstatus'];
    $smoke=$_POST['smoke'];
    $drink=$_POST['drink'];
    $income=$_POST['income'];
    $partnerminage=$_POST['partnerminage'];
    $partnermaxage=$_POST['partnermaxage'];
    $chronic=$_POST['chronic'];
    $pdrink	=$_POST['pdrink'];
    // $image=$_POST['image'];

   

    $sql = "INSERT INTO matchrequests (fullname,email,contact,dob,gender,pgender,rstatus,smoke,drink,income,partnerminage,partnermaxage,chronic,pdrink)
    VALUES('$fullname','$email','$contact','$dob','$gender','$pgender','$rstatus','$smoke','$drink','$income','$partnerminage','$partnermaxage','$chronic','$pdrink')";    
 
  // insert in database 
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }
 mysqli_close($conn);

}
?>