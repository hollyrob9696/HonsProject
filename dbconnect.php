<?php

define('db_server', 'servername');
define('db_username', 'username');
define('db_password'. 'password');
define('db_database', 'database');

$db = mysqli_connect(db_server, db_username, db_password, db_database);
