<?php
namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseTable;

class Product extends DatabaseTable {

    private $id;
    private $description;
    private $price;
    private $quantity;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price) {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity() {
    return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity) {
    $this->quantity = $quantity;
    }

}//end class products