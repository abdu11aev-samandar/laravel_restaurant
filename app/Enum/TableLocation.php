<?php

namespace App\Enum;

enum TableLocation: string
{
    case Front = 'front';
    case Inside = 'inside';
    case Outside = 'outside';
}
