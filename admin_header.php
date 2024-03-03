<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}


echo 'Admin Name: ' . $_SESSION['admin_name'] . '<br>';
echo 'Admin Email: ' . $_SESSION['admin_email'] . '<br>';
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin <span style="color: #2ecc71;">Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">products</a>
         <a href="admin_orders.php">orders</a>
         <a href="admin_users.php">users</a>
         <a href="admin_contacts.php">messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Name : <span style="color:#2ecc71;"><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>Email : <span style="color:#2ecc71;"><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         
      </div>

   </div>

</header>