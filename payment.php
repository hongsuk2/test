<?php
include $_SERVER['DOCUMENT_ROOT']."/models/routers.php";

$ins_sql = new InsSql();
$rs = $ins_sql->payment(1, $m_id);

$resp_http = new ReqHttp();
$type = $resp_http->request->post("type");
