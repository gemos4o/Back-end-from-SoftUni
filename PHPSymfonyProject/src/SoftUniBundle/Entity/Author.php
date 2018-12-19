<?php

namespace SoftUniBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table(name="authors")
 * @ORM\Entity(repositoryClass="SoftUniBundle\Repository\AuthorRepository")
 */
class Author
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
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $last_name;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="SoftUniBundle\Entity\Book", mappedBy="author_id")
     */
    private $books;


    private function __construct()
    {
        $this->books = new ArrayCollection();
    }


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
     * Set firstName
     *
     * @param string $first_name
     *
     * @return Author
     */
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $last_name
     *
     * @return Author
     */
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Author
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return Book[]
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * @param Book[] $books
     */
    public function setBooks($books)
    {
        $this->books = $books;
    }
}

