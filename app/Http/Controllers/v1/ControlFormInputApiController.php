<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Models\ControlFormInput;
use App\Http\Controllers\Controller;
use App\Services\ControlFormInputService;

class ControlFormInputApiController extends Controller
{
    public function controlUi(Request $request)
    {
        $lists = ControlFormInput::get()[0];

        $service = new ControlFormInputService($lists);
        $lists = $service->update($request);

        return $lists;
    }
}
