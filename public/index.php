<?php

require '../vendor/autoload.php';

$server = new Puzzle\Console\Server;

$included_files = get_included_files();

print_r($server->test());
