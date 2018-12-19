<?php

namespace SoftUniBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="genres")
 * @ORM\Entity(repositoryClass="SoftUniBundle\Repository\GenreRepository")
 */
class Genre
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var Book[]
     * @ORM\OneToMany(targetEntity="SoftUniBundle\Entity\Book", mappedBy="genre_id")
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
     * Set name
     *
     * @param string $name
     *
     * @return Genre
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

