<?php
/**
 * Local Configuration Override
 *
 * This configuration override file is for overriding environment-specific and
 * security-sensitive configuration information. Copy this file without the
 * .dist extension at the end and populate values as needed.
 *
 * @NOTE: This file is ignored from Git by default with the .gitignore included
 * in ZendSkeletonApplication. This is a good practice, as it prevents sensitive
 * credentials from accidentally being committed into version control.
 */

return [
    'db' => [
         'driver'           => 'Pdo',
         'dsn'              => 'mysql:dbname=gscfrtrjwqlogit;host=gscfrtrjwqlogit.mysql.db',
         'username'         => 'gscfrtrjwqlogit',
         'password'         => 'gsc3LogIt',
         'driver_options'   => [
             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
     ]
    ]
];
