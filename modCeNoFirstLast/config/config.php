<?php

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('slashworks\ModCeNoFirstLast', 'removeFirstAndLast');