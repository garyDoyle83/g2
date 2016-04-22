<?php
/**
 * comment
 */
namespace ItbTest;

use Itb\Player;

class PlayerTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     * testCanCreatePlayer(
     */
    public function testCanCreatePlayer()
    {
        // arrange
        $p = new Player();

        // act

        // assert
        $this->assertNotNull($p);
    }

    /**
     *
     * testGetIdAfterSetPlayerId()
     */

    public function testGetIdAfterSetPlayerId()
    {
        // arrange
        $p = new Player();
        $p->setPlayerID('9999');
        $expectedResult = '9999';

        // act
        $result = $p->getPlayerID();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     *
     * testGetPlayerNameAfterSetTestPlayer()
     */
    public function testGetPlayerNameAfterSetTestPlayer()
    {
        // arrange
        $p = new Player();
        $p->setPlayerName('TestPlayer');
        $expectedResult = 'TestPlayer';

        // act
        $result = $p->getPlayerName();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     *
     *  testGetIdAfterSetPlayerDate()
     */

    public function testGetIdAfterSetPlayerDate()
    {
        // arrange
        $p = new Player();
        $p->setPlayerDate('10-10-2016');
        $expectedResult = '10-10-2016';

        // act
        $result = $p->getPlayerDate();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     *
     * testGetIdAfterSetPlayerTime
     */

    public function testGetIdAfterSetPlayerTime()
    {
        // arrange
        $p = new Player();
        $p->setPlayerTime('11:00');
        $expectedResult = '11:00';

        // act
        $result = $p->getPlayerTime();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    
    /**
     * @dataProvider playerNameProvider
     */
    public function testGetDescriptionAfterSetFromProvider($playerName, $expectedResult)
    {
        // arrange
        $p = new Player();
        $p->setPlayerName($playerName);

        // act
        $result = $p->getPlayerName();

        // assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @return array
     */
    public function playerNameProvider()
    {
        return [
            ['harry','harry'],
            ['amanda','amanda'],
            ['toby','toby'],            
        ];


    }



}