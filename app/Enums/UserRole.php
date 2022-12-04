<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'Admin';
    case Cashier = 'Cashier';
    case Frondesk = 'Frontdesk';
    case Waiter = 'Waiter';
}
