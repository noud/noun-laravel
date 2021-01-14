<?php

namespace Nouns\API\Http\Controllers;

use App\Http\Controllers\Controller;
use Response;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Inflector API",
 *     version="1.0.0",
 *   )
 * )
 * Class InflectorAPIController
 */
class InflectorAPIController extends Controller
{
    private $inflectorService;

    public function plural($singular)
    {
        return $this->inflectorService->plural($singular);
    }

    public function singular($plural)
    {
        return $this->inflectorService->singular($plural);
    }
}
