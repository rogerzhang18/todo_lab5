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
    private $task;
    public function setUp()
    {
            // Load CI instance normally
            $this->CI = &get_instance();
            $this->CI->load->model("task");
            $this->task = new Task();
    }
    public function testAcceptValidValues()
    {
        // Exception should not be thrown as all the test should pass.
        try 
        {
                $this->task->taskName =	"testtask1";
                $this->task->priority =	1;
                $this->task->size =	4;
                $this->task->group = 5;
        } 
        catch(Exception $e)
        {
                $this->fail("valid input not accepted:".$e);
        }
        $this->assertEquals($this->task->taskName, "testtask1");
        $this->assertEquals($this->task->priority,	1);
        $this->assertEquals($this->task->size,	4);
        $this->assertEquals($this->task->group, 5);
    }

    // Exception should be thrown for each parameters as non of them
    //passes the test
    public function testRejectInvalidValues()
    {
        $this->expectException(Exception::class);
            $this->task->taskName = "invalid task name.+-*/";
        $this->expectException(Exception::class);
            $this->task->priority = 5;
        $this->expectException(Exception::class);
            $this->task->size =	5;
        $this->expectException(Exception::class);
            $this->task->group = 6;
    }

}
// for future use
// fwrite(STDERR, print_r($this->task->group, TRUE));
