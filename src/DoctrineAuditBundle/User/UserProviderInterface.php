<?php

namespace DH\DoctrineAuditBundle\User;

interface UserProviderInterface
{
    /**
     * @return UserInterface|null
     */
    public function getUser();
}
