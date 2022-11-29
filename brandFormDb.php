<?php
// first step is fetch the data from the form 

$customerName = $_POST['Names'];
$customerDetials = $_POST['Detials'];

// print_r($_SERVER);

# step 2 how to connect data with data base


define("HostName", "localhost");
define("serverName", "root");
define("serverPassword","");
define("databaseName", "onlineStore");


$dataBaseConnection = mysqli_connect(HostName, serverName, serverPassword, databaseName);
if ($dataBaseConnection) {
    # code...
    echo "database is created";
}

$insertValuesIntoTable = "INSERT INTO formphp.brand(Names,Detials) VALUES ('$customerName','$customerDetials')";

$save = mysqli_query($dataBaseConnection, $insertValuesIntoTable);


if ($save) {
    # code...
    echo " data sace " ;
}
else
{
    echo mysqli_error($dataBaseConnection);
}