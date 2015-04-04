<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 *
 * @ORM\Table(name="login")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LoginRepository")
 */
class Login
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="passwd=string(255)", type="string")
=======
     * @ORM\Column(name="passwd", type="string")
>>>>>>> parent of 55c6506... url de invitacion
     */
    private $passwd;


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
     * Set name
     *
     * @param string $name
     * @return Login
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
<<<<<<< HEAD
     * Set passwd=string(255)
     *
     * @param string $passwd=string(255)
=======
     * Set passwd
     *
     * @param string $passwd
>>>>>>> parent of 55c6506... url de invitacion
     * @return Login
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd=string(255)
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> parent of 55c6506... url de invitacion
