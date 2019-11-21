<?php
include "back_end.php";
class Prof extends Connecting{
   
    var $user_id="";
    var $image_file="";

   public function __construct($user,$changeImage=false){
      $this->user_id=$user;
      $this->image_file=$changeImage;
    }

	 function getConn($query){

	$con=$this->getConnection();
     $results=mysqli_query($con,$query);
     return  $results;
}

function displayProfile(){
	 $sql="SELECT first_name,last_name,user_email,p_password,home_address,postal_address,cellphone,locations,user_type,gender,user_picture from user where user_id='$this->user_id'";
	     $display=$this->getConn($sql);
	     $dis=array();
         $row=mysqli_fetch_assoc($display);
          
         echo json_encode($row);
         
  
	     return $row;
    
      
}

function changeProfile(){
	$dir="upload/".basename($_FILES["file"]["name"]);
 $location='http://localhost/BAXTERBATER2/'.$dir;
 move_uploaded_file($_FILES["file"]["tmp_name"], $dir);//here we move file to a new location
	$sql="UPDATE user SET user_picture='$location' WHERE user_id='$this->user_id'";
	$results=$this->getConn($sql);
}

}

//$lara=new Prof();
   // $lara->displayProfile();

if(isset($_GET['action'])){
	$action=$_GET['action'];

	if($action == 'displayProfile'){
		$user_id=$_GET['user_id'];
	$lara=new Prof($user_id);
    $lara->displayProfile();
}
   if($action == 'changeProfile'){

   	 $image_file=$_FILES["file"]["name"];
     $user_id=$_POST['user_id'];
   	$lara=new Prof($user_id,$image_file);
    $lara->changeProfile();
   }  
}  

?>