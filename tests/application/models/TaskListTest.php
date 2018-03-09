<?php
//require_once 'PHPUnit/Autoload.php'
use PHPUnit\Framework\TestCase;
/*
* Verifies collection of tasks contain more uncompleted tasks than completed ones.
* This is an arbitrary business rule which is an excuse to have more than one test.
*/
class TaskListTest extends TestCase
{
	//private $CI;
	public function setUp()
	{
		// Load CI instance normally
		$this->CI = &get_instance();
		//$this->CI->load->model('tasks');
		$this->tasksList = new Tasks();
	}
	
	public function testIncompleteTasksOutNumberCompleteTasks()
	{
		// $_SERVER['REQUEST_METHOD'] = 'POST';
		// $_GET['foo'] = 'bar';
		$completedTasks = count($this->tasksList->getTasksByStatus(2));
		$incompletedTasks = count($this->tasksList->getTasksByStatus(1));
		$this->assertTrue($completedTasks > $incompletedTasks);
	}
}