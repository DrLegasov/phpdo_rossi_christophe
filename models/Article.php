<?php

class Article{

    private $id;
    private $title;
    private $description;
    private $picture;
    private $price;
 //   protected $category;

    public function __construct(){}
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
    /*/**
     * Get the value of category
     */ 
    /*public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    /*public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
    */
    public static function getListArticles($dbc){
    
        $query = 'SELECT * FROM `article` ORDER BY `title`';
        $response = $dbc->query($query);
        $articles = $response->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    
        return $articles;
    }
    
    
    public static function getArticle($dbc, $id){
    
        $query = 'SELECT * FROM `article` WHERE id = :id';
        $aBindParam = array('id'=>$id);
        $oArticle =  $dbc->select($query,$aBindParam);
        return $oArticle;
    }
    
    public static function updateArticle($dbc, $id, $title, $description, $picture, $price){
        $query = 'UPDATE `article` 
                    SET 
                    `title` = :title,
                    `description` = :description,
                    picture = :picture,
                    price = :price,
                    WHERE id = :id';
    
        $aBindParam = array('id'=>$id, 'title'=>$title, 'description'=>$description, 'picture'=>$picture, 'price'=>$price);
        $oArticle =  $dbc->execute($query,$aBindParam);
    
        return $oArticle;
    }
    public static function addArticle($dbc, $title, $description, $picture, $price){
    
        $query = 'INSERT INTO `article` 
                    SET 
                    `title` = :title,
                    `description` = :description,
                    picture = :picture,
                    price = :price';
        $aBindParam = array('title' => $title, 'description' => $description, 'picture' => $picture, 'price' => $price);
        $oArticle = $dbc->execute($query, $aBindParam);
    
        return $oArticle;
    }
    public static function deleteArticle($dbc, $id){
    
        $query = 'DELETE FROM `article` WHERE id = :id';
        $aBindParam = array('id'=>$id);
        $oArticle =  $dbc->execute($query,$aBindParam);
    
    }

}