WeFact API implementation for CodeIgniter
==============
PHP wrapper for using the WeFact API in an object oriented way.
This library enables you to use WeFact in CodeIgniter, also a refactor to (in my opinion)
more object oriented way of using the weFact API.

this repo originally started as a fork from phpWeFact: https://github.com/seosepa/phpWeFact

Usage
------
add the models you want to use to the application/config/autoload.php

```
$autoload['libraries'] = array(
    'WeFact/WeFact_Api',
    'WeFact/WeFact_Model',
    'WeFact/WeFact_Creditor',
    'WeFact/WeFact_Debtor',
);
```

Todo
------
* models still need to be implemented: hosting, ssl, vps, tickets, domain contacts
* few actions are missing from current models.
* autoloader
* examples are not completely up to date

i will continue adding these as i go along with my own use for weFact. PR's are welcome, as long as you use the same codestyle


Tested working with
------
* Codeigniter 3
* WeFact Hosting API version 2.3
* PHP version 5.4 - Debian

Author
-------

* Stefan Konig <stefan@seosepa.net>

License
-------
```
The MIT License (MIT)

Copyright (c) 2016 Stefan Konig

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
