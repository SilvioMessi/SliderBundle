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
use Exception;

class SliderTwigExtension extends Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('slider_js_render', array($this, 'sliderJSRender'), array('is_safe' => array('all'))),
            new Twig_SimpleFunction('slider_html_render', array($this, 'sliderHTMLRender'), array('is_safe' => array('all'))),
        );
    }

    /**
     * Renders the js template.
     *
     * @param Slider $slider
     *
     * @return mixed|string
     * @throws Exception
     */
    public function sliderJSRender(Slider $slider)
    {
        return $slider->JSrender();
    }

    /**
     * Renders the html template.
     *
     * @param Slider $slider
     *
     * @return mixed|string
     * @throws Exception
     */
    public function sliderHTMLRender(Slider $slider)
    {
        return $slider->HTMLrender();
    }

    public function getName()
    {
        return 'silvio_messi_slider_twig_extension';
    }
}