<?php

namespace App\ToyotaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="app_toyota_auto")
 */
class Auto
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Model", inversedBy="autos")
     * @ORM\JoinColumn(name="model_id", referencedColumnName="id")
     */
    protected $model;
    
    /**
     *
     * @ORM\Column(type="string", length=100)
     */
    protected $title;

   

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
     * Set title
     *
     * @param string $title
     * @return Auto
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set model
     *
     * @param \App\ToyotaBundle\Entity\Model $model
     * @return Auto
     */
    public function setModel(\App\ToyotaBundle\Entity\Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \App\ToyotaBundle\Entity\Model 
     */
    public function getModel()
    {
        return $this->model;
    }
}
