<?php 

namespace App\Services;

use App\Models\Service;

class ServiceService
{

  public function getAllWithIdTitle()
  {
    $services =  Service::all();
    $services = $services->map(fn($service) => $service->only('id','title'));
    return $services;
  }
}