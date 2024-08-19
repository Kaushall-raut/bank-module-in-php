<?php  
$cid=$_REQUEST['phid'];
 $name=$_REQUEST['name'];
 $address=$_REQUEST['address'];
 $birth=$_REQUEST['date'];
 $contact=$_REQUEST['contact'];
 $proof=$_REQUEST['proof'];
 $aadhar=$_REQUEST['aadhar'];
 $nominee=$_REQUEST['nominee'];
 $relation=$_REQUEST['relation'];

$conn=mysqli_connect("localhost","root","","bank");
if($conn){
    
    if(isset($_REQUEST['sub'])){

        $cmd="insert into `banks` values('','$name','$address','$birth','$contact','$proof','$aadhar','$nominee','$relation')";
        $res=mysqli_query($conn,$cmd);
        // echo $res;
        header("location:index.php");
    }


}

?>