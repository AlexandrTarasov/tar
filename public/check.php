<?php
https://stackoverflow.com/questions/1176352/pdo-prepared-inserts-multiple-rows-in-single-query
$insert =  ['img 1','title 1','desc1','', ''] ;
//print_r($insert);

$datafields = ['imp', 'title', 'desc', 'created_at', 'updated_at']; 
$sql = "INSERT INTO table (" . implode(",", $datafields ) . ") VALUES (" .
       implode(',', $insert).") ";
print_r($sql);
