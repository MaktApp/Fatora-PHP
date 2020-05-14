<!DOCTYPE html>
<html lang="en">
    <head>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiniStorePHP</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="images/fatora.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/fatora.ico" type="image/x-icon" />
    
    <meta charset="UTF-8"><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<style>
    
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
.fa-6 {
    font-size: 7cm;
    color: rgb(255,0,0);
}

</style>
</head>
    
    <body>
   <div class = "center">
       
       
   </div>
    <div class = "row" >
        <div class = "col-md-4">
           
	   </div>
	   <div class = "col-md-4">
	       <i class="fa fa-times-circle-o fa-6" aria-hidden="true"></i>
           <h3 class = "center">Failure has done!</h3>
           <span id = "error" class = "center"> 
           <?php 
                if ( isset($_REQUEST['msg']))
                {
                    echo $_REQUEST['msg'];
                }
                ?>
           </span>
	   </div>
	   <div class = "col-md-4">
	       
	   </div>
	   </div>
		
    </body>
 </html>
