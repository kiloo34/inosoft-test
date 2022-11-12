<?php

namespace App\Services;

use App\Repositories\VehicleRepository;
use Exeception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class VehicleService
{
    protected $vehicleRepository;
    
    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository   ;
    }
}
