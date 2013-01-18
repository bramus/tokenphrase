# TokenPhrase

TokenPhrase is a PHP class that generates unique phrases for you to use in your app as tokens.

## Usage

	<?php
	
	require_once __DIR__ . '/../src/autoload.php';
	
	for ($i = 0; $i < 10; $i++) {
		echo TokenPhrase\TokenPhrase::generate() . PHP_EOL;
	}
	
## Example Output

	ultimate-green-plaid-flag-7931477
	established-jade-glossy-chandelier-6865089
	american-brown-cracked-greyhound-8705385
	american-coral-plaid-chandelier-4983392
	groovy-black-argyle-tapir-5503024
	governing-chiffon-matte-computer-7901794
	liberal-burnt-orange-honeycomb-racoon-1661306
	grass-fed-white-spotted-carpenter-0664544
	sweet-forest-green-spotted-computer-8211815
	ultimate-black-spotted-floppy-disk-2037213

## Credits & Acknowledgements

The class is built by [Bramus!](http://www.bram.us/) and is inspired upon [the TokenPhrase Ruby Gem](https://github.com/genericsteele/token_phrase).