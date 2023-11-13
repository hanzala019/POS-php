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
    include 'func.php';
    
    
    
?>
<!--End of Product Function-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "style.css" ?> </style>
    
</head>
<body>
    

    <!--Dashboard-->
    <div class="diver"  >
    <button class="cust">Customer</button>
    </div>
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
            <tbody>
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
            
            </tbody>
            </table>
         </div>  
        <!--Start of Downside board-->     
        <div class="monke">
        <div class="toto">
                Name :
                <input type="text" class="totol" value="Jami" />
            </div>
            <div class="toto">
                Sub Total :
                <input type="number" class="totol" value="1" />
            </div>
            <div class="toto">
                Discount :
                <input type="number" class="totol" value="0" />
            </div>
            <div class="toto">
                Tax :
                <input type="number" class="totol" value="35" />
            </div>
            <div class="toto">
                Total :
                <input type="number" class="totol" value="150" />
            </div>
            <button class="pai">Paid</button>
        </div>
    
    </div>
    

</body>
    <script>
        function get_data(){
            var ajax = new XMLHttpRequest();

          ajax.addEventListener('readystatechange',function(e){
            if(ajax.readyState){
                handle_result(ajax.responseText);
            }
          });
          ajax.open('post','ajax.php',true);
          ajax.send();
        }

        function handle_result(result){

            //sizeOfJSONArrayString = new JSONArray(result).length();
            var obj = JSON.parse(result);
            var mydiv =document.querySelector(".prodo");
            
           if (typeof obj != "undefined"){
            
                for(var i = 0;i<5;i++){
                    mydiv.innerHTML +=obj[i].Name + "<br>";
                }
            }
           
            //mydiv.innerHTML =sizeOfJSONArrayString; 

        }


          function add_item()
    {
          
      }
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

        get_data();
        
    </script>
</html>