<?php

// include_once __DIR__ . "/Products.php";

/**
 * ## Food class
 * defines Food class
 * @author Filippo Foti
 */
class Food extends Products {
    public $type;
    public $taste;

    /**
     * @param string $_type
     * @param string $_taste
     */
    function __construct($_name, $_description, $_quantity, $_price, $_category, $_img, $_type, $_taste) {
        parent::__construct($_name, $_description, $_quantity, $_price, $_category, $_img);
        $this->type = $_type;
        $this->taste = $_taste;
    }
}
