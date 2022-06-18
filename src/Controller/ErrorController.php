<?php
declare(strict_types=1);

namespace App\Controller;

class ErrorController 
{
    public function notFoundAction(): void
    {
        include 'src/view/error/notFound.php';
    }
}