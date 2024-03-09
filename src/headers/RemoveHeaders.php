<?php

namespace Ambiene\SecureHeaders\Headers;

use Illuminate\Support\Facades\Config;

class RemoveHeaders
{
    public function handle($response)
    {
        $response->headers->set(
            "X-Powered-By",
            Config::get("secure-headers.x-powered-by")
        );
        $response->headers->set("Server", Config::get("secure-headers.server"));
    }
}
