<?php
require_once "controller/bukuController.php";
// Buat controller
$controller = new BukuController();
// Jalankan method index
$controller->index();