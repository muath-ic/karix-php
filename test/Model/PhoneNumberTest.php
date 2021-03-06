<?php
/**
 * PhoneNumberTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * karix api
 *
 * Karix API lets you interact with the Karix platform using an omnichannel messaging API. It also allows you to query your account, set up webhooks and buy phone numbers.
 *
 * OpenAPI spec version: 2.0
 * Contact: support@karix.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Karix;

/**
 * PhoneNumberTest Class Doc Comment
 *
 * @category    Class
 * @description Details of the phone number
 * @package     Karix
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "PhoneNumber"
     */
    public function testPhoneNumber()
    {
    }

    /**
     * Test attribute "number"
     */
    public function testPropertyNumber()
    {
        $phone_number = new \Karix\Model\PhoneNumber();
        $number = "14154009186";
        
        $phone_number->setNumber($number);
        $this->assertEquals($number, $phone_number->getNumber());

    }

    /**
     * Test attribute "number_type"
     */
    public function testPropertyNumberType()
    {
        $phone_number = new \Karix\Model\PhoneNumber();
        $number_type = "mobile";
        
        $phone_number->setNumberType($number_type);
        $this->assertEquals($number_type, $phone_number->getNumberType());

    }

    /**
     * Test attribute "region"
     */
    public function testPropertyRegion()
    {
        $phone_number = new \Karix\Model\PhoneNumber();
        
        
        $subobj = new \Karix\Model\PhoneNumberRegion();
        

        $region = $subobj;
        
        $phone_number->setRegion($region);
        $this->assertEquals($region, $phone_number->getRegion());

    }

    /**
     * Test attribute "service"
     */
    public function testPropertyService()
    {
        $phone_number = new \Karix\Model\PhoneNumber();
        
        
        $subobj = new \Karix\Model\PhoneNumberService();
        

        $service = $subobj;
        
        $phone_number->setService($service);
        $this->assertEquals($service, $phone_number->getService());

    }

    /**
     * Test attribute "rate"
     */
    public function testPropertyRate()
    {
        $phone_number = new \Karix\Model\PhoneNumber();
        
        
        $subobj = new \Karix\Model\PhoneNumberRate();
        

        $rate = $subobj;
        
        $phone_number->setRate($rate);
        $this->assertEquals($rate, $phone_number->getRate());

    }

    /**
    * Helper to create a good example of model
    */
    public function getGoodExample()
    {
        $number = "14154009186";
        
        $number_type = "mobile";
        
        
        
        $subobj = new \Karix\Model\PhoneNumberRegion();
        

        $region = $subobj;
        
        
        
        $subobj = new \Karix\Model\PhoneNumberService();
        

        $service = $subobj;
        
        
        
        $subobj = new \Karix\Model\PhoneNumberRate();
        

        $rate = $subobj;
        
        return array(
            "number" => $number,
            "number_type" => $number_type,
            "region" => $region,
            "service" => $service,
            "rate" => $rate,
        );
    }

    /**
    * Test PhoneNumber validation
    */
    public function testValidation()
    {
        $example = $this->getGoodExample();
        $phone_number = new \Karix\Model\PhoneNumber($example);
        $this->assertTrue($phone_number->valid());
    }

}
