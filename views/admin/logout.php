<?php

include "./includes/fonction.php";
session_start();
session_unset();
session_destroy();
header('Location: http://localhost/dashboard/voitures');

?>