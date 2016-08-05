<?php

/**
 * This file is part of the SilvioMessiSliderBundle package.
 *
 * (c) SilvioMessi <https://github.com/SilvioMessi/SliderBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SilvioMessi\SliderBundle\Twig;

use SilvioMessi\SliderBundle\Slider\Slider;

use Twig_Extension;
use Twig_SimpleFunction;

class SliderTwigExtension extends Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('slider_js_render', array($this, 'sliderJSRender'), array('is_safe' => array('all'))),
        );
    }

    public function sliderJSRender(Slider $slider)
    {
        return $slider->JSrender();
    }

    public function getName()
    {
        return 'silvio_messi_slider_twig_extension';
    }
}