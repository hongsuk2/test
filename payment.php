<?php
include $_SERVER['DOCUMENT_ROOT']."/models/routers.php";


$ins_sql = new InsSql();
$rs = $ins_sql->payment(1, $m_id);