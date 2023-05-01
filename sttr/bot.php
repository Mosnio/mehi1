<?php
?><?php
system('clear');
error_reporting(0);
function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
	    return array($header, $body);
        }
    }


function get($url){
  return curl($url,'',head())[1];
}

function post($url,$data){
  return curl($url,$data,head())[1];
}

function head(){
  $h[]="Host: starbits.site";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36";
  return $h;
}

if(!file_exists("data.json")){ 
while("true"){
$api["Email"]=readline("\033[1;97mInput Email Faucetpay : \033[1;92m"); 
if($api["Email"]!=""){ 
break;
}
}
save("data.json",$api);
}

$email=json_decode(file_get_contents("data.json"),true)["Email"];

function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

function timer($t){
     $timr=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
//  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo p." Please Wait ".k.date('i:s',$res)." ";
      sleep(1);
      endwhile;
}


const 
b = "\033[1;34m",
c = "\033[1;36m",
d = "\033[0m",
h = "\033[1;32m",
k = "\033[1;33m",
m = "\033[1;31m",
ln = "\n",
p = "\033[1;37m",
u = "\033[1;35m",
red2 = "\033[1;31m",
kuning2 = "\e[1;33m",
lblue2="\033[1;36m",
green2="\033[1;32m",
ry="\033[01;38;5;214m",
y3="\033[01;38;5;228m",
purple2="\033[1;35m",
yellow2="\033[1;33m";
$l = str_repeat("~",60);



function slow($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(5000);
  }
}

$l = str_repeat("~",60);
function ban(){;}






system("clear");ban();

$url="https://starbits.site/";$awal = get($url);$csrf = explode('">',explode('<input type="hidden" name="csrf_token_name" id="token" value="',$awal)[1])[0];$url="https://starbits.site/auth/login";$data = "wallet=".$email."&csrf_token_name=".$csrf;$login = post($url,$data);
trx:
$url="https://starbits.site/faucet/currency/trx";$ha = get($url);$csrf = explode('">',explode('<input type="hidden" name="csrf_token_name" id="token" value="',$ha)[1])[0];$auto = explode('">',explode('<input type="hidden" name="auto_faucet_token" value="',$ha)[1])[0];$token = explode('">',explode('<input type="hidden" name="token" value="',$ha)[1])[0];$waktu = explode(',',explode('let timer = ',$ha)[1])[0];$left = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$ha)[1])[0];$url = "https://starbits.site/faucet/verify/trx";timer($waktu);$data1 ="auto_faucet_token=".$auto."&csrf_token_name=".$csrf."&token=".$token;$kedua = post($url,$data1);$eri = explode("',",explode("html: '",$kedua)[1])[0];print ry."[".h."√".ry."] $eri\n";
fey:
$url="https://starbits.site/faucet/currency/fey";$ha = get($url);$csrf = explode('">',explode('<input type="hidden" name="csrf_token_name" id="token" value="',$ha)[1])[0];$auto = explode('">',explode('<input type="hidden" name="auto_faucet_token" value="',$ha)[1])[0];$token = explode('">',explode('<input type="hidden" name="token" value="',$ha)[1])[0];$waktu = explode(',',explode('let timer = ',$ha)[1])[0];$left = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$ha)[1])[0];$url = "https://starbits.site/faucet/verify/fey";timer($waktu);$data1 ="auto_faucet_token=".$auto."&csrf_token_name=".$csrf."&token=".$token;$kedua = post($url,$data1);$eri = explode("',",explode("html: '",$kedua)[1])[0];print ry."[".h."√".ry."] $eri\n";
dgb:
$url="https://starbits.site/faucet/currency/dgb";$ha = get($url);$csrf = explode('">',explode('<input type="hidden" name="csrf_token_name" id="token" value="',$ha)[1])[0];$auto = explode('">',explode('<input type="hidden" name="auto_faucet_token" value="',$ha)[1])[0];$token = explode('">',explode('<input type="hidden" name="token" value="',$ha)[1])[0];$waktu = explode(',',explode('let timer = ',$ha)[1])[0];$left = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$ha)[1])[0];$url = "https://starbits.site/faucet/verify/dgb";timer($waktu);$data1 ="auto_faucet_token=".$auto."&csrf_token_name=".$csrf."&token=".$token;$kedua = post($url,$data1);$eri = explode("',",explode("html: '",$kedua)[1])[0];print ry."[".h."√".ry."] $eri\n";

while(true){
	goto trx;
	goto dgb;
	goto fey;
	}
