<?php

namespace AppBundle\Entity;

/**
 * Project
 */
class Project
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titreProj;

    /**
     * @var string
     */
    private $lienProj;

    /**
     * @var string
     */
    private $descProj;

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
     * Set titreProj.
     *
     * @param string $titreProj
     *
     * @return Project
     */
    public function setTitreProj($titreProj)
    {
        $this->titreProj = $titreProj;

        return $this;
    }

    /**
     * Get titreProj.
     *
     * @return string
     */
    public function getTitreProj()
    {
        return $this->titreProj;
    }

    /**
     * Set lienProj.
     *
     * @param string $lienProj
     *
     * @return Project
     */
    public function setLienProj($lienProj)
    {
        $this->lienProj = $lienProj;

        return $this;
    }

    /**
     * Get lienProj.
     *
     * @return string
     */
    public function getLienProj()
    {
        return $this->lienProj;
    }

    /**
     * Set descProj.
     *
     * @param string $descProj
     *
     * @return Project
     */
    public function setDescProj($descProj)
    {
        $this->descProj = $descProj;

        return $this;
    }

    /**
     * Get descProj.
     *
     * @return string
     */
    public function getDescProj()
    {
        return $this->descProj;
    }
}
