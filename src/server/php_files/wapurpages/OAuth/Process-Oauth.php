<?php

if (!isset($_GET["code"])) {
    header("Location: ../WapurDashboard.php");
    exit();
}

$DiscordCode = $_GET["code"];

$Payload = [
    "code" => $DiscordCode,
    "client_id" => "1212475406834208788",
    "client_secret" => "pJO_-5Z6V6y5TPQFhQz7kfl7VdWWgnUf",
    "grant_type" => "authorization_code",
    "redirect_uri" => "http://localhost:8000/src/server/php_files/wapurpages/OAuth/Process-Oauth.php",
    "scope" => "identify%20guilds"
];


$BuiltPayload = http_build_query($Payload);
$Discord_URL = "https://discordapp.com/api/oauth2/token";

$Curl = curl_init();
curl_setopt($Curl, CURLOPT_URL, $Discord_URL);
curl_setopt($Curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($Curl, CURLOPT_POST, true);
curl_setopt($Curl, CURLOPT_POSTFIELDS, $BuiltPayload);
curl_setopt($Curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($Curl, CURLOPT_SSL_VERIFYHOST, false);

$CurlResult = curl_exec($Curl);

$CurlResult = json_decode($CurlResult, true);

$AccessToken = $CurlResult["access_token"];
$DiscordUser_URL = "https://discordapp.com/api/users/@me";
$Header = array("Authorization: Bearer $AccessToken", "Content-Type: application/x-www-forms-urlencoded");

$Curl = curl_init();
curl_setopt($Curl, CURLOPT_URL, $DiscordUser_URL);
curl_setopt($Curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($Curl, CURLOPT_POST, false);
curl_setopt($Curl, CURLOPT_HTTPHEADER, $Header);
curl_setopt($Curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($Curl, CURLOPT_SSL_VERIFYHOST, false);

$CurlResult = curl_exec($Curl);
$CurlResult = json_decode($CurlResult, true);

session_start();

$_SESSION["Logged_In"] = true;
$_SESSION["User_Data"] = [
    "Name" => $CurlResult["username"],
    "User_Id" => $CurlResult["id"],
    "Avatar" => $CurlResult["avatar"]
];

header("Location: ../Profile.php")
?>