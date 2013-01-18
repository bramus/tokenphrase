<?php

require_once __DIR__ . '/../src/autoload.php';

for ($i = 0; $i < 10; $i++) {
	echo TokenPhrase\TokenPhrase::generate() . PHP_EOL;
}

// EOF