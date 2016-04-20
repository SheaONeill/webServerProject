<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 20/04/2016
 * Time: 14:13
 */

namespace StJosephsChurchEastWallTest;

use StJosephsChurchEastWall\Product;

class ProductTest extends \PHPUnit_Framework_TestCase{

    /**
     * First test to see if Product can be instantiated
     */
    public function testCanCreateClass1()
    {
        // arrange
        $v = new Product();

        // act

        // assert
        $this->assertNotNull($v);
    }
    
}