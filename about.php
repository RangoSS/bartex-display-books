<?php
 include "hedds.php";
?>


<div class="container">
	<div class="row">
		<div class="col-sm-7">
			<img src="upload/dalai.png">
			
			 
		
		</div>
	</div>
</div>

<script>
	
	var myArr=["joe","mogo","hmgm","ghjfgj"];

	 

	function findme(x){
      for(var i = 0; i < myArr.length; i++){
      	if(x === i){
      		return myArr[i];
      	}
      }
	} 
	 console.log(findme(3)); 
</script>