<?php

namespace App\Controllers;

class Pandu extends BaseController
{
    public function index()
    {

        // cara 1 melakukan  query builder 

        $builder = $this->db->table('pandu');
        $query   = $builder->get();

        // cara manual ci3 melakukan query
        // $query = $this->db->query("SELECT * FROM pandu");

        $data['pandu'] = $query->getResult();
        return view('pandu/get', $data);
    }
}
