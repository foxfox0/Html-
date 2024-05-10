<center>
<?php
session_start();
if(!isset($_SESSION["hs_password_true"])){
header('location: index.php');
}
$pass = $_SESSION["hs_password_true"];
if(isset($_POST['tele'])){
echo "<script>window.open('https://t.me/yassenkonfgat','_self');</script>";
}
if(isset($_POST['otp'])){
$email;$comment;$captcha;
        if(isset($_POST['submit'])){
          $email=$_POST['submit'];
        }
        if(isset($_POST['submit'])){
          $comment=$_POST['submit'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<p style="text-align:center;color:red;background:#000000;border-radius:15px;width:190px;margin:0 auto;border:1px solid #FFFFFF;padding:7px"> checker recaptcha </p>';
          exit;
        } 
        $secretKey = "6Lf-SH8fAAAAANQXU7EDx19IWIFsnouYmjd8VMKX";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server

}
if(isset($_POST['otp'])){
$number=$_POST['num'];
$password=$_POST['pass'];
$url6="https://services.orange.eg/GetToken.svc/GenerateToken";
$data6='{"appVersion":"2.9.8","channel":{"ChannelName":"MobinilAndMe","Password":"ig3yh*mk5l42@oj7QAR8yF"},"dialNumber":"'.$number.'","isAndroid":true,"password":"'.$password.'"}';
$headers6[]='Accept: application/json';
$headers6[]='Content-type: application/json';
$headers6[]='User-Agent: okhttp/3.10.0';
$headers6[]='Host: services.orange.eg';
$headers6[]='Content-Length: '.strlen($data6).'';
$ch777 = curl_init();
curl_setopt($ch777, CURLOPT_URL,$url6);
curl_setopt($ch777, CURLOPT_POST, 1);
curl_setopt($ch777, CURLOPT_POSTFIELDS,$data6);
curl_setopt($ch777, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch777, CURLOPT_HTTPHEADER,$headers6);
curl_setopt($ch777, CURLOPT_SSL_VERIFYPEER, false);
$output666= curl_exec ($ch777);
$jsonw=json_decode($output666,true);
curl_close($ch777);
$ctv=$jsonw["GenerateTokenResult"]["Token"];
$htv=strtoupper(hash('sha256',$ctv.',{.c][o^uecnlkijh*.iomv:QzCFRcd;drof/zx}w;ls.e85T^#ASwa?=(lk'));

$url5="https://services.orange.eg/SignIn.svc/SignInUser";
$data5='{"appVersion":"2.9.8","channel":{"ChannelName":"MobinilAndMe","Password":"ig3yh*mk5l42@oj7QAR8yF"},"dialNumber":"'.$number.'","isAndroid":true,"password":"'.$password.'"}';
$headers5[]='Accept: application/json';
$headers5[]='Content-type: application/json';
$headers5[]='User-Agent: okhttp/3.10.0';
$headers5[]='Host: services.orange.eg';
$headers5[]='Content-Length: '.strlen($data5).'';
$ch77 = curl_init();
curl_setopt($ch77, CURLOPT_URL,$url5);
curl_setopt($ch77, CURLOPT_POST, 1);
curl_setopt($ch77, CURLOPT_POSTFIELDS,$data5);
curl_setopt($ch77, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch77, CURLOPT_HTTPHEADER,$headers5);
curl_setopt($ch77, CURLOPT_SSL_VERIFYPEER, false);
$output66= curl_exec ($ch77);
$json=json_decode($output66,true);
$a=$GOLBALS=$json['SignInUserResult']['UserData']['UserID'];

$url="https://services.orange.eg/CoinServices.svc/MigrateServiceClass";
$data='{"channel":{"ChannelName":"MobinilAndMe","Password":"ig3yh*mk5l42@oj7QAR8yF"},"currentServiceClassID":"84","dial":"'.$number.'","isCoin":true,"migratedToTariffPlanID":"82","migratedToTariffPlanName":"","userID":"'.$a.'","isEasyLogin":false,"password":"'.$password.'"}';
$headers[]='_ctv:'.$ctv;
$headers[]='_htv:'.$htv;
$headers[]='Content-Type:application/json;charset=UTF-8';
$headers[]='Content-Length: '.strlen($data).'';
$headers[]='Host:services.orange.eg';
$headers[]='Connection:Keep-Alive';
$headers[]='User-Agent:okhttp/3.12.0';
$ch7 = curl_init();
curl_setopt($ch7, CURLOPT_URL,$url);
curl_setopt($ch7, CURLOPT_POST, 1);
curl_setopt($ch7, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch7, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch7, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch7, CURLOPT_SSL_VERIFYPEER, false);
$output= curl_exec ($ch7);
//echo$output;
$json2=json_decode($output,true);
$a2=$json2['MigrateServiceClassResult']['ErrorDescription'];
if($a2=='Success'){
echo"<br>";
echo'<p style="text-align:center;color:black;background-color:green;width:170px;height:30;padding:8px 8px 2px 2px;border:black 3px solid;">انتظر حظك</p>';
}else{
echo'<p style="text-align:center;color:black;background-color:red;width:170px;height:50;padding:8px 8px 2px 2px;border:black 3px solid;">الرقم خطا او الباسورد او اذهب لاسكربت الو الاسبوعي </p>';
}
}
?>
</center>
<!DOCTYPE html>
<link rel="icon" type="image" href="h.jpg" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@600&display=swap" rel="stylesheet">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dragon Net</title>
</head>
<body>
    <center>
    <br><br>
    <div class='drag'>
        <br>
    <h3>300 Units</h3>
    <form method="POST">
    <input type="text" name="num" placeholder="Enter a number " >
        <br><br>
        <input type="text" name="pass" placeholder="Enter a password " >
        <br>
        <div class="g-recaptcha" data-sitekey="6Lf-SH8fAAAAANWWKyCLRWytoLhG8JYsxCArVSES"></div>
        <br><br>
        <button name="otp" >Get Offer</button>
        <br><br>
        <button name="tele" >Join to Telegram</button>
        </div>
        <br>
        <div>
    </center>
</body>
</html>
<style>
*{
    font-family:  Smooch Sans , sans-serif;
}
    body{
        background-color: #34495e;
    }
    h3{
        color:white;
        font-size: 30px;
        width: 300px;
        border: 5px solid #34495e;
        border-right: 0px;
        border-left:0px;
        border-top:0px;
        border-radius: 0px ;
        position: relative;
        top:-48px;
    }
 
    input{
        color:white;
        background-color:#191919 ;
        width: 250px;
        height: 30px;
        border: 2px solid #34495e;
        border-top:none;
        border-right:none;
        border-left:none;
        position: relative;
        top:-30px;
    }
    .drag{
        background-color: #191919;
        border-radius:8px;
        height: 450px;
        width: 300px;
    }
    button{
        width: 200px;
        height: 50px;
        background-color:#2ecc71;
        border: 2px solid black;
        border-radius: 10px;
        position: relative;
        top:-20px;

    }
    @media screen and (max-width:600px){

    }
    button:hover{
        background-color: none;
    }
    a{
        text-decoration: none;
        color:black;
    }
    .uuu{
        color:#00C897;
    }
</style>
<div class='uuu'>
<br>
<center>
<?php
echo"<br>";
echo date("d / m / Y");
?>
<div>
</center>
