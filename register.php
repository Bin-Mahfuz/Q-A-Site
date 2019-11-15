<?php include 'inc/head.php';?>
<?php include 'lib/database.php';?>

<?php $db=new Database(); 
if(isset($_POST['register'])){
    $name =mysqli_real_escape_string($db->link, $_POST['Uname']);
    $email =mysqli_real_escape_string($db->link, $_POST['email']);
    $userPass =mysqli_real_escape_string($db->link, $_POST['userPass']);
    $userPass=md5($userPass);
    if($name==''||$email==''||$userPass==''){
        $error= "Required Field";
    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            $erremail ="<span style='color:red'>Invaild Email.</span>";
        }else{
            $info="INSERT INTO tb_user(Uname,email,userPass)VALUES('$name','$email',
            '$userPass')";
            $create=$db->insert($info);
            if($create){
                echo "<span style='color:green'>Registration done successfuly.</span>";
            }else{
                echo "<span style='color:red'>Data not inserted successfuly.</span>";
            }
        }
    }   
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Registration</h2>
    </div>

    <div class="panel-body">
        <div style="max-width:600px;margin:0 auto">
            <form action=" " method="POST">

                <div class="form-group">
                    <label for="Uname">Your Name</label>
                    <input type ="text" id="Uname" name="Uname" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type ="text" id="email" name="email" class="form-control"/>
                </div>

                <div class="form-group"> 
                    <label for="userPass">Password</label>
                    <input type ="password" id="password" name="userPass" class="form-control"/>
                </div>
                <button type="submit" name="register" class="btn btn-success">Submit</button>

            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>
