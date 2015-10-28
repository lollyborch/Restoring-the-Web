<!-- PHP logout code based http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523 -->
<?php include "base.php"; $_SESSION = array(); session_destroy(); ?>
<meta http-equiv="refresh" content="0;index.php">