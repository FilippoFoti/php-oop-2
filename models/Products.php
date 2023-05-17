<?php

/**
 * ## Products class
 * defines Products class
 * @author Filippo Foti
 */
class Products {
    public $name; 
    public $description;
    public $quantity;
    public $price;
    public $category;

    /**
     * @param string $_name
     * @param string $_description
     * @param float $_quantity
     * @param float $_price
     * @param string $_category
     */
    function __construct($_name, $_description, $_quantity, $_price, $_category) {
        $this->name = $_name;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->price = $_price;
        $this->category = $_category;
    }
}
?>