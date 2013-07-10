<?php

return array(
	'components'=>array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=MyDbName',
			'username' => 'MyDbUser',
			'password' => 'MyDbPassword',
		),
		'cache'=>array(
			'class'=>'system.caching.CFileCache'
		)
	),	
);
