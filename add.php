<?php
require_once('conn.php');
?>

<?php
// this is to add or inscet values from the form to the database
if(isset($_POST['ADD']))
{
    $fname=$_POST['fname'];
    $slname=$_POST['lname'];
    $sDOB=$_POST['dob'];
	$sgent=$_POST['gent'];
	$sprogram=$_POST['program'];
	$slevel=$_POST['level'];
    $stel=$_POST['stel'];
    $semail=$_POST['email'];
    $sres=$_POST['resadd'];
	$spost=$_POST['posadd'];
	$nfName=$_POST['nkfname'];
    $nlname=$_POST['nklname'];
    $nemail=$_POST['nkemail'];
    $relay=$_POST['relation'];
	
	$con = mysqli_connect("localhost","root","","grou");
	$query="INSERT INTO `student`(`fname`, `Lname`, `DOB`,`gender`,`prog`,`level`,`contact`,`email`,`resadd`,`posadd`, `nfname`,`nlname`,`nemail`,`relation`) 
	VALUES ('$fname','$slname','$sDOB',' $sgent','$sprogram','$slevel','$stel',' $semail' ,' $sres','$spost',' $$nfName','$nlname','$nemail',' $relay')";
	

   $outcome= mysqli_query($con, $query);
    if($outcome)
        {
        echo "Data entered: ";
        }  
		else 
        {
     echo "Could not entered";
        }
       // mysqli_free_result($outcome);
        mysqli_close($con);
}
?>
