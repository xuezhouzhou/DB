<?php
header('content-type:text/html;charset=utf-8');

include_once 'functions.php';
include_once 'DB.class.php';

$DB = new DB();

/*
$sql = 'select * from fcx_user';


$res = $DB->get_all($sql);
dump($res);

$res = $DB->get_one($sql);
dump($res);

*/


/*
$data = array(
  'ID'=> uniqid(),
  'id_card'=>'330702198108056289',
  'name'=>'戴淑艳',
  'phone'=>'13918326362',
  'time'=>time(),
  'type'=>'1',
  'statue'=>'1'
);

$res = $DB->insert('fcx_user',$data);
*/

/*
$res = $DB->delete('fcx_user','ID="554886ab7695f"');
dump($res);
*/


/*
$data = array(
  'name'=>'张三',
  'phone'=>'18616675742',
);
$res = $DB->update('fcx_user',$data,'ID="554886aaa4edd"');
dump($res);
*/