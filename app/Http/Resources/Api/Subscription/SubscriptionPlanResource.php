<?php

namespace App\Http\Resources\Api\Subscription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionPlanResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            'id'                => $this->id,
            'subscription_plan' => $this->subscription_plan,
            'price'             => $this->price,
            'billing_cycle'     => $this->billing_cycle,
            'touch_points'      => $this->touch_points === null ? 'Unlimited Touchpoints' : $this->touch_points,
            'has_ads'           => (bool) $this->has_ads,
            'icon'              => (bool) $this->icon,
        ];
    }
}
