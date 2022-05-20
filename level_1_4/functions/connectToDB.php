<?php
function connectToDB($config)
{
    return new PDO(
        "mysql:host=" . $config['db']['host'] .
        ";dbname=" . $config['db']['name'] .
        ";charset=" . $config['db']['charset'],
        $config['db']['user'],
        $config['db']['password'],
        $config['db']['opt']
    );
}