<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Race;
use App\Models\RaceYear;
use App\Models\Stage;
use CodeIgniter\HTTP\ResponseInterface;
 

class Main extends BaseController
{
    var $zavod;
    var $zavodyYear;
    var $stage;

    public function __construct()
    {
        $this->zavod = new Race();
        $this->zavodyYear = new RaceYear();
        $this->stage = new Stage();
    }

    public function index()
    {
        $data["zavod"] = $this->zavod->findAll();
        echo view('index', $data);
    }

    public function zavod($idRace) {
        $data["zavodyYear"] = $this->zavodyYear->where("id_race", $idRace)->findAll();
        /* $typ = $this->tourType->join("race_year", "race_year.uci_tour = uci_tour_type.id", "inner")->where("id_race", $idRace)->findAll();
        $data["typ"] = $typ;
        --> zakomentované, protože mi (asi) nefunguje composer = nejde mi vytvořit model uci_tour_type, pozkoušet pak ve škole, jestli funguje => kdyžtak upravit pak dát do view*/

        echo view("jednotlivyZavod", $data);
    }

    
}
