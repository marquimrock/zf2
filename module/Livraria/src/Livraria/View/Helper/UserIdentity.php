<?php

namespace Livraria\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\Authentication\AuthenticationService,
    Zend\Authentication\Storage\Session as SessionStorage;

class UserIdentity extends AbstractHelper {

<<<<<<< HEAD
//    private $userService;
//
//    public function __construct($userService)
//    {
//       $this->userService = $userService;
//    }
=======
    private $userService;

    public function __construct($userService)
    {
        $this->userService = $userService;
    }
>>>>>>> cf3485d3df99ddaeb795af2e5074f341c3b8db69

    protected $authService;

    public function getAuthService() {
        return $this->authService;
    }

    public function __invoke($namespace = null) {
        $sessionStorage = new SessionStorage($namespace);
        $this->authService = new AuthenticationService;
        $this->authService->setStorage($sessionStorage);

        if ($this->getAuthService()->hasIdentity()) {
            return $this->getAuthService()->getIdentity();
        }
        else
            return false;
    }

}
