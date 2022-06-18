    <?php
    
    include 'vendor/autoload.php';
   
    use App\Connection\Connection;
    use App\Controller\ErrorController;


    $url = explode('?',$_SERVER['REQUEST_URI']) [0];//recapitulando url

        $routes = include 'config/routes.php';//chamando rotas.

        
    //Error Route msg
    if (false === isset($routes[$url])) { //caso a rota nao exista
       
       (new ErrorController()) -> notFoundAction();
        exit;

    }

    $controllerName = $routes[$url]['controller'];//capturando controllerName
    $methodName = $routes[$url]['method'];//capturando methodName

    (new $controllerName())-> $methodName();
    exit;

    var_dump($routes[$url]);
   
   
   

    
    
   


