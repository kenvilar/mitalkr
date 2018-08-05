<?php

namespace App\Http\Resources;

use App\Models\Session;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'identifier' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'online' => false,
            'session' => $this->sessionsDetails($this->id),
        ];
    }
    
    private function sessionsDetails($id)
    {
        $session = Session::query()
            ->whereIn('user1_id', [auth()->user()->id, $id])
            ->whereIn('user2_id', [auth()->user()->id, $id])
            ->first();
        
        return new SessionResource($session);
    }
}
