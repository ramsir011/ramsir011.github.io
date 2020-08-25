
 <?php

include ('connection.php');
if(isset($_POST['signup'])){
  //checking for empty feilds
if(($_POST['name']=="") ||($_POST['email']=="")||($_POST['password']=="")){
  $message = "<div class='alert alert-warning mt-2'role='alert'>ALL Fields are Required</div>";
}else{
// checking email is already used or not 
  $sql1 = "SELECT r_email FROM user_table WHERE r_email ='".$_POST['email']."'";
  $result = $conn->query($sql1);
 if($result->num_rows==1){
  $message = "<div class='alert alert-warning mt-2'role='alert'>Email ID is Already Registered.</div>";
 }else{
  $name =$_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  //inserting values in database
  $sql ="INSERT INTO user_table (r_name, r_email, r_password) VALUES ('$name','$email','$password')";
  if($conn->query($sql) == TRUE){
    $message = "<div class='alert alert-success mt-2'role='alert'>Account Successfully Created</div>";
  }else{
    $message = "<div class='alert alert-danger mt-2'role='alert'>Unable to Create an Account</div>";
  }
 }
 
}
}


?>
 
 <div class="container pt-5 "></div>
 <h2 class="text-center">Creat an Account</h2>
 <div class="row mt-4 mb-4">

 <div class="col-md-6 offset-md-3">
 <form action="" class="shadow-lg p-4" method="POST">
 <div class="form-group">
  <i class="fas fa-user"></i>
  <label for="name" class="font-weight-bold pl-2">Name</label>
  <input type="text"class="form-control"placeholder ="Name"
  name="name">

 </div>
 <div class="form-group">
  <i class="fas fa-user"></i>
  <label for="email" class="font-weight-bold pl-2">Email</label>
  <input type="email"class="form-control"placeholder ="Email"
  name="email">
   <small class="form-text">we will never share your email to anyone</small>
 </div>
 <div class="form-group">
  <i class="fas fa-key"></i>
  <label for="name" class="font-weight-bold pl-2">New password</label>
  <input type="password"class="form-control"placeholder ="Password"name="password">

 </div>

<button type="Submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold"name="signup">Sing Up</button>
<em>Note-By clicking sing up, you will agree to our terms, data policy and cookie policy.</em> <br>
<?php if(isset($message)){echo $message;}    ?>

</form>

 </div>
 </div>