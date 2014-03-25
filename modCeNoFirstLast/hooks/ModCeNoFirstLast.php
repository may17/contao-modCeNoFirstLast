<?php

namespace slashworks;


use Contao\Frontend;

class ModCeNoFirstLast extends Frontend {

    public function removeFirstAndLast($objTemplate)
    {
        if(strpos($objTemplate->class, 'mod_article') !== false || strpos($objTemplate->class, 'ce_') !== false) {

            if((strpos($objTemplate->class, 'first') !== false)) {
                $objTemplate->Template->class = str_replace(' first', '', $objTemplate->class);
            }

            if(strpos($objTemplate->class, 'last') !== false) {
                $objTemplate->Template->class = str_replace(' last', '', $objTemplate->class);
            }

        }
    }

}