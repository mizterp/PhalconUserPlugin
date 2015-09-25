<?php

namespace Phalcon\UserPlugin\Models\User;

use Phalcon\Mvc\Model\Validator\Uniqueness;

class User extends \Phalcon\Mvc\Model
{
    const STATUS_INACTIVE = 0;

    const STATUS_ACTIVE = 1;

    const STATUS_SUSPENDED = 2;

    const STATUS_BANNED = 3;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $id_facebook;

    /**
     * @var string
     */
    protected $facebook_name;

    /**
     * @var string
     */
    protected $facebook_data;

    /**
     * @var int
     */
    protected $id_linkedin;

    /**
     * @var string
     */
    protected $linkedin_name;

    /**
     * @var string
     */
    protected $linkedin_data;

    /**
     * @var string
     */
    protected $id_gplus;

    /**
     * @var string
     */
    protected $gplus_name;

    /**
     * @var string
     */
    protected $gplus_data;

    /**
     * @var string
     */
    protected $id_twitter;

    /**
     * @var string
     */
    protected $twitter_name;

    /**
     * @var string
     */
    protected $twitter_data;

    /**
     * @var int
     */
    protected $must_change_password = 0;

    /**
     * @var int
     */
    protected $id_group;

    /**
     * @var int
     */
    protected $status = 0;

    /**
     * @var string
     */
    protected $created_at;

    /**
     * @var string
     */
    protected $updated_at;

    /**
     * @var string
     */
    protected $signup_ip;

    /**
     * @var string
     */
    protected $signup_email;

    /**
     * @var string
     */
    protected $signup_source;

    /**
     * Method to set the value of field id.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = (int) $id;

        return $this;
    }

    /**
     * Method to set the value of field name.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field email.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field password.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field id_facebook.
     *
     * @param string $id_facebook
     *
     * @return $this
     */
    public function setIdFacebook($id_facebook)
    {
        $this->id_facebook = $id_facebook;

        return $this;
    }

    /**
     * Method to set the value of field facebook_name.
     *
     * @param string $facebook_name
     *
     * @return $this
     */
    public function setFacebookName($facebook_name)
    {
        $this->facebook_name = $facebook_name;

        return $this;
    }

    /**
     * Method to set the value of field facebook_data.
     *
     * @param string $facebook_data
     *
     * @return $this
     */
    public function setFacebookData($facebook_data)
    {
        $this->facebook_data = $facebook_data;

        return $this;
    }

    /**
     * Method to set the value of field id_linkedin.
     *
     * @param int $id_linkedin
     *
     * @return $this
     */
    public function setIdLinkedin($id_linkedin)
    {
        $this->id_linkedin = $id_linkedin;

        return $this;
    }

    /**
     * Method to set the value of field linkedin_name.
     *
     * @param string $linkedin_name
     *
     * @return $this
     */
    public function setLinkedinName($linkedin_name)
    {
        $this->linkedin_name = $linkedin_name;

        return $this;
    }

    /**
     * Method to set the value of field linkedin_data.
     *
     * @param string $linkedin_data
     *
     * @return $this
     */
    public function setLinkedinData($linkedin_data)
    {
        $this->linkedin_data = $linkedin_data;

        return $this;
    }

    /**
     * Method to set the value of field id_gplus.
     *
     * @param string $id_gplus
     *
     * @return $this
     */
    public function setIdGplus($id_gplus)
    {
        $this->id_gplus = $id_gplus;

        return $this;
    }

    /**
     * Method to set the value of field gplus_name.
     *
     * @param string $gplus_name
     *
     * @return $this
     */
    public function setGplusName($gplus_name)
    {
        $this->gplus_name = $gplus_name;

        return $this;
    }

    /**
     * Method to set the value of field gplus_data.
     *
     * @param string $gplus_data
     *
     * @return $this
     */
    public function setGplusData($gplus_data)
    {
        $this->gplus_data = $gplus_data;

        return $this;
    }

