<?php

/**
 * @return string
 */
function DS()
{
    return DIRECTORY_SEPARATOR;
}

/**
 * @param string $moduleName
 * @return string
 */
function getModuleName(string $moduleName)
{
    return app_path('modules' . DS() . $moduleName . DS());
}

/**
 * @param string $fileName
 * @param string $moduleName
 * @return string
 */
function loadRoutes(string $fileName, string $moduleName)
{
    return getModuleName($moduleName) . 'routes' . DS() . $fileName . '.php';
}

/**
 * @param string $fileName
 * @param string $moduleName
 * @return string
 */
function loadConfigFile(string $fileName, string $moduleName)
{
    return getModuleName($moduleName) . 'config' . DS() . $fileName . '.php';
}

/**
 * @param string $moduleName
 * @return string
 */
function loadViews(string $moduleName)
{
    return getModuleName($moduleName) . 'resources' . DS() . 'views';
}

/**
 * @param string $moduleName
 * @return string
 */
function loadLang(string $moduleName)
{
    return getModuleName($moduleName) . 'resources' . DS() . 'lang';
}

/**
 * @param string $moduleName
 * @return string
 */
function loadMigrations(string $moduleName)
{
    return getModuleName($moduleName) . 'database' . DS() . 'migrations';
}

function loadTranslationJson(string $moduleName)
{
    return getModuleName($moduleName) . 'resources' . DS() . 'lang';
}
