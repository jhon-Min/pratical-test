<?php

namespace App\Services;

use App\Models\ControlFormInput;

class ControlFormInputService
{
    private $lists;

    public function __construct(ControlFormInput $lists)
    {
        $this->lists = $lists;
    }

    public function update($request)
    {
        $this->lists->name = $request->name;
        $this->lists->phone = $request->phone;
        $this->lists->date_of_birth = $request->date_of_birth;
        $this->lists->gender = $request->gender;
        $this->lists->update();

        return $this->lists;
    }
}
