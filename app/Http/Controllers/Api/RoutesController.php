<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\HandlerQueryService;
use App\Services\HandlerResponseService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RoutesController extends Controller
{
    public function __construct(
        private HandlerQueryService $handlerQueryService,
        private HandlerResponseService $handlerResponseService,
    ) {
    }

    public function getRoutes()
    {
        try {
            $data = $this->handlerQueryService->getAllRoutes();
            return $this->handlerResponseService->responseJsonData('success', Response::HTTP_OK, $data);
        } catch (\Throwable $th) {
            report($th);
            return $this->handlerResponseService->responseJsonData('failed', Response::HTTP_INTERNAL_SERVER_ERROR, $th->getMessage());
        }
    }
}
