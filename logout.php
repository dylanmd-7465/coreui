<?php
session_start();
session_destroy();
 header("Location: index.php?sw=3");
?>