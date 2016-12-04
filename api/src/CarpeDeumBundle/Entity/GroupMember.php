<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMember
 *
 * @ORM\Table(name="GROUPMEMBERS")
 * @ORM\Entity
 */
class GroupMember
{
    /**
     * @var integer
     *
     * @ORM\Column(name="GROUP_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MEMBERSHIP", type="string", nullable=true)
     */
    private $membership;



    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return GroupMember
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return GroupMember
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set membership
     *
     * @param string $membership
     *
     * @return GroupMember
     */
    public function setMembership($membership)
    {
        $this->membership = $membership;

        return $this;
    }

    /**
     * Get membership
     *
     * @return string
     */
    public function getMembership()
    {
        return $this->membership;
    }
}
