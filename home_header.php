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
?>

<header class="header">

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo"><i class='fa fa-file' style='font-size:24px'></i> Question Paper Generator</a>

         <nav class="navbar">
            <a href="login.php">Login</a>
         </nav>
      </div>
   </div>

</header>