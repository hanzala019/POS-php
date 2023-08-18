<?php include './classes.php';
    
    $notEmpty = 0;
  

?>
<html>
<?php
include './header.php';
?>
<form action="staff.php" method="post" >
<div class="container">
    <div class="right">

        
        <div >
            <input type="text" placeholder="E.g Jami weak " name="name">
            <input class="btn" type="submit">
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
           <?php if(empty($_POST["name"])): ?>
            <div  class="right-content" >
                <div>
                    <h2> <?php echo $staff->name ?></h2>
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
          <?php elseif($_POST["name"] == $staff->name): ?>
            <?php $notEmpty = 1; ?>
                        <div  class="right-content" >
                <div>
                   <h1>  <?php echo $staff->name?> </h1>
                  
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
            <?php endif; ?>
       
        <?php endforeach; ?>
        <?php if(isset($_POST["name"]) && $_POST["name"] !='' && $notEmpty == 0): ?>
            <h1 style="text-align: center; margin-top: 100px; color: Crimson;">No Results Found !</h1>
        <?php endif; ?>
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
         <?php if(empty($_POST["name"])): ?>
            
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
         <?php elseif($_POST["name"] == $staff->name): ?>
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
         <?php endif; ?>
        <?php endforeach; ?>
            
    </div>
 </div>        
</form>
</body>

<script>

    

</script>

</html>

