<?php

use Illuminate\Validation\Rules\Enum;

final class UserType extends Enum {
    const ADMIN = 0;
    const CLIENT = 1;
}