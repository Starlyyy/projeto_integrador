<?php 

class PlayerController {

    public function __construct()
    {
    }

    public function index() {
        $list = ['Neymar', 'Bebeto', 'Gabigol', 'Cebola'];

        require_once __DIR__ . '/../views/players/players_list.php';
        // $this->view('players/players_list', $list);

    }

    public function jogador(){

        $data['date'] = new DateTimeImmutable();
        $data['jogador'] = ['Neymar', '36', 'Meia Atacante']; 

        $this->view('players/players_show', $data);
        
    }

    public function view(string $view, ?array $data = null){

        extract($data);

        $path = __DIR__ . "/../views/$view.php";

        if(file_exists($path))
            require_once $path;
        else 
            print 'A view solicitada não foi encontrada';
    }


} 