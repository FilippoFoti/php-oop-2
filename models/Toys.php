<?php

include_once __DIR__ . "/Products.php";

/**
 * ## Toys class
 * defines Toys class
 * @author Filippo Foti
 */
class Toys extends Products {
    public $type;
    public $material;

    /**
     * @param string $_type
     * @param string $_material
     */
    function __construct($_name, $_description, $_quantity, $_category, $_img, $_type, $_material) {
        parent::__construct($_name, $_description, $_quantity, $_category, $_img);
        $this->type = $_type;
        $this->material = $_material;
    }
}
