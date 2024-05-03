<?php

namespace Plugins\PluginName\Controllers\API\V1;

use Plugins\PluginName\Requests\CustomerRequest as FormRequest;
use Plugins\PluginName\Models\Customer as Model;
use Plugins\PluginName\Resources\CustomerResource as Resource;

class CustomerController extends \Core\Base\Controllers\API\Controller
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
