<?php

/**
 * Task entity class, with setter methods for each property.
 * Magic setters & getters already in each class
 */
class Task extends CI_Model {

    private $taskName ;
    private $priority ;
    private $size ;
    private $group ;

    public function __set($key, $value) {
        // if a set* method exists for this key, 
        // use that method to insert this value. 
        // For instance, setName(...) will be invoked by $object->name = ...
        // and setLastName(...) for $object->last_name = 
        $method = 'set' . str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $key)));

        if (method_exists($this, $method))
        {
            $this->$method($value);

            return $this;
        }

        // Otherwise, just set the property value directly.
        $this->$key = $value;
        
        return $this;
    }

    // magic getter
    public function __get($key) {
        return $this->$key;
    }


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
        if (!ctype_digit($value))
            throw new Exception('Priority must be an integer!!!');
        if ($value > 4)
            throw new Exception('Task name too long!!!');
        $this->priority = $value;
    }

    public function setSize( $value = 0)
    {
        if (!ctype_digit($value))
            throw new Exception('Priority must be an integer!!!');
        if ($value > 4)
            throw new Exception('Priority must be less than 4!!!');
        $this->size = $value;
    }

    public function setGroup( $value = 0)
    {
        if (!ctype_digit($value))
            throw new Exception('Group must be an integer!!!');
        if ($value > 5)
            throw new Exception('Group must be less than 4!!!');
        $this->group = $value;
    }

}
