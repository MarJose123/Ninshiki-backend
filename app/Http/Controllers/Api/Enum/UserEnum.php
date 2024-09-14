<?php
/*
 * Copyright (c) 2024.
 *
 * Filename: UserEnum.php
 * Project Name: ninshiki-backend
 * Project Repository: https://github.com/ninshiki-project/Ninshiki-backend
 *  License: MIT
 *  GitHub: https://github.com/MarJose123
 *  Written By: Marjose123
 */

namespace App\Http\Controllers\Api\Enum;

enum UserEnum: string
{
    case Invited = 'invited';
    case Active = 'active';
    case Inactive = 'inactive';
    case Ban = 'banned';
}
