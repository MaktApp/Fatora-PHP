<!DOCTYPE html>
<html lang="en">
    <head>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiniStoreJS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="images/fatora.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/fatora.ico" type="image/x-icon" />
    
    <meta charset="UTF-8"><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/payment.js"></script>
	
<script type="text/javascript">
$(document).ready(function(){

/*
    This is requested by Fator gateway after payment has been done,

    This function sends a request to ensure that Fatora gateway which issued it,
    If the result of the response was successfully, the action processes the following:
    1- converting The customer's order into a paid status
    2- show success page with successfull msg
    If the result of the response was failed, the action
    1- returns the error page with failure message
*/

var orderId = getUrlVars()["orderId"];
var checkStatus = getUrlVars()["checkStatus"];

if (checkStatus == undefined) //this parameter has value after checkstatus is done successfully
                             
	{
	var dataToPost = {
				"token": "5BC4B469-1EC0-4222-AF1F-7CE632F29A23",
				"orderId": orderId,			 
			  };

		    $.ajax({            
		    url: 'https://maktapp.credit/v3/CheckStatus',
		    data: dataToPost,
		    type: "POST",
		    dataType: "json",
		   
		    success: function (res) {      
		    
		    /*
                
                The above request will returns JSON structured if Fatora gateway find the payment:

                { 
                    "result": 1,
                    "payment":
                    {
                        "transactionID": "XXXXXXX",
                        "amount": XXXX,
                        "currencyCode":  "XXX",
                        "customerEmail": "XXXX",
                        "customerPhone": "XXXX",
                        "customerName":  "XXXX",
                        "paymentDate":   "XXXX",
                        "paymentstate":  "XXXX" [SUCCESS, PENDING,FAILURE], 
                        "auth" : "XXXX",
                        "mode": "XXX" [Live, Test] ,
                        "ExchangeRate":0,
                        "token":null,
                        "description":"Transation Successfull",
                        "refundState":false,
                        "refundstatus":null,
                        "refundDescription":null,
                        "refundTransactionId":null
                    } 
                }
                Response if Fatora gatway dos not find the payment:
                { 
                    "result": 0
                }
                Response in case one of the request parameters is null or not valid:

                { 
                    "result": X
                } [-1, -2, -3, -6, -8, -10, -20, -21 ]
                                
                */		
		    var response = CheckResponseStatus(res.result);
		    if (res.result == 1)
             /*
             1. confirm  customer`s order status as paid
             order = getOrderById(orderId);
             order.status = "done";
             ............ your code is here to save order.......
             
             2. return success page
            */
             	 window.location.href = "success.html?orderId="+ orderId + "&checkStatus=1";   
            else
                  window.location.href = "error.html?error="+response;                        
		        },
		    error: function (result) {   
		            alert("error: " + result);
		        }
		    });        
	
	}

});

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function  CheckResponseStatus(result)
{
    var msg = "";
    switch (result)
    {   
        case -1:
            msg = "Unauthorized -- API key is invaild(not Valid GUID), or no merchant for this token";
            break;
        case -2:
            msg = "Not Found -- The specified orderId could not be found.";
            break;
        case -3:
            msg = "Not Support -- merchnat application doesn't support the sent currency code.";
            break;
        case -7:
            msg = "Not Found -- there isn't any recurring or autosave payment in Fatora gateway for this merchant with the request parameter.";
            break;
        case -8:
            msg = "Invalid -- Token is not valid guid.";
            break;
        case -10:
            msg = "Bad Request -- required parameters requested aren't sent in request.";
            break;
        case -20:
            msg = "Not Found -- There isn't application data for the merchant for the sent currency in payment gateway.";
            break;
        case -21:
            msg = "Not Support -- payment gateway doesn't support void payment";
            break;
        default:
            msg = "success";
            break;
        }
       
        
        return msg;
} 

</script>
<style>
    
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
.fa-6 {
    font-size: 7cm;
    color: rgb(90,201,157);
}

</style>
</head>
    
    <body>
    
        <div class = "row" >
        <div class = "col-md-4">
           
	   </div>
	   <div class = "col-md-4">
	       <i class="fa fa-check-circle fa-6 center" aria-hidden="true"></i>
           <h3 class = "center">Payment success!</h3>
	   </div>
	   <div class = "col-md-4">
	       
	   </div>
	   </div>
	   
    </body>
 </html>