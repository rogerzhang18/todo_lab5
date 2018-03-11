<?php

/* 
 * This is a new task model that defines the data path from the data folder
 */
class Tasks extends CSV_Model {

	/*
	 * Constructor for Tasks CSV model class.
	 */
    public function __construct()
    {
		parent::__construct(APPPATH . '../data/tasks.csv', 'id');
    }

    /*
     * Gets a sorted tasks list by categories.
     */
    function getCategorizedTasks()
	{
	    // extract the undone tasks
		$undone = array();
	    foreach ($this->all() as $task)
	    {
	        if ($task->status != 2)
	            $undone[] = $task;
	    }

	    // substitute the category name, for sorting
	    foreach ($undone as $task)
	        $task->group = $this->app->group($task->group);

	    // order them by category
	    if (count( $undone ) != 0)
	    	usort($undone, "orderByCategory");

	    // convert the array of task objects into an array of associative objects       
		$converted = array();
	    foreach ($undone as $task)
	        $converted[] = (array) $task;

		return $converted;
	}

	// provide form validation rules
	public function rules()
	{
	    $config = array(
	        ['field' => 'task', 'label' => 'TODO task', 'rules' => 'alpha_numeric_spaces|max_length[64]'],
	        ['field' => 'priority', 'label' => 'Priority', 'rules' => 'integer|less_than[4]'],
	        ['field' => 'size', 'label' => 'Task size', 'rules' => 'integer|less_than[4]'],
	        ['field' => 'group', 'label' => 'Task group', 'rules' => 'integer|less_than[5]'],
	    );
	    return $config;
	}

	public function getTasksByStatus($stat)
	{
		$tasksList = array();
	    foreach ($this->all() as $task)
	    {
	        if ($task->status == $stat)
	            $tasksList[] = $task;
	    }
	    return $tasksList;
	}

}

// return -1, 0, or 1 of $a's category name is earlier, equal to, or later than $b's
function orderByCategory($a, $b)
{
    if ($a->group < $b->group)
        return -1;
    elseif ($a->group > $b->group)
        return 1;
    else
        return 0;
}
