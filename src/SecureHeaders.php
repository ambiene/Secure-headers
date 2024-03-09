<?php

namespace Ambiene\SecureHeaders;

use Closure;
use Illuminate\Http\Request;

class SecureHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $this->removeHeaders($response);
        $this->xFrameOptions($response);

        return $response;
    }

    /**
     * @param $response
     */
    protected function removeHeaders($response)
    {
        $removeHeaders = new Headers\RemoveHeaders();
        $removeHeaders->handle($response);
    }

    /**
     * @param $response
     */
    protected function xFrameOptions($response)
    {
        $xFrameOptions = new Headers\XFrameOptions();
        $xFrameOptions->handle($response);
    }
}
