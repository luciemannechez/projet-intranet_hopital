<?php

/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * This file has been generated by the Sonata EasyExtends bundle ( http://sonata-project.org/bundles/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author <yourname> <youremail>
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \IuchBundle\Entity\Service
     */
    private $id_service;

    /**
     * @var \IuchBundle\Entity\Fonction
     */
    private $id_fonction;


    /**
     * Set idService
     *
     * @param \IuchBundle\Entity\Service $idService
     *
     * @return User
     */
    public function setIdService(\IuchBundle\Entity\Service $idService = null)
    {
        $this->id_service = $idService;

        return $this;
    }

    /**
     * Get idService
     *
     * @return \IuchBundle\Entity\Service
     */
    public function getIdService()
    {
        return $this->id_service;
    }

    /**
     * Set idFonction
     *
     * @param \IuchBundle\Entity\Fonction $idFonction
     *
     * @return User
     */
    public function setIdFonction(\IuchBundle\Entity\Fonction $idFonction = null)
    {
        $this->id_fonction = $idFonction;

        return $this;
    }

    /**
     * Get idFonction
     *
     * @return \IuchBundle\Entity\Fonction
     */
    public function getIdFonction()
    {
        return $this->id_fonction;
    }
    /**
     * @var \IuchBundle\Entity\Fonction
     */
    private $fonction;

    /**
     * @var \IuchBundle\Entity\Service
     */
    private $service;


    /**
     * Set fonction
     *
     * @param \IuchBundle\Entity\Fonction $fonction
     *
     * @return User
     */
    public function setFonction(\IuchBundle\Entity\Fonction $fonction = null)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return \IuchBundle\Entity\Fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set service
     *
     * @param \IuchBundle\Entity\Service $service
     *
     * @return User
     */
    public function setService(\IuchBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \IuchBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}
