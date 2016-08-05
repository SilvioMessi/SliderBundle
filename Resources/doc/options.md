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

# Options Description

1. [slider_id](#1-slider_id)
2. [start](#2-start)
3. [range_min & range_max](#3-range_min-&-range_max)
4. [connect](#4-connect)
5. [step](#5-step)
6. [range_steps](#6-range_steps)

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
            'range_max' => 100,
        ));
```

## 3. range_min & range_max

All values on the slider are part of a range. The range has a minimum and maximum value. The range_min option sets the lower bound of the range, the range_max, instead, the upper bound.

### Example

``` php
$slider->setOptions(array(
            'slider_id' => 'my_slider',
            'start' => array(0),
            'range_min' => 0,
            'range_max' => 100,
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
            'connected => 'lower',
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
            'step => 10,
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
            'range_steps => array('30%' => array('value' => 50),
                                  '70%' => array('value' => 90),
        ));
```

For every subrange in a non-linear slider, stepping can be set. Note how in the example below the slider doesn't step until it reaches 500. From there on, it changes in increments of 500, until it reaches 4000, where increments now span 1000.

``` php
$slider->setOptions(array(
            'slider_id' => 'test',
            'start' => array(500, 4000),
            'range_min' => 0,
            'range_max' => 10000,
            'range_steps' => array( '10%' => array('value' => 500, 'step' => 500),
                                    '50%' => array('value' => 4000, 'step' => 1000)),
        ));
```