    /**
     * Method to set the value of field id_twitter.
     *
     * @param string $id_twitter
     *
     * @return $this
     */
    public function setIdTwitter($id_twitter)
    {
        $this->id_twitter = $id_twitter;

        return $this;
    }

    /**
     * Method to set the value of field twitter_name.
     *
     * @param string $twitter_name
     *
     * @return $this
     */
    public function setTwitterName($twitter_name)
    {
        $this->twitter_name = $twitter_name;

        return $this;
    }

    /**
     * Method to set the value of field twitter_data.
     *
     * @param string $twitter_data
     *
     * @return $this
     */
    public function setTwitterData($twitter_data)
    {
        $this->twitter_data = $twitter_data;

        return $this;
    }

    /**
     * Method to set the value of field must_change_password.
     *
     * @param int $must_change_password
     *
     * @return $this
     */
    public function setMustChangePassword($must_change_password)
    {
        $this->must_change_password = (bool) $must_change_password;

        return $this;
    }

    /**
     * Method to set the value of field id_group.
     *
     * @param int $id_group
     *
     * @return $this
     */
    public function setIdGroup($id_group)
    {
        $this->id_group = (int) $id_group;

        return $this;
    }

    /**
     * Method to set the value of field status.
     *
     * @param int $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field created_at.
     *
     * @param string $created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Method to set the value of field updated_at.
     *
     * @param string $updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Method to set the value of field signup_ip.
     *
     * @param string $signup_ip
     *
     * @return $this
     */
    public function setSignupIp($signup_ip)
    {
        $this->signup_ip = $signup_ip;

        return $this;
    }

    /**
     * Method to set the value of field signup_email.
     *
     * @param string $signup_email
     *
     * @return $this
     */
    public function setSignupEmail($signup_email)
    {
        $this->signup_email = $signup_email;

        return $this;
    }

    /**
     * Method to set the value of field signup_source.
     *
     * @param string $signup_source
     *
     * @return $this
     */
    public function setSignupSource($signup_source)
    {
        $this->signup_source = $signup_source;

        return $this;
    }

    /**
     * Returns the value of field id.
     *
     * @return int
     */
    public function getId()
    {
        return (int) $this->id;
    }

    /**
     * Returns the value of field name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field id_facebook.
     *
     * @return string
     */
    public function getIdFacebook()
    {
        return $this->id_facebook;
    }

    /**
     * Returns the value of field facebook_name.
     *
     * @return string
     */
    public function getFacebookName()
    {
        return $this->facebook_name;
    }

    /**
     * Returns the value of field facebook_data.
     *
     * @return string
     */
    public function getFacebookData()
    {
        return $this->facebook_data;
    }

    /**
     * Returns the value of field id_linkedin.
     *
     * @return int
     */
    public function getIdLinkedin()
    {
        return $this->id_linkedin;
    }

    /**
     * Returns the value of field linkedin_name.
     *
     * @return string
     */
    public function getLinkedinName()
    {
        return $this->linkedin_name;
    }

    /**
     * Returns the value of field linkedin_data.
     *
     * @return string
     */
    public function getLinkedinData()
    {
        return $this->linkedin_data;
    }

    /**
     * Returns the value of field id_gplus.
     *
     * @return string
     */
    public function getIdGplus()
    {
        return $this->id_gplus;
    }

    /**
     * Returns the value of field gplus_name.
     *
     * @return string
     */
    public function getGplusName()
    {
        return $this->gplus_name;
    }

    /**
     * Returns the value of field gplus_data.
     *
     * @return string
     */
    public function getGplusData()
    {
        return $this->gplus_data;
    }

    /**
     * Returns the value of field id_twitter.
     *
     * @return string
     */
    public function getIdTwitter()
    {
        return $this->id_twitter;
    }

    /**
     * Returns the value of field twitter_name.
     *
     * @return string
     */
    public function getTwitterName()
    {
        return $this->twitter_name;
    }

    /**
     * Returns the value of field twitter_data.
     *
     * @return string
     */
    public function getTwitterData()
    {
        return $this->twitter_data;
    }

    /**
     * Returns the value of field must_change_password.
     *
     * @return int
     */
    public function getMustChangePassword()
    {
        return $this->must_change_password;
    }

