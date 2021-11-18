
error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
$toandz = $do."[".$luc."●".$do."] ".$trang."=> ";
$toanvip = $do."[".$luc."●".$do."]";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$useragent = "Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36";
@system('clear');
echo $bannertoan;
$_SESSION['fck'] = file_exists("ttc1.txt");
if ($_SESSION['fck'] == '1'){
  unlink("ttc1.txt");
}
$_SESSION['check'] = file_exists("logttc1.txt");
if ($_SESSION['check'] =='1'){
echo $toandz.$luc."Bạn Đã Đăng Nhập Trước Đó! Bấm $yellow Enter $green Để Tiếp Tục!\n";
echo $toandz.$luc."Nhập $do No $luc Để Xóa: $trang";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='no' and $_SESSION['nhap'] != 'No' and $_SESSION['nhap'] !=''){
echo $red."Sai Định Dạng\n";
exit;
}
if ($_SESSION['nhap'] =='no' or $_SESSION['nhap'] =='No'){
$my = fopen("logttc1.txt", "w+");
echo $toandz.$luc."Tài khoản TTC: $vang";
$username =trim(fgets(STDIN));
echo $toandz.$luc."Mật Khẩu TTC: $vang";
$password =trim(fgets(STDIN));
$arr = array("username"=> $username, "password"=> $password);
fwrite($my,json_encode($arr));
    $my = file("logttc1.txt");
$bb = file_get_contents('logttc1.txt');
$cc =json_decode($bb);
$_SESSION['username']= $cc->{"username"};
$_SESSION['password']= $cc->{"password"};
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("logttc1.txt");
$cc =json_decode($bb);
$_SESSION['username']= $cc->{"username"};
$_SESSION['password']= $cc->{"password"};
}
} else {
	login:
$my = fopen("logttc1.txt","w+");
echo $toandz.$luc."Tài khoản TTC: $vang";
$_SESSION["username"]=trim(fgets(STDIN));
echo $toandz.$luc."Mật Khẩu TTC: $vang";
$_SESSION['password']=trim(fgets(STDIN));
$arr = array("username"=> $_SESSION["username"], "password"=> $_SESSION['password']);
fwrite($my,json_encode($arr));
}
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$source = getcookiettc($user,$pass,$useragent);
$sou= strlen($source);
if ($sou < 10 ){
  echo $toandz.$luc."Đăng Nhập Thành Công\n";
  
  // get xu
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "ttc1.txt"
  ));
  
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
}else{
	echo $red."Sai Tài Khoản Hoặc Mật Khẩu\n";
	GOTO login;
	exit; 
}
do {
$khocookie = [];
echo $thanhngang;
echo $toandz.$luc."Nhập Cookie Facebook.\033[1;33mMuốn Dừng Nhập Thì Bấm Enter\n";
for($a = 1; $a < 999999;$a++){
echo $toandz.$cyan."Nhập Cookie Thứ $a: $trang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}

array_push($khocookie,$nhapck);
}
            
$demcki=count($khocookie);
            
echo $white."❯ ".$green."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Cookie Facebook\n";
sleep(1);
} while (count($khocookie)==0);

//$thongtin

system('clear');
echo $bannertoan;
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m ❯ ".$luc."Đang Chạy Tool TTC:$vang Nick 1\n";
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m ❯ ".$do."Bản Quyền:$trang Lộc-Tool\n";
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m ❯ ".$yellow."Số Nick Chạy:$green $demcki\n";
$xuhientai = getxu();
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m ❯ ".$cyan."Xu Hiện Tại:$yellow $xuhientai\n";

