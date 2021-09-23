<?php

namespace Amz\Uploads\Api;

use Amz\Uploads\Model\CreateUploadDestinationResponse as CreateUploadDestinationResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Uploads extends AbstractAPI
{
    /**
     * Creates an upload destination, returning the information required to upload a
     * file to the destination and to programmatically access the file.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | .1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'marketplaceIds'		A list of marketplace identifiers. This specifies the
     *                       marketplaces where the upload will be available. Only one marketplace can be
     *                       specified.
     *                       'contentMD5'		An MD5 hash of the content to be submitted to the upload
     *                       destination. This value is used to determine if the data has been corrupted or
     *                       tampered with during transit.
     *                       'contentType'		The content type of the file to be uploaded.
     *
     * @return CreateUploadDestinationResponse
     */
    public function createUploadDestinationForResource(array $queries = []): CreateUploadDestinationResponse
    {
        return $this->client->request('createUploadDestinationForResource', 'POST', 'uploads/2020-11-01/uploadDestinations/{resource}',
            [
                'query' => $queries,
            ]
        );
    }
}
