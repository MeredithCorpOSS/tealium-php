# Tealium Integration for PHP

[![Build Status](https://travis-ci.org/TimeIncOSS/tealium-php.svg?branch=master)](https://travis-ci.org/TimeIncOSS/tealium-php)

This package provides Tealium integration for PHP, handling script
generation and Universal Data Object (UDO) control.

## Implementations
- [Symfony2/Symfony3](https://github.com/TimeIncOSS/tealium-bundle)

## Installation

### Composer
```bash
composer require timeinc/tealium
```

## Usage

### PHP

```php
<?php

use TimeInc\Tealium\Tealium;
use TimeInc\Tealium\Udo;

$udo = new Udo();

// use $udo->properties to add data to the UDO object
$udo->properties['site'] = 'My Site';

$tealium = new Tealium('org', 'app', $udo, Tealium::TEALIUM_PROD);
```

### Template
To render Tealium onto the page, use the `tealium()` twig function:
 
```php
<html>
    <head>
    </head>
    <body>
        <script type="text/javascript">
         var <?php $udo->getName(); ?> = <?php echo (string) $udo ?>;
        </script>
        <script type="text/javascript">
            (function(a,b,c,d){
                a='//tags.tiqcdn.com/utag/<?php echo $tealium->getOrganisation() ?>/<?php echo $tealium->getApp() ?>/<?php echo $tealium->getEnvironment() ?>/utag.js';
                b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
                a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
            })();
        </script>
    </body>
</html>
```

