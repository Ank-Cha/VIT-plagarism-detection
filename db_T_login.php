<?php
$host_link = mysqli_connect('localhost','root','','intra_vit');
echo "Connected to localhost server and intra_VIT database successfully <br> ";

$Tno = $_POST["T_No"];
$pass = $_POST["Password"];
$reg_login = mysqli_query($host_link,"SELECT * FROM t_data WHERE Passwod='$pass' AND T_no ='$Tno'");
if(mysqli_num_rows($reg_login)>0)
{
    $reg_name = mysqli_fetch_assoc(mysqli_query($host_link,"SELECT * FROM t_data WHERE T_no ='$Tno'"));
    $name=$reg_name['T_name'];
    echo "Logged in Successfully<br>";
    echo "Hello:$name <br><br>";
    echo '<form name="continue" action="form_display.php" method="post">';
    echo '<input type="submit" value="Continue">';
    echo '</form>';
    $file = fopen("T_login.txt", 'w');
fwrite($file, $Tno);
}
else
{
    echo "Login error: Please make sure you are registered with the entered username and password";
}
?>
