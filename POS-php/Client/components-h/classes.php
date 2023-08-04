<?php   
// Staff and Attendence classes are used in staff.php

        class Staff {
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

        
            $staff1 = new Staff("jami","night",50);
            $staff2 = new Staff("adnan","day",60);
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
        
// end of staff related classes

// Transaction class is used in sales.php

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

// end of sales.php related classes

// connection to db

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=POS', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $pdo->prepare('SELECT * FROM transaction');
$result->execute();

$transactions = $result->fetchAll(PDO::FETCH_OBJ);

?>