<?php


namespace App\Core\Tools;


class CheckText
{
    public static function containsUrl($text)
    {
        $newText = '';
        $bHasLink = strpos($text, 'http://') !== false || strpos($text, 'https://') !== false;
        if ($bHasLink) {
            $newText = $text;
        } else {
            $newText .= 'http://';
            if (strpos($text, 'www') !== false) {
                $newText .= $text;
            } else {
                $newText .= "www.$text";
            }
        }
        return $newText;
    }
}
