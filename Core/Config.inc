<?php
namespace Core;
CoreConfig::Instance()->BasePath(U::DocRoot());
CoreConfig::Instance()->DebugMode(true);
CoreLoader::RegisterInstance();
?>