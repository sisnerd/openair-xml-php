<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class HierarchyNode extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'hierarchyid' => null, //The ID of the associated hierarchy.
        'levelid' => null, //The id of the associated hierarchy level.
        'isalevel' => null, //A 1/0 field indicating if this node is a level.
        'created' => null, //Time the record was created.
        'recordid' => null, //The record ID if not a node.
        'name' => null, //The hierarchy name.
        'isanode' => null, //The name of the hierarchy node.
        'updated' => null, //Time the record was last updated or modified.
        'parentid' => null, //The hierarchy_node id of our immediate ancestor. If
        'externalid' => null, //If the record was imported from an external
        'notes' => null, //Notes related to the hierarchy node.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
