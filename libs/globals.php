<?php
/**
 * User: florinpo
 * Date: 20/05/2017
 * Time: 19:28
 */

function h($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'utf-8');
}