<?php 
        class Transaction {
            public $name;
            public $id;
            public $types;
            public $quantity;
            public $price;
            public $transactionId;
            public $date;
            public $TotalSales = 0;

            function __construct($name,$quantity,$price,$types,$id) {
                $this->name = $name;
                $this->id = $id;
                $this->quantity = $quantity;
                $this->price = $price;
                $this->types = $types;
                $this->transactionId =  $ranStr = rand(100000, 999999);
                $this->date = date('d/m/Y');
              }
        }

        $pr1 = new Transaction("Chesse burger",5,200,"Burger",11111);
        $pr2 = new Transaction("Beef burger",4,120,"Burger",11110);
        $pr3 = new Transaction("Chesse burger",3,200,"Burger",11111);
        $pr4 = new Transaction("Chicken burger",2,180,"Burger",11113);
        $pr5 = new Transaction("Chesse Pizza",1,800,"Pizza",11114);
        $pr6 = new Transaction("Chicken Pizza",4,900,"Pizza",11115);
        $pr7 = new Transaction("Chicken Pizza",1,900,"Pizza",11115);
        $pr8 = new Transaction("Mexican Pizza",4,700,"Pizza",11117);
        $pr9 = new Transaction("Chocolate Shake",5,60,"Shake",11118);
        $pr10 = new Transaction("Vanilla Shake ",4,70,"Shake",11119);
        $pr11 = new Transaction("Chocolate Shake",1,60,"Shake",11118);
        $pr12 = new Transaction("straw Shake ",6,70,"Shake",11121);
        
    
        $prarr = [$pr1,$pr2,$pr3,$pr4,$pr5,$pr6,$pr7,$pr8,$pr9,$pr10,$pr11,$pr12];

        $dataPoints = [];
        $index = 0;

     if(isset($_POST["name"]) && $_POST["name"] !='' ) {
        $count = 0;
        for($i = 0; $i< sizeof($prarr); $i++){
            if($_POST["name"] == $prarr[$i]->name){
                $prarr[$i]->TotalSales += $prarr[$i]->quantity; 
                $count += $prarr[$i]->quantity;
                $index = $i;
            } 
        }
        $dataPoints = array( 
            array("y" => $count, "label" => $_POST["name"] ));
     }

        elseif(isset($_POST["name"]) && $_POST["name"] == '') {
            $dataPoints = array( 
                array("y" => $pr1->quantity, "label" => $pr1->name ),
                array("y"  => $pr2->quantity, "label" => $pr2->name ),
                array("y"  => $pr3->quantity, "label" => $pr3->name ),
                array("y"  => $pr5->quantity, "label" => $pr5->name ),
                array("y"  => $pr4->quantity, "label" => $pr4->name ),
                array("y"  => $pr6->quantity, "label" => $pr6->name ),
                array("y"  => $pr7->quantity, "label" => $pr7->name )
            );
        }
       

?>

<?php
include './header.php';
?>
<form action="sales.php" method="post" >
<div class="container">
    <div class="right">

        
        <div >
            <input type="text" placeholder="E.g Jami weak " name="name">
            <input class="btn" type="submit">
        </div>
    
        <div  class="right-content" style="border: 2px ridge black; color: #333;">
                <div>
                    <h3> Name</h3>
                </div>
                <div>
                <h3> Staff Id</h3>
                </div>

                <div>
                <h3> Price</h3>
                </div>
                <div>
                <h3>Purchase Id</h3>
                </div>
                
                
        </div>
        
        <?php foreach($prarr as $staff) : ?>
            <?php if($_POST["name"] == ''): ?>
                <div  class="right-content" >
                    
                        <h2>
                            Search A Product
                        </h2>
                    
                </div>
           <?php break; endif; ?>
          <?php if($_POST["name"] == $staff->name): ?>
                        <div  class="right-content" >
                <div>
                    <h3> <?php echo $staff->name ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->id; ?></h3>
                </div>
       
                <div>
                    <h3> <?php echo $staff->price; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->transactionId; ?></h3>
                </div>

            </div>
        
        <?php break; endif; ?>
        <?php endforeach; ?>

        <div class="chart">
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        </div>
        
    </div>

    <div class="left">
        <div>
            <select class="select" name="Date" id="date">
                <option value="today" name='today'>Today</option>
                <option value="week" name='week'>Week</option>
                <option value="month" name='month'>Month</option>
                <option value="all" name='all'>All</option>
            </select>

            <select class="select" name="Attendence" id="attendence">
                <option value="all" name='all'>All</option>
                <option value="late" name='late'>Late</option>
                <option value="early" name='early'>Early</option>    
            </select>
            

        </div>

        <div  class="left-content"  style="border: 2px ridge black; color: #fff; margin-top:10ox;">

            <div>
                <h3> Name</h3>
            </div>
            <div>
                <h3> Id</h3>
            </div>
            <div>
                <h3> Quantity</h3>
            </div>
            <div>
                <h3> Price</h3>
            </div>
            <div>
                <h3>Purchase Id</h3>
            </div>
            <div>
                <h3>Date</h3>
            </div>
            
        </div>

        <?php foreach($prarr as $staff) : ?>
         <?php if( $_POST["name"] == '' ): ?>
            
            <div  class="left-content" >
                                
                <div>
                    <h3> <?php echo $staff->name; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->id; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->quantity; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->price; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->transactionId; ?></h3>
                </div>

                <div>
                    <h3> <?php echo $staff->date; ?></h3>
                </div>
                    
            </div>
         <?php elseif($_POST["name"] == $staff->name): ?>
                        <div  class="left-content" >
                                
                <div>
                    <h3> <?php echo $staff->name; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->id; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->quantity; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->price; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->transactionId; ?></h3>
                </div>

                <div>
                    <h3> <?php echo $staff->date; ?></h3>
                </div>
                    
            </div>
         <?php endif; ?>
        <?php endforeach; ?>
            
    </div>
 </div>        
</form>
</body>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Products"
	},
	axisY: {
		title: "Sales"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>


