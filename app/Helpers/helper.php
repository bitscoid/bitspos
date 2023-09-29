<?php 

if (!function_exists("rupiah")) {
  function rupiah($value) {
    return number_format($value, '0', '', '.');
  }
}