<?php
/**
 * MySQL Database Connection
 *
 * Replace the values inside the single quotes below with the values for your
 * MySQL configuration. If not using the default port 3306, then append a colon
 * and port number to the hostname (e.g. $hostname = 'example.com:3307';).
 */

/** Local Config */
$zf_mysql_host          = 'db';
$zf_mysql_port          = '3306';
$zf_mysql_db            = 'bioatlas-local';
$zf_mysql_user          = 'root';
$zf_mysql_user_pass     = 'admin';
$zf_mysql_admin         = 'root';
$zf_mysql_admin_pass    = 'admin';

// you must provide the path of the key file, the certificate file, and certificate authority file.
$db_ssl_ca = '/data/php/bioatlas/bioatlas/zfatlasDump/ca.pem';  // e.g., 'etc/mysql/ssl/ca-cert.pem'
