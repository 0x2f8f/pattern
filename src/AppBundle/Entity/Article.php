<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank(
     *      message = "Title cannot be blank"
     * )
     * @Assert\Length(
     *      min = "3",
     *      minMessage = "Title is too short"
     * )
     */
    private $title;

    /**
     * @Gedmo\Slug(fields={"title"}, updatable=true, separator="-")
     *
     * @ORM\Column(name="slug", type="string", length=200, nullable=false, unique=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(
     *      message = "Content cannot be blank"
     * )
     * @Assert\Length(
     *      min = "10",
     *      minMessage = "Content must have min. 10 characters"
     * )
     */
    private $body;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $date_time;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     * @return Article
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     * @return Article
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     * @return Article
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set dateTime
     *
     * @param date $dateTime
     * @return self
     */
    public function setDateTime($dateTime)
    {
        $this->date_time = $dateTime;
        return $this;
    }

    /**
     * Get dateTime
     *
     * @return date $dateTime
     */
    public function getDateTime()
    {
        return $this->date_time;
    }
    /**
     * Дата/время лога
     *
     * @return string
     */
    public function getDateTimeFormat($format = 'd.m.y H:i.s')
    {
        return $this->getDateTime()->format($format);
    }

    public function __toString()
    {
        return $this->title;
    }
}
