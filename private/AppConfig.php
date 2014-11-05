<?php
/**
 * Created by PhpStorm.
 * User: MRG
 * Date: 11/5/14 AD
 * Time: 4:36 PM
 */

$configs = array(
    "application" => array(
        "name" => "",
        "title" => "",
        "version" => "",
        "base_url" => "",
        "site_url" => "",
        "share_url" => "",
        "directory" => dirname(__FILE__)
    ),
    "db" => array(
        "mongodb" => array(
            "host" => "localhost",
            "name" => "",
            "user" => "",
            "password" => ""
        ),
        "mysql" => array(
            "host" => "localhost",
            "name" => "",
            "user" => "",
            "password" => ""
        )
    ),
    "apple_apn" => array(
        "development_file" => "",
        "distribution_file" => ""
    ),
    "olo" => array(
        "version" => "1.0"
    ) ,
    "views" => array(
        
    )
);

return $configs;