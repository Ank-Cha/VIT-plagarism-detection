<?php
$host_link = mysqli_connect('localhost','root','','intra_vit');
echo "Connected to localhost server and intra_VIT database successfully <br> ";
$name = $_POST["Name"];
$regno = $_POST["Reg_No"];
$pass = $_POST["Password"];
$reg = mysqli_query($host_link,"SELECT * FROM stud_reg WHERE Reg_No ='$regno'");
if(mysqli_num_rows($reg)>0)
{
   echo "Registration failed<br>";
   echo "$regno is already registered";
}
else
{
    $sql1="INSERT INTO stud_reg (Reg_No,Name) VALUES('$regno','$name')";
    $sql2="INSERT INTO stud_login (Reg_No,Passwrd) VALUES('$regno','$pass')";
    if((mysqli_query($host_link,$sql1)) and (mysqli_query($host_link,$sql2)))
    {
        echo " Registration of $regno successful";
    }
    else
    {
        echo "Error in Processing";
    }
}
?>