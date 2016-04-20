<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 20/04/2016
 * Time: 14:13
 */

namespace StJosephsChurchEastWallTest;

use StJosephsChurchEastWall\Product;

class ProductTest extends \PHPUnit_Framework_TestCase
{

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

    /**
     * Second test to see if id can be set to 10
     */
    public function testGetIdAfterSet10()
    {
        // arrange
        $v = new Product();
        $v->setId('10');
        $expectedResult = '10';

        // act
        $result = $v->getId();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * third test to see if description can be set to description10
     */
    public function testGetDescriptionAfterSetDescription10()
    {
        // arrange
        $v = new Product();
        $v->setDescription('description10');
        $expectedResult = 'description10';

        // act
        $result = $v->getDescription();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * fourth test to see if price10 can be set to Price10
     */
    public function testGetPrice10AfterSetPrice10()
    {
        // arrange
        $v = new Product();
        $v->setPrice('10');
        $expectedResult = '10';

        // act
        $result = $v->getPrice();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * fifth test to see if quantity can be set to quantity10
     */
    public function testGetQuantityAfterSetQuantity10()
    {
        // arrange
        $v = new Product();
        $v->setQuantity('10');
        $expectedResult = '10';

        // act
        $result = $v->getQuantity();

        // assert
        $this->assertEquals($expectedResult, $result);
    }
}
