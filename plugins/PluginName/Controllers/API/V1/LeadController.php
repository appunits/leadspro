<?php

namespace Plugins\PluginName\Controllers\API\V1;

use Plugins\PluginName\Requests\LeadRequest as FormRequest;
use Plugins\PluginName\Models\Lead as Model;
use Plugins\PluginName\Resources\LeadResource as Resource;

class LeadController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     *
     * @param FormRequest $request
     * @param Model       $model
     * @param string      $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }
}
