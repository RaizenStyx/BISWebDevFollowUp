<?php


/**
 * Capitalize each word.
 *
 * @method static string get(string $string)
 * @example Capitalize::get('hello there') === 'Hello There'
 * @example Capitalize::get("hey, so it's working!") === "Hey, So It's Working!"
 */

class Capitalize
{
	private string $capString;
	function get($capString)
	{
		?><h3>The capitalized form of the string provided is: </h3><?php
		print ucwords($capString);
	}
}


/**
 * Find the most used character.
 *
 * @method static string get(string $string)
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */

class MaxChar
{
	private string $string; 
	
	function get($string)
	{
		$string = str_replace(' ', '', $string);
		$arr = str_split(count_chars($string.trim($string), 3));
		$hStr = "";
		$occ = 0;

		foreach ($arr as $value) {
			$oc = substr_count ($string, $value);
			if($occ < $oc){
				$hStr = $value;
				$occ = $oc;
			}
		}

		?><h3>The max character in the string provided is: </h3><?php print $hStr;
		}
}


/**
 * Print numbers from 1 to n.
 * When n is divisible by 3 echo 'fizz'.
 * When n is divisible by 5 echo 'buzz.
 * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
 *
 * @method static void print(int $limit)
 * @example FizzBuzz::print('5') -> 1, 2, 'fizz', 4, 'buzz'
 */

class FizzBuzz
{
	private int $limit;
	
	function get($limit)
	{
		if(int($limit) == $limit) {
			
		
			for ($i = 1; $i <= $limit; $i++) {
			$isFizz = (0 === $i % 3);
			$isBuzz = (0 === $i % 5);
			
			if (!$isFizz && !$isBuzz) {
				
				print $i . PHP_EOL; ?> <br/> <?php
				
				continue;
			}

			if ($isFizz && !$isBuzz) {
				
				print 'Fizz';?> <br/> <?php
				
			}

			if ($isBuzz && !$isFizz) {
				
				print 'Buzz'; ?> <br/> <?php
				
			}
			
			if ($isFizz && $isBuzz) {
				
				print 'FizzBuzz'; ?> <br/> <?php
				
			}
			

			echo PHP_EOL;
			
		} else {
			print "not a number";
		}
		
}

		
	}
}

?>