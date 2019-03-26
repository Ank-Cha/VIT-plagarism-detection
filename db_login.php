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
$regno = $_POST["Reg_No"];
$pass = $_POST["Password"];
$reg_login = mysqli_query($host_link,"SELECT * FROM stud_login WHERE Passwrd='$pass' AND Reg_No ='$regno'");
if(mysqli_num_rows($reg_login)>0)
{
    $reg_name = mysqli_fetch_assoc(mysqli_query($host_link,"SELECT * FROM stud_reg WHERE Reg_No ='$regno'"));
    $name=$reg_name['Name'];
?>
    <div align="center">
      <h4>Logged in Successfully</h4><br>
    </div>
    <div align="center">
      <h4><?php echo "Hello:$name" ?></h4><br>
    </div>;
    <form class="col-md-6 auto" name="continue" style="margin-left:25%; margin-right:25%; margin-top:10%" action="form_subject.html" method="post">
     <div align="center">
       <button type="submit" class="btn btn-primary">Continue</button>
     </div>
    </form>
<?php
    $file = fopen("login.txt", 'w');
    fwrite($file, $regno);
}
else
{
?>
<form class="col-md-6 auto" style="margin-left:25%; margin-right:25%; margin-top:10%">
  <div align="center">
    <h3>Login error: Please make sure you are registered with the entered username and password</h3><br>
  </div>
</form>
<?php
}
?>
</body>
