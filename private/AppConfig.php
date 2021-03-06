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
        "directory" => dirname(__FILE__),
        "view" => "default"
    ),
    "route"=> array(
        "base_path"=> "/OLO.PHP.Framework"
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
        ),
        "medoo" => array(
            "master"=> array(
                "database_type"=> "mysql",
                "database_name" => "",
                "server" => "localhost",
                "username" => '',
                'password' => '',

                // optional
                'port' => 3306,
                'charset' => 'utf8',
                // driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
                'option' => array(
                    PDO::ATTR_CASE => PDO::CASE_NATURAL
                )
            )
        ),
        "apple_apn" => array(
            "development_file" => "",
            "development_link" => "",
            "distribution_file" => "",
            "distribution_link" => ""
        )
    ),
    "android" => array(
        "key" => ""
    ),
    "olo" => array(
        "version" => "1.1"
    ) ,
    "views" => array(

    )
);

return $configs;