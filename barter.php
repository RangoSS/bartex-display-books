<?php
 include "hedds.php";

?>
<style>
  img{
    
    height: auto;
    width: 20%;
  }
</style>
<link rel="stylesheet" type="text/css" href="css/gallary.css">
<div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <!-- <h1 class="gallery-title">Upload Books:</h1>-->
           <span id="unregistered" class="btn-block text-center" style="background-color: red;display: none;"> To upload books you must be a registered user:log in or sign up !</span>
            <button type="button" class="btn btn-success btn-block mb-2 mt-2" onclick="goToBookUpload();">Upload your books here </button>
             <div align="center" style="border-style:solid ">
            <button class="btn btn-default filter-button all" onclick="$('.accBooks').hide();$('.target').show()">All</button>
            <button class="btn btn-default filter-button accs" onclick="$('.accBooks').show();$('.target').hide()">Acounting Science</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Agriculture & Environmental Scrience</button>
            <button class="btn btn-default filter-button" data-filter="spray">Education</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Law</button>
            <button class="btn btn-default filter-button" data-filter="spray">Science & Engeneering</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Graduate Of Leadership</button>
           
            <!------------------drop down------------------------------------>
             <!-- Example single danger button -->
             
            <!---------------------------------------------------------------->
        </div>
        </div>
        <br>
        <p></p>

        <div class="target" style="border-style: solid">
           
        </div>
        <div class="accBooks" style="display: none;"></div>

           


         <script type="text/javascript">
          $(document).ready(function(){
        //you will get this link on dropDownList.php
        $.ajax({
        url:'http://localhost/BAXTERBATER2/dropDownList.php?action=mybooksArray',
        method:'GET',
        data:{action:'mybooksArray'},
          async: true,

        success: function (response) {
           
          var showAll=JSON.parse(response);
           //here we are showing all images
            var allBooks=showAll.All;
              
            //////////////////////////////////////////
             var outputs="";
               $.each(allBooks,function(){
                   
                 // outputs+=(this).tittle;
                  outputs+="<p><a href="+(this).book_image+"></a> alt="+(this).tittle+" </p><br>";
                 // outputs+="<p>="+(this).tittle+"</p>";
                 // outputs+="<input class='btn btn-success' type='submit' value='view more'/>";
               
               });
                
             // console.log("kissss",$(this).children('img').attr("alt"));
                console.log(outputs);
                
               
            //this is the way of displaying url image array
             $.each($(outputs).find('a'),function(index,element){
                var imgSrc =$(this).attr('href');//get url from
                $(this).parent().remove();// remove p tag from 
                $(this).remove();//remove the current a tag 
               $(".target").append('<img  src="'+imgSrc + '"/>'); //then append to main tag

             });

////////////////////////////////
 
           
             ///////////////////////////////////////////////////
             //here is for accounting books
             var accoBooks=showAll.Acoounts; 
               console.log("for my accounting",accoBooks);
                var outputs="";
               $.each(accoBooks,function(){
                   
                  outputs+="<p>"+(this).tittle+"</p>";
                  outputs+="<p><a href="+(this).book_image+"></a></p>";
               });
               // console.log(outputs);
                
               
            //this is the way of displaying url image array
             $.each($(outputs).find('a'),function(index,element){
                var imgSrc =$(this).attr('href');//get url from 
                $(this).parent().remove();// remove p tag from 
                $(this).remove();//remove the current a tag 
                $(".accBooks").append('<img  src="'+imgSrc + '"/>'); //then append to main tag
             });
            ////////////acccounting books ends here
            
}//closing response
}); //closing ajax
    });//closing jquery

</script>

 <script>
  function goToBookUpload(){
  // <!--A user will not upload books without signing in or registered-->
  
<?php if(isset($_SESSION['first_name']) && $_SESSION['first_name'] != "")
         { ?>
         
        
            window.location.href="bookUpload.php";
          
 <?php } else{ ?>
  
  
    $("#unregistered").show();


<?php } ?>
         
}
</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->



<script type="text/javascript" src="js/gallary.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->

</body>