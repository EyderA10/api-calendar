<?php

namespace App\Services;

class HandlerResponseService
{

    public function responseJsonData($status, $code, $data)
    {
        $data = [
            'status' => $status,
            'code' => $code,
            'data' => $data,
        ];
        return response()->json($data, $data['code']);
    }
}
