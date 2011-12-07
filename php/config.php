<?php
// Habari OpenShift config file
// any files in the /php directory of an OpenShift application will be
// deleted with every update. This means that the SQLite database files
// needs to live outside of the webroot.

// https://www.redhat.com/openshift/kb/kb-e1002/deploying-openshift-express-applications-using-sqlite

$path = $_ENV['OPENSHIFT_DATA_DIR'];

Config::set( 'db_connection', array(
	'connection_string'=>"sqlite:$path/habari.db",
	'username'=>'',
	'password'=>'',
	'prefix'=>''
));

$blog_data = array( 'blog_title' => 'Habari',
	'admin_username' => 'admin',
	'admin_pass1' => 'habari',
	'admin_pass2' => 'habari',
	'admin_email' => 'CHANGE@ME',
);

//$locale = '{$locale}';
?>
