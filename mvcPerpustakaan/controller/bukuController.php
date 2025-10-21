<?php
require_once "model/buku.php";
require_once "view/bukuView.php";
class BukuController {
public function index() {
$model = new Buku();
$view = new BukuView();
// Ambil data dari model
$bukuList = $model->getAllProduk();
// Kirim data ke view
$view->tampilkan($bukuList);
}
}