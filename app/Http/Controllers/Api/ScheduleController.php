<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\HandlerQueryService;
use App\Services\HandlerResponseService;
use App\Services\ValidationService;
use Illuminate\Http\Response;

class ScheduleController extends Controller
{

    public function __construct(
        private HandlerResponseService $handlerResponseService,
        private HandlerQueryService $handleQueryService
    ) {
    }

    public function filterCalendar(Request $request, $dateFrom, $dateTo = null)
    {
        try {
            if (!preg_match('/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})$/', $dateFrom)) {
                return $this->handlerResponseService->responseJsonData('failed', Response::HTTP_BAD_REQUEST, 'the date is invalid, must be DD-MM-YYYY');
            }

            if (!is_null($dateTo) && !preg_match('/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})$/', $dateTo)) {
                return $this->handlerResponseService->responseJsonData('failed', Response::HTTP_BAD_REQUEST, 'the date is invalid, must be DD-MM-YYYY');
            }

            $data = $this->handleQueryService->filterDates($dateFrom, $dateTo);

            return $this->handlerResponseService->responseJsonData('success', Response::HTTP_OK, $data);
        } catch (\Throwable $th) {
            report($th);
            return $this->handlerResponseService->responseJsonData('failed', Response::HTTP_INTERNAL_SERVER_ERROR, $th->getMessage());
        }
    }

    public function findByRoute(Request $request, $route_id)
    {
        try {
            if (is_null($route_id)) {
                return $this->handlerResponseService->responseJsonData('failed', Response::HTTP_BAD_REQUEST, 'the id is required');
            }

            if (!preg_match('/^[0-9]+/', $route_id)) {
                return $this->handlerResponseService->responseJsonData('failed', Response::HTTP_BAD_REQUEST, 'the id must be integer');
            }

            $data = $this->handleQueryService->findByRouteId($route_id);

            return $this->handlerResponseService->responseJsonData('success', Response::HTTP_OK, $data);
        } catch (\Throwable $th) {
            report($th);
            return $this->handlerResponseService->responseJsonData('failed', Response::HTTP_INTERNAL_SERVER_ERROR, $th->getMessage());
        }
    }
}
