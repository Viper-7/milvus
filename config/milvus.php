<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Mistral API Key
    |--------------------------------------------------------------------------
    |
    | Your Mistral API key is used to authenticate requests made from your
    | application to the Mistral.ai services. You can generate and manage
    | your API keys in the Mistral.ai dashboard.
    |
    */

    'auth_token' => env('MISTRAL_API_KEY'),
    'username' => env('MISTRAL_USERNAME'),
    'password' => env('MISTRAL_PASSWORD'),
    'host' => env('MILVUS_HOST', "localhost"),
    'port' => env('MILVUS_PORT', "19530"),

    /*
    |--------------------------------------------------------------------------
    | Mistral Base URL
    |--------------------------------------------------------------------------
    |
    | This URL is the base endpoint for all Mistral.ai API requests. While it's
    | set to Mistral's default API server, you can change it for self-hosted
    | models or different test environments (if applicable, in the future).
    |
    */

    'base_url' => env('MISTRAL_BASE_URL'),
];