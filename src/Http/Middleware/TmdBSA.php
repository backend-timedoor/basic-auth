<?php

namespace Timedoor\TmdBSA\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Timedoor\TmdBSA\Exceptions\InvalidProviderException;

class TmdBSA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$providers)
    {
        if (!empty($providers)) {
            foreach ($providers as $provider) {
                throw_if(! in_array($provider, array_keys(config('tmd-bsa'))),
                    InvalidProviderException::class,
                    'Unregistered provider.'
                );

                $credential = config('tmd-bsa.' . $provider);

                $this->attempt($request, $credential);
            }
        } else {
            $credential = config('tmd-bsa.default');

            $this->attempt($request, $credential);
        }

        return $next($request);
    }

    private function attempt($request, $credential)
    {
        if ($request->getUser() !== $credential['username'] || $request->getPassword() !== $credential['password']) {
            $headers = ['WWW-Authenticate' => 'Basic'];

            return abort(401, 'Unauthorized', $headers);
        }
    }
}
