<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        SurveyModels
* GENERATION DATE:  16.06.2019
* CLASS FILE:       /vg-user/home/jb/soft/rest/cgen/generated_classes/class.SurveyModels.php
* FOR MYSQL TABLE:  survey_models
* FOR MYSQL DB:     hsc
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* -------------------------------------------------------
*
*/

include_once("config/class.database.php");

// **********************
// CLASS DECLARATION
// **********************

class SurveyModels
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $survey_model_id;   // KEY ATTR. WITH AUTOINCREMENT

var $category;   // (normal Attribute)
var $tittle;   // (normal Attribute)
var $survey;   // (normal Attribute)
var $activated;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function SurveyModels()
{

$this->database = new Database();

}


// **********************
// GETTER METHODS
// **********************


function getsurvey_model_id()
{
return $this->survey_model_id;
}

function getcategory()
{
return $this->category;
}

function gettittle()
{
return $this->tittle;
}

function getsurvey()
{
return $this->survey;
}

function getactivated()
{
return $this->activated;
}

// **********************
// SETTER METHODS
// **********************


function setsurvey_model_id($val)
{
$this->survey_model_id =  $val;
}

function setcategory($val)
{
$this->category =  $val;
}

function settittle($val)
{
$this->tittle =  $val;
}

function setsurvey($val)
{
$this->survey =  $val;
}

function setactivated($val)
{
$this->activated =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM survey_models WHERE survey_model_id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = mysqli_fetch_object($result);


$this->survey_model_id = $row->survey_model_id;

$this->category = $row->category;

$this->tittle = $row->tittle;

$this->survey = $row->survey;

$this->activated = $row->activated;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM survey_models WHERE survey_model_id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->survey_model_id = ""; // clear key for autoincrement

$sql = "INSERT INTO survey_models ( category,tittle,survey,activated ) VALUES ( '$this->category','$this->tittle','$this->survey','$this->activated' )";
$result = $this->database->query($sql);
$this->survey_model_id = mysqli_insert_id($this->database->link);

}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE survey_models SET  category = '$this->category',tittle = '$this->tittle',survey = '$this->survey',activated = '$this->activated' WHERE survey_model_id = $id ";

$result = $this->database->query($sql);



}

function getSurveyModels() {
   $sql =  "SELECT * FROM survey_models WHERE activated = 1 ".
           "order by category desc;";
   $this->sql = $sql;
   $result = $this->database->query($sql);
   $result = $this->database->result;
   $this->result = $result;
   $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
   return($row);
}



} // class : end

?>
<!-- end of generated class -->
