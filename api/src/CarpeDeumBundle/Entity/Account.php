<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="ACCOUNTS", uniqueConstraints={@ORM\UniqueConstraint(name="LOGIN", columns={"LOGIN"})}, indexes={@ORM\Index(name="GEO", columns={"GEO_LAT", "GEO_LNG"})})
 * @ORM\Entity
 */
class Account
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN", type="string", length=100, nullable=false)
     */
    private $login = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=100, nullable=false)
     */
    private $password = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="EMAIL_CONFIRMED", type="integer", nullable=false)
     */
    private $emailConfirmed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ADMIN", type="integer", nullable=false)
     */
    private $admin = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", nullable=false)
     */
    private $type = 'USER';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_SIGNUP", type="datetime", nullable=false)
     */
    private $dateSignup = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_LOGIN", type="datetime", nullable=false)
     */
    private $dateLogin = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_PREMIUM", type="date", nullable=false)
     */
    private $datePremium = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ONLINE", type="datetime", nullable=false)
     */
    private $dateOnline = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_AWAY", type="datetime", nullable=false)
     */
    private $dateAway;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_BIRTH", type="date", nullable=false)
     */
    private $dateBirth = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="SESSION_ID", type="string", length=100, nullable=false)
     */
    private $sessionId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SESSION_ID_MOB", type="string", length=100, nullable=false)
     */
    private $sessionIdMob = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SESSION_ID_API", type="string", length=100, nullable=false)
     */
    private $sessionIdApi;

    /**
     * @var string
     *
     * @ORM\Column(name="LATEST_IP_ADDRESS", type="string", length=50, nullable=false)
     */
    private $latestIpAddress = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LATEST_IP_DATE", type="datetime", nullable=false)
     */
    private $latestIpDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="LATEST_USERAGENT", type="text", length=65535, nullable=false)
     */
    private $latestUseragent;

    /**
     * @var string
     *
     * @ORM\Column(name="LATEST_LANG", type="string", length=100, nullable=false)
     */
    private $latestLang = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LATEST_SECURE", type="boolean", nullable=false)
     */
    private $latestSecure = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="DISABLED", type="boolean", nullable=false)
     */
    private $disabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ADMIN_SUSPENDED", type="datetime", nullable=false)
     */
    private $adminSuspended = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="ADMIN_SUSPENDED_REASON", type="text", length=65535, nullable=false)
     */
    private $adminSuspendedReason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ADMIN_NOUPLOAD", type="datetime", nullable=false)
     */
    private $adminNoupload;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ADMIN_SILENCED", type="boolean", nullable=false)
     */
    private $adminSilenced;

    /**
     * @var integer
     *
     * @ORM\Column(name="VISITS_ARCHIVED", type="bigint", nullable=false)
     */
    private $visitsArchived = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VISITS_TOTAL", type="bigint", nullable=false)
     */
    private $visitsTotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CANDLES_AVAILABLE", type="integer", nullable=false)
     */
    private $candlesAvailable = '7';

    /**
     * @var integer
     *
     * @ORM\Column(name="CANDLES_USED", type="integer", nullable=false)
     */
    private $candlesUsed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PREMIUM", type="boolean", nullable=false)
     */
    private $premium = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PREMIUM_AUTORENEW", type="boolean", nullable=false)
     */
    private $premiumAutorenew = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPT_UNITS", type="string", nullable=false)
     */
    private $optUnits = 'METRIC';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PUBLIC", type="boolean", nullable=false)
     */
    private $public = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FIRST_NAME", type="string", length=100, nullable=false)
     */
    private $firstName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LAST_NAME", type="string", length=100, nullable=false)
     */
    private $lastName = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="INVISIBLE", type="boolean", nullable=false)
     */
    private $invisible = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="GENDER", type="string", nullable=false)
     */
    private $gender = '';

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="text", length=65535, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUSMEDIA", type="text", length=65535, nullable=false)
     */
    private $statusmedia;

    /**
     * @var string
     *
     * @ORM\Column(name="oldSTATUSMEDIATYPE", type="string", length=20, nullable=false)
     */
    private $oldstatusmediatype;

    /**
     * @var string
     *
     * @ORM\Column(name="oldSTATUSMEDIAPATH", type="string", length=100, nullable=false)
     */
    private $oldstatusmediapath;

    /**
     * @var string
     *
     * @ORM\Column(name="PIC", type="string", length=200, nullable=false)
     */
    private $pic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PICS_PUBLIC", type="text", length=65535, nullable=false)
     */
    private $picsPublic;

    /**
     * @var string
     *
     * @ORM\Column(name="PICS_PRIVATE", type="text", length=65535, nullable=false)
     */
    private $picsPrivate;

    /**
     * @var string
     *
     * @ORM\Column(name="PICS_HIDDEN", type="text", length=65535, nullable=false)
     */
    private $picsHidden;

    /**
     * @var string
     *
     * @ORM\Column(name="VIDS_PUBLIC", type="text", length=65535, nullable=false)
     */
    private $vidsPublic;

    /**
     * @var string
     *
     * @ORM\Column(name="VIDS_PRIVATE", type="text", length=65535, nullable=false)
     */
    private $vidsPrivate;

    /**
     * @var string
     *
     * @ORM\Column(name="VIDS_HIDDEN", type="text", length=65535, nullable=false)
     */
    private $vidsHidden;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOW_CONTACTS_TO", type="string", nullable=false)
     */
    private $showContactsTo = 'EVERYONE';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ZOD_SUN", type="boolean", nullable=false)
     */
    private $zodSun = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ZOD_RISING", type="boolean", nullable=false)
     */
    private $zodRising = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ZOD_CHINESE", type="boolean", nullable=false)
     */
    private $zodChinese = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="GEO_DISPLAY", type="string", nullable=false)
     */
    private $geoDisplay;

    /**
     * @var float
     *
     * @ORM\Column(name="GEO_LAT", type="float", precision=10, scale=0, nullable=false)
     */
    private $geoLat;

    /**
     * @var float
     *
     * @ORM\Column(name="GEO_LNG", type="float", precision=10, scale=0, nullable=false)
     */
    private $geoLng;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="GEO_DATE", type="datetime", nullable=false)
     */
    private $geoDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="PERSO_SELFPORTRAIT", type="text", length=65535, nullable=false)
     */
    private $persoSelfportrait;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSO_QUALITIES", type="text", length=65535, nullable=false)
     */
    private $persoQualities;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSO_FLAWS", type="text", length=65535, nullable=false)
     */
    private $persoFlaws;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PERSO_SMOKE", type="boolean", nullable=false)
     */
    private $persoSmoke = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PERSO_DRINK", type="boolean", nullable=false)
     */
    private $persoDrink = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PERSO_EDUCATION", type="boolean", nullable=false)
     */
    private $persoEducation = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PERSO_OCCUPATION", type="text", length=65535, nullable=false)
     */
    private $persoOccupation;

    /**
     * @var array
     *
     * @ORM\Column(name="PERSO_LANGUAGES", type="simple_array", nullable=false)
     */
    private $persoLanguages;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSO_LANGUAGES_OTHER", type="text", length=65535, nullable=false)
     */
    private $persoLanguagesOther;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_LIKES", type="text", length=65535, nullable=false)
     */
    private $likesLikes;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_DISLIKES", type="text", length=65535, nullable=false)
     */
    private $likesDislikes;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_CINEMA", type="text", length=65535, nullable=false)
     */
    private $likesCinema;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_MUSIC", type="text", length=65535, nullable=false)
     */
    private $likesMusic;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_TV", type="text", length=65535, nullable=false)
     */
    private $likesTv;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_BOOKS", type="text", length=65535, nullable=false)
     */
    private $likesBooks;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_GAMES", type="text", length=65535, nullable=false)
     */
    private $likesGames;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_TRAVEL", type="text", length=65535, nullable=false)
     */
    private $likesTravel;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_CLUBS", type="text", length=65535, nullable=false)
     */
    private $likesClubs;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_FOOD", type="text", length=65535, nullable=false)
     */
    private $likesFood;

    /**
     * @var string
     *
     * @ORM\Column(name="LIKES_CLOTHES", type="text", length=65535, nullable=false)
     */
    private $likesClothes;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT", type="text", length=65535, nullable=false)
     */
    private $contact;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONT_RATING_POINTS", type="bigint", nullable=false)
     */
    private $contRatingPoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONT_RATING_NUMBER", type="bigint", nullable=false)
     */
    private $contRatingNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="CONT_RATING_AVERAGE", type="float", precision=10, scale=0, nullable=false)
     */
    private $contRatingAverage;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONT_FRIENDERS", type="bigint", nullable=false)
     */
    private $contFrienders;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONT_FRIENDEES", type="bigint", nullable=false)
     */
    private $contFriendees;

    /**
     * @var string
     *
     * @ORM\Column(name="FACEBOOK_ID", type="string", length=30, nullable=false)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="FACEBOOK_URL", type="text", length=65535, nullable=false)
     */
    private $facebookUrl;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Account
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Account
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set emailConfirmed
     *
     * @param integer $emailConfirmed
     *
     * @return Account
     */
    public function setEmailConfirmed($emailConfirmed)
    {
        $this->emailConfirmed = $emailConfirmed;

        return $this;
    }

    /**
     * Get emailConfirmed
     *
     * @return integer
     */
    public function getEmailConfirmed()
    {
        return $this->emailConfirmed;
    }

    /**
     * Set admin
     *
     * @param integer $admin
     *
     * @return Account
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return integer
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Account
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateSignup
     *
     * @param \DateTime $dateSignup
     *
     * @return Account
     */
    public function setDateSignup($dateSignup)
    {
        $this->dateSignup = $dateSignup;

        return $this;
    }

    /**
     * Get dateSignup
     *
     * @return \DateTime
     */
    public function getDateSignup()
    {
        return $this->dateSignup;
    }

    /**
     * Set dateLogin
     *
     * @param \DateTime $dateLogin
     *
     * @return Account
     */
    public function setDateLogin($dateLogin)
    {
        $this->dateLogin = $dateLogin;

        return $this;
    }

    /**
     * Get dateLogin
     *
     * @return \DateTime
     */
    public function getDateLogin()
    {
        return $this->dateLogin;
    }

    /**
     * Set datePremium
     *
     * @param \DateTime $datePremium
     *
     * @return Account
     */
    public function setDatePremium($datePremium)
    {
        $this->datePremium = $datePremium;

        return $this;
    }

    /**
     * Get datePremium
     *
     * @return \DateTime
     */
    public function getDatePremium()
    {
        return $this->datePremium;
    }

    /**
     * Set dateOnline
     *
     * @param \DateTime $dateOnline
     *
     * @return Account
     */
    public function setDateOnline($dateOnline)
    {
        $this->dateOnline = $dateOnline;

        return $this;
    }

    /**
     * Get dateOnline
     *
     * @return \DateTime
     */
    public function getDateOnline()
    {
        return $this->dateOnline;
    }

    /**
     * Set dateAway
     *
     * @param \DateTime $dateAway
     *
     * @return Account
     */
    public function setDateAway($dateAway)
    {
        $this->dateAway = $dateAway;

        return $this;
    }

    /**
     * Get dateAway
     *
     * @return \DateTime
     */
    public function getDateAway()
    {
        return $this->dateAway;
    }

    /**
     * Set dateBirth
     *
     * @param \DateTime $dateBirth
     *
     * @return Account
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * Get dateBirth
     *
     * @return \DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return Account
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionIdMob
     *
     * @param string $sessionIdMob
     *
     * @return Account
     */
    public function setSessionIdMob($sessionIdMob)
    {
        $this->sessionIdMob = $sessionIdMob;

        return $this;
    }

    /**
     * Get sessionIdMob
     *
     * @return string
     */
    public function getSessionIdMob()
    {
        return $this->sessionIdMob;
    }

    /**
     * Set sessionIdApi
     *
     * @param string $sessionIdApi
     *
     * @return Account
     */
    public function setSessionIdApi($sessionIdApi)
    {
        $this->sessionIdApi = $sessionIdApi;

        return $this;
    }

    /**
     * Get sessionIdApi
     *
     * @return string
     */
    public function getSessionIdApi()
    {
        return $this->sessionIdApi;
    }

    /**
     * Set latestIpAddress
     *
     * @param string $latestIpAddress
     *
     * @return Account
     */
    public function setLatestIpAddress($latestIpAddress)
    {
        $this->latestIpAddress = $latestIpAddress;

        return $this;
    }

    /**
     * Get latestIpAddress
     *
     * @return string
     */
    public function getLatestIpAddress()
    {
        return $this->latestIpAddress;
    }

    /**
     * Set latestIpDate
     *
     * @param \DateTime $latestIpDate
     *
     * @return Account
     */
    public function setLatestIpDate($latestIpDate)
    {
        $this->latestIpDate = $latestIpDate;

        return $this;
    }

    /**
     * Get latestIpDate
     *
     * @return \DateTime
     */
    public function getLatestIpDate()
    {
        return $this->latestIpDate;
    }

    /**
     * Set latestUseragent
     *
     * @param string $latestUseragent
     *
     * @return Account
     */
    public function setLatestUseragent($latestUseragent)
    {
        $this->latestUseragent = $latestUseragent;

        return $this;
    }

    /**
     * Get latestUseragent
     *
     * @return string
     */
    public function getLatestUseragent()
    {
        return $this->latestUseragent;
    }

    /**
     * Set latestLang
     *
     * @param string $latestLang
     *
     * @return Account
     */
    public function setLatestLang($latestLang)
    {
        $this->latestLang = $latestLang;

        return $this;
    }

    /**
     * Get latestLang
     *
     * @return string
     */
    public function getLatestLang()
    {
        return $this->latestLang;
    }

    /**
     * Set latestSecure
     *
     * @param boolean $latestSecure
     *
     * @return Account
     */
    public function setLatestSecure($latestSecure)
    {
        $this->latestSecure = $latestSecure;

        return $this;
    }

    /**
     * Get latestSecure
     *
     * @return boolean
     */
    public function getLatestSecure()
    {
        return $this->latestSecure;
    }

    /**
     * Set disabled
     *
     * @param boolean $disabled
     *
     * @return Account
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Get disabled
     *
     * @return boolean
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set adminSuspended
     *
     * @param \DateTime $adminSuspended
     *
     * @return Account
     */
    public function setAdminSuspended($adminSuspended)
    {
        $this->adminSuspended = $adminSuspended;

        return $this;
    }

    /**
     * Get adminSuspended
     *
     * @return \DateTime
     */
    public function getAdminSuspended()
    {
        return $this->adminSuspended;
    }

    /**
     * Set adminSuspendedReason
     *
     * @param string $adminSuspendedReason
     *
     * @return Account
     */
    public function setAdminSuspendedReason($adminSuspendedReason)
    {
        $this->adminSuspendedReason = $adminSuspendedReason;

        return $this;
    }

    /**
     * Get adminSuspendedReason
     *
     * @return string
     */
    public function getAdminSuspendedReason()
    {
        return $this->adminSuspendedReason;
    }

    /**
     * Set adminNoupload
     *
     * @param \DateTime $adminNoupload
     *
     * @return Account
     */
    public function setAdminNoupload($adminNoupload)
    {
        $this->adminNoupload = $adminNoupload;

        return $this;
    }

    /**
     * Get adminNoupload
     *
     * @return \DateTime
     */
    public function getAdminNoupload()
    {
        return $this->adminNoupload;
    }

    /**
     * Set adminSilenced
     *
     * @param boolean $adminSilenced
     *
     * @return Account
     */
    public function setAdminSilenced($adminSilenced)
    {
        $this->adminSilenced = $adminSilenced;

        return $this;
    }

    /**
     * Get adminSilenced
     *
     * @return boolean
     */
    public function getAdminSilenced()
    {
        return $this->adminSilenced;
    }

    /**
     * Set visitsArchived
     *
     * @param integer $visitsArchived
     *
     * @return Account
     */
    public function setVisitsArchived($visitsArchived)
    {
        $this->visitsArchived = $visitsArchived;

        return $this;
    }

    /**
     * Get visitsArchived
     *
     * @return integer
     */
    public function getVisitsArchived()
    {
        return $this->visitsArchived;
    }

    /**
     * Set visitsTotal
     *
     * @param integer $visitsTotal
     *
     * @return Account
     */
    public function setVisitsTotal($visitsTotal)
    {
        $this->visitsTotal = $visitsTotal;

        return $this;
    }

    /**
     * Get visitsTotal
     *
     * @return integer
     */
    public function getVisitsTotal()
    {
        return $this->visitsTotal;
    }

    /**
     * Set candlesAvailable
     *
     * @param integer $candlesAvailable
     *
     * @return Account
     */
    public function setCandlesAvailable($candlesAvailable)
    {
        $this->candlesAvailable = $candlesAvailable;

        return $this;
    }

    /**
     * Get candlesAvailable
     *
     * @return integer
     */
    public function getCandlesAvailable()
    {
        return $this->candlesAvailable;
    }

    /**
     * Set candlesUsed
     *
     * @param integer $candlesUsed
     *
     * @return Account
     */
    public function setCandlesUsed($candlesUsed)
    {
        $this->candlesUsed = $candlesUsed;

        return $this;
    }

    /**
     * Get candlesUsed
     *
     * @return integer
     */
    public function getCandlesUsed()
    {
        return $this->candlesUsed;
    }

    /**
     * Set premium
     *
     * @param boolean $premium
     *
     * @return Account
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get premium
     *
     * @return boolean
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set premiumAutorenew
     *
     * @param boolean $premiumAutorenew
     *
     * @return Account
     */
    public function setPremiumAutorenew($premiumAutorenew)
    {
        $this->premiumAutorenew = $premiumAutorenew;

        return $this;
    }

    /**
     * Get premiumAutorenew
     *
     * @return boolean
     */
    public function getPremiumAutorenew()
    {
        return $this->premiumAutorenew;
    }

    /**
     * Set optUnits
     *
     * @param string $optUnits
     *
     * @return Account
     */
    public function setOptUnits($optUnits)
    {
        $this->optUnits = $optUnits;

        return $this;
    }

    /**
     * Get optUnits
     *
     * @return string
     */
    public function getOptUnits()
    {
        return $this->optUnits;
    }

    /**
     * Set public
     *
     * @param boolean $public
     *
     * @return Account
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Account
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Account
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Account
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set invisible
     *
     * @param boolean $invisible
     *
     * @return Account
     */
    public function setInvisible($invisible)
    {
        $this->invisible = $invisible;

        return $this;
    }

    /**
     * Get invisible
     *
     * @return boolean
     */
    public function getInvisible()
    {
        return $this->invisible;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Account
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Account
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statusmedia
     *
     * @param string $statusmedia
     *
     * @return Account
     */
    public function setStatusmedia($statusmedia)
    {
        $this->statusmedia = $statusmedia;

        return $this;
    }

    /**
     * Get statusmedia
     *
     * @return string
     */
    public function getStatusmedia()
    {
        return $this->statusmedia;
    }

    /**
     * Set oldstatusmediatype
     *
     * @param string $oldstatusmediatype
     *
     * @return Account
     */
    public function setOldstatusmediatype($oldstatusmediatype)
    {
        $this->oldstatusmediatype = $oldstatusmediatype;

        return $this;
    }

    /**
     * Get oldstatusmediatype
     *
     * @return string
     */
    public function getOldstatusmediatype()
    {
        return $this->oldstatusmediatype;
    }

    /**
     * Set oldstatusmediapath
     *
     * @param string $oldstatusmediapath
     *
     * @return Account
     */
    public function setOldstatusmediapath($oldstatusmediapath)
    {
        $this->oldstatusmediapath = $oldstatusmediapath;

        return $this;
    }

    /**
     * Get oldstatusmediapath
     *
     * @return string
     */
    public function getOldstatusmediapath()
    {
        return $this->oldstatusmediapath;
    }

    /**
     * Set pic
     *
     * @param string $pic
     *
     * @return Account
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set picsPublic
     *
     * @param string $picsPublic
     *
     * @return Account
     */
    public function setPicsPublic($picsPublic)
    {
        $this->picsPublic = $picsPublic;

        return $this;
    }

    /**
     * Get picsPublic
     *
     * @return string
     */
    public function getPicsPublic()
    {
        return $this->picsPublic;
    }

    /**
     * Set picsPrivate
     *
     * @param string $picsPrivate
     *
     * @return Account
     */
    public function setPicsPrivate($picsPrivate)
    {
        $this->picsPrivate = $picsPrivate;

        return $this;
    }

    /**
     * Get picsPrivate
     *
     * @return string
     */
    public function getPicsPrivate()
    {
        return $this->picsPrivate;
    }

    /**
     * Set picsHidden
     *
     * @param string $picsHidden
     *
     * @return Account
     */
    public function setPicsHidden($picsHidden)
    {
        $this->picsHidden = $picsHidden;

        return $this;
    }

    /**
     * Get picsHidden
     *
     * @return string
     */
    public function getPicsHidden()
    {
        return $this->picsHidden;
    }

    /**
     * Set vidsPublic
     *
     * @param string $vidsPublic
     *
     * @return Account
     */
    public function setVidsPublic($vidsPublic)
    {
        $this->vidsPublic = $vidsPublic;

        return $this;
    }

    /**
     * Get vidsPublic
     *
     * @return string
     */
    public function getVidsPublic()
    {
        return $this->vidsPublic;
    }

    /**
     * Set vidsPrivate
     *
     * @param string $vidsPrivate
     *
     * @return Account
     */
    public function setVidsPrivate($vidsPrivate)
    {
        $this->vidsPrivate = $vidsPrivate;

        return $this;
    }

    /**
     * Get vidsPrivate
     *
     * @return string
     */
    public function getVidsPrivate()
    {
        return $this->vidsPrivate;
    }

    /**
     * Set vidsHidden
     *
     * @param string $vidsHidden
     *
     * @return Account
     */
    public function setVidsHidden($vidsHidden)
    {
        $this->vidsHidden = $vidsHidden;

        return $this;
    }

    /**
     * Get vidsHidden
     *
     * @return string
     */
    public function getVidsHidden()
    {
        return $this->vidsHidden;
    }

    /**
     * Set showContactsTo
     *
     * @param string $showContactsTo
     *
     * @return Account
     */
    public function setShowContactsTo($showContactsTo)
    {
        $this->showContactsTo = $showContactsTo;

        return $this;
    }

    /**
     * Get showContactsTo
     *
     * @return string
     */
    public function getShowContactsTo()
    {
        return $this->showContactsTo;
    }

    /**
     * Set zodSun
     *
     * @param boolean $zodSun
     *
     * @return Account
     */
    public function setZodSun($zodSun)
    {
        $this->zodSun = $zodSun;

        return $this;
    }

    /**
     * Get zodSun
     *
     * @return boolean
     */
    public function getZodSun()
    {
        return $this->zodSun;
    }

    /**
     * Set zodRising
     *
     * @param boolean $zodRising
     *
     * @return Account
     */
    public function setZodRising($zodRising)
    {
        $this->zodRising = $zodRising;

        return $this;
    }

    /**
     * Get zodRising
     *
     * @return boolean
     */
    public function getZodRising()
    {
        return $this->zodRising;
    }

    /**
     * Set zodChinese
     *
     * @param boolean $zodChinese
     *
     * @return Account
     */
    public function setZodChinese($zodChinese)
    {
        $this->zodChinese = $zodChinese;

        return $this;
    }

    /**
     * Get zodChinese
     *
     * @return boolean
     */
    public function getZodChinese()
    {
        return $this->zodChinese;
    }

    /**
     * Set geoDisplay
     *
     * @param string $geoDisplay
     *
     * @return Account
     */
    public function setGeoDisplay($geoDisplay)
    {
        $this->geoDisplay = $geoDisplay;

        return $this;
    }

    /**
     * Get geoDisplay
     *
     * @return string
     */
    public function getGeoDisplay()
    {
        return $this->geoDisplay;
    }

    /**
     * Set geoLat
     *
     * @param float $geoLat
     *
     * @return Account
     */
    public function setGeoLat($geoLat)
    {
        $this->geoLat = $geoLat;

        return $this;
    }

    /**
     * Get geoLat
     *
     * @return float
     */
    public function getGeoLat()
    {
        return $this->geoLat;
    }

    /**
     * Set geoLng
     *
     * @param float $geoLng
     *
     * @return Account
     */
    public function setGeoLng($geoLng)
    {
        $this->geoLng = $geoLng;

        return $this;
    }

    /**
     * Get geoLng
     *
     * @return float
     */
    public function getGeoLng()
    {
        return $this->geoLng;
    }

    /**
     * Set geoDate
     *
     * @param \DateTime $geoDate
     *
     * @return Account
     */
    public function setGeoDate($geoDate)
    {
        $this->geoDate = $geoDate;

        return $this;
    }

    /**
     * Get geoDate
     *
     * @return \DateTime
     */
    public function getGeoDate()
    {
        return $this->geoDate;
    }

    /**
     * Set persoSelfportrait
     *
     * @param string $persoSelfportrait
     *
     * @return Account
     */
    public function setPersoSelfportrait($persoSelfportrait)
    {
        $this->persoSelfportrait = $persoSelfportrait;

        return $this;
    }

    /**
     * Get persoSelfportrait
     *
     * @return string
     */
    public function getPersoSelfportrait()
    {
        return $this->persoSelfportrait;
    }

    /**
     * Set persoQualities
     *
     * @param string $persoQualities
     *
     * @return Account
     */
    public function setPersoQualities($persoQualities)
    {
        $this->persoQualities = $persoQualities;

        return $this;
    }

    /**
     * Get persoQualities
     *
     * @return string
     */
    public function getPersoQualities()
    {
        return $this->persoQualities;
    }

    /**
     * Set persoFlaws
     *
     * @param string $persoFlaws
     *
     * @return Account
     */
    public function setPersoFlaws($persoFlaws)
    {
        $this->persoFlaws = $persoFlaws;

        return $this;
    }

    /**
     * Get persoFlaws
     *
     * @return string
     */
    public function getPersoFlaws()
    {
        return $this->persoFlaws;
    }

    /**
     * Set persoSmoke
     *
     * @param boolean $persoSmoke
     *
     * @return Account
     */
    public function setPersoSmoke($persoSmoke)
    {
        $this->persoSmoke = $persoSmoke;

        return $this;
    }

    /**
     * Get persoSmoke
     *
     * @return boolean
     */
    public function getPersoSmoke()
    {
        return $this->persoSmoke;
    }

    /**
     * Set persoDrink
     *
     * @param boolean $persoDrink
     *
     * @return Account
     */
    public function setPersoDrink($persoDrink)
    {
        $this->persoDrink = $persoDrink;

        return $this;
    }

    /**
     * Get persoDrink
     *
     * @return boolean
     */
    public function getPersoDrink()
    {
        return $this->persoDrink;
    }

    /**
     * Set persoEducation
     *
     * @param boolean $persoEducation
     *
     * @return Account
     */
    public function setPersoEducation($persoEducation)
    {
        $this->persoEducation = $persoEducation;

        return $this;
    }

    /**
     * Get persoEducation
     *
     * @return boolean
     */
    public function getPersoEducation()
    {
        return $this->persoEducation;
    }

    /**
     * Set persoOccupation
     *
     * @param string $persoOccupation
     *
     * @return Account
     */
    public function setPersoOccupation($persoOccupation)
    {
        $this->persoOccupation = $persoOccupation;

        return $this;
    }

    /**
     * Get persoOccupation
     *
     * @return string
     */
    public function getPersoOccupation()
    {
        return $this->persoOccupation;
    }

    /**
     * Set persoLanguages
     *
     * @param array $persoLanguages
     *
     * @return Account
     */
    public function setPersoLanguages($persoLanguages)
    {
        $this->persoLanguages = $persoLanguages;

        return $this;
    }

    /**
     * Get persoLanguages
     *
     * @return array
     */
    public function getPersoLanguages()
    {
        return $this->persoLanguages;
    }

    /**
     * Set persoLanguagesOther
     *
     * @param string $persoLanguagesOther
     *
     * @return Account
     */
    public function setPersoLanguagesOther($persoLanguagesOther)
    {
        $this->persoLanguagesOther = $persoLanguagesOther;

        return $this;
    }

    /**
     * Get persoLanguagesOther
     *
     * @return string
     */
    public function getPersoLanguagesOther()
    {
        return $this->persoLanguagesOther;
    }

    /**
     * Set likesLikes
     *
     * @param string $likesLikes
     *
     * @return Account
     */
    public function setLikesLikes($likesLikes)
    {
        $this->likesLikes = $likesLikes;

        return $this;
    }

    /**
     * Get likesLikes
     *
     * @return string
     */
    public function getLikesLikes()
    {
        return $this->likesLikes;
    }

    /**
     * Set likesDislikes
     *
     * @param string $likesDislikes
     *
     * @return Account
     */
    public function setLikesDislikes($likesDislikes)
    {
        $this->likesDislikes = $likesDislikes;

        return $this;
    }

    /**
     * Get likesDislikes
     *
     * @return string
     */
    public function getLikesDislikes()
    {
        return $this->likesDislikes;
    }

    /**
     * Set likesCinema
     *
     * @param string $likesCinema
     *
     * @return Account
     */
    public function setLikesCinema($likesCinema)
    {
        $this->likesCinema = $likesCinema;

        return $this;
    }

    /**
     * Get likesCinema
     *
     * @return string
     */
    public function getLikesCinema()
    {
        return $this->likesCinema;
    }

    /**
     * Set likesMusic
     *
     * @param string $likesMusic
     *
     * @return Account
     */
    public function setLikesMusic($likesMusic)
    {
        $this->likesMusic = $likesMusic;

        return $this;
    }

    /**
     * Get likesMusic
     *
     * @return string
     */
    public function getLikesMusic()
    {
        return $this->likesMusic;
    }

    /**
     * Set likesTv
     *
     * @param string $likesTv
     *
     * @return Account
     */
    public function setLikesTv($likesTv)
    {
        $this->likesTv = $likesTv;

        return $this;
    }

    /**
     * Get likesTv
     *
     * @return string
     */
    public function getLikesTv()
    {
        return $this->likesTv;
    }

    /**
     * Set likesBooks
     *
     * @param string $likesBooks
     *
     * @return Account
     */
    public function setLikesBooks($likesBooks)
    {
        $this->likesBooks = $likesBooks;

        return $this;
    }

    /**
     * Get likesBooks
     *
     * @return string
     */
    public function getLikesBooks()
    {
        return $this->likesBooks;
    }

    /**
     * Set likesGames
     *
     * @param string $likesGames
     *
     * @return Account
     */
    public function setLikesGames($likesGames)
    {
        $this->likesGames = $likesGames;

        return $this;
    }

    /**
     * Get likesGames
     *
     * @return string
     */
    public function getLikesGames()
    {
        return $this->likesGames;
    }

    /**
     * Set likesTravel
     *
     * @param string $likesTravel
     *
     * @return Account
     */
    public function setLikesTravel($likesTravel)
    {
        $this->likesTravel = $likesTravel;

        return $this;
    }

    /**
     * Get likesTravel
     *
     * @return string
     */
    public function getLikesTravel()
    {
        return $this->likesTravel;
    }

    /**
     * Set likesClubs
     *
     * @param string $likesClubs
     *
     * @return Account
     */
    public function setLikesClubs($likesClubs)
    {
        $this->likesClubs = $likesClubs;

        return $this;
    }

    /**
     * Get likesClubs
     *
     * @return string
     */
    public function getLikesClubs()
    {
        return $this->likesClubs;
    }

    /**
     * Set likesFood
     *
     * @param string $likesFood
     *
     * @return Account
     */
    public function setLikesFood($likesFood)
    {
        $this->likesFood = $likesFood;

        return $this;
    }

    /**
     * Get likesFood
     *
     * @return string
     */
    public function getLikesFood()
    {
        return $this->likesFood;
    }

    /**
     * Set likesClothes
     *
     * @param string $likesClothes
     *
     * @return Account
     */
    public function setLikesClothes($likesClothes)
    {
        $this->likesClothes = $likesClothes;

        return $this;
    }

    /**
     * Get likesClothes
     *
     * @return string
     */
    public function getLikesClothes()
    {
        return $this->likesClothes;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Account
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contRatingPoints
     *
     * @param integer $contRatingPoints
     *
     * @return Account
     */
    public function setContRatingPoints($contRatingPoints)
    {
        $this->contRatingPoints = $contRatingPoints;

        return $this;
    }

    /**
     * Get contRatingPoints
     *
     * @return integer
     */
    public function getContRatingPoints()
    {
        return $this->contRatingPoints;
    }

    /**
     * Set contRatingNumber
     *
     * @param integer $contRatingNumber
     *
     * @return Account
     */
    public function setContRatingNumber($contRatingNumber)
    {
        $this->contRatingNumber = $contRatingNumber;

        return $this;
    }

    /**
     * Get contRatingNumber
     *
     * @return integer
     */
    public function getContRatingNumber()
    {
        return $this->contRatingNumber;
    }

    /**
     * Set contRatingAverage
     *
     * @param float $contRatingAverage
     *
     * @return Account
     */
    public function setContRatingAverage($contRatingAverage)
    {
        $this->contRatingAverage = $contRatingAverage;

        return $this;
    }

    /**
     * Get contRatingAverage
     *
     * @return float
     */
    public function getContRatingAverage()
    {
        return $this->contRatingAverage;
    }

    /**
     * Set contFrienders
     *
     * @param integer $contFrienders
     *
     * @return Account
     */
    public function setContFrienders($contFrienders)
    {
        $this->contFrienders = $contFrienders;

        return $this;
    }

    /**
     * Get contFrienders
     *
     * @return integer
     */
    public function getContFrienders()
    {
        return $this->contFrienders;
    }

    /**
     * Set contFriendees
     *
     * @param integer $contFriendees
     *
     * @return Account
     */
    public function setContFriendees($contFriendees)
    {
        $this->contFriendees = $contFriendees;

        return $this;
    }

    /**
     * Get contFriendees
     *
     * @return integer
     */
    public function getContFriendees()
    {
        return $this->contFriendees;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     *
     * @return Account
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set facebookUrl
     *
     * @param string $facebookUrl
     *
     * @return Account
     */
    public function setFacebookUrl($facebookUrl)
    {
        $this->facebookUrl = $facebookUrl;

        return $this;
    }

    /**
     * Get facebookUrl
     *
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->facebookUrl;
    }
}
