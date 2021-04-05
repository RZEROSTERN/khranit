<?php

namespace App\Http\Middleware;

use Closure;
use Nyholm\Psr7\Factory\Psr17Factory;
use Laravel\Passport\Http\Middleware\CheckCredentials;
use League\OAuth2\Server\Exception\OAuthServerException;
use Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory;

class CheckClientCredentials extends CheckCredentials
{
    public function handle($request, Closure $next, ...$scopes)
    {
        $psr = (new PsrHttpFactory(
            new Psr17Factory,
            new Psr17Factory,
            new Psr17Factory,
            new Psr17Factory
        ))->createRequest($request);

        try {
            $psr = $this->server->validateAuthenticatedRequest($psr);
        } catch (OAuthServerException $e) {
            return response()->json($e->getPayload(), $e->getHttpStatusCode()); 
        }

        return $next($request);
    }

    protected function validateCredentials($token) {}
    protected function validateScopes($token, $scopes) {}
}