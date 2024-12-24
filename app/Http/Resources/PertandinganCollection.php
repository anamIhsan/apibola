<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PertandinganCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);

        // return [
        //     'id' => $this->id,
        //     'gtim1' => $this->gtim1,
        //     'gtim2' => $this->gtim2,
        //     'tim1' => $this->tim1,
        //     'tim2' => $this->tim2,
        //     'stim1' => $this->stim1,
        //     'stim2' => $this->stim2,
        // ];
    }
}
