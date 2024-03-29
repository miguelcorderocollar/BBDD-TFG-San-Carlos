<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        notifications
* GENERATION DATE:  15.06.2019
* CLASS FILE:       /vg-user/home/jb/soft/rest/cgen/generated_classes/class.notifications.php
* FOR MYSQL TABLE:  notifications_data
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

class notifications
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $notification_id;   // KEY ATTR. WITH AUTOINCREMENT

var $user_id;   // (normal Attribute)
var $question;   // (normal Attribute)
var $answer;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function notifications()
{

$this->database = new Database();

}


// **********************
// GETTER METHODS
// **********************


function getnotification_id()
{
return $this->notification_id;
}

function getuser_id()
{
return $this->user_id;
}

function getquestion()
{
return $this->question;
}

function getanswer()
{
return $this->answer;
}

// **********************
// SETTER METHODS
// **********************


function setnotification_id($val)
{
$this->notification_id =  $val;
}

function setuser_id($val)
{
$this->user_id =  $val;
}

function setquestion($val)
{
$this->question =  $val;
}

function setanswer($val)
{
$this->answer =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM notifications_data WHERE notification_id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = mysqli_fetch_object($result);


$this->notification_id = $row->notification_id;

$this->user_id = $row->user_id;

$this->question = $row->question;

$this->answer = $row->answer;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM notifications_data WHERE notification_id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->notification_id = ""; // clear key for autoincrement

$sql = "INSERT INTO notifications_data ( user_id,question,answer,date_notification ) VALUES ( '$this->user_id','$this->question','$this->answer', '$this->date_notification' )";
$result = $this->database->query($sql);
$this->notification_id = mysqli_insert_id($this->database->link);

}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE notifications_data SET  user_id = '$this->user_id',question = '$this->question',answer = '$this->answer' WHERE notification_id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
