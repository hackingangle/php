<?php

use Hackingangle\AuthController;
use Hackingangle\UserRegister;

$userRegistration = new UserRegister();
$authController = new AuthController($userRegistration);
$authController->register();
