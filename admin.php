<?php session_start();?>
<?php include 'inc/head.php';?>
<?php include 'classes/adminlog.php';?>

<?php
$al= new Adminlogin();
if($_SERVER['REQUEST_METHOD']=='POST'){
  $email = $_POST['email'];
  $adminPass = md5($_POST['adminPass']);
  $loginChk = $al->adminlogin($email,$adminPass); 
}
?>

<div class="panel panel-default">
  <div class="panel-heading">
     <h2>Admin login</h2>
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
    <form action="admin.php"method="POST">

     <div class="form-group"> 
        <label for="email">Email</label>
        <input type ="text" name="email" class="form-control"/>
      </div>

     <div class="form-group">
       <label for="adminPass">Password</label>
       <input type ="password"  name="adminPass" class="form-control"/>
     </div>
      <button type="submit" name="login" class="btn btn-success">Login</button>
    </form>
   </div>
</div>
</div>
<?php include 'inc/footer.php';?>
