<?php

namespace App\Models;

class LetM
{

    var $db;
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    function getSpolec()
    {
        $builder = $this->db->table('letadla');
        $builder->select('spolecnosti.spolecnostinazev,spolecnosti.iataspolecnosti,letadla.idspolecnosti');
        $builder->join('spolecnosti','letadla.idspolecnosti=spolecnosti.id','inner');
        $data = $builder->get()->getResult();
        return $data;

    }

    function getLet()
    {
        $builder = $this->db->table('typyletadel');
        $builder->select('typyletadelnazev,aktivniletadla,typyletadel.id');
        $data = $builder->get()->getResult();
        return $data;
    }


    
    function getOdlet($id)
    {
        $builder = $this->db->table('letadla');
        $builder->select('letadla.text,letadla.datum,letadla.cas,typyletadel.id,letadla.idtypyletadel,letadla.obrazek');
        $builder->join('typyletadel','typyletadel.id=letadla.idtypyletadel','inner');
        $builder->where('letadla.idtypyletadel',$id);
        $data = $builder->get()->getResult();
        return $data;
    }

}