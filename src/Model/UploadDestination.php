<?php

namespace Amz\Uploads\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about an upload destination.
 */
class UploadDestination extends AbstractModel
{
    /**
     * The unique identifier for the upload destination.
     *
     * @var string
     */
    public $uploadDestinationId = null;

    /**
     * The URL for the upload destination.
     *
     * @var string
     */
    public $url = null;

    /**
     * The headers to include in the upload request.
     *
     * @var object
     */
    public $headers = null;
}
