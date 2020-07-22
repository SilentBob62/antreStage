<?php
//Attribution des variables de session
$pseudo = (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : "";
$lvl = (isset($_SESSION['role'])) ? (int) $_SESSION['role'] : 0;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
?>

<header class="red borderBottom">
    <div class="logo">
        <img src="images/logo.png" alt="logo">
    </div>
    <div class="titrePage center ecritureBlanche ecritureGrand"><?php echo $titre ?></div>
    <div class="logo">
    <?php 
    if ($pseudo!=""){ 
            echo '<div class="logo column center">
                    <div class="center ecritureBlanche">'.$pseudo.'</div> 
                    <div class="center"> <a class="ecritureBlanche" href="index.php?action=deconnect">Se déconnecter</a> </div>
                  </div> ';
    }
    ?> </div>
</header>
