<?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
   $firstName= $_POST['firstname'];
   $secondName= $_POST['secondname'];
   $email = $_POST['email'];
   $phoneid= isset($_POST['phoneinfo'])?$_POST['phoneinfo']:'none';
   $phone = isset($_POST['tel'])?$_POST['tel']:'';
   $password1 = $_POST['password1'];
   $password2 = $_POST['password2'];
   $gender = isset($_POST['gender'])?$_POST['gender']:'';
   $class = isset($_POST['class'])?$_POST['class']:'';
   $time = $_POST['time'];
   $color = $_POST['color'];
   $club = $_POST['club'];
   $db = $_POST['DB'];
   $province = $_POST['province'];
   $stcard = $_FILES['stcard']['name'] ;
   $iscard = $_FILES['iscard']['name'] ;
   $checkboxh = $_POST['checkboxh'];
   $healthInfo = $_POST['healthinfo'];
   $range = $_POST['range'];
   $rating = $_POST['rating'];
  }

   echo "<div class='div'>
   <table border='1' cellspacing='0' width='100%'>
   <thead>
     <tr>
     <th>Field Name</th>
     <th>Value</th>
     </tr>
   </thead>
   <tbody>
   <tr>
   <th>First Name</th>
   <td>$firstName</td>
   </tr>
   <tr> 
    <th>Second Name</th>
   <td>$secondName</td>
   </tr>
   <tr>
    <th>Email</th>
    <td>$email</td>
   </tr>
   <tr>
   <th>Phone Number</th>
   <td>$phoneid $phone</td>
   </tr>
   <tr>
   <th>Password</th>
   <td>$password1</td>
   </tr>
   <tr>
   <th>Confirm Password</th>
   <td>$password2</td>
   </tr>
   <tr>
   <th>Gender</th>
   <td>$gender</td>
   </tr>
   <tr>
   <th>Class</th>
   <td>$class</td>
   </tr>
   <tr>
   <th>Time for Online courses</th>
   <td>$time</td>
   </tr>
   <tr>
   <th>Selected background color</th>
   <td>$color</td>
   </tr>
   <tr>
    <th>Club</th>
    <td>$club</td>
   </tr>
   <tr>
   <th>Date of birth</th>
    <td> $db</td>
   </tr>
   <tr>
   <th>'Province</th>
    <td>$province</td>
   </tr>
   <tr>
   <th>Student Card Photocopy</th>
    <td>$stcard</td>
   </tr>
   <tr>
   <th>Insurance Card Photocopy</th>
    <td>$iscard</td>
   </tr>
   <tr>
   <th>'Have health issues?</th>
    <td>$checkboxh</td>
   </tr>
   <tr>
   <th>If Yes how to take care of it</th>
    <td>$healthInfo</td>
   </tr>
   <tr>
   <th>Rate how you see our service</th>
    <td>$range</td>
   </tr>
   <tr>
   <th>Comment</th>
    <td>$rating</td>
   </tr>
   
   </tbody>
   
  </table>
 
  </div>"
  
  
  ?>
