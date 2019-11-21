<?php

include "hedds.php";

?>
<div class="container" style="background-color: blue;">
	<br>
<div class="mb-2" style="background-color: blue;">
	<span class="btn btn-danger unregistered" style="display:none">To view your profile or to edit a profile you must log in first</span>
	
	<a class="btn btn-primary" href="">My Trades</a>
	<button class="btn btn-primary" href="profile.php" onclick="goToProfile();">My Profile</button>
	<a class="btn btn-primary float-right " href="messages.php">My Message</a>
</div>
<div class="row">
	<div class="col-sm-12 ">
		<img  src="images/ser2.jpg" class="img-responsive">
	</div>
</div>
</div>

<script>
  function goToProfile(){
  // <!--A user will not upload books without signing in or registered-->
  
<?php if(isset($_SESSION['first_name']) && $_SESSION['first_name'] != "")
         { ?>
         
        
            window.location.href="profile.php";
          
 <?php } else{ ?>
  
  
    $(".unregistered").show();


<?php } ?>
         
}
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->


