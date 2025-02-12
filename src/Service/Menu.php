<?php

namespace App\Service;

use App\Entity\InfoInscription;
use App\Repository\AnneeScolaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;

use Psr\Container\ContainerInterface;
use function PHPUnit\Framework\isEmpty;

class Menu
{

   // private $em;
    private $route;
    // private $container;
   // private $security;




    public function __construct(  RequestStack $requestStack, RouterInterface $router, Security $security)
    {
       // $this->em = $em;
        if ($requestStack->getCurrentRequest()) {
            $this->route = $requestStack->getCurrentRequest()->attributes->get('_route');
            // $this->container = $router->getRouteCollection()->all();
            // $this->security = $security;
        }
    }
    public function getRoute()
    {
        return $this->route;
    }

   
}
