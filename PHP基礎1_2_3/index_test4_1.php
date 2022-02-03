<?php 
  //関数名に被りがないか確認するために!function_exists('関数名')をif文にセットして使われる。
  if(!function_exists('fn1')) {
    function fn1() {
      echo 'fn1 is called';
    }
  }