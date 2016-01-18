<?php

$config = array(
    'db_connection_string' => 'mysql:host=<host>;port=<port>;dbname=<dbname>',
    'db_user' => '<user>',
    'db_password' => '<password>',

    'email_from_name' => '<from name>',
    'email_from' => '<from address>',
    'email_to_name' => '<to name>',
    'email_to' => '<to address>',
    'email_cc_name' => '',
    'email_cc' => '',
    'email_subject' => '<subject>',

    'archive_password' => '<password>',

    # set test_order to some OrderID, after which you wish to fetch donors for the TeleFile
    # if test_order is set to something, the last_dd_fetch_order and last_dd_fetch_date will not be changed in the database,
    #   ensuring that the script has no side effects.
    'test_order' => '',
);