<?php

include_once __DIR__ . "/Products.php";

/**
 * ## Kennels class
 * defines Kennels class
 * @author Filippo Foti
 */
class Kennels extends Products {
    public $type;
    public $model;

    /**
     * @param string $_type
     * @param string $_model
     */
    function __construct($_name, $_description, $_quantity, $_price, $_category, $_img, $_type, $_model) {
        parent::__construct($_name, $_description, $_quantity, $_price, $_category, $_img);
        $this->type = $_type;
        $this->model = $_model;
    }
}