<?php

 include "hedds.php";
?>

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/profile.css">
<div class="container emp-profile">
            <form method="post">
            	 <input type="text" required="" placeholder="Please input your Name" value="<?php echo  $user_id; ?>" id="user_id" name="user_id" class="form-control btn-block" readonly>
                <div class="row">
                    <div class="col-md-4">
                    	   <button class="btn btn-sm btn-primary" type="button" name="" value="Update Image" onclick="udateImage();" style="margin-left: 30%">Update Image</button>
                    	<div class="profile-img">
                    		
                           <!-- <img class="pic" src="" alt=""/>-->
                           <span class="pic"></span>
                            <div class="file btn btn-success">
                                Change Image
                                <input type="file" id="file" name="file"/>
                            </div>
                           
                        </div>

                       <!-- <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>-->
                        <!------------------------------------------------------------------------->
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 class="naming">
                                        Kshiti Ghelani
                                    </h5>
                                    <h6 class="user_type">
                                    	
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label >Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="naming">Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="last">kshitighe</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="email">mak@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="cellphone">123 456 7890</p>
                                            </div>
                                        </div>
     
        			 

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>locations</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="locations">dzanani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Postal Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="postal">dzanani</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Home Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="postalh">home addr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="gender">gender</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Cellphone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="cellphone">Cellphone</p>
                                            </div>
                                        </div>
                            </div>
                            <!----------------------------------------------------------------------------->
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

        <script>
        	$(document).ready(function(){
                  
                  var user_id=$('#user_id').val(); //this is the variable from user session
         
                  $.ajax({
                      
                      url:'back_end_profile.php',
        		      method:'GET',
        		      data:{action:'displayProfile',
        		            user_id:user_id},
        		       async: true,

        	success:function(response){
        		  var mar=JSON.parse(response);
        		
                     
        			 console.log(mar);
        			 $(".naming").html(mar.first_name);
        			  $(".last").html(mar.last_name);
        			  $(".email").html(mar.user_email);
        			  $(".locations").html(mar.locations);
        			  $(".postal").html(mar.postal_address);
        			  $(".postalh").html(mar.home_address);
        			 $(".gender").html(mar.gender);
        			  $(".user_type").html(mar.user_type);
        			   $(".cellphone").html(mar.cellphone);
                       $(".pic").html("<img class='user_picture' src='"+mar.user_picture+"' alt=''/>");//image

        		}

                  
                  })//end of ajax
              });//end of onload
        		/////////////////////////////////////onlkick function////
               function udateImage(){
        		var formData = new FormData();
	              var fileUpload = $("#file").get(0);//this get the attribute element
	              var files = fileUpload.files[0];// this array gets the file name /size and many more
                   // console.log("awee",files);
                   $.ajax({
                   	 url:"back_end_profile.php",
                   	 method:"POST",
                   	 contentType:false,
    	             cache:false,
    	             processData:false,
                   	 data:{action:'changeProfile',
                   	       file:files,
                   	       user_id:user_id},
                   	 async:false,
                   	 success:function(){
                        console.log("profile has been updated");
                   	 }

                   }); 
                   
               }
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->