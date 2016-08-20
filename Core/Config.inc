<?php
/**
 * This file is where the MythCore configurations are stored. It is also where the core class loader is registered.
 * This can be modified to also include any other configuration files in the future.
 * @version 2.0
 * @package MythCore
 */
namespace Core;
/**
 * Enabling Debug mode. In production environments this will be changed into false (the default) which means this will be removed. However, if you are
 * copying code from the git repository during development, this should be changed to false when appropriate
 */
CoreConfig::Instance()->DebugMode = true;
/**
 * Registering main instance of Core Class Loader to handle loading classes from the framework
 */
CoreLoader::RegisterInstance();