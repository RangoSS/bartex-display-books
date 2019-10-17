<?php
 
 include "hedds.php";


//$stings="INSERT INTO"


?>
 <link rel="stylesheet" type="text/css" href="css/styleUploading.css">
<div class="container"> 
<div class="row">
	<div class="col-md-6" style="border-style:solid ">
		
	  
            
   <div class="container">
	<div class="row">
    <div class="col-md-6">
		<div class="form_main" style="border-style: solid;width: 100%">
                <h4 class="heading"><strong>Quick </strong> Upload Book<span></span></h4>
                <div class="form" style="border-style: solid;width: 100%">

                	<!--,,user_email,p_password,home_address,cellphone,postal_address,locations,user_type,gender,user_picture)-->
                <form class="form-group" action="" method="post" id="contactFrm" name="contactFrm" style="width: 100%">
               
            <input type="text" required="" placeholder="Please input your Name"  value="<?php echo  $first_name; ?>" id="first_name" name="first_name" class="form-control btn-block" readonly>
             <input type="text" required="" placeholder="Please input your Name" value="<?php echo  $user_id; ?>" id="user_id" name="user_id" class="form-control btn-block" readonly>

            
                    <input type="text" required="" placeholder="Please insert ISB number" value="" id="iesb" name="iesb" class="form-control btn-block">
                    <label class="mdb-main-label">Book Category</label>
                    <select id="cates" class="form-control mdb-select md-form colorful-select dropdown-primary mb-2 mycat">
                    </select>
                     
                    <label class="mdb-main-label">Universities</label>
                    <select id="universe" class="form-control mdb-select md-form colorful-select dropdown-primary mb-2 myselecni">

                    </select>

                    <label class="mdb-main-label">Qualification Type</label>
                    <select id="qualic" class="form-control mdb-select md-form colorful-select dropdown-primary mb-2 myqual">

                    </select>
                    
                    <input type="text" required="" placeholder="Please book tittle" value="" id="tittle" name="tittle" class="form-control btn-block">
                    <input type="text" required="" placeholder="Please author of book" value="" id="author" name="author" class="form-control btn-block">
                    <input type="text" required="" placeholder="Please Publisher name" value="" id="publisher" name="publisher" class="form-control btn-block">
                     <label class="mdb-main-label">when the book published</label>
                    <input type="date" required="" placeholder="book year published" value="" id="years" name="years" class="form-control btn-block">
                    
                           <span>Upload Book Image</span>
                           <input class="form-control btn-block" id="file" name="file" type="file">
                           
                	 <span class="ups"  style="background-color: blue ;display:none">row has been uploaded</span>
                     <input type="button" value="submit" name="submit" class="txt2" onclick="uploading();">
                </form>
            </div>
            </div>
            </div>
	</div>
</div>

</div>
  <div class="col-md-5">
  	<span class="amid" style="border-style: solid;width: 40%">hdfhdfhdfhdfjhdfhjfdhjdfhjdfhj</span>
  	<div class="showme">list it here</div>
  </div>
</div> 


</div> 

<script type="text/javascript">
	$(document).ready(function(){
		

		////////////////////////////////
		$.ajax({
			url:"http://localhost/BAXTERBATER2/dropDownList.php?action=myresult",
			method:"GET",
			datatype : "application/json",
			contentType: "text/plain",
			success:function(response){
				var res=JSON.parse(response);
                console.log(response);
               console.log(res);
               var univrsity=res.Unive;
                var outputs="";

                outputs+="<option value='' >--select University--</option>";
                $.each(univrsity,function(){
                outputs+="<option class='valued' value="+(this).university_id+">"+(this).university_name+"</option>";
                //outputs+="<option class= value='+(this).university_id+'>"+(this).university_name+"</option>";
               });
               $(".myselecni").html(outputs);
               $(".showme").html(outputs);

                var category=res.BookCategory;
               var outputCategory="";
                outputCategory+="<option value='' >--select Category--</option>";
                $.each(category,function(){
                	 outputCategory+="<option class='valued' value="+(this).b_cat_id+">"+(this).category_name+"</option>";
                });
                  $(".mycat").html(outputCategory);
                  //////////////////selection for qualification type
                var qual=res.Qualification;
               var outputQualic="";
                outputQualic+="<option value='' >--select Qualification--</option>";
                $.each(qual,function(){
                	 outputQualic+="<option class='valued' value="+(this).qualification_id+">"+(this).qualification_type+"</option>";
                });
                  $(".myqual").html(outputQualic);
                   
			}//end of success
		});// end of ajax

              
		
	});//end of ready gfunction

	function uploading(){
		
		//here i am searching for selected option
    var option = $('#universe').find('option:selected');
    var university_id = option.val();//to get content of "value" attrib
    //var text = $option.text();//to get <option>Text</option> content
      console.log(university_id);


    //here i am searching for selected option
    var option = $('#cates').find('option:selected');
    var b_cat_id = option.val();//to get content of "value" attrib
    //var text = $option.text();//to get <option>Text</option> content
    console.log(b_cat_id);

    //here i am searching for selected option
    var option = $('#qualic').find('option:selected');
    var qualification_id = option.val();//to get content of "value" attrib
    //var text = $option.text();//to get <option>Text</option> content
    console.log(qualification_id);

    var formData = new FormData();
	var fileUpload = $("#file").get(0);//this get the attribute element
	var files = fileUpload.files[0];// this array gets the file name /size and many more 
	
	  console.log(files);
	  

     formData.append('first_name',$('#first_name').val());
     formData.append('user_id',$('#user_id').val());
     formData.append('university_id',university_id);
     formData.append('b_cat_id',b_cat_id);
     formData.append('qualification_id',qualification_id);
     formData.append('iesb',$("#iesb").val());
     formData.append('tittle',$("#tittle").val());
     formData.append('author',$("#author").val());
     formData.append('publisher',$('#publisher').val());//radio
     formData.append('years',$("#years").val());//radio
     formData.append('file',files);   
     formData.append('action','uploading'); //action calling Insert function

    $.ajax({
    	 url:"back_end_books.php",
    	 method:"POST",
    	 contentType:false,
    	 cache:false,
    	 processData:false,
         data:formData,
    	 success:function(){
         $(".ups").show();
         //here we reset form by assigning to array of zero
         $("#contactFrm")[0].reset();
    	 }
    });
	}
</script>           
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->

