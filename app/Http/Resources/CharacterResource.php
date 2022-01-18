<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use stdClass;

class CharacterResource extends JsonResource
{

    protected $data = [];

    public function __construct($data)
    {
        $this->data = (object)$data;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'char_id' => $this->data->char_id,
            'name' => $this->data->name,
            'birthday' => ($this->data->birthday == 'Unknown') ? null : $this->data->birthday,
            'img' => $this->data->img,
            'occupation' => $this->data->occupation,
            'status' => $this->data->status,
            'nickname' => $this->data->nickname,
            'appearance' => $this->data->appearance,
            'portrayed' => $this->data->portrayed,
            'category' => $this->data->category,
            'better_call_saul_appearance' => $this->data->better_call_saul_appearance
        ];
    }
}
