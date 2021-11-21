

error_reporting(0);
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$nau= "\e[38;5;94m";
$white = "\033[0;33m";
$banner = "\r";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$y2="\033[0;33m";
$white= "\033[0;37m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngreen="\033[42m";
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
$toandz = $do."[".$luc."●".$do."] ".$trang."=> ";
$toanvip = $do."[".$luc."●".$do."]";
date_default_timezone_set("Asia/Ho_Chi_Minh");
@system('clear');
echo $bannertoan;
echo $toandz.$luc."Vào Web ".$trang."Traodoisub.com".$luc." Bấm Cài Đặt Trên Web\n";
echo $toandz.$luc."Sao Chép ".$vang."Access_token".$luc." Dán Vào\n";
echo $thanhngang;
//login
$dem = 0;
  echo $toandz.$luc."Nhập Token Acc Traodoisub : $trang";
  $tokenacc = trim(fgets(STDIN));
//Token 
$khotoken = [];
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token.$trang Dừng Bấm Xuống Hàng Nhé\n";
for($a = 1; $a < 999999;$a++){
echo $toandz.$luc."Nhập Token Thứ $a: $trang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khotoken,$nhapck);
$demcki=count($khotoken);
    }
//url
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";

$info = api($urlinfo);
if ($info["error"]) {
    exit ($info["error"]);
}
//$thongtin
$user = strtolower($info["data"]["user"]);
$xuhientai = $info["data"]["xu"];
@system('clear');
echo $bannertoan;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bạn đang dùng tool:$vang Tds Token\n";
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => ".$do."Bản Quyền:$trang Toàn-Tool\n";
echo $thanhngang;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tài Khoản TĐS ".$vang."".$user."\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Số Xu Hiện Tại: ".$vang."".$xuhientai."\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Đang Chạy: ".$vang."".$demcki."$luc Token\n";
echo $thanhngang;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Like\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Nhiệm Vụ Comment\n"; 
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Nhiệm Vụ Share\n";
echo $thanhngang;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chọn Chế Độ : $vang";
$nhiemvu = trim(fgets(STDIN));
//while (true){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Thời Gian \033[1;41;37m".$trang."Min\033[0m\033[1;32m: $vang"; 
$thoigianmin = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Thời Gian \033[1;41;37m".$trang."Max\033[0m\033[1;32m: $vang"; 
$thoigianmax = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chống Block Sau Bao Nhiêu Job: $vang"; 
$xxxxx = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau ".$vang.$xxxxx.$luc." Thì Nghỉ Bao Nhiêu Giây : $yellow";
$delaybl = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bao Nhiêu Job Thì Chuyển Nick: $yellow";
$doinick = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chạy Bao Nhiêu Nhiệm Vụ Rồi Dừng Tool : $vang";
$dungtool = trim(fgets(STDIN));

while(true){
  if(count($khotoken) == 0){
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token.$trang Nếu Muốn Dừng Bấm Xuống Hàng Nhé\n";
for($a = 1; $a < 999999;$a++){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Thứ $a: $trang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khotoken,$nhapck);
    }
            $js=json_encode($khotoken);
            $demcki=count($khotoken);
            $k = fopen("Token.txt","a+");
fwrite($k, $js);
fclose($k);
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tìm Thấy ".$vang.$demcki." ".$luc."Token\n";
  }
  $themtk = 0;
  for($xz=0;$xz<count($khotoken);$xz++){
 if ( $themck == 1){ break; }
 $cookie = $khotoken[$xz];
 $access_token = $cookie;
if (strpos($access_token, 'EAA') !== 0) {
    echo "\r";
    echo "                                                      \r";
    echo $white."=> ".$red."Token Die!!!\n";
    array_splice($khotoken,$xz,1);
    
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
$cauhinh = api($urlcauhinh);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
	echo $thanhngang;
    echo $do."Toàn-Tool -$luc Cấu Hình: ".$vang.$tenfb." ".$res."\n";
    echo $thanhngang;
} else {
    echo $do."Cấu hình thất bại token có thể bị die\n";
    exit;
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
     //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 5; $i++) {
            $listlike = api($urllike);
            if($listlike == ''){
          echo $trang."❯ ".$do."Mạng không ổn định                          \r";
          while($listlike==''){
            $listlike = api($urllike);
          }}
            if (count($listlike) !== 0) {
                break;
            }
        }
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        while (true) {
            $listsub = api($urlsub);
            if($listsub == ''){
          echo $trang."❯ ".$do."Mạng không ổn định                          \r";
          while($listsub==''){
            $listsub = api($urlsub);
          }}
            if (count($listsub) !== 0) {
                break;
            }
        }}
    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listcmt = api($urlcmt);
            if($listcmt == ''){
          echo $trang."❯ ".$do."Mạng không ổn định                          \r";
          while($listcmt==''){
            $listcmt = api($urlcmt);
          }}
            if (count($listcmt) !== 0) {
                break;
            }}
    }
    //listshare
    if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listshare = api($urlshare);
            if($listshare == ''){
          echo $trang."❯ ".$do."Mạng không ổn định                          \r";
          while($listshare==''){
            $listshare = api($urlshare);
          }}
            if (count($listshare) > 0) {
                break;
            }}
    }
    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike !== NULL) {
            $idlike = $listlike[$lap]["id"];
            if ($idlike !== '') {
                $g = like($access_token, $idlike, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   >^_^<  ".$red."Token Die\n";
                    array_splice($khotoken,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ⛔ ".$red."Đã Bị Block Like\n";
          array_splice($khotoken,$xz,1);
            $spam = 1;
            break;
    }
                $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                if ($nhanlike["success"] == 200) {
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = $nhanlike["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, '  LIKE  ', $idlike, $xujob, $xu, $dungtool);
                    if ( $dem >= $dungtool ){
    echo $luc."Bạn Đã Làm Xong ".$vang.$dem.$luc." Bạn Có Muốn Tiếp Tục Không (y/n) : $trang";
    	$stop = trim(fgets(STDIN));
if ( $stop == "n" ){
	$dungtool = 999999;
    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu."\n";
    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Toàn Tool\n";
    exit;}
 else {
	echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
		$chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $luc."Bạn Muốn Thêm Token Không (y/n) : $trang";
 	$themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khotoken=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        //follow
        if ($listsub !== NULL) {
            $idsub = $listsub[$lap]["id"];
            if ($idsub !== '') {
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   >^_^<  ".$red."Token Die\n";
                    array_splice($khotoken,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ⛔ ".$red."Đã Bị Block Follow\n";
          array_splice($khotoken,$xz,1);
            $spam = 1;
            break;
    }
                $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                if ($nhansub["success"] == 200) {
                    $xu = $nhansub["data"]["xu"];
                    $xujob = $nhansub["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, ' FOLLOW ', $idsub, $xujob, $xu, $dungtool,);
                    if ( $dem >= $dungtool ){
    echo $luc."Bạn Đã Làm Xong ".$vang.$dem.$luc." Bạn Có Muốn Tiếp Tục Không (y/n) : $trang";
    	$stop = trim(fgets(STDIN));
if ( $stop == "n" ){
	$dungtool = 999999;
    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu."\n";
    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Toàn Tool\n";
    exit;}
 else {
	echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
		$chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $luc."Bạn Muốn Thêm Token Không (y/n) : $trang";
 	$themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khotoken=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
            if ($listshare !== NULL) {
                $idshare = $listshare[$lap]["id"];
                if (isset($idshare)) {
                    $g = share($access_token, $idshare);
                    if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   >^_^<  ".$red."Token Die\n";
                    array_splice($khotoken,$xz,1);
                    $spam = 1; break;
              }
                }
                    if ($g -> {'error'} -> {'code'} == 368) {
                        echo "                                                      \r";
          echo $white." ⛔ ".$red."Cảnh báo: spam share thường xuyên quá sẽ khóa tài khoản\n";
                        array_splice($khotoken,$xz,1);
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 405) {
                        echo "\033[1;91m"."Tài khoản bị checkpoint";
                        array_splice($khotoken,$xz,1);
                        $spam = 1; break;
                    }
                        $nhanshare = nhantien('SHARE', $idshare, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                            $xu = $nhanshare["data"]["xu"];
                            $xujob = $nhanshare["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, ' SHARES ', $idshare, $xujob, $xu, $dungtool);
                            if ( $dem >= $dungtool ){
    echo $luc."Bạn Đã Làm Xong ".$vang.$dem.$luc." Bạn Có Muốn Tiếp Tục Không (y/n) : $trang";
    	$stop = trim(fgets(STDIN));
if ( $stop == "n" ){
	$dungtool = 999999;
    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu."\n";
    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Toàn Tool\n";
    exit;}
 else {
	echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
		$chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $luc."Bạn Muốn Thêm Token Không (y/n) : $trang";
 	$themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khotoken=[];
  break;
 } else { continue; }
 }
                            if($dem % $doinick == 0){
                              $spam = 1; break;
                            }
                            if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }}}
        //cmt
        if ($listcmt !== NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["msg"];
            if ($idcmt !== '') {
                $g = cmt($access_token, $idcmt, $cookie, $msg);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   >^_^<  ".$red."Token Die\n";
                    array_splice($khotoken,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ⛔ ".$red."Cảnh báo: spam comment sẽ khóa tài khoản\n";
          array_splice($khotoken,$xz,1);
            $spam = 1;
            break;
    }
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = $nhancmt["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, 'COMMENTS', $idcmt, $xujob, $xu, $dungtool);
                    if ( $dem >= $dungtool ){
    echo $luc."Bạn Đã Làm Xong ".$vang.$dem.$luc." Bạn Có Muốn Tiếp Tục Không (y/n) : $trang";
    	$stop = trim(fgets(STDIN));
if ( $stop == "n" ){
	$dungtool = 999999;
    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là : ".$BWhite.$xu."\n";
    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Toàn Tool\n";
    exit;}
 else {
	echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa : $BWhite";
		$chaythem = trim (fgets(STDIN));
 $dungtool = $dungtool + $chaythem;}
 echo $luc."Bạn Muốn Thêm Token Không (y/n) : $trang";
 	$themtk = trim (fgets(STDIN));
 if ( $themtk == "y" ){
 $spam = 1;
 $themtk = 1;
 $khotoken=[];
  break;
 } else { continue; }
 }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
    }
}}}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        //"accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}
function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function share($access_token,$id) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function hoanthanh($dem, $type, $id, $xujob, $xu, $dungtool) {
	$t = date('H:i');
  $rd = rand(1, 7);
  $rd2 = rand(5, 7);
  echo "\r";
      echo "                                              \r";
    $a = "\033[1;33m[".$dem."\033[1;33m] \033[1;31m×\033[1;37m $t\033[1;31m ×\033[1;3".$rd."m $type \033[1;31m×\033[1;30m hoàn thành job \033[1;31m× \033[1;32m$xujob \033[1;31m× \033[1;93m".$xu."\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(1000);
    }
}
function delay($delay) {
    $time = $delay; 
    for ( $x = $time; $x--; $x ) {
      echo "\r                                                      \r";
       echo "\r \033[1;32m[Toàn-Tool]\033[1;31m Làm job tiếp sau >\033[1;93m $x\033[1;91m |";
usleep(133333);
echo "\033[1;31m ¤";
usleep(133333);
echo "\033[1;32m ¤";
usleep(133333);
echo "\033[1;33m ¤";
usleep(133333);
echo "\033[1;34m ¤";
usleep(133333);
echo "\033[1;35m ¤";
usleep(133333);
        echo "\r                                                      \r";
}}
function delay2($delaybl){
  $green="\e[1;32m";
  $yellow="\e[1;33m";
  for($j = $delaybl;$j> 0;$j--){
    echo "\r";
    echo "                                                      \r";
    echo $green."Đang nghỉ tránh block, sẽ chạy lại sau$yellow $j Giây";
             sleep(1);
      
           }
  echo "\r";
  echo "                                                      \r";
}
function laytoken($cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    curl_close($ch);
    if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
        $access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0];
    }
    return $access_token;
}
