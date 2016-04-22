<?php
/**
 * cpmment
*/
namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseTable;
use Mattsmithdev\PdoCrud\DatabaseManager;

/**
 * Class Player
 * @package Itb
 */
class Player extends DatabaseTable
{
    /**
     * id
     * @var int Id
     */
    private $id;
    /**
     * name
     * @var string name
     */
    private $name;

    /**
     * @var string file
     */
    private $file;

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }


    /**
     * handicap
     * @var int  handicap
     */
    private $handicap;

    /**
     * team name
     * @var string teamName
     *
     */
    private $teamName;

    /**
     *  return this gets id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * param for Id
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * returns getname
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set name
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * commenty
     * @return mixed
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * this is the parameter for setting the handicap
     * @param mixed $handicap
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;
    }

    /**
     * this will return the team name
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * coomment
     * @param mixed $teamName
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }




/*    public static function customSearch($minId,$searchText)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        // wrap wildcard '%' around the search text for the SQL query
        $searchText = '%' . $searchText . '%';

        $sql = 'SELECT * FROM players WHERE (description LIKE :searchText) AND (id > :minId)';

        $statement = $connection->prepare($sql);
        $statement->bindParam(':minId', $minId, \PDO::PARAM_INT);
        $statement->bindParam(':searchText', $searchText, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, '\\' . __CLASS__);
        $statement->execute();

        $players = $statement->fetchAll();

        return $players;
    }*/
}