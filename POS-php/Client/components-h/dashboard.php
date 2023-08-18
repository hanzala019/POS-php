
<?php
include './header.php';
?>

<div class="header-list">
       
            <div id="today"> Today </div>
            <div id="monthly"> Monthly </div>
            <div id="yearly"> Yearly </div>
       
</div>






</body>

<script>
  const todaybtn = document.querySelector("#today");
  const monthlybtn= document.querySelector("#monthly");
  const yearlybtn  = document.querySelector("#yearly");


  window.addEventListener("load", () => {
    todaybtn.style.color = '#FFFFFF';
    });
       


  todaybtn.addEventListener("click", ()=>{
   
    todaybtn.style.color = '#FFFFFF';
    monthlybtn.style.color = '#a09b9b';
    yearlybtn.style.color = '#a09b9b';
  })

  monthlybtn.addEventListener("click", ()=>{
   
   todaybtn.style.color = '#a09b9b';
   monthlybtn.style.color = '#FFFFFF';
   yearlybtn.style.color = '#a09b9b';
 })

 yearlybtn.addEventListener("click", ()=>{
   
   todaybtn.style.color = '#a09b9b';
   monthlybtn.style.color = '#a09b9b';
   yearlybtn.style.color = '#FFFFFF';
 })




</script>
  
  