
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
  </style>
</head>

  <body>
  <div id="bg">
    <img src="images/background.jpg" alt="home">
</div>
<div id="main">
<div id="site_content">

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup"> CREATE ACCOUNT</a></li>
        <li class="tab"><a href="#login">UPDATEN AND  DELET</a></li>
      </ul>
      
      <div class="tab-content">
<div id="signup">   
          <form action="Connections/add.php" method="POST" enctype="multipart/form-data" name="reg-form" id="reg-form">
          
<div class="top-row">
<div>
         <table width="930" border="0">
  <tr>
    <td width="191">&nbsp;</td>
    <td width="194">STUDENT PROFILE  </td>
    <td width="25">&nbsp;</td>
    <td width="193">NEXT OF KING</td>
    <td width="305">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>First Name :</td>
    <td> <label for="fname"></label>
      <input type="text" name="fname" id="fname"></td>
    <td>&nbsp;</td>
    <td>First Name :</td>
    <td><label for="nkfname"></label>
      <input type="text" name="nkfname" id="nkfname"></td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><label for="lname"></label>
      <input type="text" name="lname" id="lname"></td>
    <td>&nbsp;</td>
    <td>Last Name:</td>
    <td><label for="nklname"></label>
      <input type="text" name="nklname" id="nklname"></td>
  </tr>
  <tr>
    <td>Gender:</td>
    <td><input type="text" name="gent" id="gent"></td>
    <td>&nbsp;</td>
    <td>E-Mail :</td>
    <td><label for="nkfemail"></label>
      <input type="text" name="nkemail" id="nkfemail"></td>
  </tr>
  <tr>
    <td>Date Of Birth :</td>
    <td><label for="dob"></label>
      <input type="date" name="dob" id="dob"></td>
    <td>&nbsp;</td>
    <td>Relationship :</td>
    <td><label for="relation"></label>
      <input type="text" name="relation" id="relation"></td>
  </tr>
  <tr>
    <td id="testi">Programe:</td>
    <td><label for="program"></label>
      <input type="text" name="program" id="program"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Level :</td>
    <td><label for="level"></label>
      <input type="text" name="level" id="level"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tel Number:</td>
    <td><label for="stel"></label>
      <input type="text" name="stel" id="stel"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E-mail :</td>
    <td><label for="email"></label>
      <input type="text" name="email" id="email"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Residential Address</td>
    <td><label for="resadd"></label>
      <input type="text" name="resadd" id="resadd"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Postal Address</td>
    <td><label for="posadd"></label>
      <input type="text" name="posadd" id="posadd"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<br>
<div id="button">
<input name="ADD" type="submit" class="button-block" id="Add"value="CREATE  ACCOUNT">
</div>
</div>
</div>
          </form>

        </div>
 <div id="login">   
                    <form action="Connections/add.php" method="POST" enctype="multipart/form-data" name="uppda" id="uppda">
          
          <div class="top-row">
          <div>
         <table width="930" border="0">
  <tr>
    <td width="191">&nbsp;</td>
    <td width="194">STUDENT PROFILE  </td>
    <td width="25">&nbsp;</td>
    <td width="193">NEXT OF KING</td>
    <td width="305">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>First Name :</td>
    <td> <label for="fname"></label>
      <input type="text" name="fname" id="fname"></td>
    <td>&nbsp;</td>
    <td>First Name :</td>
    <td><label for="nkfname"></label>
      <input type="text" name="nkfname" id="nkfname"></td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><label for="lname"></label>
      <input type="text" name="lname" id="lname"></td>
    <td>&nbsp;</td>
    <td>Last Name:</td>
    <td><label for="nklname"></label>
      <input type="text" name="nklname" id="nklname"></td>
  </tr>
  <tr>
    <td>Gender:</td>
    <td><input type="text" name="gent" id="gent"></td>
    <td>&nbsp;</td>
    <td>E-Mail :</td>
    <td><label for="nkfemail"></label>
      <input type="text" name="nkemail" id="nkfemail"></td>
  </tr>
  <tr>
    <td>Date Of Birth :</td>
    <td><label for="dob"></label>
      <input type="date" name="dob" id="dob"></td>
    <td>&nbsp;</td>
    <td>Relationship :</td>
    <td><label for="relation"></label>
      <input type="text" name="relation" id="relation"></td>
  </tr>
  <tr>
    <td id="testi">Programe:</td>
    <td><label for="program"></label>
      <input type="text" name="program" id="program"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Level :</td>
    <td><label for="level"></label>
      <input type="text" name="level" id="level"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tel Number:</td>
    <td><label for="stel"></label>
      <input type="text" name="stel" id="stel"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E-mail :</td>
    <td><label for="email"></label>
      <input type="text" name="email" id="email"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Residential Address</td>
    <td><label for="resadd"></label>
      <input type="text" name="resadd" id="resadd"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Postal Address</td>
    <td><label for="posadd"></label>
      <input type="text" name="posadd" id="posadd"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table><div><input name="UPP" type="submit" class="button-block" id="upp"value="UPDATE"></div>
</div></div>
          </form>

        
      </div><!-- tab-content -->
      
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
</div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
     Copyright &copy; photo_blurred3 | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  </body>
</html>

