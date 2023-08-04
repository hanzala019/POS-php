<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style><?php include "style.css" ?> </style>
</head>
<body>
    <!--Dashboard-->
    <div class="diver"  >
    <p class="logo">LOGO</p>
    </div>
    <!--End of Dashboard-->
    <div class="stock">
    <div class="container ">
  <form >
<div>
<label for="name">Product Name</label>
    <input type="text" id="fname"  placeholder="Product name">
</div>
    
<div>
<label for="tname">Type</label>
    <input type="text" id="tname"  placeholder="Type">
</div>
    

    <div>
        <label for="quant">Quantity</label>
    <input type="int" id="quant"  placeholder="Quantity">
</div>

    <div>
    <label for="pric">Price</label>
    <input type="double" id="pric"  placeholder="Price">
    </div>

    <input type="submit" value="Submit">

  </form>
</div>
    </div>
</body>
</html>