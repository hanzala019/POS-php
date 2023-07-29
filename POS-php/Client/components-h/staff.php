<?php class Staff {
    public $name;
    public $id;
    public $shift;
    public $salary;
    
    public function randomNumGen(){
       
       
            $ranStr = rand(10000, 99999);
        
        return $ranStr;
    }

    function __construct($name,$shift,$salary) {
        $this->name = $name;
        $this->id = $this->randomNumGen();
        $this->shift = $shift;
        $this->salary = $salary;

       
      }

    }

    class Attendence extends Staff {
        public $CurrentDate;
        public $EntryTime;
        public $leavingTime;

        function __construct($name,$shift,$salary, $EntryTime,$leavingTime) {
            $this->CurrentDate = date('d/m/Y'); 
            $this->EntryTime = $EntryTime;
            $this->leavingTime = $leavingTime;

            // if($shift == 'day') {
            //     $EntryTime = "9:00am";
            //     $leavingTime = "3:00pm";
            // }
    
            parent::__construct($name,$shift,$salary);
          }
    }

    $staff1 = new Staff("Md jami","night",50);
    $staff2 = new Staff("adnan bhai","day",60);
    $att1 = new Attendence("jami","night",50,"4:02pm","10:11pm");
    $att2 = new Attendence("adnan","day",60,"10:00am","4:05pm");
    $att3 = new Attendence("jami","night",50,"4:11pm","10:10pm");
    $att4 = new Attendence("adnan","day",60,"10:04am","4:00pm");
    $att5 = new Attendence("jami","night",50,"3:57pm","10:04pm");
    $att6 = new Attendence("adnan","day",60,"10:00am","4:01pm");
    $att1->id = $att3->id = $att5->id =  $staff1->id;
    $att2->id = $att4->id = $att6->id =  $staff2->id;

    $staffArr = [$staff1,$staff2];
    $AttArr = [$att1,$att2,$att3,$att4,$att5,$att6];

?>
<html>
<?php
include './header.php';
?>
<div class="container">
    <div class="right">

        <div >
            <input type="text" placeholder="E.g Jami weak ">
            <button> Search</button>
        </div>

        <div  class="right-content" style="border: 2px ridge black; color: #333;">
                <div>
                    <h2> Name</h2>
                </div>
                <div>
                <h2> Staff Id</h2>
                </div>
                <div>
                <h2> Shift</h2>
                </div>
                <div>
                <h2> Salary</h2>
                </div>
                
                
                
        </div>

        <?php foreach($staffArr as $staff) : ?>
            
            <div  class="right-content" >
                <div>
                    <h2> <?php echo $staff->name; ?></h2>
                </div>
                <div>
                <h2> <?php echo $staff->id; ?></h2>
                </div>
                <div>
                <h2> <?php echo $staff->shift; ?></h2>
                </div>
                <div>
                <h2> <?php echo $staff->salary; ?></h2>
                </div>
        
            </div>
            
        
        <?php endforeach; ?>
    </div>

    <div class="left">
        <div>
            <select class="select" name="Date" id="date">
                <option value="today" >Today</option>
                <option value="week">Week</option>
                <option value="month">Month</option>
                <option value="all">All</option>
            </select>

            <select class="select" name="Attendence" id="attendence">
                <option value="all">All</option>
                <option value="late">Late</option>
                <option value="early">Early</option>
                
            </select>

        </div>

        <div  class="left-content"  style="border: 2px ridge black; color: #fff; margin-top:10ox;">

            <div>
                <h2> Name</h2>
            </div>
            <div>
                <h2> Id</h2>
            </div>
            <div>
                <h2> EntryTime</h2>
            </div>
            <div>
                <h2> leavingTime</h2>
            </div>
            <div>
                <h2>Date</h2>
            </div>
            
        </div>

        <?php foreach($AttArr as $staff) : ?>

         <div  class="left-content" >
                            
            <div>
                <h2> <?php echo $staff->name; ?></h2>
            </div>
            <div>
                 <h2> <?php echo $staff->id; ?></h2>
            </div>
            <div>
                 <h2> <?php echo $staff->EntryTime; ?></h2>
            </div>
            <div>
                <h2> <?php echo $staff->leavingTime; ?></h2>
            </div>
            <div>
                <h2> <?php echo $staff->CurrentDate; ?></h2>
            </div>
                  
         </div>
            
        
        <?php endforeach; ?>
    
    </div>
</div>



</body>
</html>

