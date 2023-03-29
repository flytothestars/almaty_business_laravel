<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'district' => new DistrictResource(optional($this->departmentDistrict)->district),
            'fullName' => $this->fullName
        ];
    }
}
