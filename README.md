Installation
============

Step 1: Download the Bundle
---------------------------
!to implement!
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:
```bash
$ composer require nz-portfolio
```


put this on composer.json and run composer update

```bash
    require:{
        // ...
        "nz/portfolio-bundle": "dev-master"
    },
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "nz/portfolio-bundle",
                "version": "dev-master",
                "dist": {
                    "url": "https://github.com/NadirZenith/PortfolioBundle/archive/master.zip",
                    "type": "zip"
                },
                "autoload": {
                    "psr-4": { "Nz\\PortfolioBundle\\": "" }
                }
            }
        }
    ],

```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Nz\PortfolioBundle\NzPortfolioBundle(),
        );

        // ...
    }

    // ...
}
```


Step 3: Extend the bundle
-------------------------

```bash
php app/console sonata:easy-extends:generate NzPortfolioBundle --des=src
```
