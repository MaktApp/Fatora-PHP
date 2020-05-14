<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiniStore PHP</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8"><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <style>
        .in-details h1 {
            font-family: 'A Jannat LT' !important;
            font-style: normal;
            text-align: center;
            color: #5ac99d;
            margin: 40px 0px 45px 0px;
            font-size: 36px;
        }

        .detail-item {
            margin: 5% 0;
            border-radius: 10px;
            padding: 20px 15px;
            border: 1px solid #eee;
            position: relative;
            min-height: 240px;
            font-family: 'A Jannat LT' !important;
        }

            .detail-item .img-cont {
                width: 200px;
                height: 200px;
                vertical-align: top;
                display: inline-block;
                position: absolute;
                top: 20px;
                right: -100px;
                overflow: hidden;
                border-radius: 10px;
                box-shadow: 0px 2px 20px #eee;
                border: 1px solid #f9f9f9;
            }

                .detail-item .img-cont img {
                    width: 100%;
                    height: 100%;
                }

            .detail-item .content {
                margin-right: 105px;
                vertical-align: top;
            }

                .detail-item .content h3 {
                    margin: 10px 0 15px;
                    color: #555;
                    font-family: 'A Jannat LT' !important;
                }

                .detail-item .content p {
                    line-height: 24px;
                    color: #888;
                }

            .detail-item .pay-cont {
                direction: ltr;
            }

            .detail-item .btn-pay {
                direction: rtl;
                background-color: #3294d1;
                color: #fff;
                margin: 10px 0 0 !important;
                width: 180px;
                font-family: 'A Jannat LT' !important;
                font-size: 16px;
                box-shadow: 0px 3px 10px rgba(50, 148, 209, 0.3);
            }

            .detail-item .price {
                display: inline-block;
                width: auto;
                position: absolute;
                top: 0;
                left: 15px;
                background-color: transparent;
            }

                .detail-item .price .val {
                    color: #5ac99d;
                    font-size: 36px;
                }

                .detail-item .price .currency {
                    color: #999;
                }

        .detail-item {
            margin: 5% 0;
            border-radius: 10px;
            padding: 20px 15px;
            border: 1px solid #eee;
            position: relative;
            min-height: 240px;
            font-family: 'A Jannat LT' !important;
        }

            .detail-item .img-cont {
                width: 200px;
                height: 200px;
                vertical-align: top;
                display: inline-block;
                position: absolute;
                top: 20px;
                right: -100px;
                overflow: hidden;
                border-radius: 10px;
                box-shadow: 0px 2px 20px #eee;
                border: 1px solid #f9f9f9;
            }

                .detail-item .img-cont img {
                    width: 100%;
                    height: 100%;
                }

            .detail-item .content {
                margin-right: 105px;
                vertical-align: top;
                text-align: right;
            }

                .detail-item .content h3 {
                    margin: 10px 0 15px;
                    color: #555;
                    font-family: 'A Jannat LT' !important;
                }

                .detail-item .content p {
                    line-height: 24px;
                    color: #888;
                }

            .detail-item .pay-cont {
                direction: ltr;
            }

        @media(max-width:480px) {
            .detail-item {
                display: flex;
                flex-wrap: wrap;
                border-bottom: 1px solid #ccc;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }

                .detail-item .img-cont {
                    width: 100%;
                    position: static;
                    margin-bottom: 30px;
                }

                    .detail-item .img-cont img {
                        object-fit: contain;
                    }

                .detail-item .price {
                    position: static;
                    margin: 0 20px;
                }

                .detail-item .content {
                    margin: 0;
                    width: 100%;
                }

                .detail-item .btn-pay {
                    width: 160px;
                }
        }
    </style>



</head>
    
    <body >
<section class="in-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>Items</h1>
                    
                    <div class="detail-item">
                        <div class="img-cont">
                            <img src="images/lapholder.jpg" alt="material">
                        </div>
                        <div class="content">
                            <h3>Laptop Holder</h3>
                            <p>DO YOUR DAILY WORKS EVEN ON TOP OF YOUR BED! THIS EXPANSION SERVES AS A GREAT BASE FOR YOUR LAPTOPS, NOTEBOOKS AND OTHER WORK MATERIALS. ALSO THE ADJUSTABLE AND FOLDABLE LEGS ARE MADE FROM HIGH QUALITY LIGHT WEIGHT ALUMINUM. ALLOWS USE OF PORTABLE COMPUTERS, IPAD, READING BOOKS OR NEWSPAPERS IN BED WHILE LYING DOWN OR SITTING.</p>
                        </div>
                        <div class="pay-cont">
                            
                            

    <form action="pay.php" name="paymet_form" method="post"  class = "form" accept-charset="UTF-8">
     <input type="hidden" id="amount" name="amount" value="120">
    <input type="hidden"  id="currencyCode" name="currencyCode" value="QAR"> 
    <input type="hidden"  id="customerEmail" name="customerEmail" value="testPament@testPayment.com">
    <input type="hidden"  id="customerName" name="customerName" value="gust">
    <input type="hidden"  id="customerPhone" name="customerPhone" value="+9639449871">
    <input type="hidden"  id="customerCountry" name="customerCountry" value="QATAR">
    <input type="hidden"  id="lang" name="lang" value="en">
    <input type="hidden"  id="note" name="note" value="Demo of Payment">
    
    <button class="btn btn-pay" name="submit" type="submit"><i class="fa fa-money"></i> Pay </button>
  
  </form>

    
    </div>
                        <div class="price">
                            <span class="val">120</span>
                            <span class="currency">QAR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var a=n[o];" "==a.charAt(0);)a=a.substring(1);if(0==a.indexOf(e))return a.substring(e.length,a.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],wpSidebar=document.getElementById("adminmenuwrap"),wpTopBarRight=document.getElementById("wp-admin-bar-top-secondary");if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;} .upgrade-btn-sidebar {display: none;} #wp-toolbar .top-bar-upgrade-btn {width: 52px; height: 46px !important; padding: 0 !important;} .top-bar-upgrade-btn__text {display: none;} .dashicons-star-filled.top-bar-upgrade-btn__icon::before {font-size: 28px; margin-top: 10px; width: 28px; height: 28px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; right: 0; display: flex; padding: 0 5%}} @media only screen and (max-width: 960px) {.upgrade-btn-sidebar {border-radius: 0 !important; padding: 10px 0 !important; margin: 0 !important;} .upgrade-btn-sidebar__icon {display: block !important; margin: auto;} .upgrade-btn-sidebar__text {display: none;}}  .web-hosting-90-off-image {max-width: 90%; margin-top: 20px;} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 12px -6px #cc292f; max-width: 350px; border: 0; border-radius: 3px; background-color: #6747c7 !important; padding: 15px 55px !important;  margin-bottom: 48px; font-size: 14px; font-weight: 800; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: rgba(103,71,199, 0.9) !important;} .upgrade-btn-sidebar {text-align:center;background-color:#ff4546;max-width: 350px;border-radius: 3px;border: 0;padding: 12px; margin: 20px 10px;display: block; font-size: 12px;color: #ffffff;font-weight: 700;text-decoration: none;} .upgrade-btn-sidebar:hover, .upgrade-btn-sidebar:focus, .upgrade-btn-sidebar:active {background-color: rgba(255,69,70, 0.9); color: #ffffff;} .upgrade-btn-sidebar__icon {display: none;} .top-bar-upgrade-btn {height: 100% !important; display: inline-block !important; padding: 0 10px !important; color: #ffffff; cursor: pointer;} .top-bar-upgrade-btn:hover, .top-bar-upgrade-btn:active, .top-bar-upgrade-btn:focus {background-color: #ff4546 !important; color: #ffffff !important;} .top-bar-upgrade-btn__icon {margin-right: 6px;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Upgrade Now</button>',(notification=notification[0]).setAttribute("style","background-color: #f8f8f8; border-left-color: #6747c7 !important;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Limited Time Offer",h1Tag.setAttribute("style","color: #32454c;  margin-top: 48px; font-size: 48px; font-weight: 700;");var h2Tag=document.createElement("H2");h2Tag.innerHTML="From $0.79/month",h2Tag.setAttribute("style","color: #32454c; margin: 20px 0 45px 0; font-size: 48px; font-weight: 700;"),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Donâ€™t miss the opportunity to enjoy up to <strong>4x WordPress Speed, Free SSL and all premium features</strong> available for a fraction of the price!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 18px; font-weight: 300; color: #6f7c81; margin-bottom: 20px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/wp-inject-default-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0];wpSidebar.insertAdjacentHTML("beforeend",'<a href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-sidebar" target="_blank" class="upgrade-btn-sidebar"><span class="dashicons dashicons-star-filled upgrade-btn-sidebar__icon"></span><span class="upgrade-btn-sidebar__text">Upgrade</span></a>'),wpTopBarRight.insertAdjacentHTML("beforebegin",'<a class="top-bar-upgrade-btn" href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-top-bar" target="_blank"><span class="ab-icon dashicons-before dashicons-star-filled top-bar-upgrade-btn__icon"></span><span class="top-bar-upgrade-btn__text">Go Premium</span></a>')}</script><script type="text/javascript" src="https://a.opmnstr.com/app/js/api.min.js" data-campaign="f6brbmuxflyqoriatchv" data-user="71036" async></script></body>        
</html>
  </body>
</html>
