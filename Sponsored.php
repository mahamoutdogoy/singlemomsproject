


<!DOCTYPE html>
<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="stylesheet.css">
<style>
body {
 background: url('images/yellow.jpg') no-repeat;
 background-size: cover;
 margin-left: 10%;

}

.menu ul {
 margin: 0px;
 padding: 0px;
 list-style: none;
 font-family: arial;
}

.menu ul li {
 float: left;
 width: 200px;
 height: 40px;
 background-color: black;
 opacity: .8px;
 line-height: 40px;
 text-align: center;
 font-size: 20px;

}

.menu ul li a {
 text-decoration: none;
 color: white;
 display: block;
 
 padding-left: 0px;
 padding-right: 10px;


}

ul li a:hover {
 background-color: green;
}

ul li ul li{
 display: none;
}

ul li:hover ul li {
 display: block;
}
.hero
{
  position: absolute;
  width: 1200px;
  margin-left: 0px;
  margin-top: 0px;
}
h2
{
  color: white;
  text-transform: uppercase;
  font-size: 70px;
  text-align: center;
  margin-top: 275px;
}
.button
{
  margin-top: 30px;
  margin-left: 440px;
}
.btn
{
  border:1px solid white;
  padding: 10px 30px;
  text-decoration: none;
  margin-right: 3px;
  font-size: 13px;
  text-transform: uppercase;
}
.btn-one
{
    background-color: darkorange;
    font-family: "roboto", sans-serif;

}
.btn-two
{
  font-family: "roboto", sans-serif;

}
.btn-two:hover
{
  background-color: darkorange;
  transition: all 0.5s ease-in;
}
.menu
{
  margin-right: 150px;
  padding-right: 100px;
}




</style>

</head>
<body>
<div class="menu">
<ul>
 <li><a href="#">STUDENT</a></li>
 <li><a href="#">DONOR</a>
  <ul>
   <li><a href="ViewdonorD.php">View donor details</a></li>
   <li><a href="ViewdonorW.php">View donor work</a></li>
 

  </ul>
 </li>
 <li><a href="#">SPONSORER</a>
  <ul>
   <li><a href="ViewsponsorD.php">View sponsorer details</a></li>
   <li><a href="ViewsponsorW.php">View sponsorer work</a></li>
  
  </ul>
 </li>
 <br><br><br>
      

      <table border="1" class="table" cellpadding="7"><br>
          <tr>
            <th>Sponsored username</th>
            <th>Sponsered first name</th>
            <th>Sponsored last name</th>
            <th>Institution</th>
            <th>Course studying</th>
            <th>Sponsered amount</th>
          </tr> 
          <tr>
          <?php
          require('db.php');
  
               //storing the selected value in the php variable  
            $query3 = "SELECT sponsored.usern, personal.firstname, personal.lastname, education.insdeg, education.ccourse,sponsored.amount FROM sponsored LEFT JOIN personal ON sponsored.usern = personal.usern LEFT JOIN education ON sponsored.usern = education.usern";
            $result3 = $con->query($query3);
            while($rows3 = mysqli_fetch_array($result3)){
              $usern = $rows3['usern'];  
              $fristname = $rows3['firstname'];
              $lastname = $rows3['lastname'];
              $insdeg = $rows3['insdeg'];
              $ccourse = $rows3['ccourse'];
              $amount = $rows3['amount']; 
              ?>
              <tr>
              <td><?php echo $usern; ?></td>
              <td><?php echo $fristname; ?></td>
              <td><?php echo $lastname; ?></td>
              <td><?php echo $insdeg; ?></td>
              <td><?php echo $ccourse; ?></td>
              <td><?php echo $amount; ?></td>
              </tr>

              <?php
              }
            
          ?>
          </tr>
          <br>
        </table>
 
  

</body>
</html>

