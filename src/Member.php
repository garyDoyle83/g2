<?php
/**
*member class
*/
namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseManager;
use Mattsmithdev\PdoCrud\DatabaseTable;
/**
 * this class is for database
 * @var int
 */
class Member extends DatabaseTable
{
    /**
     * the objects unique ID
     * @var int
     */
    private $captainId;

    /**
     * string for title
     * @var string $title
     */
    private $captainName;

    /**
     * string for team name
     * @var teamName
     *
     */
    private $teamName;

    /**
     * float for tea time
     * @var float
     */
    private $teeTime;


    /**
     * returns captainId
     * @return int
     */
    public function getCaptainId()
    {
        return $this->captainId;
    }
    /**
     * returns captain name
     * @return float
     */
    public function getCaptainName()
    {
        return $this->captainName;
    }
    /**
     * returns teamName
     * @return float
     */

    public function getTeamName()
    {
        return $this->teamName;
    }
    /**
     * returns teeTime
     * @return int
     */

    public function getTeeTime()
    {
        return $this->teeTime;
    }

    /**
     * returns captainId
     * @param int $captainId
     */
    public function setCaptainId($captainId)
    {
        $this->captainId = $captainId;
    }

    /**
     * set captainName
     * @param string $captainName
     */
    public function setCaptainName($captainName)
    {
        $this->captainName = $captainName;
    }

    /**
     * set TeamName
     * @param mixed $teamName
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }

    /**
     * set TeeTime
     * @param float $teeTime
     */
    public function setTeeTime($teeTime)
    {
        $this->teeTime = $teeTime;
    }

}