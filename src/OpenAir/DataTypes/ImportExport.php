<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class ImportExport extends DataType
{

    protected $data = [
        'id' => null, //Internal ID of the actual record (slip, task, etc.) in its
        'application' => null, //String describing the application making the
        'exported' => null, //Time of the last export from OpenAir. Required on
        'type' => null, //XML Datatype name of the exported record: Slip, Task,
        'externalid' => null, //External identifier for the application.
        'imported' => null, //Time of the last import to OpenAir. Required on
    ];

    function __construct()
    {
        parent::__construct();
    }
}
