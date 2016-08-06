<?php

/**
 * This file is part of the SilvioMessiSliderBundle package.
 *
 * (c) SilvioMessi <https://github.com/SilvioMessi/SliderBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SilvioMessi\SliderBundle\Slider;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Twig_Environment;

class Slider
{

    /**
     * Options container.
     *
     * @var array
     */
    protected $options;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twig
     */
    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options = array())
    {
        $resolver = new OptionsResolver();

        $resolver->setDefaults(array());

        $resolver->setRequired('slider_id');
        $resolver->setAllowedTypes('slider_id', 'string');

        $resolver->setRequired('start');
        $resolver->setAllowedTypes('start', 'array');

        $resolver->setRequired('range_min');
        $resolver->setAllowedTypes('range_min', 'numeric');

        $resolver->setRequired('range_max');
        $resolver->setAllowedTypes('range_max', 'numeric');

        $resolver->setDefined('range_steps');
        $resolver->setAllowedTypes('range_steps', 'array');

        $resolver->setDefined('step');
        $resolver->setAllowedTypes('step', 'numeric');

        $resolver->setDefined('connect');
        $resolver->setAllowedTypes('connect', 'string');
        $resolver->setAllowedValues('connect', array('lower', 'upper', 'true', 'false'));
        $resolver->setDefault('connect', 'false');

        $resolver->setDefined('margin');
        $resolver->setAllowedTypes('margin', 'numeric');

        $resolver->setDefined('limit');
        $resolver->setAllowedTypes('margin', 'numeric');

        $resolver->setDefined('orientation');
        $resolver->setAllowedTypes('orientation', 'string');
        $resolver->setAllowedValues('orientation', array('vertical', 'horizontal'));
        $resolver->setDefault('orientation', 'horizontal');

        $resolver->setDefined('slider_dimension');
        $resolver->setAllowedTypes('slider_dimension', 'array');

        $resolver->setDefined('direction');
        $resolver->setAllowedTypes('direction', 'string');
        $resolver->setAllowedValues('direction', array('ltr', 'rtl'));
        $resolver->setDefault('direction', 'ltr');

        $resolver->setDefined('animate');
        $resolver->setAllowedTypes('animate', 'boolean');
        $resolver->setDefault('animate', true);

        $resolver->setDefined('animation_duration');
        $resolver->setAllowedTypes('animation_duration', 'numeric');

        //events
        $resolver->setDefined('update_event');

        $resolver->setDefined('change_event');

        $resolver->setDefined('set_event');

        $resolver->setDefined('slide_event');

        $resolver->setDefined('start_event');

        $resolver->setDefined('end_event');


        $this->options = $resolver->resolve($options);
    }

    public function JSrender()
    {
        //TODO: templates in config.yml
        return $this->twig->render('SilvioMessiSliderBundle:Slider:slider_js.html.twig', array('options' => $this->getOptions()));
    }

    public function HTMLrender()
    {
        return $this->twig->render('SilvioMessiSliderBundle:Slider:slider_html.html.twig', array('options' => $this->getOptions()));
    }
}