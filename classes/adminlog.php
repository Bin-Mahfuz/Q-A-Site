<?php
include 'lib/session.php';
Session::checkLogin();
include 'lib/database.php';
include 'helpers/format.php';

?>

<?php
class Adminlogin{
   private $db;
    private $fm;
public function __construct()
{
    $this->db=new Database();
    $this->fm=new Format();
}
    
 public function adminlogin($email,$adminPass)
{
    $email=$this->fm->validation($email);
    $adminPass=$this->fm->validation($adminPass);
    $email =mysqli_real_escape_string($this->db->link,$email);
    $adminPass =mysqli_real_escape_string($this->db->link,$adminPass);
    if(empty($email)||empty($adminPass))
    {
        $loginmsg= "Email or Passsword must not be empty!";
        return $loginmsg;
    } else{
        $query= "SELECT * FROM tb_admin WHERE email='$email' AND adminPass='$adminPass'";
       $result=$this->db->select($query);
       if($result != false)
       {
           $value=$result->fetch_assoc();
           Session::set("adminlogin",true);
           Session::set("admin_id",$value['admin_id']);
           Session::set("Fname",$value['Fname']);
           Session::set("email",$value['email']);
           header("location:user-index.php"); 
       }else
       {
         $loginmsg= "Email or Passsword is not match!";
         return $loginmsg;
        }
       
    }  
       
     }
}  





?>