<?php

namespace VA\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="VA\BlogBundle\Entity\Repository\UserRepository")
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $user_name;

    /**
     * @ORM\Column(type="string")
     */
    protected $user_login;


    /**
     * @ORM\Column(type="string")
     */
    protected $user_gender;
    

    /**
     * @ORM\Column(type="date")
     */
    protected $user_bday;

    /**
     * @ORM\Column(type="string")
     */
    protected $user_password;

    /**
     * @ORM\Column(type="string")
     */
    protected $cover_image;

    /**
     * @ORM\Column(type="string")
     */
    protected $avatar_image;


    /**
     * @ORM\OneToMany(targetEntity="Posts", mappedBy="author")
     */
    protected $posts;

    /**
     * @ORM\OneToMany(targetEntity="VA\BlogBundle\Entity\Comments", mappedBy="author")
     */
    protected $comments;


    /**
     * @ORM\Column(type="string", nullable = true)
     */
    protected $slug;




    public function __construct()
    {
        $this->posts = new ArrayCollection();
        $this->comments = new ArrayCollection();

    }

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
     * Set userName
     *
     * @param string $userName
     *
     * @return User
     */
    public function setUserName($userName)
    {
        $this->user_name = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set userLogin
     *
     * @param string $userLogin
     *
     * @return User
     */
    public function setUserLogin($userLogin)
    {
        $this->user_login = $userLogin;

        return $this;
    }

    /**
     * Get userLogin
     *
     * @return string
     */
    public function getUserLogin()
    {
        return $this->user_login;
    }

    /**
     * Set userBday
     *
     * @param \DateTime $userBday
     *
     * @return User
     */
    public function setUserBday($userBday)
    {
        $this->user_bday = $userBday;

        return $this;
    }

    /**
     * Get userBday
     *
     * @return \DateTime
     */
    public function getUserBday()
    {
        return $this->user_bday;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     *
     * @return User
     */
    public function setUserPassword($userPassword)
    {
        $this->user_password = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * Set coverImage
     *
     * @param string $coverImage
     *
     * @return User
     */
    public function setCoverImage($coverImage)
    {
        $this->cover_image = $coverImage;

        return $this;
    }

    /**
     * Get coverImage
     *
     * @return string
     */
    public function getCoverImage()
    {
        return $this->cover_image;
    }

    /**
     * Set avatarImage
     *
     * @param string $avatarImage
     *
     * @return User
     */
    public function setAvatarImage($avatarImage)
    {
        $this->avatar_image = $avatarImage;

        return $this;
    }

    /**
     * Get avatarImage
     *
     * @return string
     */
    public function getAvatarImage()
    {
        return $this->avatar_image;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return User
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add post
     *
     * @param \VA\BlogBundle\Entity\Posts $post
     *
     * @return User
     */
    public function addPost(\VA\BlogBundle\Entity\Posts $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \VA\BlogBundle\Entity\Posts $post
     */
    public function removePost(\VA\BlogBundle\Entity\Posts $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Add comment
     *
     * @param \VA\BlogBundle\Entity\Comments $comment
     *
     * @return User
     */
    public function addComment(\VA\BlogBundle\Entity\Comments $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \VA\BlogBundle\Entity\Comments $comment
     */
    public function removeComment(\VA\BlogBundle\Entity\Comments $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set userGender
     *
     * @param string $userGender
     *
     * @return User
     */
    public function setUserGender($userGender)
    {
        $this->user_gender = $userGender;

        return $this;
    }

    /**
     * Get userGender
     *
     * @return string
     */
    public function getUserGender()
    {
        return $this->user_gender;
    }
}
