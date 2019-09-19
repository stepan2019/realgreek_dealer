<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
/**
 * Smarty truncate modifier plugin
 *
 * Type:     modifier<br>
 * Name:     mb_truncate<br>
 * Purpose:  Truncate a string to a certain length if necessary,
 *           optionally splitting in the middle of a word, and
 *           appending the $etc string or inserting $etc into the middle.
 * @link http://smarty.php.net/manual/en/language.modifier.truncate.php
 *          truncate (Smarty online manual)
 * @author   Glooobie!
 * @param string
 * @param integer
 * @param string
 * @param boolean
 * @param boolean
 * @return string
 */
function smarty_modifier_mb_truncate($string, $length = 80, $etc = '...',
                                  $break_words = true, $middle = false)
{
    if ($length == 0)
        return '';
	$string = htmlspecialchars_decode($string, ENT_QUOTES);
    if (mb_strlen($string) > $length) {
        $length -= min($length, mb_strlen($etc));
        if (!$break_words && !$middle) {
            $string = preg_replace('/\s+?(\S+)?$/u', '', mb_substr($string, 0, $length+1));
        }
        if(!$middle) {
			$part = mb_substr($string, 0, $length) . $etc;
        } else {
            $part = mb_substr($string, 0, $length/2) . $etc . mb_substr($string, -$length/2);
        }
		//return '<span title="'. htmlspecialchars($string, ENT_QUOTES, 'UTF-8').'">'.  htmlspecialchars($part, ENT_QUOTES, 'UTF-8') .'</span>';
		return $part;//htmlspecialchars($part, ENT_QUOTES, 'UTF-8');
		
    } else {
        return  $string; //htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}
/* vim: set expandtab: */
?>