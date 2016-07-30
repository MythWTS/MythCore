<?php
/**
 * This file is where the MythCore configurations are stored. It is also where the core class loader is registered.
 * This can be modified to also include any other configuration files in the future.
 * @version 2.0
 * @package MythCore
 */
namespace Core;
CoreConfig::Instance()->DebugMode = true;
/** Registering instance of class loader */
CoreLoader::RegisterInstance();