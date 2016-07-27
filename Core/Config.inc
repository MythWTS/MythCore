<?php
namespace Core;
CoreConfig::Instance()->DebugMode = true;
/** Registering instance of class loader */
CoreLoader::RegisterInstance();