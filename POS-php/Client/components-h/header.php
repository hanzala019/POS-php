
<head>
<style>
  <?php include "style.css"; ?>
 </style>
</head>

<body class="bg">
<div class="nav">
  <div class="logo">
    <div>
      <h1>LOGO</h1>
    </div>
  </div>

  <div class="link">
      <div id="dashboard">
        <h1 >  Dashboard</a></h1>
      </div>
      <div id="staff">
        <h1 > Staff</h1>
      </div>
      <div id="sales">
        <h1 >   Sales</h1>
      </div>
  </div>

  <div class="login">
    <div>
      <h1>Login</h1>
    </div>
  </div>
</div>

<script>
  const salesBtn = document.querySelector("#sales");
  const dashboardBtn = document.querySelector("#dashboard");
  const staffBtn  = document.querySelector("#staff");

  let salesPage = false;
  let dashboardPage = false;
  let staffPage = false;

  salesBtn.addEventListener("click", ()=>{
  let salesPage = true;
  let dashboardPage = false;
  let staffPage = false;
  
  salesBtn.style.backgroundColor = "red";

  })


</script>
  
  