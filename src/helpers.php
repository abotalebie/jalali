<?php

if (! function_exists('jdate')) {

    /**
     * @param string $str
     * @return \Abotalebie\Jalali\Jalalian
     */
    function jdate($str = null)
    {
        return \Abotalebie\Jalali\Jalalian::forge($str);
    }
}