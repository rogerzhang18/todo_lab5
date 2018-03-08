<?php
require_once 'PHPUnit/Autoload.php'
/*
* Verifies collection of tasks contain more uncompleted tasks than completed ones.
* This is an arbitrary business rule which is an excuse to have more than one test.
*/
class TaskListTest extends PHPUnit_Framework_TestCase
{
	private $CI;
	public function setUp()
	{
		// Load CI instance normally
		$this->CI = &get_instance();
	}
	public function testIncompleteTasksOutNumberCompleteTasks()
	{
		// $_SERVER['REQUEST_METHOD'] = 'POST';
		// $_GET['foo'] = 'bar';
		$completedTasks =  count($test);
		$incompletedTasks = count($test2);
		$this->assertTrue($completedTasks > $incompletedTasks);
	}
}