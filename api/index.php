<?php

$smartStartUserName = $_REQUEST['username'];
$smartStartPassword = $_REQUEST['password'];
$accessToken = false;
$accountID = false;

login($smartStartUserName, $smartStartPassword);

function login($user, $pass)
{
    global $accessToken;
    global $accessTokenPath;
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"https://www.vcp.cloud/v1/auth/login");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-us) AppleWebKit/531.9 (KHTML, like Gecko) Version/4.0.3 Safari/531.9");
    curl_setopt($ch, CURLOPT_POSTFIELDS,
                http_build_query(['username'=>$user, 'password'=>$pass]));


    $response = curl_exec($ch);
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    list($header, $body) = explode("\r\n\r\n", $response, 2);
    curl_close ($ch);

    // Further processing ...

    $body = json_decode($body);

    $accessToken = $body->results->authToken->accessToken ?? false;
    $accountID = $body->results->user->accountId ?? false;

    if(!$accessToken){
        print_r(json_encode($body));
    }
    else {
        getDevies($accessToken, $accountID);
    }
}



function getDevies($accessToken, $accountID)
{
    $apiurl = "https://www.vcp.cloud/v1/devices/search/null?limit=100&deviceFilter=null&sortCol&sortDir=desc&accountId=" . $accountID;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$apiurl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data),
        'Authorization: Bearer ' . $accessToken,
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-us) AppleWebKit/531.9 (KHTML, like Gecko) Version/4.0.3 Safari/531.9");

    $response = curl_exec($ch);

    curl_close ($ch);

    print_r($response);
}
