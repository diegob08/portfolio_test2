<?php
require_once('db_credentials.php');

function db_connect(){
  $connection = mysqli_connect(db_server, db_user, db_pass, db_name);
  return $connection;
}
function db_disconnect($connection){
  if(isset($connection)){
    mysqli_close($connection);
  }
}

?>
