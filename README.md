# SilvioMessiSliderBundle

## Installation


### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require silviomessi/sliderbundle:dev-master
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle

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
            new SilvioMessi\SliderBundle\SilvioMessiSliderBundle(),
        );

        // ...
    }

    // ...
}
```

### Step 3: Installing Assetic

Starting from Symfony 2.8, Assetic is no longer included by default in the Symfony Standard Edition.
***Please follow all steps described [here](https://symfony.com/doc/current/assetic/asset_management.html#installing-and-enabling-assetic) for installing Assetic.***

## Usage

### Controller Code

```php
/* Controller */

//...
$slider = $this->get('silvio_messi_slider.slider');
$slider->setOptions(array(
                    'slider_id' => 'my_slider',
                    'start' => array(0),
                    'range_min' => 0,
                    'range_max' => 100,
                    'connect' => false
                    ));

//...
return $this->render('default/index.html.twig', [

            //...
            'slider' => $slider
        ]);

```

### View Code

```twig
{# View #}

{% block stylesheets}
    {% stylesheets '@SilvioMessiSliderBundle/Resources/public/css/noUiSlider/*' filter='cssrewrite' %}
        <link rel="stylesheet" href="{{ asset_url }}"/>
    {% endstylesheets %}
{% endblock %}

{% block body %}

    {# ... #}

    {{ slider_html_render(slider) }}

    {# ... #}

{% endblock %}

{% block javascripts %}
    {{ slider_js_render(slider) }}
{% endblock %}

```

## License

This bundle is released under the MIT license. See the complete license in the
bundle:

    Resources/meta/LICENSE