<?php
// require_once 'PHPUnit/Autoload.php';
use PHPUnit\Framework\TestCase;
// defined('BASEPATH') OR exit('No direct script access allowed');
// require '../application/controllers/Mtce.php';
/*
* Run unit tests with Task class.
* Verifies that Task entity accepts property values that meet form validation rules, 
* Verifies that Task entity rejects property values that don't meet form validation rules.
*/
class TaskTest extends TestCase
{
	private $CI;
	//type undefined
	private $Task;
	private $TaskList;

	public function setUp()
	{
		// Load CI instance normally
		// $this->CI = &get_instance();
		// defined now
		$this->Task = new Task();
		$this->TaskList = new Tasks(); 

	}
	public function testAcceptValidValues()
	{
		// $_SERVER['REQUEST_METHOD'] = 'POST';
		// $_GET['foo'] = 'bar';
		// $this->assertEquals('bar', $this->CI->input->get_post('foo'));
		$this->Task->task =	"test task";
		$this->Task->priority =	1;
		$this->Task->size =	10;
		$this->Task->group = 10;

		$rules = $this->TaskList->rules();
		$list = $this->TaskList->getCategorizedTasks();

		$this->load->library('form_validation');
        $this->form_validation->set_rules($this->tasks->rules());

        // retrieve & update data transfer buffer
        $task = (array) $this->session->userdata('task');
        $task = array_merge($task, $this->input->post());
        $task = (object) $task;  // convert back to object
        $this->session->set_userdata('task', (object) $task);

        // validate away
        if ($this->form_validation->run())
        {
             $this->assertTrue();
        } else
        {
            $this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
        }
        $this->showit();
        $this->assertEquals($this->Task->priority, 1);
		// $this->session->set_userdata('task', $task);	
	}

	public function testRejectInvalidValues()
	{
		$this->Task->task = 123;
		$this->Task->priority = -1;
		$this->Task->size =	0;
		$this->Task->group = 0;
		// $_SERVER['REQUEST_METHOD'] = 'POST';
		// $_GET['foo'] = 'bar';
		// $this->assertEquals('bar', $this->CI->input->get_post('foo'));
		$this->assertEquals($this->Task->priority, -1);
	}

}