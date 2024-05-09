<?php
$vegetable_details = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

// 連想配列$vegetable_detailsのキーと値をコロン（:）で区切り、1つずつ順番に出力する
foreach ($vegetable_details as $key => $value){
  echo "{$key}：{$value}<br>";
}
?>