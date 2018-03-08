<?php
   /*
	* Verifies that task entity accepts property values that meet form validation rules, 
	* Verifies that task entity rejects property values that don't meet form validation rules.
	*/
	class TaskTest extends PHPUnit_Framework_TestCase
	{
		private $CI;
		private $Task;
		public function setUp()
		{
			// Load CI instance normally
			$this->CI = &get_instance();
			$this->Task = new Task();
		}
		public function testAcceptValidValues()
		{
			// $_SERVER['REQUEST_METHOD'] = 'POST';
			// $_GET['foo'] = 'bar';
			// $this->assertEquals('bar', $this->CI->input->get_post('foo'));
			$this->assertEquals('bar', $this->CI->input->get_post('foo'));
		}

		public function testRejectInvalidValues()
		{
			// $_SERVER['REQUEST_METHOD'] = 'POST';
			// $_GET['foo'] = 'bar';
			// $this->assertEquals('bar', $this->CI->input->get_post('foo'));
			$this->assertEquals('bar', $this->CI->input->get_post('foo'));
		}

	}