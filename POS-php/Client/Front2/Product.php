<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style><?php include "style.css" ?> </style>
    <?php
    
        function Db_connect(){
                $DBHOST="localhost";
                $DBNAME="pos";
                $DBUSER ="root";
                $DBPASS="";
                $DBDRIVER="mysql";
                try {
                    $conn = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASS);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //echo "Connected successfully";
                    return $conn;
                  } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                  }

        }  
        function query($query,$data=array()){
            $con=  Db_connect();
            $stl = $con->prepare($query);
            $check = $stl->execute($data);
            if($check){
                $result=$stl->fetchAll(PDO::FETCH_ASSOC);
                if (is_array($result) && count($result)>0){
                   return $result;
                }
            }
            return false;
        }
     if($_SERVER['REQUEST_METHOD']=="POST"){
            $_POST['Id']= rand(10000, 99999);
            $query="insert into product (Name , Types,Quantity,Price,Id) values (:Name,:Types,:Quantity,:Price,:Id)";
            query($query,$_POST);
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
</div>
    
<div>
<label for="tname">Type</label>
    <input type="text" id="tname" name="Types" placeholder="Type">
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