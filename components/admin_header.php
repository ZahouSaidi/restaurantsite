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

   <section class="flex">

      <a href="dashboard.php" class="logo">panneau<span> d'administration</span></a>

      <nav class="navbar">
         <a href="dashboard.php">maison</a>
         <a href="products.php"> produits</a>
         <a href="placed_orders.php"> commandes</a>
         <a href="admin_accounts.php">administrateurs</a>
         <a href="users_accounts.php">utilisateurs</a>
         <a href="messages.php">messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="update_profile.php" class="btn">mettre à jour <br> le profil</a>
         <div class="flex-btn">
            <a href="admin_login.php" class="option-btn">connecter</a>
            <a href="register_admin.php" class="option-btn">s'inscrire</a>
         </div>
         <a href="../components/admin_logout.php" onclick="return confirm('vous déconnecter de ce site?');" class="delete-btn">Se déconnecter</a>
      </div>

   </section>

</header>