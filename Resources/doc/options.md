# Available Options

| Option               | Type           | Mandatory  |
|----------------------|----------------|------------|
| slider_id            | string         | yes        |
| start                | array          | yes        |
| range_min            | numeric        | yes        |
| range_max            | numeric        | yes        |
| connect              | string         | no         |
| step                 | numeric        | no         |
| range_steps          | array          | no         |
| margin               | numeric        | no         |
| limit                | numeric        | no         |
| orientation          | string         | no         |
| slider_dimension     | array          | no         |
| direction            | string         | no         |
| animate              | boolean        | no         |
| animation_duration   | numeric        | no         |

# Options Description

1. [slider_id](#1-slider_id)
2. [start](#2-start)
3. [range_min and range_max](#3-range_min-and-range_max)
4. [connect](#4-connect)
5. [step](#5-step)
6. [range_steps](#6-range_steps)
7. [margin](#7-margin)
8. [limit](#8-limit)
9. [orientation](#9-orientation)
10. [slider_dimension](#10-slider_dimension)
11. [direction](#11-direction)
12. [animate and animation_duration](#12-animate-and-animation_duration)

## 1. slider_id

The slider_id option allows to define ad unique identifier for the javascript slider object.

## 2. start

The start option sets the number of handles (max 2) and their start positions, relative to range.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(0, 50),
            'range_min' => 0,
            'range_max' => 100
        ));
```

## 3. range_min and range_max

All values on the slider are part of a range. The range has a minimum and maximum value. The range_min option sets the lower bound of the range, the range_max, instead, the upper bound.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(0),
            'range_min' => 0,
            'range_max' => 100
        ));
```

## 4. connect

The connect setting can be used to control the (green) bar between the handles, or the edges of the slider. Use "lower" to connect to the lower side, or "upper" to connect to the upper side. Setting true sets the bar between the handles.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(0),
            'range_min' => 0,
            'range_max' => 100,
            'connected' => 'lower'
        ));
```

## 5. step

By default, the slider slides fluently. In order to make the handles jump between intervals, you can use this option. The step option is relative to the values provided to range.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(0),
            'range_min' => 0,
            'range_max' => 100,
            'step' => 10
        ));
```

## 6. range_steps

NoUiSlider offers some powerful mechanisms that allow a slider to behave in a non-linear fashion. You can create sliders with ever-increasing increments by specifying the value for the slider at certain intervals.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(0),
            'range_min' => 0,
            'range_max' => 100,
            'range_steps' => array( '30%' => array('value' => 50),
                                    '70%' => array('value' => 90))
        ));
```

For every subrange in a non-linear slider, stepping can be set. Note how in the example below the slider doesn't step until it reaches 500. From there on, it changes in increments of 500, until it reaches 4000, where increments now span 1000.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'test',
            'start' => array(500, 4000),
            'range_min' => 0,
            'range_max' => 10000,
            'range_steps' => array( '10%' => array('value' => 500, 'step' => 500),
                                    '50%' => array('value' => 4000, 'step' => 1000))
        ));
```

## 7. margin

When using two handles, the minimum distance between the handles can be set using the margin option. The margin value is relative to the value set in 'range'. This option is only available on standard linear sliders.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(10, 50),
            'range_min' => 0,
            'range_max' => 100,
            'margin' => 20
        ));
```

## 8. limit

The limit option is the opposite of the margin option, limiting the maximum distance between two handles. As with the margin option, the limit option can only be used on linear sliders.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(10, 20),
            'range_min' => 0,
            'range_max' => 100,
            'limit' => 20
        ));
```

## 9. orientation

The orientation setting can be used to set the slider to "vertical" or "horizontal".

Set dimensions! Vertical sliders don't assume a default height, so you'll need to set one. See slider_dimension option.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(10, 20),
            'range_min' => 0,
            'range_max' => 100,
            'orientation' => 'horizontal'
        ));
```

## 10. slider_dimension

The slider_dimension setting allows to set the slider width when the orientation setting is set to horizontal or the slider height when the orientation setting is set to horizontal. You can use any unit you want, including % or px.

### Example

``` php
 $slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(10, 20),
            'range_min' => 0,
            'range_max' => 100,
            'orientation' => 'horizontal',
            'slider_dimension' => array('width' => '200px')
        ));
```

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(10, 20),
            'range_min' => 0,
            'range_max' => 100,
            'orientation' => 'vertical',
            'slider_dimension' => array('height' => '200px')
        ));
```

## 11. animate and animation_duration

Set the animate option to false to prevent the slider from animating to a new value with when calling ```.val()```.

The animation_duration option can be used to set the animation speed assumed by the slider library.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(10),
            'range_min' => 0,
            'range_max' => 100,
            'animate' => false
        ));
```

### Example

``` php
 $slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(10),
            'range_min' => 0,
            'range_max' => 100,
            'animate' => true,
            'animation_duration' => 100
        ));
```