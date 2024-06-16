<?php
function format_rupiah($angka){
  $rupiah=number_format($angka,0,',','.');
  return $rupiah;
}

function getUploadPathProduct($product = []) {
  $baseUrl = base_url('uploads/');
  if(isset($product['created_at']) && !empty($product['created_at'])) {
    $created_at = $product['created_at'];
    $baseUrl .= date('Y', strtotime($created_at)) . '/' . date('m', strtotime($created_at)) . '/';
  }

  return $baseUrl;
}

function getCurrency($price) {
  return 'Rp. ' . format_rupiah($price);
}
?>