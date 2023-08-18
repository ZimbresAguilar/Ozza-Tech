<?php
    //-----===Variáveis===-----//
    $MYSQL_ADDON_HOST = "bgwqthqfxbvbmkzbntet-mysql.services.clever-cloud.com";
    $MYSQL_ADDON_DB = "bgwqthqfxbvbmkzbntet";
    $MYSQL_ADDON_USER = "um8xrg4jrmaz1svu";
    $MYSQL_ADDON_PORT = "3306";
    $MYSQL_ADDON_PASSWORD = "h4ys1SMmahMiM3QoHNnh";
    $MYSQL_ADDON_URI = "mysql://um8xrg4jrmaz1svu:h4ys1SMmahMiM3QoHNnh@bgwqthqfxbvbmkzbntet-mysql.services.clever-cloud.com:3306/bgwqthqfxbvbmkzbntet";

    //host, username, password, dbname, port, socket
    $connection = new mysqli($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_DB, $MYSQL_ADDON_PORT, $MYSQL_ADDON_URI);
?>