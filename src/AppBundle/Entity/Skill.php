<?php

namespace AppBundle\Entity;

/**
 * Skill
 */
class Skill
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameSkill;


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
     * Set nameSkill.
     *
     * @param string $nameSkill
     *
     * @return Skill
     */
    public function setNameSkill($nameSkill)
    {
        $this->nameSkill = $nameSkill;

        return $this;
    }

    /**
     * Get nameSkill.
     *
     * @return string
     */
    public function getNameSkill()
    {
        return $this->nameSkill;
    }
}
