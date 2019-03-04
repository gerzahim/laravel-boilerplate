<?php
/**
 * Created by PhpStorm.
 * User: Deception
 * Date: 21/01/2019
 * Time: 12:24
 */

/**
 * @param $class
 * @param array $attributes
 * @param int $times
 *
 * @return mixed
 */
function create($class, array $attributes = [], int $times = null)
{
    return factory($class, $times)->create($attributes);
}

/**
 * @param $class
 * @param array $attributes
 * @param int $times
 *
 * @return mixed
 */
function make($class, array $attributes = [], int $times = null)
{
    return factory($class, $times)->make($attributes);
}