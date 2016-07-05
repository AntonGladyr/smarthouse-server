<?php

namespace UserBundle;

use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthUserProvider;

//use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

use UserBundle\User;
use DatabaseBundle\UsersAccess;

class UserProvider extends OAuthUserProvider { //implements UserProviderInterface

    private $db_users;
    protected $session, $service_container;

    public function __construct($session, $service_container)
    {
        $this->session = $session;
        $this->service_container = $service_container;
    }

    public function loadUserByUsername($username)
    {
        /*$user_data = $this->db_users->selectUserByUsername($username);

        if (!$user_data['username']) {
            throw new UsernameNotFoundException(
                sprintf('Username "%s" does not exist.', $username)
            );
        }

        $user = new User($user_data['username'], $user_data['password'], $user_data['salt'], array('ROLE_ADMIN'));*/
        return new User('admin', 'admin', array('ROLE_ADMIN'));

    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'UserBundle\User';
    }

}