<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/dbclass.php';

include_once '../class.usuarios.php';
include_once '../class.SurveyModels.php';

$survey = new SurveyModels();

$data = json_decode(file_get_contents("php://input"));

# $survey->user_id = $data->userid;
$exp["status"] = "KO";
$res = $survey->getSurveyModels($data->userid);
#
$exp["status"] = "OK";
$exp["data"] = $res;
#
echo json_encode($exp);
?>
