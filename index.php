<?php
if (isset($_POST['longUrl'])){
    $url = $_POST['longUrl'];
}else{
	return "Error Something went wrong!";
}
$filename = randString(5).".php";
$fp = fopen($filename, 'w');
$php301code = '<?php header("HTTP/1.1 301 Moved Permanently"); header("Location: '.$url.'"); exit(); ?>';
fwrite($fp, $php301code);
fclose($fp);





function randString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
Fork me on github! https://github.com/sebastiansam55/ShrinkURL