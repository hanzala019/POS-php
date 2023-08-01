<!--Buyers Dashboard-->
<!--Product Function-->
<?php class Product {
    public $name;
    public $id;
    public $types;
    public $quantity;
    public $price;
    
    public function randomNumGen(){
       
       
            $ranStr = rand(10000, 99999);
        
        return $ranStr;
    }

    function __construct($name,$quantity,$price,$types) {
        $this->name = $name;
        $this->id = $this->randomNumGen();
        $this->quantity = $quantity;
        $this->price = $price;
        $this->types = $types;

       
      }

    }

    $pr1 = new Product("Nigga burger",50,200,"Burger");
    $pr2 = new Product("Moo burger",40,120,"Burger");
    $pr3 = new Product("Noob burger",50,100,"Burger");
    $pr4 = new Product("chikne burger",40,180,"Burger");
    $pr5 = new Product("choko Pizza",40,1800,"Pizza");
    $pr6 = new Product("moo Pizza",40,1900,"Pizza");
    $pr7 = new Product("pepe Pizza",40,800,"Pizza");
    $pr8 = new Product("mojo Pizza",40,700,"Pizza");
    $pr9 = new Product("SHake Sadi",40,60,"Shake");
    $pr10 = new Product("moo SHake ",40,70,"Shake");
    $pr11 = new Product("Noob Shake",40,30,"Shake");
    $pr12 = new Product("straw SHake ",40,70,"Shake");
    

    $prarr = [$pr1,$pr2,$pr3,$pr4,$pr5,$pr6,$pr7,$pr8,$pr9,$pr10,$pr11,$pr12];
   

?>
<!--End of Product Function-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "style.css" ?> </style>
    <script ><?php include "func.js" ?></script>
</head>
<body>

    <!--Dashboard-->
    <div class="diver"  >Fahal</div>
    <!--End of Dashboard-->
    <!--Left side board-->
    <div class="board">
     <!--Left side Sub board-->   
    <div class="downw">
        <!--Product list board-->
        <div class="upnigga">
        <!--Search Bar-->
        <input type="text" placeholder="Search" style="text-align:center; " class="searchs">
        <!--Discount Button-->
        <button class="dico">Discount</button>
        <!--List of Product-->
        <div class="prodo">
            <?php foreach($prarr as $pr ) :?>

            <button class="box"><p> <?php echo $pr->name; ?></p>
        <p><?php echo $pr->price; ?></p>
            </button>
    <?php endforeach; ?>
        </div>
        <!--End ofList of Product-->
        </div>
        <!--End of Product list board-->
        <!--Start of Downside board-->
        <div class="doyo">
        <!--Sorting option using button-->
        <div class="optio">
          <button class="btn">All</button>
          <button class="btn">Borgir</button>
          <button class="btn">Pijja</button>
          <button class="btn">Juce</button>
          </div>
        </div>
        <!--End of Downside board-->
        
    </div>
    <!--End of leftside board--> 


    <!--Start of Rightside board--> 
    <div class="rig">
        <!--Start of Upside board--> 
        <div class="super">
         <!--Order Table--> 
            <table class="ninn">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Nigga Burger</td>
                <td>150</td>
                <td>
                    <form>
                    <div class="value-button" id="decrease" >-</div>
                    <input type="number" id="number" value="1" />
                    <div class="value-button" id="increase" >+</div>
                    </form>
                    
                </td>
                <td>150</td>
            </tr>
            <tr>
                <td>Moo Burger</td>
                <td>120</td>
                <td>
                    <form>
                    <div class="value-button">-</div>
                    <input type="number" id="number" value="1" />
                    <div class="value-button" id="increase" >+</div>
                    </form>
                   
                </td>
                <td>120</td>
            </tr>
            </table>
         </div>  
        <!--Start of Downside board-->     
        <div class="monke">mone</div>
    
    </div>
    

</body>
    <script>
        const table = document.querySelector(".ninn");
        
        table.addEventListener('click', function(e){
            
            if(e.target.innerText == '+'){
                e.target.parentElement.querySelector("input").value++;
            } 
            if(e.target.innerText == '-'){
                e.target.parentElement.querySelector("input").value--;
            }

            if(e.target.parentElement.querySelector("input").value <= 0){
              e.target.parentElement.parentElement.parentElement.style.display = 'none';
            }
            // console.log(e.target.parentElement.querySelector("input"));
        })

        
        
    </script>
</html>