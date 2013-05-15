<?php
namespace Respect\Validation\Exceptions;

class CpfException extends ValidationException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} deve ser um CPF valido',
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} não deve ser um CPF valido',
        )
    );
}

