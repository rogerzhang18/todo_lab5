<?php

/*
 * Fruibowl class
 *      Base model from the starter, this is meant to be a
 * collection of fruit objects.
 */
class Fruitbowl extends Memory_Model {
    // over-ride base collection adding, with a limit
    // Exception is thrown if the bowl is full
    function add($record) {
        if ($this->size() >= 6)
            throw new Exception('The fruit bowl is full');
        else
        	parent::add($record);
    }
}