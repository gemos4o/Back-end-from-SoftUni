<?php

namespace SoftUniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SoftUniBundle\Repository\GenreRepository;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="SoftUniBundle\Repository\BookRepository")
 */
class Book
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
     * @var Genre
     *
     * @ORM\Column(name="genre", type="integer", length=11)
     *@ORM\ManyToOne(targetEntity="SoftUniBundle\Entity\Genre", inversedBy="books")
     * @ORM\JoinColumn(name="genre_id, referencedColumnName="id")
     */
    private $genre_id;

    /**
     * @var Author
     *
     * @ORM\Column(name="author", type="integer", length=11)
     * @ORM\ManyToOne(targetEntity="SoftUniBundle\Entity\Author", inversedBy="books")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $author_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datebuy", type="datetime")
     */
    private $datebuy;

    /**
     * @var int
     *
     * @ORM\Column(name="countbuy", type="integer")
     */
    private $countbuy;

    /**
     * @var string
     *
     * @ORM\Column(name="pricebuy", type="decimal", precision=10, scale=2)
     */
    private $pricebuy;

    /**
     * @var string
     *
     * @ORM\Column(name="pricesell", type="decimal", precision=10, scale=2)
     */
    private $pricesell;


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
     * @return Book
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
     * Set datebuy
     *
     * @param \DateTime $datebuy
     *
     * @return Book
     */
    public function setDatebuy($datebuy)
    {
        $this->datebuy = $datebuy;

        return $this;
    }

    /**
     * Get datebuy
     *
     * @return \DateTime
     */
    public function getDatebuy()
    {
        return $this->datebuy;
    }

    /**
     * Set countbuy
     *
     * @param integer $countbuy
     *
     * @return Book
     */
    public function setCountbuy($countbuy)
    {
        $this->countbuy = $countbuy;

        return $this;
    }

    /**
     * Get countbuy
     *
     * @return int
     */
    public function getCountbuy()
    {
        return $this->countbuy;
    }

    /**
     * Set pricebuy
     *
     * @param string $pricebuy
     *
     * @return Book
     */
    public function setPricebuy($pricebuy)
    {
        $this->pricebuy = $pricebuy;

        return $this;
    }

    /**
     * Get pricebuy
     *
     * @return string
     */
    public function getPricebuy()
    {
        return $this->pricebuy;
    }

    /**
     * Set pricesell
     *
     * @param string $pricesell
     *
     * @return Book
     */
    public function setPricesell($pricesell)
    {
        $this->pricesell = $pricesell;

        return $this;
    }

    /**
     * Get pricesell
     *
     * @return string
     */
    public function getPricesell()
    {
        return $this->pricesell;
    }

    /**
     * @return integer
     */
    public function getGenreId()
    {
        return $this->genre_id;
    }

    /**
     * Set genre_id
     * @param int $genre_id
     * @return Book
     */
    public function setGenreId($genre_id)
    {
        $this->genre_id = $genre_id;
    }

    /**
     * @return int
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * @param int $author_id
     */
    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
    }
}

