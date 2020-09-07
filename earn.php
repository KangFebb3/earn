<?php
 while (true){
   $daftar = register($nomor);
   $pler = json_decode($daftar,true);
   $token = $pler["data"]["token"];
   $username = $pler["data"]["username"];
   $nomor = "895485".rand(5,100000);
   echo "Token : $token\n";
   echo "Username : $username\n";
   echo "Password : dream5618\n";
   save("akun.txt","$username|dream5618\n");
   $alamat = alamat($token,$username,$nomor);
   $pepek = json_decode($alamat,true);
   $pesan = $pepek["msg"];
   echo "Alamat $pesan\n";
for ($x = 0; $x <= 19; $x++) {
   $gass = redem($token);
   
   $json = json_decode($gass , true);
   $order = $json["data"]["orderid"];
   $kuy = confirm($order , $token);
   $json1 = json_decode($kuy , true);
   $result = $json1["msg"];
   $ok = cek($token);
   $json2 = json_decode($ok,true);
   $kontol = $json2["data"]["commission_today"];
   
 
   }
 
echo "Saldo $kontol\n";
 }


function ulang($token,$nomor,$username){
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , 'https://api.x898xe.fun/api/account/bind_bank_account');
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
         curl_setopt($ch , CURLOPT_POST , 1);
         curl_setopt($ch , CURLOPT_POSTFIELDS , '{"bank_account":"'.$nomor.'","cardholder_name":"KRISNA DWI MAHENDRA","bank_name":"BANK PERMATA","ifsc_code":"","email":"'.$username.'@gmail.com","tel":"'.$nomor.'","bank_id":6}');
        curl_setopt($ch , CURLOPT_ENCODING , 'gzip');
        $headers = array();
      $headers[] = "language:ina-BA";
    $headers[] = "token:$token";
    $headers[] = "user-agent:Redmi Note 8(Android/9) (com.spsd.st/1.0.4) Weex/0.26.0 1080x2130";
 
    $headers[] = "Content-Type:application/json; charset=utf-8";
    $headers[] = "Host:api.x898xe.fun";
   
    $headers[] = "Connection:Keep-Alive";

        curl_setopt($ch , CURLOPT_HTTPHEADER ,$headers);

        $result = curl_exec($ch);
        return $result;
    }
function wd($token){
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , 'https://api.x898xe.fun/api/account/withdrawal');
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
         curl_setopt($ch , CURLOPT_POST , 1);
         curl_setopt($ch , CURLOPT_POSTFIELDS , '{"amount":"10000"}');
        curl_setopt($ch , CURLOPT_ENCODING , 'gzip');
        $headers = array();
      $headers[] = "language:ina-BA";
    $headers[] = "token:$token";
    $headers[] = "user-agent:Redmi Note 8(Android/9) (com.spsd.st/1.0.4) Weex/0.26.0 1080x2130";
    $headers[] = "Content-Type:application/json; charset=utf-8";
    $headers[] = "Host:api.x898xe.fun";
   
    $headers[] = "Connection:Keep-Alive";

        curl_setopt($ch , CURLOPT_HTTPHEADER ,$headers);

        $result = curl_exec($ch);
        return $result;
    }
    

function save($filename, $content)
{
    $save = fopen($filename, "a");
    fputs($save, "$content\r\n");
    fclose($save);
}
function bind($token,$nomor,$username){
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , 'https://api.x898xe.fun/api/account/bind_bank_account');
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
         curl_setopt($ch , CURLOPT_POST , 1);
         curl_setopt($ch , CURLOPT_POSTFIELDS , '{"bank_account":"898089505478778","cardholder_name":"KRISNA DWI MAHENDRA","bank_name":"BANK PERMATA","ifsc_code":"","email":"'.$username.'@gmail.com","tel":"'.$nomor.'","bank_id":6}');
        curl_setopt($ch , CURLOPT_ENCODING , 'gzip');
        $headers = array();
      $headers[] = "language:ina-BA";
    $headers[] = "token:$token";
    $headers[] = "user-agent:Redmi Note 8(Android/9) (com.spsd.st/1.0.4) Weex/0.26.0 1080x2130";
 
    $headers[] = "Content-Type:application/json; charset=utf-8";
    $headers[] = "Host:api.x898xe.fun";
   
    $headers[] = "Connection:Keep-Alive";

        curl_setopt($ch , CURLOPT_HTTPHEADER ,$headers);

        $result = curl_exec($ch);
        return $result;
    }

