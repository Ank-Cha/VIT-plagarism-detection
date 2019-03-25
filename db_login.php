<?php
$host_link = mysqli_connect('localhost','root','','intra_vit');
echo "Connected to localhost server and intra_VIT database successfully <br> ";

$regno = $_POST["Reg_No"];
$pass = $_POST["Password"];
$reg_login = mysqli_query($host_link,"SELECT * FROM stud_login WHERE Passwrd='$pass' AND Reg_No ='$regno'");
if(mysqli_num_rows($reg_login)>0)
{
    $reg_name = mysqli_fetch_assoc(mysqli_query($host_link,"SELECT * FROM stud_reg WHERE Reg_No ='$regno'"));
    $name=$reg_name['Name'];
    echo "Logged in Successfully<br>";
    echo "Hello:$name <br><br>";
    echo '<form name="continue" action="form_subject.php" method="post">';
    echo '<input type="submit" value="Continue">';
    echo '</form>';
    $file = fopen("login.txt", 'w');
fwrite($file, $regno);
}
else
{
    echo "Login error: Please make sure you are registered with the entered username and password";
}
?>
