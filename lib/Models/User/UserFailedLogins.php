<?php

namespace Phalcon\UserPlugin\Models\User;

class UserFailedLogins extends \Phalcon\Mvc\Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $id_user;

    /**
     * @var string
     */
    protected $ip_address;

    /**
     * @var int
     */
    protected $attempted;

    /**
     * Method to set the value of field id.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field id_user.
     *
     * @param int $id_user
     *
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Method to set the value of field ip_address.
     *
     * @param string $ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    /**
     * Method to set the value of field attempted.
     *
     * @param int $attempted
     *
     * @return $this
     */
    public function setAttempted($attempted)
    {
        $this->attempted = $attempted;

        return $this;
    }

    /**
     * Returns the value of field id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field id_user.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->id_user;
    }

    /**
     * Returns the value of field ip_address.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Returns the value of field attempted.
     *
     * @return int
     */
    public function getAttempted()
    {
        return $this->attempted;
    }

    public function getSource()
    {
        return 'user_failed_logins';
    }

    public function initialize()
    {
        $this->belongsTo('id_user', 'Phalcon\UserPlugin\Models\User\User', 'id', array(
            'alias' => 'user',
            'reusable' => true,
        ));
    }

    /**
     * @return UserFailedLogins[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return UserFailedLogins
     */
    public static function findFirst($parameters = array())
    {
        return parent::findFirst($parameters);
    }
}
