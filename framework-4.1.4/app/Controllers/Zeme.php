<?php
namespace App\Controllers;

class Zeme extends BaseController{

    function __construct(){
        $this->model = new \App\Models\Model();
    }

    function getZeme()
    {
        $data["seznam"] = $this->model->listZeme();
        echo view('listZeme',$data);
        
    }

     function getStationByName($name)
    {
        $data["seznam"] = $this->model->getStationByName($name);
        $data["name"] = $name;
        echo view('StationByName',$data);

    }

    function getStationData($ID)
    {
        $data["seznam"] = $this->model->getStationData($ID);
        $data["ID"] = $ID;
        echo view('getStationData',$data);

    }

    function getFlajky($Name)
    {
        $data["seznam"] = $this->model->getFlajky($Name);
        $data["Name"] = $Name;
        echo view('getFlajky',$data);

    }

}