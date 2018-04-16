<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostsRepository")
 * @ORM\Table(name="posts")
 */
class Posts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }




    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }




    /**
     * @ORM\Column(type="string")
     */
    private $author;

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }




    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private  $image;



    /**
     * @ORM\Column(type="string")
     */
    private $subject;

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }




    /**
     * @ORM\Column(type="date")
     */
    private $created_date;

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * @param mixed $created_date
     */
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
    }




    /**
     * @ORM\Column(type="string")
     */
    private $created_time;

    /**
     * @return mixed
     */
    public function getCreatedTime()
    {
        return $this->created_time;
    }

    /**
     * @param mixed $created_time
     */
    public function setCreatedTime($created_time)
    {
        $this->created_time = $created_time;
    }


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users", inversedBy="posts")
     */
    private $user;

    /**
     * @param mixed $user
     */
    public function setUser(Users $user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }



    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $comments;

}