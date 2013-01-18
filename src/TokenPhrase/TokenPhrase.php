<?php

namespace TokenPhrase;

/**
 * A token phrase generator
 * Inspired upon https://github.com/genericsteele/token_phrase
 *
 * @author Bramus Van Damme <bramus@bram.us>
 */
class TokenPhrase {

	const version = 1.0;

	const ADJECTIVES = 'splendid superior spectacular amazing ultimate ferocious exciting lovely old-fashioned home-made grass-fed free-range grandmas grandpas governing prickly strong stellar awesome wonderful bodacious excellent stupendous groovy dancing energetic sweet sour sugarfilled glazed vegan letterman thunderous established magnetic better windy wind-up american soft genetically-modified tailored liberal conservative bluetooth';

	const COLORS = 'red yellow blue green violet taupe mauve lime golden silver grey black white tangello sunshine brown tan infrared ultraviolet pink beige almond aquamarine burnt-orange cerulean cornflower-blue denim forest-green midnight-blue peach plum sea-green ruby emerald jade rose topaz onyx pearl coral crimson cyan chocolate aqua azure lavendar chiffon khaki ivory magenta navy-blue olive salmon turquoise';

	const PATTERNS = 'striped checked spotted polka-dotted plaid wavy houndstooth argyle glossy matte pinstriped tartan paisley satin honeycomb fractal waved cracked';

	const NOUNS = 'floutist carpenter jacket president address machine computer mug lamp phone wall bicycle river lake fountain building book hat pants shirt cape soup gloves pen suit photograph sand profit energy fork compact-disk floppy-disk chandelier door window laboratory people tapir wolverine wolf spider wolf-spider spider-wolf banana-slug giraffe deer-mouse capybara dingo dragon cardinal owl octopus elk moose weasel elephant rhino iguana bullfrog greyhound stickbug ladybug ant rat coyote chimpanzee housecat barracuda raven crane fox panda racoon nessie whale dolphin shark viper frog toad flounder skunk wookie dishwasher bat space-heater bobble-head lego-set pinboard flag tv video-game envelope headphones mousepad jukebox';

	const NUM_DIGITS = 7;

	/**
	 * Generates a random token phrase
	 * @param string[optional] $sep 	The separator to use
	 * @return string
	 */
	public static function generate($sep = '-') {

		if ((string) $sep != $sep) {
			throw new \InvalidArgumentException('TokenPhrase only accepts string-ish types as $sep');
		}

		$adjectives = explode(' ', self::ADJECTIVES);
		$colors = explode(' ', self::COLORS);
		$patterns = explode(' ', self::PATTERNS);
		$nouns = explode(' ', self::NOUNS);

		return $adjectives[array_rand($adjectives)] . $sep . $colors[array_rand($colors)] . $sep . $patterns[array_rand($patterns)] . $sep . $nouns[array_rand($nouns)] . $sep . str_pad(rand(0, pow(10, self::NUM_DIGITS)), self::NUM_DIGITS, 0, STR_PAD_LEFT);

	}

}

// EOF