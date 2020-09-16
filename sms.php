<?php
$mobile="7976584519";
$message="test message";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8560839021 &Password=rudresh69 &Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=saksh3i7uVmnZgjBhMN5WDCFQ") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>