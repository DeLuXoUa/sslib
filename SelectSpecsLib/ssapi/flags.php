<?php

define('SSAPI_RETURN_RESULT', 1 << 0); //return full documents after finish query, not only id
define('SSAPI_NO_WAIT_RESPONSE', 1 << 1); //no waiting for response from api server
define('SSAPI_FULL_REWRITE', 1 << 2); //full rewrite of document (delete all old data and writing new)
define('SSAPI_CREATE_IF_NOT_EXIST', 1 << 3); //if cant find document by search params - create new
define('SSAPI_DELETE_DOCUMENT', 1 << 4); //delete document
define('SSAPI_ONLY_IN_GROUP', 1 << 5); //all operations only in selected group
define('SSAPI_MULTI_QUERY', 1 << 6); //multiple query transactions
define('SSAPI_TASK_FOR_JOB_SERVER', 1 << 7); //tasks for jobs server
define('SSAPI_FORCEADD', 1 << 12); //if record is exist already - it will be rewritten

define('SSAPI_CONNECTION_NOTIFYS_ENABLE', 1 << 8); //notifys mode enable
define('SSAPI_CONNECTION_NOTIFYS_DISABLE', 0 << 8); //notifys mode disable
define('SSAPI_CONNECTION_ENCRIPTION_ENABLE', 1 << 9); //encription data transer enable
define('SSAPI_CONNECTION_ENCRIPTION_DISABLE', 0 << 9); //encription data transer disable

define('SSAPI_CONVERTER_WEB', 1 << 10); //enable convertor web2api
define('SSAPI_CONVERTER_OMNIS', 1 << 11); //enable convertor omnis2api

define('SSAPI_AGGREGATOR', 1 << 13); //aggregation operations
?>