<?php
require_once '_php/novo.php';


?>


<html>




<script
    type="text/javascript"
    src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.js"></script>

<script
    type='text/javascript'
    src='https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/jquery-ui.min.js' ></script>


<form method="post" action="_php/novo.php" id="n">

    <span>
        <label>Média: </label>
        <input type="radio" name="html"  value="20"/>
    </span>

    <span>

        <input type="submit" value="Submit" />
    </span>

</form>

 <span id='result'></span>



<form method="post" action="_php/novo.php" id="p">

    <span>
        <label>grande: </label>
        <input type="radio" name="id" value ="10" />
        <label>pequena: </label>
        <input type="radio" name="id" value ="11" />
        <label>média: </label>
        <input type="radio" name="id" value ="12" />
    </span>



    <span>

        <input type="submit" value="Submit" />
    </span>

</form>
<span id="novoresult"> </span>






</html>


 <script>
 $(document).ready(function(e) {

    $("#n").submit(function(e) {

        e.preventDefault();

        var form_data = $(this).serialize();
        var form_url = $(this).attr("action");
        var form_method = $(this).attr("method").toUpperCase();



        $.ajax({
            url: form_url,
            type: form_method,
            data: form_data,

            success: function(returnhtml){
            var retorno = returnhtml;
            $("#result").html(retorno);

            }
        });

    });
  });

  </script>

  <script>
  $(document).ready(function(e) {

     $("#p").submit(function(e) {

         e.preventDefault();

         var form_data = $(this).serialize();
         var form_url = $(this).attr("action");
         var form_method = $(this).attr("method").toUpperCase();



         $.ajax({
             url: form_url,
             type: form_method,
             data: form_data,

             success: function(returnhtml){
                 $("#novoresult").html(returnhtml);


             }
         });

     });
   });

   </script>