echo $thanhngang;
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;32mBật Job Like \033[1;37m(y/n): \033[1;33m";
$chon1=trim(fgets(STDIN));
  if ($chon1 == 'y' ){
    echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;34m Delay Like : \033[1;33m";
    $delaylike = trim(fgets(STDIN));
  }
  echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;32mBật Job Cảm Xúc \033[1;37m(y/n): \033[1;33m";
$chon5=trim(fgets(STDIN));
  if ($chon5 == 'y' ){
    echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;34m Delay Cảm Xúc : \033[1;33m";
    $delaycx = trim(fgets(STDIN));
  }
  echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;32mBật Job Like CMT \033[1;37m(y/n): \033[1;33m";
$chon6=trim(fgets(STDIN));
  if ($chon6 == 'y' ){
    echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;34m Delay Like CMT : \033[1;33m";
    $delayrecmt = trim(fgets(STDIN));
  }
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;32mBật Job Follow \033[1;37m(y/n): \033[1;33m";
$chon2=trim(fgets(STDIN));
  if ($chon2 == 'y' ){
    echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;34m Delay Follow : \033[1;33m";
    $delayfl = trim(fgets(STDIN));
  }
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;32mBật Job Comment \033[1;37m(y/n): \033[1;33m";
$chon3=trim(fgets(STDIN));
  if ($chon3 == 'y' ){
    echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;34m Delay Comment : \033[1;33m";
    $delaycmt = trim(fgets(STDIN));
  }
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;32mBật Job Share \033[1;37m(y/n): \033[1;33m";
$chon4=trim(fgets(STDIN));
  if ($chon4 == 'y' ){
    echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;34m Delay Share : \033[1;33m";
    $delayshare = trim(fgets(STDIN));
  }
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;32mBật Job Like Page \033[1;37m(y/n): \033[1;33m";
$chon7=trim(fgets(STDIN));
  if ($chon7 == 'y' ){
    echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;34m Delay Page : \033[1;33m";
    $delaypage = trim(fgets(STDIN));
  }
  echo $thanhngang;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$green."Bao nhiêu job chống block: $vang";
$xxxxx = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$green."Sau ".$vang.$xxxxx.$luc." job dừng bao nhiêu giây: $vang";
$delaybl = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$green."Bao nhiêu job thì chuyển nick: $vang";
$doinick = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$green."Bao nhiêu job thì dừng tool: $vang";
$dungtool = trim(fgets(STDIN));
while(true){
  if(count($khocookie) == 0){
echo $toandz.$luc."Nhập Cookie Facebook.\033[1;33mMuốn Dừng Nhập Thì Bấm Enter\n";
for($a = 1; $a < 999999;$a++){
echo $toandz.$cyan."Nhập Cookie Thứ $a: $trang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}

array_push($khocookie,$nhapck);
    }
$demcki=count($khocookie);
echo $toandz.$cyan."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Cookie Facebook\n";
sleep(1);
  }
  $themtk = 0;
  for($xz=0;$xz<count($khocookie);$xz++){
 if ( $themck == 1){ break; }
 $cookie = $khocookie[$xz];
 $access_token = gettoken($cookie,$useragent);
if ($access_token == 'die') {
    echo "\r";
    echo "                                                      \r";
    echo $white."Lỗi ".$red."Cookie Die!!!\n";
    array_splice($khocookie,$xz,1);
    continue;
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$h = datnick($idfb,$useragent);
if ($h == '1'){
echo $thanhngang;
echo $do."Lộc-Tool -$luc Cấu Hình: ".$vang.$tenfb." $luc Xu:$vang $xu\n";
echo $thanhngang;
} else{
	echo $do." Cấu hình thất bại, vui lòng kiểm tra lại\n";
	exit;
	}
$spam = 0;
$xu = $xuhientai;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($chon1, 'y') !== false) {
        for ($i = 0; $i < 5; $i++) {
            $listlike = getlike($useragent);
            if($listlike == ''){
          echo $trang." ~> ".$do."Internet không ổn định              \r";
          while($listlike==''){
            $listlike = getlike($useragent);
          }}
            if (count($listlike) > 0) {
                break;
            }}
        if (count($listlike) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m ~>Like tạm thời hết nhiệm vụ        \r"; 
        }
          
    }
    //listfollow
    if (strpos($chon2, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listsub = getnv('sub',$useragent);
            if($listsub == ''){
          echo $trang." ~> ".$do."Internet không ổn định              \r";
          while($listsub==''){
            $listsub = getnv('sub',$useragent);
          }}
            if (count($listsub) > 0) {
                break;
            }
        }
      if (count($listsub) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m ~>Follow tạm thời hết nhiệm vụ        \r"; 
        }
    }
   
    //listcmt
    if (strpos($chon3, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listcmt = getnv('cmt',$useragent);
            if($listcmt == ''){
          echo $trang." ~> ".$do."Internet không ổn định              \r";
          while($listcmt==''){
            $listcmt = getnv('cmt',$useragent);
          }}
            if (count($listcmt) > 0) {
                break;
            }}
        if (count($listcmt) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m ~>CMT tạm thời hết nhiệm vụ        \r"; 
        }
    }
    //share
    if (strpos($chon4, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listshare = getnv('share',$useragent);
            if($listshare == ''){
          echo $trang." ~> ".$do."Internet không ổn định              \r";
          while($listshare==''){
            $listshare = getnv('share',$useragent);
          }}
            if (count($listshare) > 0) {
                break;
            }}
        if (count($listshare) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m ~>Share tạm thời hết nhiệm vụ        \r"; 
        }
    }
    //cx
    if (strpos($chon5, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listcx = getnv('camxuc',$useragent);
            if($listcx == ''){
          echo $trang." ~> ".$do."Internet không ổn định              \r";
          while($listcx==''){
            $listcx = getnv('camxuc',$useragent);
          }}
            if (count($listcx) > 0) {
                break;
            }}
        if (count($listcx) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m ~>Cảm Xúc tạm thời hết nhiệm vụ        \r"; 
        }
    }
    //cxcmt
    if (strpos($chon6, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listlikecmt = getnvcxcmt($useragent);
            if($listlikecmt == ''){
          echo $trang." ~> ".$do."Internet không ổn định              \r";
          while($listlikecmt==''){
            $listlikecmt = getnvcxcmt($useragent);
          }}
            if (count($listlikecmt) > 0) {
                break;
            }}
        if (count($listlikecmt) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m ~>CX CMT tạm thời hết nhiệm vụ        \r"; 
        }  
    }
    //page
    if (strpos($chon7, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listpage = getnv('likepage',$useragent);
            if($listpage == ''){
          echo $trang." ~> ".$do."Internet không ổn định              \r";
          while($listpage==''){
            $listpage = getnv('likepage',$useragent);
          }}
            if (count($listpage) > 0) {
                break;
            }}
        if (count($listpage) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m ~>Like Page tạm thời hết nhiệm vụ        \r"; 
        }
          
    }
    for ($lap = 0; $lap < 99999; $lap++) {
        // like     
        if ($listlike != NULL) {
            $idlike = $listlike[$lap]["idpost"];
            if ($idlike != '') {
                $g = like($access_token, $idlike, $cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}
          if ($g -> {'error'} -> {'code'} == 190) {
            echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m đã bị đăng xuất\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m bị hạn chế like\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                $nhanlike = nhantienlike($idlike,$useragent);
                $s= $nhanlike[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu2 = getxu();
              	  if ($xu2-$xu>0) {
                	$xu = $xu2;
              	  $xujob = 400;
                    $dem++;                    
                    hoanthanh($dem, '  LIKE  ', $idlike, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
  echo $white." ~> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }                                           
                    delay($delaylike);
                }
            }}}
        //follow
        if ($listsub != NULL) {
            $idsub = $listsub[$lap]["idpost"];
            if ($idsub != '') {
                $g = follow($access_token, $idsub, $cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}
if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m đã bị đăng xuất\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
echo "\r";
echo "                                                      \r";
echo $white." ~> \033[1;91mĐang Check Block Ảo\r";
sleep(5);
              $testbl = follow($access_token,'100008907976862', $cookie);
              if ($testbl -> {'error'} -> {'code'} == 368) {
                  echo "\r";
       echo "                                                      \r";
                    echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m bị block follow\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }}
                $nhansub = traluong('sub',$idsub);
                $s= $nhansub[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu2 = getxu();
              	  if ($xu2-$xu>0) {
                	$xu = $xu2;
              	  $xujob = 600;
                    $dem++;
                    hoanthanh($dem, ' FOLLOW ', $idsub, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    
	$dungtool = 999999;
	$xu = getxu();
  echo $white." ~> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
  exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }                                          
                    delay($delayfl);
                }
            }}}
      
  //share
            if ($listshare != NULL) {
                $id = $listshare[$lap]["idpost"];
                if ($id != '') {
                    $g = share($access_token, $id);
if ($dem % 25 == 0){
  $xu = getxu();
}
          if ($g -> {'error'} -> {'code'} == 190) {
            echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m đã bị đăng xuất\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m bị hạn chế share\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
            $nhanshare = traluong('share',$id);
          $s= $nhanshare[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu2 = getxu();
              	  if ($xu2-$xu>0) {
                	$xu = $xu2;
              	  $xujob = 600;
                            $dem++;
                            hoanthanh($dem, ' SHARES ', $id, $xujob, $xu);
                            if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $white." ~> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                            if($dem % $doinick == 0){
                      if (count($khocookie)>1){       
                      $spam = 1; break;
                      }
                            }
                            if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }                      
                    delay($delayshare);
                }
              }}}
          //cảm xúc
        if ($listcx != NULL) {
            $idcx = $listcx[$lap]["idpost"];
            $type = $listcx[$lap]["loaicx"];
            if ($idcx != '') {
                $g = camxuc($idcx, $type, $cookie);
 if ($dem % 25 == 0){
  $xu = getxu();
}
                if ($g -> {'error'} -> {'code'} == 190) {
            echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m đã bị đăng xuất\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m bị hạn chế like\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }

                $nhancx = traluongcx($type,$idcx);
                $s= $nhancx[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu2 = getxu();
              	  if ($xu2-$xu>0) {
                	$xu = $xu2;
              	  $xujob = 400;
                    $dem++;
                    if ($type == 'WOW') {
                        $type = '  WOW   ';
                    } elseif ($type == 'SAD') {
                        $type = '  SAD   ';
                    } elseif ($type == 'ANGRY') {
                        $type = '  ANGRY ';
                    } elseif ($type == 'LOVE') {
                        $type = '  LOVE  ';
                    } elseif ($type == 'HAHA') {
                        $type = '  HAHA  ';
                    } elseif ($type == 'CARE') {
                        $type = '  CARE  ';
                    }
                    hoanthanh($dem, $type, $idcx, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $white." ~> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }                                           
                    delay($delaycx);
                }
            }}}
    
        //likecmt
        if ($listlikecmt != NULL) {
            $idlikecmt = $listlikecmt[$lap]["idpost"];
            $type = $listlikecmt[$lap]["loaicx"];
            if ($idlikecmt != '') {
                if ($type == 'LIKE'){
                    like($access_token, $idlikecmt, $cookie);
                }else{
                    camxuc($idlikecmt, $type, $cookie);
                }
if ($dem % 25 == 0){
  $xu = getxu();
}
                $nhanlcmt = traluonglikecmt($type, $idlikecmt);
                $s= $nhanlcmt[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu2 = getxu();
              	  if ($xu2-$xu>0) {
                	$xu = $xu2;
              	  $xujob = 600;
                    $dem++;
                    hoanthanh($dem, $type.' CMT', $idlikecmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $white." ~> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }                                          
                    delay($delayrecmt);
                } 
            }}}
  
        //page
        if ($listpage != NULL) {
            $idpage = $listpage[$lap]["idpost"];
            if ($idpage != '') {
                $g = page($idpage, $cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}
                 if ($g -> {'error'} -> {'code'} == 190) {
                    echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m đã bị đăng xuất\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m bị hạn chế thích trang\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                $nhanpage = traluong('likepage',$idpage);
                $s= $nhanpage[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu2 = getxu();
              	  if ($xu2-$xu>0) {
                	$xu = $xu2;
              	  $xujob = 700;
                    $dem++;
                    hoanthanh($dem, '  PAGE  ', $idpage, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $white." ~> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }                                           
                    delay($delaypage);
                }
            }}}
        //cmt
        if ($listcmt != NULL) {
            $idcmt = $listcmt[$lap]["idpost"];
            $ms = json_decode($listcmt[$lap]["nd"]);
            $msg = $ms[0];
            if ($idcmt != '') {
                $g = cmt($access_token, $idcmt, $cookie, $msg);
if ($dem % 25 == 0){
  $xu = getxu();
}
                                if ($g -> {'error'} -> {'code'} == 190) {
            echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m đã bị đăng xuất\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m Tài Khoản \033[1;33m$tenfb\033[1;31m bị hạn chế comment\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                $nhancmt = traluong('cmt',$idcmt);
                $s= $nhancmt[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu2 = getxu();
              	  if ($xu2-$xu>0) {
                	$xu = $xu2;
              	  $xujob = 600;
                    $dem++;
                    hoanthanh($dem, 'COMMENTS', $idcmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $white." ~> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }                                            
                    delay($delaycmt);
                }
            }}}         
    }
}}}


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
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
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
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

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
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function hoanthanh($dem, $type, $id, $xujob, $xu) {
  $t = date('H:i');
  $rd = rand(2, 7);
  echo "\r";
      echo "                                              \r";
    $a = "\033[1;33m[".$dem."\033[1;33m] \033[1;31m× \033[1;37m$t\033[1;31m ×\033[1;3".$rd."m$type\033[1;31m× \033[1;36mhoàn thành job \033[1;31m× \033[1;32m+$xujob \033[1;31m× \033[1;93m".$xu." xu\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(1000);
    }
}
function delay($delay) {
	$rd = rand(1, 7);
    $time = $delay; 
    for ( $x = $time; $x> 0; $x-- ) {
      echo "\r                                                      \r";
       echo "\r \033[1;32m[Lộc Tool]\033[1;31m Làm job tiếp sau >\033[1;93m $x\033[1;91m |";
usleep(170000);
echo "\033[1;31m⚡";
usleep(170000);
echo "\033[1;32m⚡";
usleep(170000);
echo "\033[1;33m⚡";
usleep(170000);
echo "\033[1;34m⚡";
usleep(170000);
echo "\033[1;35m⚡";
usleep(170000);
        echo "\r                                                      \r";
}}
function delay2($delaybl){
  $green="\e[1;32m";
  $yellow="\e[1;33m";
  for($j = $delaybl;$j> 0;$j--){
    echo "\r";
    echo "                                                      \r";
    echo $green." 🤪 Nghỉ tránh block, sẽ chạy lại sau$yellow $j Giây";
             sleep(1);
      
           }
  echo "\r";
  echo "                                                      \r";
}
function getcookiettc($user,$pass,$useragent){
  $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "ttc1.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login =array('username' => $user,'password' => $pass,'submit' => ' ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc1.txt");
$source=curl_exec($ch);
curl_close($ch);
return $source;
}
function datnick($idfb,$useragent){
$url = 'https://tuongtaccheo.com/cauhinh/datnick.php';
$header = array(
  "Host: tuongtaccheo.com",
  "accept: */*",
  "x-requested-with: XMLHttpRequest",
  "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
  "content-type: application/x-www-form-urlencoded; charset=UTF-8",
  "origin: https://tuongtaccheo.com",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: cors",
  "sec-fetch-dest: empty",
  "referer: https://tuongtaccheo.com/cauhinh/",
);
  $data = 'iddat%5B%5D='.$idfb."&loai=fb";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_PORT, "443");
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_ENCODING, "");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc1.txt");
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  $h = curl_exec($ch);
  curl_close($ch);
  return $h;
}
function getlike($useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "ttc1.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function nhantienlike($id,$useragent){
  $ch= curl_init();
  $data= ('id=').$id;
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='referer: https://tuongtaccheo.com/kiemtien/';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch,CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"ttc1.txt");
  $xu= json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $xu;
}
function getxu(){
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "ttc1.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
  return $xu; 
}
function getnv($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/'.$loai.'cheo';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "ttc1.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function getnvcxcmt($useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "ttc1.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function traluong($loai,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/$loai"."cheo/nhantien.php";
    $data= ('id=').$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/$loai"."cheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "ttc1.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function gettoken($cookie,$useragent){
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
function camxuc($idcx, $type, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$idcx);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $cx = curl_exec($ch);
    $haha = explode('<a href="', $cx);
    if ($type == 'LOVE') {
        $haha2 = explode('" style="display:block"', $haha[2])[0];
    } else if ($type == 'WOW') {
        $haha2 = explode('" style="display:block"', $haha[5])[0];
    } else if ($type == 'CARE') {
        $haha2 = explode('" style="display:block"', $haha[3])[0];
    } else if ($type == 'HAHA') {
        $haha2 = explode('" style="display:block"', $haha[4])[0];
    } else if ($type == 'SAD') {
        $haha2 = explode('" style="display:block"', $haha[6])[0];
    } else {
        $haha2 = explode('" style="display:block"', $haha[7])[0];
    }
    $link2 = html_entity_decode($haha2);
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}
function traluongcx($type,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheo/nhantien.php";
    $data= 'id='.$id.'&loaicx='.$type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_COOKIEFILE => "ttc1.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function traluonglikecmt($type,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/nhantien.php";
    $data= 'id='.$id.'&loaicx='.$type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_COOKIEFILE => "ttc1.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function page($idpage, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$idpage);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0]) {
        $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0];
        $link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$idpage.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
    }
    curl_close($ch);

}
