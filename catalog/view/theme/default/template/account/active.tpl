<!DOCTYPE html>  
<html lang="en">  
  
    <head>  
        <!-- BEGIN META -->  
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <meta name="description" content="Active Email">  
        <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       
        <title>  
<?php echo $active_title; ?>
        </title>  

        <style type="text/css">
.container{
 width:500px;margin:250px auto;
 background-color:#fff;
 padding:20px;
 text-align:center;
 font-size:16px;
 -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px;
-moz-box-shadow:0px 0px 20px #333333; -webkit-box-shadow:0px 0px 20px #333333; box-shadow:0px 0px 20px #333333;
}
img{
        margin: 30px auto;
}

.to{
    margin-top: 30px;
    font-size: 30px;
    height: 60px;
    max-width:80%;

}
h2{
    color:#38ADE3;
}
    </style>

    </head>  
  
    <body style="background-color:#F2F7FB;">  
        <div class="container">  
            <div>
                <a href="index.php">
                    <img src="<?php echo $logo; ?>" class="img-responsive">
                </a>
            </div>
        
            <div>
            <p>
                <?php echo $message; ?>
            </p>

            <?php if($state) { ?>
            <p>
                <?php echo $active_message; ?>
            </p>  
            <a href="<?php echo $url; ?>" class="btn btn-success form-control to">
                Proceed Checkout
            </a>
            <?php }else{ ?>
             <a href="<?php echo $url; ?>" class="btn btn-success form-control to">
                Home
            </a>   
            <?php } ?>
        </div>
            
            
        </div>  
    </body>  
    <!-- BEGIN JS -->  
    <script src="js/jquery.js"></script>  

</html>  