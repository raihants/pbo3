<?php
include('config.php');
$db = new Database();
$db->delete($_GET['id']);
header('Location: index.php');
