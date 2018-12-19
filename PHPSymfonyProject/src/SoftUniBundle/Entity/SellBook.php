<?php

namespace SoftUniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SellBook
 *
 * @ORM\Table(name="sell_books")
 * @ORM\Entity(repositoryClass="SoftUniBundle\Repository\SellBookRepository")
 */
class SellBook
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToOne(targetEntity="SoftUniBundle\Entity\Book", inversedBy="id")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datesell", type="datetime")
     */
    private $datesell;


    private function __construct()
    {
        $this->datesell = new\DateTime('now');
    }




    /**
     * @var User[]
     * @ORM\ManyToMany(targetEntity="SoftUniBundle\Entity\User", inversedBy="sellBooks")
     */
    private $users;


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
     * Set datesell
     *
     * @param \DateTime $datesell
     *
     * @return SellBook
     */
    public function setDatesell($datesell)
    {
        $this->datesell = $datesell;

        return $this;
    }

    /**
     * Get datesell
     *
     * @return \DateTime
     */
    public function getDatesell()
    {
        return $this->datesell;
    }






    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User[] $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }
}

