<?php
/**
 * comment
 */
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 20/04/2016
 * Time: 15:21
 */

namespace ItbTest;

use Itb\Member;
class MemberTest extends \PHPUnit_Framework_TestCase{
    /**
     *
     * testCanCreateMember(
     */
    public function testCanCreateMember()
    {
        // arrange
        $p = new Member();

        // act

        // assert
        $this->assertNotNull($p);
    }

    /**
     * testGetMemberNameAfterSetTestMember()
     *
     */
    public function testGetMemberNameAfterSetTestMember()
    {
        // arrange
        $p = new Member();
        $p->setCaptainName('TestCaptianName');
        $expectedResult = 'TestCaptianName';

        // act
        $result = $p->getCaptainName();

        // assert
        $this->assertEquals($expectedResult, $result);
    }


    /**
     * @dataProvider memberNameProvider
     */
    public function testGetDescriptionAfterSetFromProvider($captainName, $expectedResult)
    {
        // arrange
        $p = new Member();
        $p->setCaptainName($captainName);

        // act
        $result = $p->getCaptainName();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @return array
     */
    public function memberNameProvider()
    {
        return [
            ['captain kirk','captain kirk'],
            ['captain ross','captain ross'],
        ];


    }

}