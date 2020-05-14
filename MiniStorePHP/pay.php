<?php 
       
  
       addTransaction();
 

// the function requests checkout page, 
// If the result of the response was successfully, the function redirect to payment page
// If the result of the response was failed, the function redirect to error page with message

function addTransaction(){
  $amount = $_POST["amount"];
  $currencyCode = $_POST["currencyCode"];
  $customerEmail = $_POST["customerEmail"];
  $customerName = $_POST["customerName"];
  $customerPhone = $_POST["customerPhone"];
  $customerCountry = $_POST["customerCountry"];
  $lang = $_POST["lang"];
  $note = $_POST["note"];


$url = 'https://maktapp.credit/v3/AddTransaction';
$data = array(
'token'           => 'E4B73FEE-F492-4607-A38D-852B0EBC91C9',
'currencyCode'    => $currencyCode,
'orderId'         => 123, 
'amount'          => $amount,
'customerEmail'   => $customerEmail,
'customerName'    => $customerName,
'customerPhone'   => $customerPhone,
'customerCountry' => $customerCountry,
'lang'            => $lang,
'note'            => $note,
);

$response = curl_post( $url , $data );
$data_json_decode = json_decode($response);
$result = $data_json_decode->{'result'};

check_response( $result );
}
function curl_post($url, array $post = NULL, array $options = array())
{
    $defaults = array(
        CURLOPT_POST           => 1,
        CURLOPT_HEADER         => 0,
        CURLOPT_URL            => $url,
        CURLOPT_FRESH_CONNECT  => 1,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_FORBID_REUSE   => 1,
        CURLOPT_TIMEOUT        => 500,
        CURLOPT_POSTFIELDS     => http_build_query($post)
    );
    $ch = curl_init();
    curl_setopt_array($ch, ($options + $defaults));
    if( ! $result = curl_exec($ch))
    {
        trigger_error(curl_error($ch));
    }
    curl_close($ch);
    return $result;
}

function check_response($result){
    
  switch ($result){
      
      case -1:
          $url = "/fatora/error.php";
          $msg = "Unauthorized API key is wrong, No merchant for this token";
          break;
      case -2:
        $url = "/fatora/error.php";
          $msg = "Not Found -- The specified orderId could not be found.";
          break;
      case -3:
        $url = "/fatora/error.php";
        $msg = "Not Support -- The currency requested is not support by merchant`s application";
          break;
      case -6:
        $url = "/fatora/error.php";
        $msg = "Not Found -- The specified process could not be found, and could not get new payment.";
          break;
      case -8:
        $url = "/fatora/error.php";
          $msg = "Invalid -- Token is not valid guid.";
          break;
      case -10:
        $url = "/fatora/error.php";
        $msg = "Bad Request -- Your request is invalid, parameters requested are not found.";
          break;
      case -20:
        $url = "/fatora/error.php";
        $msg = "Not Found -- There is not Merchant`s data aginst currency requested.";
          break;
      case -21:
        $url = "/fatora/error.php";
        $msg = "Not Support -- payment getway not support void payment";
          break;
      default:
          $url = $result;
          $msg = "success";
          break;
  }
   if ($msg == "success"){
  echo "
  <script type=\"text/javascript\">
 
  window.location.href ='".$url."'
  </script>";
   }
   else{
    echo "
    <script type=\"text/javascript\">
   
    window.location.href ='".$url."?msg=".$msg."'
    </script>";

   }
}
