<?php

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * @param string $model
 * @param string $type
 * @return string
 */
function buildPrefix(string $model, string $type = 'Admin')
{
    return config($model . '.prefix.' . $type, config('module.prefix.' . $type)) . '/' . config($model . '.model');
}

/**
 * @param string $model
 * @param string $type
 * @param string $pageName
 * @return string
 */
function moduleName(string $model, string $type, string $pageName)
{
    return $model . '::' . $type . '.' . $pageName;
}

/**
 * @param string $moduleName
 * @return string
 */
function buildNameSpace(string $moduleName)
{
    return ucfirst($moduleName) . '\Http\Controllers';
}
