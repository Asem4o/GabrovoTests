<?php
namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent; // Уверете се, че използвате правилния namespace
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\RouterInterface;
class RedirectListener
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onKernelException(ExceptionEvent $event) // Правилният тип тук
    {
        $exception = $event->getThrowable();

        if ($exception instanceof NotFoundHttpException) {
            $url = $this->router->generate('quiz_ok');
            $response = new RedirectResponse($url);
            $event->setResponse($response);
        }
    }
}