<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2009
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Newsletter
 * @license    LGPL
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['nl_channels']     = array('Verteiler', 'Bitte wählen Sie einen oder mehrere Verteiler.');
$GLOBALS['TL_LANG']['tl_module']['nl_hideChannels'] = array('Verteilermenü ausblenden', 'Das Menü zum Auswählen von Verteilern nicht anzeigen.');
$GLOBALS['TL_LANG']['tl_module']['nl_subscribe']    = array('Abonnementbestätigung', 'Sie können die Platzhalter <em>##channels##</em> (Name der Verteiler), <em>##domain##</em> (Domainname) und <em>##link##</em> (Aktivierungslink) verwenden.');
$GLOBALS['TL_LANG']['tl_module']['nl_unsubscribe']  = array('Kündigungsbestätigung', 'Sie können die Platzhalter <em>##channels##</em> (Name der Verteiler) und <em>##domain##</em> (Domainname) verwenden.');
$GLOBALS['TL_LANG']['tl_module']['nl_template']     = array('Newslettertemplate', 'Hier können Sie das Newslettertemplate auswählen.');
$GLOBALS['TL_LANG']['tl_module']['nl_includeCss']   = array('Stylesheet parsen', 'Das Stylesheet <em>newsletter.css</em> der Frontendseite hinzufügen.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['email_legend'] = 'E-Mail-Einstellungen';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_module']['text_subscribe']   = array('Ihr Abonnement auf %s', "Sie haben folgende Verteiler auf ##domain## abonniert:\n\n##channels##\n\nBitte klicken Sie ##link## um Ihr Abonnement zu aktivieren. Falls Sie die Bestellung nicht selbst getätigt haben, bitte ignorieren Sie diese E-Mail.\n");
$GLOBALS['TL_LANG']['tl_module']['text_unsubscribe'] = array('Ihr Abonnement auf %s', "Sie haben folgende Abonnements auf ##domain## gekündigt:\n\n##channels##\n");

?>