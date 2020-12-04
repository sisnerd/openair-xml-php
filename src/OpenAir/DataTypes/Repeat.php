<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Repeat extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'frequency' => null, //The repeating interval of the event: D – daily, W –
        'every' => null, //The spacing between each repeating event.
        'end' => null, //End date of the event.
        'occur_number' => null, //Number of occurrences.
        'how_end' => null, //How does this event end: D – date or O - occurrence
        'exclude_dow' => null, //When frequency is in days, which days of the week
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
    ];

    public function __toString()
    {
        return sprintf("Repeat %s %s %s", $this->id, $this->every, $this->frequency);
    }
}
