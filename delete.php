<?php
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    require_once "config.php";
    $sql = "DELETE FROM users WHERE id = ?";

    if($stmt = $link->prepare($sql)){
      $stmt->bind_param("i",$_GET['id']);
      if ($stmt->execute()) {
        header("location: index.php");
        exit();
      }else {
        echo "Error ! Intente más tarde";
      }
    }
    $stmt->clese();
    $link->close();
  }else{
    echo "Error! intente más tarde";
  }
?>
