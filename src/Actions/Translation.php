<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;
use stdClass;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Translation.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 */
final class Translation extends BaseAction
{
    /**
     * Returns metadata for all languages.
     * @see https://developer.accuweather.com/accuweather-translations-api/apis/get/translations/v1/languages
     *
     * @return stdClass
     * @throws GuzzleException
     */
    public function getLanguages()
    {
        return $this->request->send("translations/v1/languages");
    }

    /**
     * Lists groups of phrases that are available for translation.
     * @see https://developer.accuweather.com/accuweather-translations-api/apis/get/translations/v1/groups
     *
     * @return stdClass
     * @throws GuzzleException
     */
    public function getTranslationGroups()
    {
        return $this->request->send("translations/v1/groups");
    }

    /**
     * Returns all translated phrases for a specific group, in the desired language.
     * @see https://developer.accuweather.com/accuweather-translations-api/apis/get/translations/v1/groups/%7BgroupID%7D
     *
     * @param string $language
     * @param int $groupId
     * @return stdClass
     * @throws GuzzleException
     */
    public function getTranslationByGroup(string $language, int $groupId)
    {
        return $this->request->send("translations/v1/groups/{$groupId}", [
            'language' => $language,
        ]);
    }
}
