<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   fh-counter
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2014
 */
 
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Schachbulle\ContaoSchachtagsBundle\Classes\Tags', 'Schachbund');
