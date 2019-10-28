<?php

namespace DenisKisel\ActiveHelper;

class ActiveHelper
{
    const DISABLE = 0;
    const ENABLE = 1;

    public static function disableText()
    {
        return 'Off';
    }

    public static function enableText()
    {
        return 'On';
    }

    public static function editable()
    {
        return [0 => self::disableText(), 1 => self::enableText()];
    }

    public static function radioSwitch()
    {
        return [
            'on'  => ['value' => 1, 'text' => self::enableText(), 'color' => 'success'],
            'off' => ['value' => 0, 'text' => self::disableText(), 'color' => 'danger'],
        ];
    }

    public static function radio()
    {
        return [self::DISABLE => self::disableText(), self::ENABLE => self::enableText()];
    }

    public static function select()
    {
        return [
            self::DISABLE => self::disableText(),
            self::ENABLE => self::enableText(),
        ];
    }
}
