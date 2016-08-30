<?php

use OpenAir\Base\BaseCommandClass;

class Attachment extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'file_name' => null, //The true attachment name, as provided by the user on upload.
		'locked_by' => null, //The ID of the user who uploaded the file, 0 if unlocked.
		'notes' => null, //Notes associated with the attachment.
		'created' => null, //Time the record was created.
		'workspaceid' => null, //The ID of the associated workspace.
		'base64_data' => null, //Base 64 encoded binary data of the actual attachment file.
		'updated' => null, //Time the record was last modified.
		'attachmentid' => null, //If non-zero, the attachment record associated with this attachment.
		'parentid' => null, //The attachment ID of our immediate ancestor. If zero/null, this is a top-level
		'hash_name' => null, //The name of the file as stored on disk in our system. This is the relative
		'ownerid' => null, //The id of the record linking to this attachment.
		'is_a_folder' => null, //A "1/0" field indicating if any other attachments have us as a parent.
		'owner_type' => null, //The owner of this attachment, e.g. 'User', 'Envelope', 'Ticket', 'Timesheet'
		'name' => null, //The display name of the attachment.
    ];

    function __construct()
    {
        parent::__construct();
    }
}