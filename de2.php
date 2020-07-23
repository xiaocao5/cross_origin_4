<?php
  header("Access-Control-Allow-Origin: http://127.0.0.1:8080");
  $person = $_GET['value'];
  $personList = array();
  $arr['Ted'] = array("name"=>"Ted", "profession"=>"programmer", "nationality"=>"China");
  $arr['Trump'] = array("name"=>"Trump", "profession"=>"president", "nationality"=>"America");
  $arr['Galileo'] = array("name"=>"Galileo", "profession"=>"scientist", "nationality"=>"Italy");
  $result = $arr[$person];
  echo json_encode($result);
?>