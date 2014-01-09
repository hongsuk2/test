<?php
include $_SERVER['DOCUMENT_ROOT']."/models/routers.php";

$resp_http = new ReqHttp();
$type = $resp_http->request->post("type");