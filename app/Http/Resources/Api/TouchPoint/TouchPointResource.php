<?php

namespace App\Http\Resources\Api\TouchPoint;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TouchPointResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            'id'               => $this->id,
            'avatar_url'       => $this->avatar ? asset($this->avatar) : asset('backend/images/default_images/user_1.jpg'),
            'name'             => $this->name,
            'phone_number'     => $this->phone_number,
            'contact_type'     => $this->contact_type,
            'contact_method'   => $this->contact_method,
            // 'touch_point_start_date' => $this->touch_point_start_date->toDateString(),
            // 'touch_point_start_time' => $this->touch_point_start_time->format('H:i'),
            'touch_point_date' => $this->touch_point_start_date->toDateString(),
            'touch_point_time' => $this->touch_point_start_time ? Carbon::parse($this->touch_point_start_time)->format('H:i') : null,
            'frequency'        => $this->frequency,
            'custom_days'      => $this->custom_days,
            'notes'            => $this->notes,
        ];
    }
}
