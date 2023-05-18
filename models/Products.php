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
    private $price;
    public $category;
    public $img;

    /**
     * @param string $_name
     * @param string $_description
     * @param float $_quantity
     * @param string $_category
     * @param string $_img
     */
    function __construct($_name, $_description, $_quantity, $_category, $_img) {
        $this->name = $_name;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->category = $_category;
        $this->img = $_img;
    }

    public function setPrice($_price) {
        if ($_price < 0) {
            throw new Exception("Non vendiamo nulla gratis");
        } else {
            $this->price = $_price;
        }
    }

    public function getPrice() {
        return $this->price;
    }
}
?>