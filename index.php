<?php



// Dynamic Server name 
function admin_url(){
    $http = explode('/',$_SERVER['SERVER_PROTOCOL']);
    $localhost = ($_SERVER['SERVER_NAME']);
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    return (strtolower($http[0])."://".$localhost."/".$uri[1]."/".$uri[2]);
 }


 echo admin_url();


?>
