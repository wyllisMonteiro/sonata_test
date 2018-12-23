<?php

namespace AppBundle\Entity;

/**
 * Member
 */
class Member
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameMember;

    /**
     * @var string
     */
    private $contactMember;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameMember.
     *
     * @param string $nameMember
     *
     * @return Member
     */
    public function setNameMember($nameMember)
    {
        $this->nameMember = $nameMember;

        return $this;
    }

    /**
     * Get nameMember.
     *
     * @return string
     */
    public function getNameMember()
    {
        return $this->nameMember;
    }

    /**
     * Set contactMember.
     *
     * @param string $contactMember
     *
     * @return Member
     */
    public function setContactMember($contactMember)
    {
        $this->contactMember = $contactMember;

        return $this;
    }

    /**
     * Get contactMember.
     *
     * @return string
     */
    public function getContactMember()
    {
        return $this->contactMember;
    }
}
