<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style><?php include "style.css" ?> </style>
    <?php
    
      include 'func.php';
      $error=[];
     if($_SERVER['REQUEST_METHOD']=="POST"){
            $_POST['Id']= rand(10000, 99999);
            $error = validate($_POST,'product');
            if(empty($error)){
            insert($_POST,'product');
     }
    }
    ?>
    
</head>
<body>
    <!--Dashboard-->
    <div class="diver"  >
    <p class="logo">LOGO</p>
    </div>
    <!--End of Dashboard-->
    <div class="stock">
    <div class="container ">
  <form method="post">
<div>
<label for="name">Product Name</label>
    <input type="text" id="fname" name="Name" placeholder="Product name">
    <?php if(!empty($error['Name'])):?>
        <small><?= $error['Name']?></small><?php endif;?>
</div>
    
<div>
<label for="tname">Type</label>
    <input type="text" id="tname" name="Types" placeholder="Type">
    <?php if(!empty($error['Types'])):?>
        <small><?= $error['Types']?></small><?php endif;?>
</div>
    

    <div>
        <label for="quant">Quantity</label>
    <input type="int" id="quant" name="Quantity" placeholder="Quantity">
</div>

    <div>
    <label for="pric">Price</label>
    <input type="double" id="pric" name="Price" placeholder="Price">
    </div>

    <input type="submit" value="Submit">

  </form>
</div>

    </div>
</body>
</html>