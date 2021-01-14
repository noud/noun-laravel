<?php

namespace Nouns\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Nouns\Models\Noun;
use Nouns\Services\InflectorService;

use Response;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Nouns API",
 *     version="1.0.0",
 *   )
 * )
 * Class InflectorAPIController
 */
class InflectorAPIController extends Controller
{
    private $inflectorService;

    function __construct(InflectorService $inflectorService)
    {
            $this->inflectorService = $inflectorService;
    }

    /**
     * @SWG\Get(
     *      path="/plural/{singular}",
     *      summary="Get plural of a Noun.",
     *      tags={"Noun"},
     *      description="Get plural of a Noun",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="singular",
     *          description="singular of a Noun",
     *          type="string",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Noun"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function plural(string $singular)
    {
        return $this->formResult($this->inflectorService->plural($singular));
    }

    /**
     * @SWG\Get(
     *      path="/singular/{plural}",
     *      summary="Get singular of a Noun.",
     *      tags={"Noun"},
     *      description="Get singular of a Noun",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="plural",
     *          description="plural of a Noun",
     *          type="string",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Noun"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function singular(string $plural)
    {
        return $this->formResult($this->inflectorService->singular($plural));
    }

    public function formResult(?Noun $noun): array
    {
        if ($noun) {
            $result = [
                "success" => true,
                "data" => $noun,
                "message" => "string"
            ];
        } else {
            $result = [
                "success" => false,
                "message" => "not found"
            ];
        }
        return $result;
    }
}
