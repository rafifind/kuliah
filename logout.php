<?php
// Simple logout handler for beginners.
session_start();
session_unset();
session_destroy();

header('Location: login.php');
exit;
