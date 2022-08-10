tdClass is PHP's generic empty class, kind of like Object in Java or object in Python (Edit: but not actually used as universal base class; thanks @Ciaran for pointing this out).

It is useful for anonymous objects, dynamic properties, etc.

An easy way to consider the StdClass is as an alternative to associative array. See this example below that shows how json_decode() allows to get an StdClass instance or an associative array. Also but not shown in this example, SoapClient::__soapCall returns an StdClass instance.

tdClass is PHP's generic empty class, kind of like Object in Java or object in Python (Edit: but not actually used as universal base class; thanks @Ciaran for pointing this out).

It is useful for anonymous objects, dynamic properties, etc.

An easy way to consider the StdClass is as an alternative to associative array. See this example below that shows how json_decode() allows to get an StdClass instance or an associative array. Also but not shown in this example, SoapClient::__soapCall returns an StdClass instance.