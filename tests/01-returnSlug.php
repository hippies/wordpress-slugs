<?php 

require "../vendor/autoload.php";
require "../src/WordpressSlugs/GenerateSlug.php";

use WordpressSlugs\GenerateSlug;


class WordpressSlugTest extends PHPUnit_Framework_TestCase {
	/** 
	 * @test 
	 */
	public function slugIsGeneratedCorrectly() {

		$result = GenerateSlug::returnSlug('hello alla glada','','save');
		$expectedResult = 'hello-alla-glada';
		$this->assertEquals($expectedResult,$result,"Slug failed to generate correctly");

		$result = GenerateSlug::returnSlug('nu gör vi det här','','save');
		$expectedResult = 'nu-gor-vi-det-har';
		$this->assertEquals($expectedResult,$result,"Slug failed to generate correctly");

		$result = GenerateSlug::returnSlug('Marîn Döbèl','','save');
		$expectedResult = 'marin-dobel';
		$this->assertEquals($expectedResult,$result,"Slug failed to generate correctly");

	}
}



