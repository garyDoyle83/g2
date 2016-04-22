<?php
/**
*comment
 * comment
*/
namespace Itb;
/**
 * Main comment
 */

use Mattsmithdev\PdoCrud\DatabaseTable;
use Mattsmithdev\PdoCrud\DatabaseManager;

/**
 * Class User
 * @package Itb
 */
class User extends DatabaseTable
{
    /**
     * role user
     * constant for role
     */
    const ROLE_USER = 1;
    /**
     * role user
     * constant for role
     */
    const ROLE_ADMIN = 2;
    /**
     * id
     * @var int id
     */
    private $id;
    /**
     * username
     * @var string username
     *
     */
    private $username;
    /**
     * password
     * @var string passowrds
     *
     */
    private $password;
    /**
     * role
     * @var int role
     *
     */
    private $role;

    /**
     * return Id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * parameter for Id
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * para for username
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * parameter for username
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * returns password
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * getRole
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * setRole
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * hash the password before storing ...
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->password = $hashedPassword;
    }

    /**
     * return success (or not) of attempting to find matching username/password in the repo
     * @param $username
     * @param $password
     *
     * @return bool
     */
    public static function canFindMatchingUsernameAndPassword($username, $password)
    {
        $user = User::getOneByUsername($username);

        // if no record has this username, return FALSE
        if(null == $user){
            return false;
        }

        // hashed correct password
        $hashedStoredPassword = $user->getPassword();

        // return whether or not hash of input password matches stored hash
        return password_verify($password, $hashedStoredPassword);
    }

    /**
     * if record exists with $username, return User object for that record
     * otherwise return 'null'
     *
     * @param $username
     *
     * @return mixed|null
     */
    public static function getOneByUsername($username)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        $sql = 'SELECT * FROM users WHERE username=:username';
        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, __CLASS__);
        $statement->execute();

        if ($object = $statement->fetch()) {
            return $object;
        } else {
            return null;
        }
    }



}