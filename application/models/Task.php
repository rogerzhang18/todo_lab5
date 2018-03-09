<?php

/**
 * Task entity class, with setter methods for each property.
 * Magic setters & getters already in each class
 */
class Task extends Entity {

    public function setTaskName( $value = "")
    {
        if (strlen($value) > 64)
            throw new Exception('Task name too long!!!');
        if (!ctype_alnum($value))
            throw new Exception('Task name must be alphanumeric!!!');
        $this->taskName = $value;
    }

    public function setPriority( $value = 0)
    {
        if (!is_int($value))
            throw new Exception('Priority must be an integer!!!');
        if ($value > 4)
            throw new Exception('Priority must be less than 4!!!');
        $this->priority = $value;
    }

    public function setSize( $value = 0)
    {
        if (!is_int($value))
            throw new Exception('Size must be an integer!!!');
        if ($value > 4)
            throw new Exception('Size must be less than 4!!!');
        $this->size = $value;
    }

    public function setGroup( $value = 0)
    {
        if (!is_int($value))
            throw new Exception('Group must be an integer!!!');
        if ($value > 5)
            throw new Exception('Group must be less than 4!!!');
        $this->group = $value;
    }

}
