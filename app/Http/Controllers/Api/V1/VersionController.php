<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class VersionController extends Controller
{
    public function getVersion()
    {
        return new JsonResponse(
            ['version' => '0.1'], 
            Response::HTTP_OK
        );
    }
}
