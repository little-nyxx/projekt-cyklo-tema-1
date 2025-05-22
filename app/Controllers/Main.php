<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Race;
use App\Models\RaceYear;
use CodeIgniter\HTTP\ResponseInterface;
 

class Main extends BaseController
{
    var $zavod;
    var $zavodyYear;

    public function __construct()
    {
        $this->zavod = new Race();
        $this->zavodyYear = new RaceYear();
    }

    public function index()
    {
        $data["zavod"] = $this->zavod->findAll();
        echo view('index', $data);
    }

    public function zavod($idRace) {
        $data["zavodyYear"] = $this->zavodyYear->where("id_race", $idRace)->findAll();
        
        echo view("jednotlivyZavod", $data);
    }

    
}
