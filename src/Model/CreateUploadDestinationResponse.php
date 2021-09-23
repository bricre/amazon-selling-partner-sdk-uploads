<?php

namespace Amz\Uploads\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createUploadDestination operation.
 */
class CreateUploadDestinationResponse extends AbstractModel
{
    /**
     * @var \Amz\Uploads\Model\UploadDestination
     */
    public $payload = null;

    /**
     * @var \Amz\Uploads\Model\ErrorList
     */
    public $errors = null;
}
