<?php
include "connection.php";
 class ApiBoks extends Connecting{
   
   
    var $first_name="";
    var $user_id="";
    var $university_id="";
   var  $b_cat_id="";
    var $qualification_id="";
    var $iesb="";
    var $tittle="";
    var $author="";
    var $publisher="";
    var $years="";  
    var $image_file="";
    

function getConn($query){

	$con=$this->getConnection();
     $results=mysqli_query($con,$query);
     return  $results;
}


function __construct(){


     $this->first_name=$_POST['first_name'];
     $this->user_id=$_POST['user_id'];
	 $this->university_id=$_POST['university_id'];
     $this->b_cat_id=$_POST['b_cat_id'];
     $this->qualification_id=$_POST['qualification_id'];
     $this->iesb=$_POST['iesb'];
     $this->tittle=$_POST['tittle'];
     $this->author=$_POST['author'];
     $this->publisher=$_POST['publisher'];
     $this->years=$_POST['years'];  
     $this->image_file=$_FILES["file"]["name"];
     
     
}
 
 

 function uploading(){

 	//$image_file=$_FILES["file"]["name"];

$dir="upload/".basename($_FILES["file"]["name"]);
 $location='http://localhost/BAXTERBATER2/'.$dir;
 move_uploaded_file($_FILES["file"]["tmp_name"], $dir);//here we move file to a new location

 	$sql="INSERT INTO books(user_id,qualification_id,university_id,iesb,tittle,author,publisher,years,book_image)
  VALUES('$this->user_id','$this->qualification_id','$this->university_id','$this->iesb','$this->tittle','$this->author','$this->publisher','$this->years','$location')";

     $results=$this->getConn($sql);
 }
}

if(isset($_POST['action'])){
	$action=$_POST['action'];

	 if($action == 'uploading')
	{
      
     $first_name=$_POST['first_name'];
     $user_id=$_POST['user_id'];
	 $university_id=$_POST['university_id'];
     $b_cat_id=$_POST['b_cat_id'];
     $qualification_id=$_POST['qualification_id'];
     $iesb=$_POST['iesb'];
     $tittle=$_POST['tittle'];
     $author=$_POST['author'];
     $publisher=$_POST['publisher'];
     $years=$_POST['years'];  
     $image_file=$_FILES["file"]["name"];

		$api_object=new ApiBoks();
		$api_object->uploading();
	}
}


?>