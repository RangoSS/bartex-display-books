<?php
 
 include "connection.php";
 class Drops extends Connecting{
   
   function getConn($query){

	$con=$this->getConnection();
     $results=mysqli_query($con,$query);
     return  $results;
}

    function myresult(){
 	$myuniversity=$this->universities();
 	$myBooksCategory=$this->barter_bookCategory();
 	$qualification=$this->qualificationType();
 	$arr=array("Unive"=>$myuniversity,"BookCategory"=>$myBooksCategory,"Qualification"=>$qualification);
    echo json_encode($arr);
    return $arr;
 }

 function mybooksArray(){
 	$allBooks=$this->listAllBooks();
 	$accounting=$this->acounting_books();
 	$bookArr=array("All"=>$allBooks,"Acoounts"=>$accounting);
 	echo json_encode($bookArr);
 }

 function barter_bookCategory(){
 	//$valuesd=5;
 	$sql="SELECT b_cat_id,category_name from book_category";
 	$results=$this->getConn($sql);
 	$display=array();
 	while($row=mysqli_fetch_assoc($results)){
         $display[]=$row;
 	}
 	//echo json_encode($display);
 	return $display;
 }

 function universities(){
 	
 	$sql="SELECT university_id,university_name from universities";
 	$results=$this->getConn($sql);
 	$display=array();
 	while($row=mysqli_fetch_assoc($results)){
         $display[]=$row;
 	}
 	return $display;
 }
 function qualificationType(){
 	
 	$sql="SELECT qualification_id,qualification_type from qualification_category";
 	$results=$this->getConn($sql);
 	$display=array();
 	while($row=mysqli_fetch_assoc($results)){
         $display[]=$row;
 	}
 	return $display;
 }

 function listAllBooks(){
 	$sql="SELECT tittle,iesb,author,years,book_image from  books";
 	$results=$this->getConn($sql);
 	$display=array();
 	while($row=mysqli_fetch_assoc($results)){
         $display[]=$row;
 	}
 	return $display;
 }

 function acounting_books(){
 	$sql="SELECT tittle,iesb,author,years,book_image from  books where b_cat_id=1";
 	$results=$this->getConn($sql);
 	$display=array();
 	while($row=mysqli_fetch_assoc($results)){
         $display[]=$row;
 	}
 	return $display;
 }
 

}


if(isset($_GET['action'])){
	$action=$_GET['action'];

	 if($action == 'myresult')
	{
		$api_object=new Drops();
		$api_object->myresult();
	}

	if($action =="mybooksArray")
	{
	$api_object=new Drops();
		$api_object->mybooksArray();
	}	

}
?>