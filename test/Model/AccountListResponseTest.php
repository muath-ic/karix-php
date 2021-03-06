<?php
/**
 * AccountListResponseTest
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
 * AccountListResponseTest Class Doc Comment
 *
 * @category    Class
 * @description AccountListResponse
 * @package     Karix
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountListResponseTest extends \PHPUnit_Framework_TestCase
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
     * Test "AccountListResponse"
     */
    public function testAccountListResponse()
    {
    }

    /**
     * Test attribute "objects"
     */
    public function testPropertyObjects()
    {
        $account_list_response = new \Karix\Model\AccountListResponse();
        $account_list_response_objects = [];
        
        $subobj = new \Karix\Model\Account();
        

        $account_list_response_objects[] = $subobj;
        $objects = $account_list_response_objects;
        
        $account_list_response->setObjects($objects);
        $this->assertEquals($objects, $account_list_response->getObjects());

    }

    /**
     * Test attribute "meta"
     */
    public function testPropertyMeta()
    {
        $account_list_response = new \Karix\Model\AccountListResponse();
        
        
        $subobj = new \Karix\Model\ArrayMetaResponse();
        

        $meta = $subobj;
        
        $account_list_response->setMeta($meta);
        $this->assertEquals($meta, $account_list_response->getMeta());

    }

    /**
    * Helper to create a good example of model
    */
    public function getGoodExample()
    {
        $account_list_response_objects = [];
        
        $subobj = new \Karix\Model\Account();
        

        $account_list_response_objects[] = $subobj;
        $objects = $account_list_response_objects;
        
        
        
        $subobj = new \Karix\Model\ArrayMetaResponse();
        

        $meta = $subobj;
        
        return array(
            "objects" => $objects,
            "meta" => $meta,
        );
    }

    /**
    * Test AccountListResponse validation
    */
    public function testValidation()
    {
        $example = $this->getGoodExample();
        $account_list_response = new \Karix\Model\AccountListResponse($example);
        $this->assertTrue($account_list_response->valid());
    }

}
