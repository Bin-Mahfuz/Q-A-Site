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
    
 public function adminlogin($email,$userPass)
{
    $email=$this->fm->validation($email);
    $userPass=$this->fm->validation($userPass);
    $email =mysqli_real_escape_string($this->db->link,$email);
    $userPass =mysqli_real_escape_string($this->db->link,$userPass);
    if(empty($email)||empty($userPass))
    {
        $loginmsg= "Email or Passsword must not be empty!";
        return $loginmsg;
    } else{
        $query= "SELECT * FROM tb_user WHERE email='$email' AND userPass='$userPass'";
       $result=$this->db->select($query);
       if($result != false)
       {
           $value=$result->fetch_assoc();
           Session::set("adminlogin",true);
           Session::set("id",$value['id']);
           Session::set("Uname",$value['Uname']);
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