<!doctype html>
<head>
    <title>
      
    </title>
    <style ="text/css">
        .header
{
width:95%;
height:10%;
background-color:white;



top:10%;
}
    
    Body{
      /* background-image:url(images/hotel.jpg); */
      
    }
      .part2
{
width:45%;
height:320px;
background-color:#d5f0dc;
position:absolute;
border-radius:20px;
right:30%;
top:40%;
}
.footer
{
    width:100%;
	height:250px;
	background-color:#d5f0dc;
	position:absolute;
	top:590px;
	border:20px;
	
  
	}
	
      </style>
</head>

<body>
  <a href="trans.php" style=" position:absolute;color:blue;text-decoration:none;left:10%;"> Home</a>
  <a href="trans.php" style=" position:absolute;color:blue;text-decoration:none;left:10%;top: 40px;"> More Info</a>
  <a href="trans.php" style=" position:absolute;color:blue;text-decoration:none;left:10%;top: 70px;"> About</a>
<!-- <a href="aboutus.html"style=" position:absolute;color:blue;text-decoration:none;"; >ABOUT US</a> -->
<center><img src="images/reviw1.webp" style="width:20%;height:20%;top:10px;"></center>
  <div class="header"  ><center><marquee> <h3 > Word Translation into different languages </h3></marquee></center>
  

</div>
  
    <form method="POST" class="part2">
     <center> <table border="0">
          <tr width="100" height="100" bgcolor="#F8BBD0" border="0">
            <td style="top:10%;">
              
              <input type="submit" name="Ikinya" value="Ikinyarwanda" >  
              <input type="submit" name="Engli" value="English">
              <input type="submit" name="French" value="French">
              <input type="submit" name="Kiswa" value="kiswahili">
             
            </td> 
             
          </tr>
          <tr bgcolor="#FFFFFF">
              <tr>
Word in four languages
</br>

<center ><b><h2>
<?php
include("connection.php");


if (isset($_POST['Ikinya'])) {
  
  $query = 'SELECT IKinyarwanda FROM trans_tbl';
  $data = mysqli_query($conn, $query) ;

  if (!$data) {
      echo("Error description:" . mysqli_error($mysqli));
  } else {

      while ($row = mysqli_fetch_array($data)) {
          echo  $row['IKinyarwanda'];
       }
   }
}

elseif (isset($_POST['Engli'])) {
  $query = 'SELECT English FROM trans_tbl';
  $data = mysqli_query($conn, $query) ;

  if (!$data) {
      echo("Error description:" . mysqli_error($mysqli));
  } else {

      while ($row = mysqli_fetch_array($data)) {
          echo  $row['English'];
       }
   }
}
elseif (isset($_POST['French'])) {
  $query = 'SELECT French FROM trans_tbl';
  $data = mysqli_query($conn, $query) ;

  if (!$data) {
      echo("Error description:" . mysqli_error($mysqli));
  } else {

      while ($row = mysqli_fetch_array($data)) {
          echo  $row['French'];
       }
   }
}
elseif (isset($_POST['Kiswa'])) {
  $query = 'SELECT Kiswahili FROM trans_tbl';
  $data = mysqli_query($conn, $query) ;

  if (!$data) {
      echo("Error description:" . mysqli_error($mysqli));
  } else {

      while ($row = mysqli_fetch_array($data)) {
          echo  $row['Kiswahili'];
       }
   }
}
?></h2></b> </center> 

</tr>
              
          </tr>
      </table></center>
    
    </form>
</div>
<div class="footer">
<marquee><h3 style="color:blue;top:5px;">Contact&&Adress</h3></marquee>
 <h4 style=" position:absolute; left:760px;top:70px;color:blue;">Email: Translation@get.com</h4>
      <h4 style=" position:absolute;left:760px;top:120px;color:blue;">Phone:0780497996</h4>
	  <h4 style=" position:absolute;left:800px;top:140px;color:blue;">0727532624</h4>
	  <h4 style=" position:absolute;left:300px;top:200px;color:blue;">KIGALI,RWANDA</h4>
 


</div>
</body>


</html>