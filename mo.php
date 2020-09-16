<?php
session_start();
$mobile="7014196308";
$message="Thankyou for register on eventoholic";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7014196308&Password=K2836S&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=saksh3i7uVmnZgjBhMN5WDCFQ") ,true);
if ($json["status"]==="success") {
    echo "<script>
        window.location.href='login.php'</script>";
    //your code when send success
}else{
   echo "<script>
        window.location.href='login.php'</script>";
    //your code when not send
}
?>
     