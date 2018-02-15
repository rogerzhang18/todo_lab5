<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Maintenance class
 *  -Parse the table from oneitem
 *  -Loads from the itemlist and displays them on the maintenance view
 */
class Mtce extends Application {

        public function index()
        {
                $this->data['pagetitle'] = 'TODO List Maintenance';
                $tasks = $this->tasks->all(); // get all the tasks

                // substitute the status name
                foreach ($tasks as $task)
                        if (!empty($task->status))
                                                $task->status = $this->app->status($task->status);

                // build the task presentation output
                $result = '';   // start with an empty array        
                foreach ($tasks as $task)
                        $result .= $this->parser->parse('oneitem',(array)$task,true);

                // and then pass them on
                $this->data['display_tasks'] = $result;
                $this->data['pagebody'] = 'itemlist';
                $this->render();
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
