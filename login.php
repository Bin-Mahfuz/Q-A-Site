<?php session_start();?>
<?php include 'inc/head.php';?>
<?php include 'classes/userlog.php';?>

<?php
$al= new Adminlogin();
if($_SERVER['REQUEST_METHOD']=='POST'){
  $email = $_POST['email'];
  $userPass = md5($_POST['userPass']);
  $loginChk = $al->adminlogin($email,$userPass); 
}
?>
   
<div class="panel panel-default">
  <div class="panel-heading">
      <h2>User login</h2>
      <span style="color:red;font-size:18px";>

      <?php
        if(isset($loginChk)){
          echo $loginChk;
        }
      ?>
     </span>
  </div>

  <div class="panel-body">
  <div style="max-width:600px;margin:0 auto">
    <form action="login.php"method="POST">

      <div class="form-group">
        <label for="email">Email</label>
        <input type ="text" name="email" class="form-control"/>
      </div>

      <div class="form-group">
        <label for="userPass">Password</label>
        <input type ="password"  name="userPass" class="form-control"/>
      </div>
      <button type="submit" name="login" class="btn btn-success">Login</button>

    </form>
  </div>
  </div>
</div>
<?php include 'inc/footer.php';?>