function alamat($token,$username,$nomor){
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , 'https://api.x898xe.fun/api/user/addAddress');
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
      curl_setopt($ch , CURLOPT_POST , 1);
         curl_setopt($ch , CURLOPT_POSTFIELDS , '{"isdefault":1,"realname":"'.$username.'","telephone":"'.$nomor.'","region":"jl sparman","detail":"jl s parman","id":""}');
        curl_setopt($ch , CURLOPT_ENCODING , 'gzip');
        $headers = array();
      $headers[] = "language:ina-BA";
    $headers[] = "token:$token";
    $headers[] = "user-agent:Redmi Note 8(Android/9) (com.spsd.st/1.0.4) Weex/0.26.0 1080x2130";
    $headers[] = "Content-Type:application/json; charset=utf-8";
    $headers[] = "Host:api.x898xe.fun";
  
    $headers[] = "Connection:Keep-Alive";

        curl_setopt($ch , CURLOPT_HTTPHEADER ,$headers);

        $result = curl_exec($ch);
        return $result;
    }
    function redem($token){
    $ch = curl_init();
    curl_setopt($ch , CURLOPT_URL , 'https://api.x898xe.fun/api/order/mkorder');
    curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
    curl_setopt($ch , CURLOPT_POST , 1);

    curl_setopt($ch , CURLOPT_ENCODING , 'gzip');   
    $headers = array();
    $headers[] = "language:ina-BA";
    $headers[] = "token:$token";
    $headers[] = "user-agent:Redmi Note 8(Android/9) (com.spsd.st/1.0.4) Weex/0.26.0 1080x2130";
    $headers[] = "Content-Length:0";
    $headers[] = "Content-Type:application/json; charset=utf-8";
    $headers[] = "Host:api.x898xe.fun";
 
    $headers[] = "Connection:Keep-Alive";
    
    
    curl_setopt($ch , CURLOPT_HTTPHEADER ,$headers);

    $result = curl_exec($ch);
    return $result;
    }


    function confirm($order , $token){
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , "https://api.x898xe.fun/api/order/confirm");
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
         curl_setopt($ch , CURLOPT_POST , 1);
         curl_setopt($ch , CURLOPT_POSTFIELDS , '{"orderid":"'.$order.'","status":1}');
        curl_setopt($ch , CURLOPT_ENCODING , 'gzip');
        $headers = array();
      $headers[] = "language:ina-BA";
    $headers[] = "token:$token";
    $headers[] = "user-agent:Redmi Note 8(Android/9) (com.spsd.st/1.0.4) Weex/0.26.0 1080x2130";
    $headers[] = "Content-Length:32";
    $headers[] = "Content-Type:application/json; charset=utf-8";
    $headers[] = "Host:api.x898xe.fun";
   
    $headers[] = "Connection:Keep-Alive";

        curl_setopt($ch , CURLOPT_HTTPHEADER ,$headers);

        $result = curl_exec($ch);
        return $result;
    }

function cek($token){
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , "https://api.x898xe.fun/api/account/getUserInfo");
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
      
        curl_setopt($ch , CURLOPT_ENCODING , 'gzip');
        $headers = array();
      $headers[] = "language:ina-BA";
    $headers[] = "token:$token";
    $headers[] = "user-agent:Redmi Note 8(Android/9) (com.spsd.st/1.0.4) Weex/0.26.0 1080x2130";
    $headers[] = "Content-Type:application/json; charset=utf-8";
    $headers[] = "Host:api.x898xe.fun";
  
    $headers[] = "Connection:Keep-Alive";

        curl_setopt($ch , CURLOPT_HTTPHEADER ,$headers);

        $result = curl_exec($ch);
        return $result;
    }

function register($nomor){
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , 'https://api.x898xe.fun/api/login/register');
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
     curl_setopt($ch , CURLOPT_POST , 1);
         curl_setopt($ch , CURLOPT_POSTFIELDS , '{"username":"yaelah'.rand(5,100000).'","pwd":"dream5618","tel":"'.$nomor.'","code":"","agentid":"278266","devicetype":"android","version":100}'); 
        curl_setopt($ch , CURLOPT_ENCODING , 'gzip');
        $headers = array();
      $headers[] = "language:ina-BA";
    
    $headers[] = "user-agent:Redmi Note 8(Android/9) (com.spsd.st/1.0.4) Weex/0.26.0 1080x2130";
    $headers[] = "Content-Type:application/json; charset=utf-8";
    $headers[] = "Host:api.x898xe.fun";
  
    $headers[] = "Connection:Keep-Alive";

        curl_setopt($ch , CURLOPT_HTTPHEADER ,$headers);

        $result = curl_exec($ch);
        return $result;
    }
    function fetch_value($str,$find_start,$find_end) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
            return "";
        }
        $length = strlen($find_start);
        $end    = strpos(substr($str,$start +$length),$find_end);
        return trim(substr($str,$start +$length,$end));
    }
?>
