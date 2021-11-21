
error_reporting(0);
session_start();
$maufullxduong= "\e[1;47;34m";
$maufulldo= "\e[1;47;31m";
$maufullluc= "\e[1;47;32m";
$maufullxnhac= "\e[1;47;36m";
$maufullden= "\e[1;47;30m";
$maufullvang= "\e[1;47;33m";
$maufullhong= "\e[1;47;33m";
$res="\033[0m";
$do="\033[0;31m";
$grean="\033[1;32m";
$mit="\033[0;32m";
$BWhite="\033[0;33m";
$mti="\033[0;33m";
$test="\033[1;33m";
$tim="\033[1;36m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$blue="\033[1;36m";
$trang="\033[1;37m";
$ress="\033[0;32m";
$res="\033[0;33m";
$green="\033[0;37m";
$yellow="\033[0;33m";
$white= "\033[0;33m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$BWhite="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$banner="\r\n";
$ngay=date("d/m");
$day=date("d/m");
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$res="\033[0m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$toandz = $do."[".$luc."●".$do."] ".$trang."=> ";
$toanvip = $do."[".$luc."●".$do."]";
$thanhngang = $trang."----------------------------------------------------------\n";
echo $red."".$maufulldo."".$tim."".$hong."".$xanh."".$luc."".$tim."\n";
echo $res."";
{
while(true){
system("clear");
echo $bannertoan;
echo $thanhngang;
echo $luc."Nhập Cookie Facebook : $BWhite";
$cookie=trim(fgets(STDIN));
$useragent = "Mozilla/5.0 (Linux; Android 10; Live) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36";
$access = cookie($cookie,$useragent);
$access_token = 'EAAG'.explode('","', explode('EAAG', $access)[1])[0];
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
echo $BWhite."\n";break;
    if ($access_token == 'die') {
    echo "\r";
    echo "                                                      \r";
    echo $white."Lỗi ".$red."Cookie Die!!!\n";
    
    continue;
}}
while(true){ 
 unset($so); unset($_SESSION['giaay']);unset($nhap);
 unset($nguoi); unset($so1); unset($dem);
@system('clear');
echo $bannertoan;
echo $thanhngang;
$banbe =[];
$listbv = getbaiviet($cookie,$access_token,$useragent,'me')->{'data'};
$listbb = getbanbe($access_token,$useragent)->{'data'};
foreach ($listbb as $idbb){
$idbb = $idbb->{'id'};
array_push($banbe,$idbb); 
}
while(true){
echo $luc." Đang Kiểm Tra Số Lượng Người Tương Tác !!!".$red."\r";

foreach ($listbv as $key => $list){
 $id = $list->{'id'};if (strstr($id,'_')){$idbv = explode('_',$id)[1];}
$like = demlike($cookie,$access_token,$idbv,$useragent)->{'data'};
if(!empty($like)){
foreach ($like as $key2=> $likes){
 $id = $likes->{'id'}; $name = $likes->{'name'};
 if(in_array($id,$banbe) == true){$so++;
 $banbe = \array_diff($banbe, [$id]);
$do = "\33[1;31m";
$luc = "\33[1;32m";
$BWhite = "\33[1;33m";
$xduong = "\33[1;34m";
$tim = "\33[1;35m";
$xnhac = "\33[1;36m";
$trang = "\33[1;37m";
$trang="\033[1;97m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$mau = array($do,$luc,$BWhite,$xduong,$tim,$xnhac,$trang,$trang);
$ff = array_rand($mau);
$soGG=$soGG+1;
echo $trang."[$luc".$soGG."$trang] ".$mau[$ff].$name." ".$luc."Đã Tương Tác Với Bạn".$res."\n";
echo "\r";
}
}
}
}
//TONG SO NGUOI TUONG TAC

$time=date('h:i:s');
echo "\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$luc Kiểm tra thành công!                            \n";
echo "\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$BGreen Có ".$BWhite."".count($banbe)." ".$luc."Người Chưa Tương Tác Với Bạn \n";
echo $thanhngang;
echo "\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$BGreen Bạn Muốn Lọc Bao Nhiêu Người : $BWhite";
$xoa = trim(fgets(STDIN));


//bật tính năng block
echo "\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$BGreen Tính Năng Chống Block Hoạt Động Sau : $BWhite";
$_SESSION['block']=trim(fgets(STDIN));
echo "\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$BGreen Sau ".$BWhite.$_SESSION['block'].$luc." Nhiệm Vụ Thì Nghỉ Bao Nhiêu Giây : $BWhite";
$_SESSION['j']=trim(fgets(STDIN));


echo "\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$BGreen Delay Mỗi Lần Lọc: $BWhite";
$delaysub = trim(fgets(STDIN));

echo $thanhngang;
echo $luc." Tên Facebook: ".$BYellow."".$tenfb."\n";
echo $thanhngang;

foreach ($banbe as $id=>$key){
$uid = $key;
$g = xoabanbe($cookie,$uid,$useragent);
$so1++;
//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//

echo $BCyan."[".$BCyan.$so1.$BCyan."]".$do." ● ".$xnhac.date("H:i")."".$do." ● ".$BGreen."Xóa thành công".$do." ● ".$BGreen."".$uid."\n";
$icon=70000;
//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//
for($tt = $delaysub ;$tt> 0;$tt--){
echo "\r                                                      \r";
       echo "\r \033[1;32m[Toàn-Tool]\033[1;31m Lọc tiếp sau >\033[1;93m $tt\033[1;91m |";
usleep(175000);
echo "\033[1;31m⚡";
usleep(175000);
echo "\033[1;32m⚡";
usleep(175000);
echo "\033[1;33m⚡";
usleep(170000);
echo "\033[1;34m⚡";
usleep(175000);
echo "\033[1;35m⚡";
usleep(175000);
        echo "\r                                                      \r";
}
$max=$max+1;
if ($max==$_SESSION['block']){
for($x = 0;$x<($_SESSION['j']+1);$x++){
echo $xduong." Tính Năng Chống Block Hoạt Động, Nghỉ ".($_SESSION['j']-$x)." Giây\r";
sleep(1);
echo $xduong."                                                       \r";
}
$max=0;
echo "\r";}
//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//=//
  if ($so1 == $xoa){
  echo $thanhngang;
echo $trang." ".$BWhite."Tool Đã Lọc Thành Công ".$xoa." Bạn Bè Cho Bạn !!!\n";
  break;sleep(5);
}
}
unset($so);break;
}
break;  
}
}
function getbaiviet($cookie,$access_token,$useragent,$idfb){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idfb.'/posts?limit=1000&fields=id,name&access_token='.$access_token);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function demlike($cookie,$access_token,$idpost,$useragent){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v1.0/'.$idpost.'/likes?access_token='.$access_token.'&pretty=1&limit=5000');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function getbanbe($access_token,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://graph.facebook.com/me/friends/?access_token='.$access_token);
  $head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return json_decode(curl_exec($ch));
curl_close($ch);
}
function xoabanbe($cookie,$id,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/profile.php?id='.$id);
  $head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
$list = curl_exec($ch);
$data1 = explode('" autocomplete=',explode('name="fb_dtsg" value="',$list)[1])[0];
$data2= explode('" autocomplete=',explode('name="jazoest" value="',$list)[1])[0];
$data = http_build_query(array('fb_dtsg'=>$data1,'jazoest'=>$data2,'friend_id'=>$id ,'unref'=>'profile_gear','confirm'=>'Xác nhận'));
$head[] = 'content-length: '.strlen($data);
$head[] = 'refer: https://mbasic.facebook.com/removefriend.php?friend_id='.$id.'&unref=profile_gear&refid=17';
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/a/removefriend.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$h = curl_exec($ch);
curl_close($ch);
}
function gettiephome($cookie,$linktiep,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$linktiep);
$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function camxuctuongtac($cookie,$link,$useragent,$type){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$m = curl_exec($ch);
if ($type == 'LIKE'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=1',$m)[1])[0];
  $link4 = '&amp;reaction_type=1'.$link2;
}
if ($type == 'THUONG'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=16',$m)[1])[0];
  $link4 = '&amp;reaction_type=16'.$link2;
}
if ($type == 'LOVE'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=2',$m)[1])[0];
  $link4 = '&amp;reaction_type=2'.$link2;
}
if ($type == 'WOW' ){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=3',$m)[1])[0];
  $link4 = '&amp;reaction_type=3'.$link2;
}
if ($type == 'HAHA'){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=4',$m)[1])[0];
  $link4 = '&amp;reaction_type=4'.$link2;
}
if ($type == 'SAD'){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=7',$m)[1])[0];
  $link4 = '&amp;reaction_type=7'.$link2;
}
if ($type == ''){$link2= explode('" style="display:block"',explode('&amp;reaction_type=8')[1])[0];
  $link4 = '&amp;reaction_type=8'.$link2;
}
$link3 = explode('&amp;reaction_type=',explode('<a href="/ufi/reaction/?',$m)[1])[0];
$link5 = str_replace('&amp;', '&', $link3.$link4);
curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/ufi/reaction/?".$link5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $n =	curl_exec($ch);
 curl_close($ch);
 return 
explode('</title><meta',explode('head><title>',$n)[1])[0];}
function gethome($cookie,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/home.php');
$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function cookie($cookie,$useragent){
$head= array("Connection: keep-alive","Keep-Alive: 300","authority: business.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document");
$ch=curl_init();
	curl_setopt_array($ch , array(
		CURLOPT_URL => "https://business.facebook.com/business_locations",
		CURLOPT_USERAGENT => $useragent,
		CURLOPT_COOKIE => $cookie,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = curl_exec($ch);
	curl_close($ch);
$access_token = 'EAAG'.explode('","', explode('EAAG', $access)[1])[0];
if(strlen($access_token) > 5){
	return $access_token;
} else {
	return 'die';
}
}
function cmttoken($access_token,$id,$msg,$useragent){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function thembanbe($cookie,$url,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/friends/center/mbasic/?fb_ref=tn&sr=1&ref_component=mbasic_home_header&ref_page=MFriendsCenterMBasicController');
  $head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
$list = curl_exec($ch);
$link = explode('" class="',explode('/a/mobile/friends/add_friend.php?',$list)[1])[0];
$link2 = 'https://mbasic.facebook.com/a/mobile/friends/add_friend.php?'.str_replace('&amp;','&',$link);
curl_setopt($ch, CURLOPT_URL, $link2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);
return explode('&hf',explode('id=',$link2)[1])[0];
}
