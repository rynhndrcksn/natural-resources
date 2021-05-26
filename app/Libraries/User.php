<?php

namespace App\Libraries;

/**
 * Class User holds the properties and methods for a User object
 */
class User
{
	// properties
	private $_email; // string
	private $_first; // string
	private $_last; //
    private $_sid;
    private $_role;
    private $_program;

    /**
     * User constructor to create a new User object
     * @param $_email
     * @param $_first
     * @param $_last
     * @param $_sid
     * @param $_role
     * @param $_program
     */
    public function __construct($_email, $_first, $_last, $_sid, $_role, $_program)
    {
        $this->_email = $_email;
        $this->_first = $_first;
        $this->_last = $_last;
        $this->_sid = $_sid;
        $this->_role = $_role;
        $this->_program = $_program;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->_first;
    }

    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->_first = $first;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->_last;
    }

    /**
     * @param mixed $last
     */
    public function setLast($last)
    {
        $this->_last = $last;
    }

    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->_sid;
    }

    /**
     * @param mixed $sid
     */
    public function setSid($sid)
    {
        $this->_sid = $sid;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->_role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->_role = $role;
    }

    /**
     * @return mixed
     */
    public function getProgram()
    {
        return $this->_program;
    }

    /**
     * @param mixed $program
     */
    public function setProgram($program)
    {
        $this->_program = $program;
    }

}