<?php

/* 
 * This is a new task model that defines the data path from the data folder
 */
class Tasks extends CSV_Model {

        public function __construct()
        {
                parent::__construct(APPPATH . '../data/tasks.csv', 'id');
        }

}

