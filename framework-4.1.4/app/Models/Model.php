<?php

namespace App\Models;

class Model
{

    var $db;
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    function listZeme()
    {
        $builder = $this->db->table('bundesland');
        $builder->select('vlajka,mapa,name, id, short_name');

        $data = $builder->get()->getResult();
        return $data;
    }

    function getStationByName($name)
    {
        $builder = $this->db->table('station');
        $builder->select('station.place,station.operator,station.S_ID');
        $builder->join('bundesland', 'bundesland.id=station.bundesland', 'inner');
        $builder->where('bundesland.id', $name);

        $data = $builder->get()->getResult();
        return $data;
    }

    function getStationData($ID)
    {
        $builder = $this->db->table('data');
        $builder->select('date,quality,sun_length ,mid_air_pressure,');
        $builder->join('station','station.S_ID = data.Stations_ID','inner');
        $builder->where('data.Stations_ID',$ID);

        $data = $builder->get()->getResult();
        return $data;
    }

    function getFlajky($Name)
    {
        $builder = $this->db->table('bundesland');
        $builder->select('vlajka,name,short_name');
        $builder->where('id',$Name);
        $data = $builder->get()->getResult();
        return $data;
    }


}