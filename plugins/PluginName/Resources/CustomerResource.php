<?php

namespace Plugins\PluginName\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class CustomerResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            // ...
            $this->mergeWhen($request->route()->getName() == 'api.v1.customers.show', [

            ])
        ];
    }
}
