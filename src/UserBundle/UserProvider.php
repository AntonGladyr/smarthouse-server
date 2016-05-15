<?php

namespace UserBundle;

use DatabaseBundle\UsersAccess;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

use UserBundle\User;

class UserProvider implements UserProviderInterface {

    private $db_users;

    public function __construct(UsersAccess $db_users)
    {
        $this->db_users = $db_users;
    }

    public function loadUserByUsername($username)
    {
        // Select user here!!!

        // And return new User();


        throw new UsernameNotFoundException(
            sprintf('Username "%s" does not exist.', $username)
        );
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