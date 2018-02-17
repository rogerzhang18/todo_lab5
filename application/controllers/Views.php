<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Views class
 *  -Controls the views that show tasks in ordered list
 *  -Loads from the Tasks model
 */
class Views extends Application
{
    /*
     * Index page for this controller
     * Loads leftside with priority list and rightside with category list.
     */
    public function index()
    {
        $this->data['pagetitle'] = 'Ordered TODO List';
        $tasks = $this->tasks->all();   // get all the tasks
        $this->data['content'] = 'Ok'; // so we don't need pagebody
        $this->data['leftside'] = $this->makePrioritizedPanel($tasks);
        $this->data['rightside'] = $this->makeCategorizedPanel($tasks);

        $this->render('template_secondary'); 
    }

    /*
     * Creates the tasks list sorted by priority.
     */
    function makePrioritizedPanel($tasks)
    {
    	// extract the undone tasks
	    foreach ($tasks as $task)
	    {
	        if ($task->status != 2)
	            $undone[] = $task;
	    }

	    // order them by priority
		usort($undone, "orderByPriority");
    	
    	// substitute the priority name
		foreach ($undone as $task)
    		$task->priority = $this->app->priority($task->priority);

    	// convert the array of task objects into an array of associative objects       
		foreach ($undone as $task)
    		$converted[] = (array) $task;

    	$parms = ['display_tasks' => $converted];
    	return $this->parser->parse('by_priority', $parms, true);
	}

    /*
     * Gets the tasks list sorted by categories from the Tasks model.
     */
	function makeCategorizedPanel($tasks)
	{
	    $parms = ['display_tasks' => $this->tasks->getCategorizedTasks()];
	    return $this->parser->parse('by_category', $parms, true);
	}
}

// return -1, 0, or 1 of $a's priority is higher, equal to, or lower than $b's
function orderByPriority($a, $b)
{
    if ($a->priority > $b->priority)
        return -1;
    elseif ($a->priority < $b->priority)
        return 1;
    else
        return 0;
}
