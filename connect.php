
 
<?php
$conn=mysqli_connect("localhost","root","","gym");

$sql="insert into tblgym values('".$_POST['username']."',".$_POST['age'].",'".$_POST['gender']."','".$_POST['email']."','".$_POST['password']."',".$_POST['contact'].")";
$res= mysqli_query($conn,$sql);
if($res){
        ?>
        <script>
            alert("Registration Sucessfully");
        </script>
        <?php
        }
        else{
            ?>
         <script>
           alert("Registration Unsucessfully".mysqli_connect_error());
        </script>
        <?php
    }
	
   ?>