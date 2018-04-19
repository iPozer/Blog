<?php

namespace VA\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
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
     * @ORM\Column(type="text")
     */
    protected $post;


    /**
     * @ORM\Column(type="text")
     */
    protected $comments;


    /**
     * @ORM\Column(type="string")
     */
    protected $slug;





    
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
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getUserLogin()
    {
        return $this->user_login;
    }

    /**
     * @param mixed $user_login
     */
    public function setUserLogin($user_login)
    {
        $this->user_login = $user_login;
    }

    /**
     * @return mixed
     */
    public function getUserBday()
    {
        return $this->user_bday;
    }

    /**
     * @param mixed $user_bday
     */
    public function setUserBday($user_bday)
    {
        $this->user_bday = $user_bday;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_password
     */
    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;
    }

    /**
     * @return mixed
     */
    public function getCoverImage()
    {
        return $this->cover_image;
    }

    /**
     * @param mixed $cover_image
     */
    public function setCoverImage($cover_image)
    {
        $this->cover_image = $cover_image;
    }

    /**
     * @return mixed
     */
    public function getAvatarImage()
    {
        return $this->avatar_image;
    }

    /**
     * @param mixed $avatar_image
     */
    public function setAvatarImage($avatar_image)
    {
        $this->avatar_image = $avatar_image;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param mixed $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

}


