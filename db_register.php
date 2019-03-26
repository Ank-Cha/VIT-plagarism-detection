<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-image: url('bg3.jpg'); background-repeat: round">
<?php
$host_link = mysqli_connect('localhost','root','','intra_vit');
?>
<div align="center">
  <h3>Connected to localhost server and intra_VIT database successfully</h3><br>
</div>
<?php
$name = $_POST["Name"];
$regno = $_POST["Reg_No"];
$pass = $_POST["Password"];
$reg = mysqli_query($host_link,"SELECT * FROM stud_reg WHERE Reg_No ='$regno'");
if(mysqli_num_rows($reg)>0)
{
?>
   <div align="center">
     <h4>Registration failed</h4><br>
   </div>
   <div align="center">
     <h4><?php echo $regno ?> is already registered</h4><br>
   </div>;
<?php
}
else
{
    $sql1="INSERT INTO stud_reg (Reg_No,Name) VALUES('$regno','$name')";
    $sql2="INSERT INTO stud_login (Reg_No,Passwrd) VALUES('$regno','$pass')";
    if((mysqli_query($host_link,$sql1)) and (mysqli_query($host_link,$sql2)))
    {
?>
        <div align="center">
          <h4>Registration of <?php echo $regno ?> successful</h4><br>
        </div>;
<?php
    }
    else
    {
?>
        <div align="center">
          <h4>Error in Processing</h4><br>
        </div>
<?php
    }
}
?>
</body>
