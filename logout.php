<?php

session_start();
session_destroy();
header('location: wlogin.php');
