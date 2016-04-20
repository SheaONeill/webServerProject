<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 20/04/2016
 * Time: 12:30
 */

namespace StJosephsChurchEastWallTest;

use StJosephsChurchEastWall\Verse;

class VerseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * First test to see if Verse can be instantiated
     */
    public function testCanCreateClass1()
    {
        // arrange
        $v = new Verse();

        // act

        // assert
        $this->assertNotNull($v);
    }

    /**
     * Second test to see if id can be set to 3000
     */
    public function testGetIdAfterSet3000()
    {
        // arrange
        $v = new Verse();
        $v->setId('3000');
        $expectedResult = '3000';

        // act
        $result = $v->getId();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * third test to see if heading can be set to heading3000
     */
    public function testGetHeadingAfterSetHeading3000()
    {
        // arrange
        $v = new Verse();
        $v->setHeading('heading3000');
        $expectedResult = 'heading3000';

        // act
        $result = $v->getHeading();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * fourth test to see if subheading1 can be set to Subheading13000
     */
    public function testGetSubHeading1AfterSetSubHeading13000()
    {
        // arrange
        $v = new Verse();
        $v->setSubheading1('Subheading13000');
        $expectedResult = 'Subheading13000';

        // act
        $result = $v->getSubHeading1();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * fifth test to see if paragraph can be set to paragraph3000
     */
    public function testGetParagraphAfterSetParagraph3000()
    {
        // arrange
        $v = new Verse();
        $v->setParagraph('Paragraph3000');
        $expectedResult = 'Paragraph3000';

        // act
        $result = $v->getParagraph();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

   
    
    
   // ---------------- data provider tests -----------------------

    // ---------------- Testing Id  -----------------------
    /**
     * @dataProvider idProvider
     */
    public function testGetIdAfterSetFromProvider($id, $expectedResult)
    {
        // arrange
        $v = new Verse();
        $v->setId($id);

        // act
        $result = $v->getId();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    public function idProvider()
    {
        return [
            ['3001','3001'],
            ['3002','3002'],
            ['3003','3003'],
            ['3004','3004'],
        ];
    }

    // ---------------- Testing Heading  -----------------------
    /**
 * @dataProvider headingProvider
 */
    public function testGetHeadingAfterSetFromProvider($heading, $expectedResult)
    {
        // arrange
        $v = new Verse();
        $v->setHeading($heading);

        // act
        $result = $v->getHeading();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    public function headingProvider()
    {
        return [
            ['Heading3001','Heading3001'],
            ['Heading3002','Heading3002'],
            ['Heading3003','Heading3003'],
            ['Heading3004','Heading3004'],
        ];
    }


    // ---------------- Testing subHeadingOne  -----------------------
    /**
     * @dataProvider subheading1Provider
     */
    public function testGetSubheading1AfterSetFromProvider($subheading1, $expectedResult)
    {
        // arrange
        $v = new Verse();
        $v->setSubheading1($subheading1);

        // act
        $result = $v->getSubheading1();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    public function subheading1Provider()
    {
        return [
            ['SubheadingOne3001','SubheadingOne3001'],
            ['SubheadingOne3002','SubheadingOne3002'],
            ['SubheadingOne3003','SubheadingOne3003'],
            ['SubheadingOne3004','SubheadingOne3004'],
        ];
    }

    // ---------------- Testing subHeadingTwo  -----------------------
    /**
     * @dataProvider subheading2Provider
     */
    public function testGetSubheading2AfterSetFromProvider($subheading2, $expectedResult)
    {
        // arrange
        $v = new Verse();
        $v->setSubheading2($subheading2);

        // act
        $result = $v->getSubheading2();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    public function subheading2Provider()
    {
        return [
            ['SubheadingTwo3001','SubheadingTwo3001'],
            ['SubheadingTwo3002','SubheadingTwo3002'],
            ['SubheadingTwo3003','SubheadingTwo3003'],
            ['SubheadingTwo3004','SubheadingTwo3004'],
        ];
    }

    // ---------------- Testing paragraph  -----------------------
    /**
     * @dataProvider paragraphProvider
     */
    public function testGetParagraphAfterSetFromProvider($paragraph, $expectedResult)
    {
        // arrange
        $v = new Verse();
        $v->setParagraph($paragraph);

        // act
        $result = $v->getParagraph();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    public function paragraphProvider()
    {
        return [
            ['Paragraph3001','Paragraph3001'],
            ['Paragraph3002','Paragraph3002'],
            ['Paragraph3003','Paragraph3003'],
            ['Paragraph3004','Paragraph3004'],
        ];
    }
}
