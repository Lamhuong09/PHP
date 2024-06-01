<?php

class Patient
{
    private $id;
    private $fullName;
    private $date;
    private $nsx;

    public function __construct($id, $fullName, $date, $nsx)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->date = $date;
        $this->nsx = $nsx;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getFullName()
    {
        return $this->fullName;
    }
    public function getNsx()
    {
        return $this->nsx;
    }
    public function getDate()
    {
        return $this->date;
    }


    public function setFullName($fullName)
    {
        $this->fullName = $fullName; 
    }
    
}
?>
