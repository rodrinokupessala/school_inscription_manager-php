 <?php
require_once "./../config/header.php";



?>
 <body>
     
<div class="sidebar">
  <div class="logo-details">
    <a href="#"><i class="bx bx-book"></i>
<span class="logo_name JS">JS</span>
</a>
  </div>
 <ul class="nav-links">
   <li>
<a href="#">
<i class="bx bx-grid-alt"></i>
<span class="link_name">Dashboard</span>
</a>
   </li>

 

   <li>
  <a href="#">
  <i class="bx bx-user"></i>
  <span class="link_name">Users</span>
  </a>
   </li>
 

   <li>
<a href="#">
<i class="bx bx-heart"></i>
<span class="link_name">Favorite</span>
</a>
   </li>

   <li>
<a href="#">
<i class="bx bx-cog"></i>
<span class="link_name">Settings</span>
</a>
   </li>

   <li>
<a href="#">
<i class="bx bx-log-out"></i>
<a href="auth/logout.php"><span class="link_name" >Log out</span></a>

</a>
   </li>
 </ul>
</div>
<!--home content-->
<section class="home-section">

  <nav>
    <div class="sidebar-buttom">
      <i class="bx bx-menu sidebarBtn"></i>
      <span class="dashboard">Dashboard</span>
    </div>
    <div class="search-box">
      <input type="text" name="" value="" placeholder="Search...">
      <i class="bx bx-search"></i>
    </div>
    <div class="profile-details">
  <img src="./../img/user.jpg" alt="Logo">
      <span class="admin_name"><?php echo htmlentities( $_SESSION['user']);?></span>
      <i class="bx bx-chevron-down"></i>
    </div>
  </nav>


  <div class="home-content">
    <div class="overview-boxes">

      <div class="box">
        <div class="left-side">
          <div class="box_topic">Order List</div>
          <div class="number">40,878</div>
          <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class="bx bxs-cart-alt cart"></i>
      </div>


      <div class="box">
        <div class="left-side">
          <div class="box_topic">Order List</div>
          <div class="number">40,878</div>
          <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class="bx bxs-cart-alt cart"></i>
      </div>

      <div class="box">
        <div class="left-side">
          <div class="box_topic">Order List</div>
          <div class="number">40,878</div>
          <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class="bx bxs-cart-alt cart"></i>
      </div>

      <div class="box">
        <div class="left-side">
          <div class="box_topic">Order List</div>
          <div class="number">40,878</div>
          <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class="bx bxs-cart-alt cart"></i>
      </div>

    </div>
    <div class="material-boxes">
</div>
</section>


 </body>
 <?php
 require_once "./../config/footer.php";