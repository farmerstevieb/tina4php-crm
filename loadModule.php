<?php
/**
 * Tina4php-Crm - Crm Module
 * Author Stevie B steve@farmit.cymru
 */
use Tina4\Config;
use Tina4\Module;

Module::addModule("Crm Module", "1.0.0", "tina4crm", static function (Config $config) {
    $twigNameSpace = "@tina4crm";
    (new Crm())->addConfigMethods($config);
    (new Crm())->addCmsMenu("/crm/dashboard", "Crm");

});