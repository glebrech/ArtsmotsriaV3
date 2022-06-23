<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Paris" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=artsmojgwen.mysql.db;dbname=artsmojgwen" );
define( "DB_USERNAME", "artsmojgwen" );
define( "DB_PASSWORD", "Jpp5QnM8AXqzfPAq" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 50 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "gYMx@bCi&Yan6Gc8" );
require( CLASS_PATH . "/Programmation.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
