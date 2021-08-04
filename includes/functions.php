<?php 
function randomUsername($string) {
$pattern = " ";
$firstPart = substr(strstr(strtolower($string), $pattern, false), 0,3);
$secondPart = strstr(strtolower($string), $pattern, true);
$nrRand = rand(0, 100);
$username = trim($firstPart).trim($secondPart).trim($nrRand);
return $username;
}


function randomPassword($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
?>