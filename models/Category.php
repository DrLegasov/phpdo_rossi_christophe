<?php

class Category{

    private $id;
    private $title;
    private $description;
    private $picture;

    public function __construct(){
        
    }
    
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
    
    public static function getListCategories($dbc){
    
        $query = 'SELECT * FROM `category` ORDER BY `title`';
        $response = $dbc->query($query);
        $categories = $response->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    
        return $categories;
    }
    
    
    public static function getCategory($dbc, $id){
    
        //version avec une requete preparée
        $query = 'SELECT * FROM `category` WHERE id = :id';
        $aBindParam = array('id'=>$id);
        $oCategory =  $dbc->select($query,$aBindParam);
    
        return $oCategory;
    }
    
    public static function updateCategory($dbc, $id, $title, $description, $picture){
        $query = 'UPDATE `category` 
                    SET 
                    `title` = :title,
                    `description` = :description,
                    picture = :picture,
                    WHERE id = :id';
    
        $aBindParam = array('id'=>$id, 'title'=>$title, 'description'=>$description, 'picture'=>$picture);
        $oCategory =  $dbc->execute($query,$aBindParam);
    
        return $oCategory;
    }
    public static function addCategory($dbc, $title, $description, $picture){
    
        $query = 'INSERT INTO `category` 
                    SET 
                    `title` = :title,
                    `description` = :description,
                    picture = :picture';
        $aBindParam = array('title' => $title, 'description' => $description, 'picture' => $picture);
        $oCategory = $dbc->execute($query, $aBindParam);
    
        return $oCategory;
    }
    public static function deleteCategory($dbc, $id){
    
        $query = 'DELETE FROM `category` WHERE id = :id';
        $aBindParam = array('id'=>$id);
        $oCategory =  $dbc->execute($query,$aBindParam);
    
    }
    
}
