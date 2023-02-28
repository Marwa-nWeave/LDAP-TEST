<?php

namespace App\Ldap;

use LdapRecord\Models\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use LdapRecord\Models\Concerns\CanAuthenticate;


class User extends Model implements Authenticatable
{
    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    use CanAuthenticate;
    public static $objectClasses = [
        'top',
        'person',
        'organizationalperson',
        'user',
    ];

    protected $guidKey = 'uuid';

}
