<?php
	require_once  __DIR__ . '/vendor/autoload.php';

	use example\Hello;

	$instance = new Hello();

	echo $instance->say("Hello World");