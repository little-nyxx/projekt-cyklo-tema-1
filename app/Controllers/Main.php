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
        /*
        $pocetKilometru = $this->stage->select("stage.distance, Count(*) as pocetKm")->join("race_year", "race_year.id = stage.id_race_year", "inner")->findAll();
        $data["pocetKilometru"] = $pocetKilometru;
        --> hází chybu, jdu už mimir, dobrou nooc :3
        */

        echo view("jednotlivyZavod", $data);
    }

    
}
