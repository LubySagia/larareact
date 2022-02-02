<?php

namespace App\Helpers;

use MarcinOrlowski\ResponseBuilder\ResponseBuilder;

class ResponseHelper extends ResponseBuilder
{
    protected function buildResponse(bool $success, int $api_code,
                                          $msg_or_api_code, array $placeholders = null,
                                          $data = null, array $debug_data = null): array
    {
        // tell ResponseBuilder to do all the heavy lifting first
        $response = parent::buildResponse($success, $api_code, $msg_or_api_code, $placeholders, $data, $debug_data);

        // then do all the tweaks you need
        unset($response['locale']);
        unset($response['code']);

        // finally, return what $response holds
        return $response;
    }

}
