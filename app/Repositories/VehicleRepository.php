<?php

namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository
{
    protected $vehicle;
    
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }
}
