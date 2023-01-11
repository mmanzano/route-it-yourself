<?php

namespace App\Controller\HealthCheck;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class HealthCheckGetController
{
    public function __invoke(): Response
    {
        return new JsonResponse([
            'status' => 'ok',
        ]);
    }
}
