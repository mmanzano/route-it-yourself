<?php

declare(strict_types=1);

namespace App\Controller\HealthCheck;

use App\Shared\Infrastructure\RandomNumberGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HealthCheckGetController
{
    public function __construct(private readonly RandomNumberGenerator $generator)
    {
    }

    public function __invoke(Request $request): Response
    {
        return new JsonResponse([
            'status' => 'ok',
            'number' => $this->generator->generate(),
        ]);
    }
}
