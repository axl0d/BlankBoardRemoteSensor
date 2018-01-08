<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Allow visitors to register new accounts.
    |
    | **Not working yet**
    |--------------------------------------------------------------------------
    */

    'new_users' => true,

    /*
    |--------------------------------------------------------------------------
    | Days for password expiring.
    |--------------------------------------------------------------------------
    |
    | Set 0 to disable this feature.
    */

    'password_expire' => 0,

    /*
    |--------------------------------------------------------------------------
    | Default password for new users.
    |--------------------------------------------------------------------------
    */

    'default_password' => 'secret',

    /*
    |--------------------------------------------------------------------------
    | Default avatar for the users that haven't set one yet.
    |--------------------------------------------------------------------------
    */

    'default_avatar' => 'img/avatar/default.png',

    /*
    |--------------------------------------------------------------------------
    | Default disc for storing the avatar images
    |--------------------------------------------------------------------------
     */

    'default_disk' => 'public',

    /*
    |--------------------------------------------------------------------------
    | User role for super admin.
    |--------------------------------------------------------------------------
    |
    | Set the id or slug for the super admin role.
    |
    */

    'superuser' => 1,

    /*
    |--------------------------------------------------------------------------
    | Fail login attempt limits.
    |--------------------------------------------------------------------------
    |
    | Set the rules for the failed attempt limits. Set the number of days and
    | the limit of failed attempts to suspend the user. To access this feature
    | the "failed_limits" must be an array containing the number days as key(s)
    | and the limit of failed attempts as values. This will tell the Blankboard
    | login to suspend users if they have reached the limit in the specified
    | days. You can add multiple limits by different numbers of days, just by
    | adding a new item to the array.
    |
    | Set an empty array to disable this feature.
    |
    */

    'failed_limits' => [
        1 => 7,
        7 => 15,
        30 => 21,
    ],
];
