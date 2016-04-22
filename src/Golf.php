<?php
/**
 * comment
 */
namespace Itb;
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 13/04/2016
 * Time: 16:25
 *
 * <th> ID </th>
<th> Name </th>
<th> Category </th>
<th> Team Name </th>
<th> Handicap </th>
 */


class Golf
{
    /**
     * the objects unique ID
     * @var int
     */
    private $id;

    /**
     * $name
     * @var string $name
     */
    private $name;



    /**
     * (should become ID of separate CATEGORY class ...)
     * @var string $category
     */
    private $handicap;

    /**
     * var float for teamName
     * @var float $teamName
     */
    private $teamName;

    /**
     * Dvd constructor.
     * @param $id
     */
    /*public function __construct($id, $name, $handicap, $teamName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->handicap = $handicap;
        $this->teamName = $teamName;
    }*/

    /**
     * output (as a string) the values of this object
     * formatted as an HTML table
     *
     * note: PHP_EOL adds line breaks - so the HTML source code is easier for humans to read
     * (but it does add to the SIZE of the HTML text file - so readability vs. size tradeoff ...)
     *
     * @return string
     */
    public function __toString()
    {
        $htmlString = '';
        $htmlString .= PHP_EOL . PHP_EOL . '<tr>';
        $htmlString .= PHP_EOL . '<td>' . $this->id . '</td>';
        $htmlString .= PHP_EOL . '<td>' . $this->name . '</td>';
        $htmlString .= PHP_EOL . '<td>' . $this->handicap . '</td>';
        $htmlString .= PHP_EOL . '<td>&euro; ' . $this->teamName . '</td>';
        $htmlString .= PHP_EOL . '</tr>';

        return $htmlString;
    }

    /**
     * returns getId
     * @return int getId
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * returns getName
     * @return var getName
     */

    public function getName()
    {
        return $this->name;
    }
    /**
     * returns handicap
     * @return int
     */
    public function getHandicap()
    {
        return $this->handicap;
    }
    /**
     * returns teamName
     * @return var
     */

    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * sets id
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * set name
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * set handicap
     * @param string $handicap
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;
    }

    /**
     * set TeamName
     * @param float $teamName
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }

}


    /**
     * function will exit with first return
     * so conditions ordered strongest test first, down to weakest test ...
     *
     * @return string
     */

