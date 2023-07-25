<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Traits\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  use Responsable ; 
    public function test () : JsonResponse {
        return $this->respondSuccess('testing version is completed');   
    }
}
