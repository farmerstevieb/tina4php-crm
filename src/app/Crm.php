<?php

/**
 * Tina4php-Crm - Crm Module
 * Author Stevie B steve@farmit.cymru
 */

class Crm extends Content
{
    private string $twigNamespace = "@tina4crm";

    /**
     * Get a different twig name space for changing dashboard and other screens
     * @return string
     */
    public function getTwigNameSpace(): string
    {
        if (defined("ECOMM_NAMESPACE")) {
            if (!empty(ECOMM_NAMESPACE)) {
                return ECOMM_NAMESPACE;
            } else {
                return "@__main__";
            }
        } else {
            return $this->twigNamespace;
        }
    }
}
