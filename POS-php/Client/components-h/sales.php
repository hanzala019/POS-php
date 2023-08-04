<?php include './classes.php';

        $dataPoints = [];
        $index = 0;

     if(isset($_POST["name"]) && $_POST["name"] !='' ) {
        $count = 0;
        for($i = 0; $i< sizeof($transactions); $i++){
            if($_POST["name"] == $transactions[$i]->Name){
                
                $count += $transactions[$i]->Quantity;
                $index = $i;
            } 
        }
        $dataPoints = array( 
            array("y" => $count, "label" => $_POST["name"] ));
     }

        elseif(empty($_POST["name"])) {
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
        
        <?php foreach($transactions as $staff) : ?>
            <?php if(empty($_POST["name"])): ?>
                <div  class="right-content" >
                    
                        <h2>
                            Search A Product
                        </h2>
                    
                </div>
           <?php break; endif; ?>
          <?php if($_POST["name"] == $staff->Name): ?>
                        <div  class="right-content" >
                <div>
                    <h3> <?php echo $staff->Name ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->Id; ?></h3>
                </div>
       
                <div>
                    <h3> <?php echo $staff->Price; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->TransactionId; ?></h3>
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

        <?php foreach($transactions as $staff) : ?>
         <?php if(empty($_POST["name"])): ?>
            
            <div  class="left-content" >
                                
                <div>
                    <h3> <?php echo $staff->Name; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->Id; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->Quantity; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->Price; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->TransactionId; ?></h3>
                </div>

                <div>
                    <h3> <?php echo $staff->Date; ?></h3>
                </div>
                    
            </div>
         <?php elseif($_POST["name"] == $staff->Name): ?>
                        <div  class="left-content" >
                                
                <div>
                    <h3> <?php echo $staff->Name; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->Id; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->Quantity; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->Price; ?></h3>
                </div>
                <div>
                    <h3> <?php echo $staff->TransactionId; ?></h3>
                </div>

                <div>
                    <h3> <?php echo $staff->Date; ?></h3>
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


