<?php

class Db extends PDO  
{

    public function __construct($servername, $bddname, $username, $password)
    {    
        parent::__construct('mysql:host='.$servername.';dbname='.$bddname,$username, $password);
    }
    
    /**
     * select
     *
     * @param  mixed $query
     * @param  mixed $array
     * @param  mixed $fetchMode
     * @return void
     */
    public function select($query, $array = array(), $fetchMode = PDO::FETCH_CLASS)
    {
        $sth = $this->prepare($query);

        foreach ($array as $key => $value):
            $sth->bindValue("$key", $value);
        endforeach;
        
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Category');
        
        return $sth->fetch();
    }
    
    public function selectAll($query, $array = array(), $fetchMode = PDO::FETCH_CLASS)
    {
        $sth = $this->prepare($query);

        foreach ($array as $key => $value):
            $sth->bindValue("$key", $value);
        endforeach;
        
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Category');
        
        return $sth->fetch();
    }
        

    
    /**
     * Cette fonction regroupe les actions d'ajout, d'update et de delete auprès de la BDD.
     *
     * @param  object $query
     * @param  array $array
     * @return object
     */
    public function execute($query, $array = array())
    {
        $sth = $this->prepare($query);

        foreach ($array as $key => $value):
            $sth->bindValue("$key", $value);
        endforeach;
        
        $sth->execute();
    }
}
?>