## version 0.8.7
- payments api added

....
## version 0.8.4
- socket timeout send to server added
- fix some bugs in converters

## version 0.8.3
- strcuture of folders changed
- fix some bugs in converters

## version 0.8.2
- logger class added
- log format and output added
- fix some bugs

## version 0.8.1
- fixed items last updated func
- convertor for items omnis2api added
- aggregator mode added
- min&max for items_last_updated added
- items function is universal now

## version 0.8.0
- new auth method with client id
- new examples
- new initialization
- convertor for items web2api
- convertor for items api2web
- flag SSAPI_FORCEADD for force rewrite when adding record
- flag SSAPI_CONVERTER_OMNIS
- flag SSAPI_CONVERTER_WEB

#########################################################################################
############# AUTH METHOD IS DIFFERENT AND DONT WORK ON VERSION 0.8+ ####################
#########################################################################################

## version 0.7.1
- now if error always return false
- function getLastError() added
- function getAllErrors() added
- function getLastTime() added
- function getAllTimes() added
- function getTotalTime() added

## version 0.7.0
- methods names separation added (IMPORTANT UPDATE! previus versions is will no work anymore)
- examples was fixed (_group_id now have right format)

## version 0.6.2
- fixed constructor defaults declaration for PHP 5.5

## version 0.6.1
- docs renewed
- add few functions

## version 0.6
- add functions of omnis

## version 0.5.1
- docs place changed
- try catch added to example for right work demo

## version 0.5
- changed lib structure
- add data encription flag (but encription dont support yet)
- authentification created
- timeout fixed
- deleted http and websocket connections types

## version 0.4
first stable version without encrription and authentification.
works on standart JSON-RPC 1.0 and 2.0 protocol (based on tivoka lib)