<?php

require_once __DIR__.'/vendor/autoload.php';


$controller = new App\Controller\ProductController();
$controller->handleRequest();


//$api = new RestClient([
//    'base_url' => "https://www.itccompliance.co.uk/recruitment-webservice/api/",
//    //'format' => "json",
//    // https://dev.twitter.com/docs/auth/application-only-auth
//    //'headers' => ['Authorization' => 'Bearer '.OAUTH_BEARER],
//]);
//
//$result = $api->get("list");
//
//
//
//
//
//if($result->info->http_code == 200) {
//    $result = $result->decode_response();
//
//    if (property_exists($result, "error")) {
//        throw new Exception($result->error);
//    }
//
//    return $result;
//} else {
//    throw new Exception('There was an error with the service, please try again later.');
//}



//if($result->info->http_code == 200) {
//    //var_dump($result->decode_response());
//
//    $result = $result->decode_response();
//
//    if (property_exists($result, "error")) {
//        throw new Exception($result->error);
//    }
//
//    var_dump($result);
//
//
//} else {
//    throw new Exception("It's been an error with the service, please try again later.");
//}




?>
