<?php
require_once "controller/produkController.php";
// Buat controller
$controller = new ProdukController();
// Jalankan method index
$controller->index();