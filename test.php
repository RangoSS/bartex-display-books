<?php
 include "hedds.php";

?>

<!----------------------------------------------------------->
<div class="container" style="background-color: #4863A0">
    <div id="login2" style="color: brown;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height: auto;">
                        <form id="login-form" class="form mb-2" action="" method="post" style="height: auto;">
                            <input type="submit"name="submit" class="btn btn-info btn-md" value="Back" style="padding-top: 5%;" />
                            <h3 class="text-center text-info">Registration</h3>
                            <!--serial number div-->
                             <div class="form-group">
                               
                            </div>
                            <div class="form-group">
                                <label for="first_name" class="text-info">First Name:<span style="color: red;display: none">fill name*</span></label><br>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="last_name" class="text-info">Last Name:<span style="color: red;display: none">fill last name*</span></label><br>
                                <input type="text" name="last_name" id="last_name" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio" class="radio-inline" name="gender" id="gender" value="male" class="form-control">Male
                                <input type="radio" class="radio-inline" name="gender" id="gender" value="female" class="form-control">Female
                            </div>
                            
   
                            <div class="form-group">
                                <label for="username" class="text-info">Email:<span style="color: red;display: none">fill email*</span></label><br>
                                <input type="email" name="user_email" id="user_email" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="p_password" class="text-info">Passwords:<span style="color: red;display: none">fill Password*</span></label><br>
                                <input type="password" name="p_password" id="p_password" class="form-control stringed">
                            </div>
                    
                            <div class="form-group">
                                <label for="home_address" class="text-info">Home Address:<span style="color: red;display: none">fill address*</span></label><br>
                                <input type="text" name="home_address" id="home_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="postal_address" class="text-info"> Postal Address:<span style="color: red;display: none">fill address*</span></label><br>
                                <input type="text" name="postal_address" id="postal_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact" class="text-info">Contact:<span style="color: red;display: none">fill Contact*</span></label><br>
                                <input type="text" name="cellphone" id="cellphone" class="form-control numbers">
                            </div>
                             <div class="form-group">
                                <label for="contact" class="text-info">locations:<span style="color: red;display: none">fill Location*</span></label><br>
                                <input type="text" name="locations" id="locations" class="form-control numbers">
                            </div> 
                            
                            <div class="form-group">
                                <label for="user_type" class="text-info">Occupation:</label><br>
                                <input type="radio" class="radio-inline" name="user_type" id="user_type" value="student" class="form-control" >Student
                                <input type="radio" class="radio-inline" name="user_type" id="user_type" value="employee" class="form-control">Employee
                            </div>
                            <div class="file-field">
                           <div class="btn btn-outline-info waves-effect btn-sm float-left">
                           <span>Upload profile Image</span>
                           <input id="user_picture" name="user_picture" type="file">
                           </div><br><br>
                            <div class="form-group">
                                
                                <input type="button" id="regis" name="submit" class="btn btn-info btn-md" value="Save" onclick="validateAfter();" />
                                
                                
                                
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ends of forms-->
    <div id="displayForm" style="margin-right: 10%;border-style: solid;border-left-width: red;width: 40%;margin-top: -36%;float: right;color: white;background-color: grey;padding:5%;display: none;">
        <h1>Check if u entered correct Values</h1>
        <div class="displayme"></div>
    </div>
    </div>

<!----------------------------------------------------------->
<script>
function validateAfter(){
  
	var formData = new FormData();
	var fileUpload = $("#user_picture").get(0);
	var files = fileUpload.files[0];
	
    
     formData.append('first_name',$("#first_name").val());
    /* formData.append('last_name',$("#last_name").val());
     formData.append('user_email',$('#user_email').val());
     formData.append('p_password',$('#p_password').val());
     formData.append('home_address',$("#home_address").val());
     formData.append('postal_address',$("#postal_address").val());
     formData.append('cellphone',$("#cellphone").val());
     formData.append('locations',$("#locations").val());
     formData.append('user_type',$('#user_type').val());//radio
     formData.append('gender',$("#gender").val());//radio 
     formData.append('files',files);   
     formData.append('action','insertings'); */
       
     var named=$("first_name"); 
     var meme=formData;
     console.log(meme);

    //console.log(user_picture);
    console.log(named);
    //console.log(first_name);
    //console.log(formData);




}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
