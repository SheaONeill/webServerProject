<?php
namespace StJosephsChurchEastWall;

use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * Class Product
 *
 * This class is responsible for getting and setting the
 * variables for the products to and from the data base
 *
 * @package StJosephsChurchEastWall
 */
class Product extends DatabaseTable
{

    //create the variables to match product table in database 

    /**
     * this is the variable to store
     * the id of the product
     * @var int $id
     */
    private $id;

    /**
     * this is the variable to store
     * the description of the product
     * @var string $id
     */
    private $description;

    /**
     * this is the variable to store
     * the price of the product
     * @var float $id
     */
    private $price;

    /**
     * this is the variable to store
     * the quantity of the product
     * @var int $id
     */
    private $quantity;

    /**
     * get the id for the product
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * set the id for the product
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * get the description for the product
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * get the description for the product
     *     
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * get the price for the product
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * set the price of the product
     * 
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * get the product quantity
     * 
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * set the product quantity
     * 
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}//end class products

