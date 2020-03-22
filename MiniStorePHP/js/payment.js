$(document).ready(function(){

	$(".btn-pay").on('click', pay);

	// The function pay() is called when the customer clicks on pay button,
	// the function initializes new order of customer 
	// and save it in database as waiting for complete payment process 
	// then after the order has a unique number, the function requests checkout page, 
	// If the result of the response was successfully, the function redirect to payment page
	// If the result of the response was failed, the function redirect to error page with message

function pay() {    
     //1. create new customer`s order with unique number,
    // save this order in database with status wait
    //  ...... your code is here for save order....//

    //2. request checkout page
	var dataToPost = {
	"token": "5BC4B469-1EC0-4222-AF1F-7CE632F29A23",
	"FcmToken ":"XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
	"currencyCode": $("#currencyCode").val(),
	"orderId": Math.random(),
	"amount": $("#amount").val(),      
	"customerEmail": $("#customerEmail").val(),
	"customerName":$("#customerName").val(),
	"customerPhone":$("#customerPhone").val(),
	"customerCountry":$("#customerCountry").val(),
	"lang": $("#lang").val(),
	"note": $("#note").val(),               
	  };

    $.ajax({            
    url: 'https://maktapp.credit/v3/AddTransaction',
    data: dataToPost,
    type: "POST",
    dataType: "json",
   
    success: function (res) {      
    		/*
            The above request will returns JSON structured if all parameters are valid like this:
            { 
                "result": "https://maktapp.credit/pay/MCPaymentPage?paymentID=XXXXXXXXXX" 
            }
           The above request will returns JSON structured if one parameter is null or not valid like this:
            { 
                "result": x 
            } [-1, -2, -3, -6, -8, -10, -20, -21 ]
            */

            // check the result of response if success then redirect to payment page
           //  else show error page with error message
    		var response = CheckResponseStatus(res.result);
    		 
    		 if (response == "success")
             	 window.location.href = res.result;   
            else
                  window.location.href = "error.php?error="+response;                        
        },
    error: function (result) {      
    		             
            alert("error: " + result);
        }
    });        
}

 // this function returns the reasons of request failure 
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
        //alert(msg);
        
        return msg;
} 

});
