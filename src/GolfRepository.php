<?php
/**
 * comment
 */
namespace Itb;
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 13/04/2016
 * Time: 16:06
 */


class GolfRepository
{
    /**
    /**comment
     * @var array
     *
     */
    private $golfs = [];
    /**
     * this is for setting the name handicap and team name
     * in the golf repository
     */

    public function __construct()
    {

        $this->golfs =[];
        $t1 = new Golf();
        $t1 ->setId("2112");
        $t1 -> setName ("John Hanaphy ");
        $t1 ->setHandicap('12');
        $t1->setTeamName("NSFW");
        $this->golfs[]= $t1;


        $t2 = new Golf();
        $t2 ->setId("2144");
        $t2 -> setName ("Jim Smith ");
        $t2 ->setHandicap('10');
        $t2->setTeamName("Hell's Kitchen Porters");
        $this->golfs[]= $t2;

        $t3 = new Golf();
        $t3 ->setId("2148");
        $t3 -> setName ("Willy O' Dwyer ");
        $t3 ->setHandicap('6');
        $t3->setTeamName("The Ball In The Hole Gang");
        $this->golfs[]= $t3;


        $t4 = new Golf();
        $t4 ->setId("2238");
        $t4 -> setName ("Rob Mc Guire ");
        $t4 ->setHandicap('14');
        $t4->setTeamName("Tiger Spawn");
        $this->golfs[]= $t4;


        $t5 = new Golf();
        $t5 ->setId("2167");
        $t5 -> setName ("Paul  Hannigan");
        $t5 ->setHandicap('14');
        $t5->setTeamName("The Yellow Men");
        $this->golfs[]= $t5;


    }

    /**
     * comment
     * @return array
     */
    public function getAll()
    {
        return $this->golfs;
    }
}