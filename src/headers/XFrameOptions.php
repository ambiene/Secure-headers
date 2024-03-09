<?php

namespace Ambiene\SecureHeaders\Headers;

use Illuminate\Support\Facades\Config;

class XFrameOptions
{
    public function handle($response)
    {
        $response->headers->set(
            "X-Frame-Options",
            Config::get("secure-headers.x-frame-options", "SAMEORIGIN")
        );
    }
}
