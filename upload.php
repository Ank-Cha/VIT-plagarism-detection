<?PHP

if(!empty($_FILES['uploaded_file']))
{
  $nn = fopen('login.txt','r');
  $na = file_get_contents('login.txt');
  $info = pathinfo($_FILES['uploaded_file']['name']);
  $ext = $info['extension']; // get the extension of the file
  echo '<br><br>Your file is renamed and uploaded as '.$na."<br><br>";



  $newname = $na.".".$ext;

  $target = 'uploads/'.$newname;
  move_uploaded_file( $_FILES['uploaded_file']['tmp_name'], $target);
  $qq = fopen('./uploads/'.$newname,'r');
  $str_orig = file_get_contents('./uploads/'.$newname);
  $tot= str_word_count($str_orig, 1);
  echo ("Total word count :  ".count($tot)."<br><br>");


  $dir = "uploads/";
  echo "CHECKING PLAGIASIRSM...........<br>";
  echo "CHECKING COMPLETED <br><br>";

  // Open a directory, and read its contents
  if (is_dir($dir))
  {
    if ($dh = opendir($dir))
    {
      while (($file = readdir($dh)) !== false)
      {
        if($file !== '.' and $file !== '..' and $file !== $newname)
        {
          echo "Filename:" . $file . "<br>";
          $qqq = fopen('./uploads/'.$file,'r');
          $str_mat = file_get_contents('./uploads/'.$file);
          $pieces1 = str_word_count($str_orig, 1);
          $pieces2 = str_word_count($str_mat, 1);
          $result=array_intersect(array_unique($pieces1), array_unique($pieces2));
          $per = count($result) / count($pieces1) * 100;
          echo("Total word count :  ".count($pieces2)."<br>");
          echo("The common words count:".count($result)."<br>");
          echo("Plagiarism percentage :  ".$per." %<br><br>");
        }
      }
      closedir($dh);
    }
  }
}

?>
