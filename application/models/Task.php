<?php

/**
 * Task entity class, with setter methods for each property.
 * Magic setters & getters already in each class
 */
class Task extends Entity {

    // Checks for tast name
    public function setTaskName( $value = "")
    {
        // Name must be less than 64 characters
        if (strlen($value) > 64)
            throw new Exception('Task name too long!!!');
        // Name must be alphabet or number
        if (!ctype_alnum($value))
            throw new Exception('Task name must be alphanumeric!!!');
        $this->taskName = $value;
    }

    // Priority check
    public function setPriority( $value = 0)
    {
        // Priority must be an integer
        if (!is_int($value))
            throw new Exception('Priority must be an integer!!!');
        // Priority must be less than 4
        if ($value > 4)
            throw new Exception('Priority must be less than 4!!!');
        $this->priority = $value;
    }

    // Size check
    public function setSize( $value = 0)
    {
        // Size must be an integer
        if (!is_int($value))
            throw new Exception('Size must be an integer!!!');
        // Size must be less than 4
        if ($value > 4)
            throw new Exception('Size must be less than 4!!!');
        $this->size = $value;
    }

    // Group check
    public function setGroup( $value = 0)
    {
        // Group name must be an integer
        if (!is_int($value))
            throw new Exception('Group must be an integer!!!');
        // Group number must be less than 4
        if ($value > 5)
            throw new Exception('Group must be less than 5!!!');
        $this->group = $value;
    }

}
