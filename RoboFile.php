<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
	// define public methods as commands
	function hello($world){
		$this->say("Hello, world");
	}

	function test(){
		$this->taskWatch()
			->monitor(["src","tests"], function(){
				$this->taskPHPUnit()
					->bootstrap("src/StringBuilder.php")
					->file("tests/StringBuilderTest.php")
					->run();
			})->run();
	}

}
