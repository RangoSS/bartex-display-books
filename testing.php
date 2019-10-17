<?php
 include "hedds.php";

?>

<link rel="stylesheet" type="text/css" href="css/gallary.css">
<div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <!-- <h1 class="gallery-title">Upload Books:</h1>-->
            <a href="bookUpload.php" class="btn btn-success btn-block mb-2 mt-2">Upload your books here</a>
             <div align="center" style="border-style:solid ">
            <button class="btn btn-default filter-button all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Acounting Science</button>
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

        <div class="target">
            <p><a href="http://localhost/BAXTERBATER2/upload/dalai.PNG"</p>
        </div>

          
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
            var accounts=showAll.Acoounts;
              
            //////////////////////////////////////////
             var outputs="";

             $.each($('.target').find('a'),function(index,element){
                var imgSrc =$(this).attr('href');//get url from 
                $(this).parent().remove();// remove p tag from 
                $(this).remove();//remove the current a tag 
                $('.target').append('<img src="'+imgSrc + '"/>');
             });
            // console.log("show all accountsssss",accounts[0].book_image);
            // console.log("show all accounts",accounts[0].book_image);
               /* $.each(accounts,function(){

                  outputs+=(this).book_image;
               // outputs+="<option class='valued' value="+(this).university_id+">"+(this).university_name+"</option>";
                //outputs+="<option class= value='+(this).university_id+'>"+(this).university_name+"</option>";
               });
               $(".images").html(outputs);
              // $(".showme").html(outputs);
                console.log(showAll);
               console.log("all books: "+showAll.Allboks);
                */
            //}
             
           // console.log(response);

   
}//closing response
}); //closing ajax
    });//closing jquery
</script>
</div>

            
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
        </div>
    </div>
</section>

<div class="askMe"></div>

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
            
             //var output="";
    
                console.log(showAll);
               console.log("all books: "+showAll.Allboks);

            //}
             
           // console.log(response);

   
}//closing response
}); //closing ajax
    });//closing jquery
</script>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->



<script type="text/javascript" src="js/gallary.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->

</body>