<?php 

require_once __DIR__ . '/../app/config/Config.php';
// require_once __DIR__ . '/../app/controllers/PlayerController.php';
require_once __DIR__ . '/../app/core/Autoload.php';

/*-----------------------*/
// Sistema de rotas v0.1
/*-----------------------*/
$uri  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

use app\controllers\PlayerController;

switch ($uri) {
    case '/teste':
        print 'teste!';
        break;
    
    case '/jogadores':
        // $x = "PlayerController";
        
        $playerController = new PlayerController();
        $playerController->index();
        
        break;

    case '/jogador';
        $playerController = new PlayerController();
        $playerController->jogador();

        break;
    
    default:
        http_response_code(404);
        print 'Página não encontrada';
        break;
}
