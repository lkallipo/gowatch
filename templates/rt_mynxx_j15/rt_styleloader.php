<?php
/**
 * @package   Mynxx Template - RocketTheme
 * @version   1.5.7 August 19, 2010
 * @author    RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Rockettheme Mynxx Template uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
defined( '_JEXEC' ) or die( 'Restricted index access' );

// set default vars
$fontstyle = "f-" . $default_font;
$fontfamily = $font_family;
$tstyle = $preset_style;
$mtype = $menu_type;
$thisurl = $this->base . rebuildQueryString($template_properties);
$preset = $this->params->get("presetStyle", "dark-red");
$my_session = JFactory::getSession();

//array of properties to look for and store
foreach ($template_properties as $tprop) {

    if (isset($_REQUEST['reset-settings'])) {
        $my_session->set($cookie_prefix.$tprop,"");
        setcookie ($cookie_prefix. $tprop, "", $cookie_time, '/', false);  
    } elseif ($my_session->get($cookie_prefix.$tprop)) {
        $$tprop = $my_session->get($cookie_prefix.$tprop);
    } elseif (isset($_COOKIE[$cookie_prefix. $tprop])) {
    	$$tprop = htmlentities(JRequest::getVar($cookie_prefix. $tprop, '', 'COOKIE', 'STRING'));
    }    
}


if ($preset != $tstyle) {
    rebuildColorParams($this, $tstyle);
}

// rebuild color params from preset array
function rebuildColorParams(&$template, &$tstyle) {
    global $stylesList;
    $style = $stylesList[$tstyle];
    
    $template->params->set('bodyStyle',              $style[0]);
    $template->params->set('primaryColor',            $style[1]);
    
    //var_dump ($template->params);
}

// rebuild the querystring when needed
function rebuildQueryString($template_properties) {

  if (!empty($_SERVER['QUERY_STRING'])) {
      $parts = explode("&", $_SERVER['QUERY_STRING']);
      $newParts = array();
      foreach ($parts as $val) {
          $val_parts = explode("=", $val);
          if (!in_array($val_parts[0], $template_properties)) {
            array_push($newParts, $val);
          }
      }
      if (count($newParts) != 0) {
          $qs = implode("&amp;", $newParts);
      } else {
          return "?";
      }
      return "?" . $qs . "&amp;"; // this is your new created query string
  } else {
      return "?";
  } 
}
?>