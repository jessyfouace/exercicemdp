<?php

  if (isset($_POST['mdp']) AND $_POST['mdp'] == "motdepasse") {
    echo "Bienvenu";
  } elseif (isset($_POST['mdp']) AND $_POST['mdp'] !== "motdepasse") {
    header('location:index.php');
  } else {
    header('location:index.php');
  }

?>
