<?php
include "Dependency/csrf.php";
include "Dependency/logger.php";
include "Dependency/error.php";
include "Dependency/twig.php";

container()->register(new \App\Kernel\Dependency\DatabaseService());