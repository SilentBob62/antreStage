<?php

session_destroy();
echo '<div class="center margeTopGrand">Vous êtes à présent déconnecté </div>';
header("refresh:1,url=index.php?action=connect");
?>