<?php
session_start();
session_destroy();
setcookie('login','ok',time()-1);
header('location: login.html');
exit;