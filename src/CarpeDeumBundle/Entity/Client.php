<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\OAuthServerBundle\Entity\Client as BaseClient;

/**
 * @ORM\Entity
 */
class Client extends BaseClient
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var User
     *
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;

    /**
     * @var AccessToken
     *
     * @ORM\OneToMany(targetEntity="AccessToken", mappedBy="client")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $tokens;

    /**
     * @var RefreshToken
     *
     * @ORM\OneToMany(targetEntity="RefreshToken", mappedBy="client")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $refreshTokens;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return RefreshToken
     */
    public function getRefreshTokens()
    {
        return $this->refreshTokens;
    }

    /**
     * @param RefreshToken $refreshTokens
     */
    public function setRefreshTokens(RefreshToken $refreshTokens)
    {
        $this->refreshTokens = $refreshTokens;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return AccessToken
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * @param AccessToken $tokens
     */
    public function setTokens(AccessToken $tokens)
    {
        $this->tokens = $tokens;
    }
}
