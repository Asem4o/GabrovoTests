<?php



use App\Kernel;
use Symfony\Component\HttpFoundation\Request;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

$requestUri = $_SERVER['REQUEST_URI'];


return function (array $context) {
    $request = Request::createFromGlobals();
    // Създаван$session->start();е на ядрото на приложението
    $kernel = new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
    // Обработка на заявката и генериране на отговор
    $response = $kernel->handle($request);

    // Изпращане на отговора към клиента
    $response->send();

    // Приключване на заявката
    $kernel->terminate($request, $response);
};
