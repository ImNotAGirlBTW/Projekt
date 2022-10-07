<?php
namespace App\Controllers;

class Let extends BaseController{

    function __construct(){
        $this->LetM = new \App\Models\LetM();
    }

    function getSpol()
    {
        $data["seznam"] = $this->LetM->getSpolec();
        echo view('spol',$data);
    }

    
    function getLet()
    {
        $data["seznam"] = $this->LetM->getLet();
        echo view('Letdala',$data);
    }

    function getSLet()
    {
        $data["seznam"] = $this->LetM->getSLet();
        echo view('Letdala',$data);
    }
    
    function getOdlet($id)
    {
        $data["seznam"] = $this->LetM->getOdlet($id);
        $data["id"] = $id;
            echo view('SLetadla',$data);
        }
    }
