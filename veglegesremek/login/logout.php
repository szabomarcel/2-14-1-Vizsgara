<?php
session_unset();
session_destroy();
header("Location: index.php?menuItem=logout", true);
exit;
