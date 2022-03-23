<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            // Number list for data
            'id' => $this->id,
            // Database Resource
            'tanggal' => $this->tanggal,
            'jam' => $this->jam,
            'lokasi' => $this->lokasi,
            'suhu_tubuh' => $this->suhu_tubuh,
            // Timestamp 
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}