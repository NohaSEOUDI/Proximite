<?php

namespace App\Entity;

//use App\Repository\UserFournisseurRepository;
use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="UserFournisseur")
 */
class UserFournisseur
{


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $address;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tel;
    /**
     * @ORM\Column(type="time")
     */
    private $open_hour;
    /**
     * @ORM\Column(type="time")
     */
    private $open_hour2;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $post;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $city;

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set openHour
     *
     * @param \DateTime $openHour
     *
     * @return User
     */
    public function setOpenHour($openHour)
    {
        $this->open_hour = $openHour;

        return $this;
    }

    /**
     * Get openHour
     *
     * @return \DateTime
     */
    public function getOpenHour()
    {
        return $this->open_hour;
    }

    /**
     * Get openHour
     *
     * @return \DateTime
     */
    public function getOpenHour2()
    {
        return $this->open_hour2;
    }

    /**
     * Get post
     *
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }
}
