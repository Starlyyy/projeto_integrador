<?php 

namespace app\controllers;

// require_once __DIR__ . '/../core/Controller.php';
use app\core\Controller;


class PlayerController extends Controller{

    public function __construct()
    {
    }

    public function index() {
        $data['list'] = ['Neymar', 'Bebeto', 'Gabigol', 'Cebola'];

        // require_once __DIR__ . '/../views/players/players_list.php';
        $this->view('players/players_list', $data);

    }

    public function jogador(){

        $data['date'] = new \DateTimeImmutable();
        $data['jogador'] = ['Neymar', '36', 'Meia Atacante']; 

        $this->view('players/players_show', $data);

        
    }

    public function teste(){
        $this->redirect('http://google.com');

    }


} 