    /**
     * Returns the value of field id_group.
     *
     * @return int
     */
    public function getIdGroup()
    {
        return (int) $this->id_group;
    }

    /**
     * Get current status.
     *
     * @return int
     */
    public function getStatus()
    {
        return (int) $this->status;
    }

    /**
     * Returns the value of field created_at.
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Returns the value of field updated_at.
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Returns the value of field signup_ip.
     *
     * @return string
     */
    public function getSignupIp()
    {
        return $this->signup_ip;
    }

    /**
     * Returns the value of field signup_email.
     *
     * @return string
     */
    public function getSignupEmail()
    {
        return $this->signup_email;
    }

    /**
     * Returns the value of field signup_source.
     *
     * @return string
     */
    public function getSignupSource()
    {
        return $this->signup_source;
    }

    /**
     * Checks if the password has to be changed.
     *
     * @return bool
     */
    public function shouldPasswordBeChanged()
    {
        return (bool) $this->must_change_password;
    }

    /**
     * Validations and business logic.
     */
    public function validation()
    {
        $this->validate(new Uniqueness(
            array(
                'field' => 'email',
                'message' => 'The email is already registered',
            )
        ));

        return true !== $this->validationHasFailed();
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasOne('id', 'Phalcon\UserPlugin\Models\User\UserProfile', 'id_user', array(
            'alias' => 'profile',
            'reusable' => true,
            'foreignKey' => array(
                'action' => \Phalcon\Mvc\Model\Relation::ACTION_CASCADE,
            ),
        ));

        $this->hasMany('id', 'Phalcon\UserPlugin\Models\User\UserSuccessLogins', 'id_user', array(
            'alias' => 'successLogins',
            'foreignKey' => array(
                'action' => \Phalcon\Mvc\Model\Relation::ACTION_CASCADE,
            ),
        ));

        $this->belongsTo('id_group', 'Phalcon\UserPlugin\Models\User\UserGroups', 'id', array(
            'alias' => 'group',
            'reusable' => true,
        ));

        $this->hasMany('id', 'Phalcon\UserPlugin\Models\User\UserPasswordChanges', 'id_user', array(
            'alias' => 'passwordChanges',
            'foreignKey' => array(
                'action' => \Phalcon\Mvc\Model\Relation::ACTION_CASCADE,
            ),
        ));

        $this->hasMany('id', 'Phalcon\UserPlugin\Models\User\UserResetPasswords', 'id_user', array(
            'alias' => 'resetPasswords',
            'foreignKey' => array(
                'action' => \Phalcon\Mvc\Model\Relation::ACTION_CASCADE,
            ),
        ));
    }

    public function getSource()
    {
        return 'user';
    }

    /**
     * @return User[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return User
     */
    public static function findFirst($parameters = array())
    {
        return parent::findFirst($parameters);
    }

    /**
     * Before create the user assign a password.
     */
    public function beforeValidationOnCreate()
    {
        if (empty($this->password)) {
            $tempPassword = preg_replace('/[^a-zA-Z0-9]/', '', base64_encode(openssl_random_pseudo_bytes(12)));
            $this->must_change_password = 1;
            $this->password = $this->getDI()->getSecurity()->hash($tempPassword);
        }

        if (empty($this->status)) {
            $this->status == static::STATUS_INACTIVE;
        }

        $this->created_at = date('Y-m-d H:i:s');
    }

    public function beforeValidationOnUpdate()
    {
        $this->updated_at = date('Y-m-d H:i:s');
    }

    /**
     * Send a confirmation e-mail to the user if the account is not active.
     */
    public function afterCreate()
    {
        if ($this->getStatus() === static::STATUS_ACTIVE) {
            return;
        }

        $emailConfirmation = new UserEmailConfirmations();
        $emailConfirmation->setIdUser($this->id);

        if ($emailConfirmation->save()) {
            $this->getDI()->getFlashSession()->notice(
                'A confirmation mail has been sent to '.$this->email
            );
        }
    }
}
