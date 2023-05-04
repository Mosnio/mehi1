?><?php

//color

pass:
system("clear");
function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 11; vivo 1939) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.66 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");


function ban(){


 }



input:
if(!file_exists("data.json")){
while("true"){
system("clear");


$r0=readline(" Cookie : ");
echo "\n";
$r1=readline(" Your User-Agent  : ");
echo "\n";
if($r0!==""){
break;
}
}
 $data=["Cookie"=>$r0,"Useragent"=>$r1];
  save("data.json",$data);

}

function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

function fast($str) 
{ 
    $rar = str_split($str); 
    foreach ($rar as $zz) { 
        echo $zz; 
        usleep(3000); 
    } 
}

function an($str){ 
    $arr = str_split($str); 
    foreach ($arr as $az){ 
    echo $az; 
    usleep(19999); 
    }
    }
    
    
if(!file_exists("Url-solvemedia")){
echo " put URL-Solvemedia  :  ";
$api["urlsolve"] = trim(fgets(STDIN));
file_put_contents('Url-solvemedia', json_encode($api, JSON_PRETTY_PRINT));
}

$urlsolve= json_decode(file_get_contents("Url-solvemedia"),true)["urlsolve"];

function Run($url, $head = 0, $post = 0){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	if($post){
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	if($head){
		curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	}
	curl_setopt($ch, CURLOPT_HEADER, true);
	$r = curl_exec($ch);
	$c = curl_getinfo($ch);
	if(!$c) return "Curl Error : ".curl_error($ch); else{
		$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		curl_close($ch);
		return array($hd,$bd)[1];
	}
}

function h($xml=0){
	if($xml){
		$h[] = "x-requested-with: XMLHttpRequest";
	}
	$cookie=json_decode(file_get_contents("data.json"),true)["Cookie"];
    $useragent=json_decode(file_get_contents("data.json"),true)["Useragent"];
	$h[] = "cookie: $cookie";
	$h[] = "user-agent: $useragent";
	return $h;
}



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

 //       curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
 //       curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
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
  $h[]="Host: claimbits.net";
  $h[]="upgrade-insecure-requests: 1";
  $h[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
  $h[]="X-Requested-With: XMLHttpRequest";
  $h[]="user-agent: ".json_decode(file_get_contents("data.json"),true)["Useragent"];
  $h[]="cookie: ".json_decode(file_get_contents("data.json"),true)["Cookie"];
  return $h;
}

function sol(){
  $h[]="Host: api-secure.solvemedia.com";
  $h[]="user-agent: ".json_decode(file_get_contents("data.json"),true)["Useragent"];
  $h[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
  $h[]="referer: https://claimbits.net/";
  return $h;
}


function slow($str,$t){
$arr = str_split($str);
foreach ($arr as $az){
echo $az;
usleep($t);
}
}

function l(){
 $len = 61;
 $var = '_';
  echo str_repeat($White.$var,$len)."\n";
}


function timer($t){
     $timr=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
             
}
      echo "\033[0;37m Please Wait \033[0;37m".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}

function vision($data){
Global $useragent;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$visit = array();
$visit[] = "User-Agent: ".json_decode(file_get_contents("data.json"),true)["Useragent"];
$visit[] = "content-type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $visit);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
return curl_exec($ch);
}
function base64($str){
return base64_encode($str);
}


    




a:
system("clear");



$url="https://claimbits.net/faucet.html";
$res=get($url);
$user=explode('<',explode('class="text-success">',$res)[1])[0];
$balance=explode('<',explode('class="text-primary"><b>',$res)[1])[0];
$bvalue=explode('<',explode('class="text-warning"><b>',$res)[1])[0];
$ptc=explode('<',explode('class="badge badge-info">',$res)[3])[0];

if($user!=""){

sleep(1);
ban();
echo slow(" Login As        :  $user \n",5000);


echo slow(" Account Balance :  $balance  $bvalue \n",5000);


echo slow(" Available Ptc   :  $ptc \n",5000);
l();

}else{
echo slow(" Cookie expired Please update \n",10000);
system("rm data.json");
goto input;
}

menu:
echo slow(" 1  Bypass Faucet \n",5000);
echo slow(" 2 bypass Ptc \n",5000);
l();
$spil=readline("  put Number :  ");l();
if($spil==1){
goto faucet;
}elseif($spil==2){
goto ptc;
}else{
echo slow(" Bad Number \033[0m \n",10000);
l();
goto menu;

}


faucet:
while("true"){
$url="https://claimbits.net/faucet.html";
$res=get($url);
$fire=explode('<',explode('class="fa fa-exclamation-triangle fa-fw"></i><br />',$res)[1])[0];
$token=explode("'",explode("var token = '",$res)[1])[0];
$tim=explode(' minutes</span>',explode('id="claimTime">',$res)[1])[0];
$cf3=explode('</title>',explode('<title>',$res)[1])[0];


if($cf3=="Just a moment..."){
echo slow(" Cloudflare Detected , Update Cookie  \n",10000);
l();
system("rm data.json");
if(!file_exists("data.json")){
while("true"){
$r0=readline(" Cookie   : ");
echo "\n";
$r1=readline(" User-Agent  : ");
l();
if($r0!==""){
break;
}
}
 $data=["Cookie"=>$r0,"Useragent"=>$r1];
  save("data.json",$data);

}
goto a;
}



if($fire=="Please complete captcha to unlock faucet!"){
fire:
echo slow(" Firewall Detected \r",10000);
sleep(1);
echo "\r                                                \r";
$r=Run('https://claimbits.net/faucet.html',head());
$token=explode("'",explode("var token = '",$r)[1])[0];
$cf3=explode('</title>',explode('<title>',$res)[1])[0];


if($cf3=="Just a moment..."){

echo slow(" Cloudflare Detected , Update Cookie  \n",10000);
l();
system("rm data.json");
if(!file_exists("data.json")){
while("true"){
$r0=readline(" Cookie   : ");
echo "\n";
$r1=readline(" User-Agent  : ");
l();
if($r0!==""){
break;
}
}
 $data=["Cookie"=>$r0,"Useragent"=>$r1];
  save("data.json",$data);

}
goto a;
}

$data="cID=0&rT=1&tM=light";
$res =Run('https://claimbits.net/system/libs/captcha/request.php',h(1),$data);
$cap=json_decode($res)[3];

$data="cID=0&pC=".$cap."&rT=2";
$res=Run('https://claimbits.net/system/libs/captcha/request.php',h(1),$data);

$data="a=proccessAntibot&token=".$token."&type=1&captcha-idhf=0&captcha-hf=".$cap;
$r=Run('https://claimbits.net/system/ajax.php',head(),$data);
$suc=explode('"',explode('class=\"fa fa-check-circle fa-fw\"><\/i> <b>SUCCESS<\/b> ',$r)[1])[0];
if($suc!=""){
echo slow(" $suc  \n",5000);
l();
goto faucet;
}else{
echo slow("  Invalid Captcha \r",10000);
sleep(1);
echo "\r                               \r";
goto fire;
}
}

if($tim==1){
$t=60;
timer($t);
goto faucet;
}


if($tim!=""){
$r=60;
$D=60;
$t=$r*$tim+$D;
timer($t);
goto faucet;
}



$ua=sol();
$url=$urlsolve;
$res=get($url,$ua);
$cha=explode('"',explode('"challenge":"',$res)[1])[0];

if($cha <= null){
echo slow(" Check Your Connections \r",10000);
sleep(1);
echo "\r                                    \r";
goto faucet;
}

echo " Bypass \r";
sleep(1);
echo " Bypass • \r";
sleep(1);
echo " Bypass • • \r";
sleep(1);
echo " \033[1;96mBypass • • •   \r";
sleep(1);
echo "\r                                                              \r";


$ua=sol();
$url="https://api-secure.solvemedia.com/papi/media?c=$cha;w=300;h=150;fg=000000;bg=f8f8f8";
$res=get($url,$ua);
$img="image.png";
$file=fopen($img,"w");
fwrite($file,$res);
fclose($file);
$gmbar=file_get_contents("image.png");
$base=base64($gmbar);
$convert = vision('{"requests":[{"image":{"content":"'.$base.'"},"features":[{"type":"TEXT_DETECTION"}]}]}');
$pro= explode('\n"',explode('"text": "Enter the following:\n', $convert)[1])[0];
if($pro <= null){
echo " \033[1;92mBypass                          \r";
sleep(1);
goto faucet;
}

$cap = preg_replace("/[^a-zA-Z]/", "", $pro);

$url="https://claimbits.net/system/ajax.php";
$data="a=getFaucet&token=$token&captcha=0&challenge=$cha&response=$cap";
$res=post($url,$data);
$suc=explode('<',explode('class=\"alert alert-success\" role=\"alert\"><i class=\"fa fa-check-circle fa-fw\"><\/i> Congratulations, your lucky ',$res)[1])[0];

if($suc!=""){
$url="https://claimbits.net/faucet.html";
$res=get($url);
$balance=explode('<',explode('class="text-primary"><b>',$res)[1])[0];
$bvalue=explode('<',explode('class="text-warning"><b>',$res)[1])[0];

echo slow(" ✓  $suc \n",5000);

echo slow(" + Balance > > $balance  / $bvalue \n",5000);

l();
}else{
echo slow("   Invalid Captcha \\r",10000);
sleep(1);
echo "\r                            \r";
goto faucet;
}
}














ptc:
while("true"){
$r=Run('https://claimbits.net/ptc.html',head());
$id=explode('"',explode('class="website_block" id="',$r)[1])[0];
$key=explode("'",explode("'&key=",$r)[1])[0];
$ptc=explode('<',explode('class="badge badge-info">',$r)[3])[0];
$cf3=explode('</title>',explode('<title>',$res)[1])[0];


if($cf3=="Just a moment..."){
echo slow(" Cloudflare Detected , Update Cookie  \n",10000);
l();
system("rm data.json");
if(!file_exists("data.json")){
while("true"){
$r0=readline(" Cookie   : ");
echo "\n";
$r1=readline(" User-Agent  : ");
l();
if($r0!==""){
break;
}
}
 $data=["Cookie"=>$r0,"Useragent"=>$r1];
  save("data.json",$data);

}
goto a;
}

if($ptc==0){
echo slow(" Ptc Not Found  \n",10000);
l();
goto faucet;
}



if($id){
ptcagain:
$r=Run('https://claimbits.net/surf.php?sid='.$id.'&key='.$key,head());
$tim=explode(';',explode('var secs = ',$r)[1])[0];
$token=explode("'",explode("var token = '",$r)[1])[0];

if($tim!=""){
$t=$tim;
timer($t);
}else{
goto ptc;
}
}

ptcb:
$data="cID=0&rT=1&tM=light";
$res =Run('https://claimbits.net/system/libs/captcha/request.php',h(1),$data);
$cap=json_decode($res)[3];
$cf3=explode('</title>',explode('<title>',$res)[1])[0];


if($cf3=="Just a moment..."){


echo slow(" Cloudflare Detected , Update Cookie  \n",10000);
l();
system("rm data.json");
if(!file_exists("data.json")){
while("true"){
$r0=readline(" Cookie   : ");
echo "\n";
$r1=readline(" User-Agent  : ");
l();
if($r0!==""){
break;
}
}
 $data=["Cookie"=>$r0,"Useragent"=>$r1];
  save("data.json",$data);

}
goto a;
}


$data="cID=0&pC=".$cap."&rT=2";
$res=Run('https://claimbits.net/system/libs/captcha/request.php',h(1),$data);

$data="a=proccessPTC&data=".$id."&token=".$token."&captcha-idhf=0&captcha-hf=".$cap;
$r=Run('https://claimbits.net/system/ajax.php',head(),$data);
$suc=explode('<',explode('class=\"fa fa-check-circle fa-fw\"><\/i> <b>SUCCESS<\/b> ',$r)[1])[0];

if($suc!=""){
$r=Run('https://claimbits.net/ptc.html',head());
$ptc=explode('<',explode('class="badge badge-info">',$r)[3])[0];
$balance=explode('<',explode('class="text-primary"><b>',$r)[1])[0];
$bvalue=explode('<',explode('class="text-warning"><b>',$r)[1])[0];


echo slow(" ✓ Success > > $suc \n",5000);


echo slow(" + Balance > > $balance / $bvalue | Ptc > > $ptc \n",5000);


l();
goto ptc;
}else{
echo slow("  Invalid Captcha \r",10000);
sleep(1);
echo "\r                              \r";
goto ptcb;
}
}






