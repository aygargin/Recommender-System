<?php
// poorman.php
 
echo "<form action='recommend.php' method='get'>";
echo "Number values to generate: <input type='text' name='N' />";
echo "<input type='submit' />";
echo "</form>";
 
if(isset($_GET['N']))
{
  $N = $_GET['N'];
 
  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  
  
  $command = 'C:\Program Files\R\R-3.3.1\bin\Rscript.exe C:\xampp\htdocs\recommender\my_rscript.r 10';
$pCom = new COM('WScript.Shell');
$pShell = $pCom->Exec($command);
//$sStdOut = $pShell->StdOut->ReadAll;    # Standard output
//$sStdErr = $pShell->StdErr->ReadAll;    # Error
//echo "<pre>$sStdOut</pre>";
  
  
 // shell_exec("Rscript my_rscript.r $N" );
  echo $N;
 
  // return image tag
  $nocache = rand();
  echo("<img src='temp.png?$nocache' />");
}
?>
