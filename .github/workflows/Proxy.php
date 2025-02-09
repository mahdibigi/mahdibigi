
<?php
$strings = array(
    '🧊',
   '⛵️',
);
shuffle($strings);
$emj1=reset($strings);

shuffle($strings);
$emj2=reset($strings);


shuffle($strings);
$emj3=reset($strings);

shuffle($strings);
$emj4=reset($strings);
define('API_KEY','توکن ربات'); //-----------توکن----
//---------------
function getPage($url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

function bot($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
 }
}
//----------------
$update = json_decode(file_get_contents("php://input"));
$chat_id = $update->message->chat->id;
$text = $update->message->text;
$result = json_decode($get, true);
//-----------------
$channel = 'channel'; //------ایدی-چنل-بدون@----
//-----------------
function send($proxy){
    global $emj1;
    global $emj2;
    global $emj3;
    global $emj4;
	global $channel;
	global $admin;
	bot('sendmessage',['chat_id'=>"@$channel",'text'=>"$emj1 ＮＥＷ ＰＲＯＸＹ$emj1
	
🔒sᴇᴄʀᴇᴛ:
$proxy

#Proxy Haro Ro Eshtrak Bzarid !♥️🖇

🚦@$channel ",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Connect",'url'=>"$proxy"]]]])]);

    $file = fopen('proxy.txt', "a") or die("Unable to open file!");
    fwrite($file, "$proxy\n");
    fclose($file);
}

$x=0;

    $ch = curl_init("https://t.me/s/mt_proxyis");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'
]);
$data = curl_exec($ch);
curl_close($ch);


    $ch = curl_init("https://t.me/s/ProxyMTProto");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'
]);
$data2 = curl_exec($ch);


    $ch = curl_init("https://t.me/s/NoteProxy");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'
]);
$data3 = curl_exec($ch);



    $ch = curl_init("https://t.me/s/proxy0_1");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'
]);


$data4 = curl_exec($ch);


preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $data, $matches2);
preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $data2, $matches);
preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $data3, $matche);
preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $data4, $match);


$y=1;
for($x=0;$x<=1000;$x++){
$proxy=$matches2[0][$x];   $proxy=str_Replace("&amp;","&",$proxy); 
	    if(strpos($proxy,'joinchat') !== false){
	        
	    }else{
		if( strpos($proxy,'proxy?server') !== false )
		{ 
		    
			    if(strpos($list,"$proxy") !== false){
			        
			    }else{
			$proxy_list.="<$y>$proxy</$y><br>";$y++;		    

			    }
			    			    $list.="$proxy";
		    
		    
		}
}
if($proxy==null){
    $x=1001;
}
}
for($x=0;$x<=1000;$x++){
$proxy=$matches[0][$x];   $proxy=str_Replace("&amp;","&",$proxy); 
	    if(strpos($proxy,'joinchat') !== false){
	        
	    }else{
		if( strpos($proxy,'proxy?server') !== false )
		{ 
		    
			    if(strpos($list,"$proxy") !== false){
			        
			    }else{
			$proxy_list.="<$y>$proxy</$y><br>";$y++;		    

			    }
			    			    $list.="$proxy";
		    
		    
		}
}
if($proxy==null){
    $x=1001;
}
}
for($x=0;$x<=1000;$x++){
$proxy=$match[0][$x];   $proxy=str_Replace("&amp;","&",$proxy); 
	    if(strpos($proxy,'joinchat') !== false){
	        
	    }else{
		if( strpos($proxy,'proxy?server') !== false )
		{ 
		    
			    if(strpos($list,"$proxy") !== false){
			        
			    }else{
			$proxy_list.="<$y>$proxy</$y><br>";$y++;		    

			    }
			    			    $list.="$proxy";
		    
		    
		}
}
if($proxy==null){
    $x=1001;
}
}
for($x=0;$x<=1000;$x++){
$proxy=$matche[0][$x];   $proxy=str_Replace("&amp;","&",$proxy); 
	    if(strpos($proxy,'joinchat') !== false){
	        
	    }else{
		if( strpos($proxy,'proxy?server') !== false )
		{ 
		    
			    if(strpos($list,"$proxy") !== false){
			        
			    }else{
			$proxy_list.="<$y>$proxy</$y><br>";$y++;		    

			    }
			    			    $list.="$proxy";
		    
		    
		}
}
if($proxy==null){
    $x=1001;
}
}

//echo $proxy_list;
if($y!=1){
$rand=rand(1,$y);
$proxy=get_string_between($proxy_list, "<$rand>", "</$rand>");
send($proxy);echo "$proxy ";
}

?>