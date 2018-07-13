<?php

/* Database connection Script */

/* variables de conneccion */

define('HOST', 'localhost'); /* Database  host */
define('USER', 'root'); /* Databse user root */
define('PASSWORD', ''); /* Database password */
define('DATABASE', 'test'); /* Database name */
define('CHARSET', 'utf8'); /* charset utf8 */

function coneccionDB() {
    static $instance;
    if ($instance === null) {
        $dsn = 'mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=' . CHARSET;
        $instance = new PDO($dsn, USER, PASSWORD);
        $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    }
    return $instance;
}
?>