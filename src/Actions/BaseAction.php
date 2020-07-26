<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

/**
 * Class BaseAction
 * @package ChurakovMike\Accuweather\Actions
 */
abstract class BaseAction
{
    /**
     * @var RequestApi
     */
    protected $request;

    /**
     * BaseAction constructor.
     * @param RequestApi $request
     */
    public function __construct(RequestApi $request)
    {
        $this->request = $request;
    }
}
