<?php

namespace UnsecureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CommentsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SessionRepository extends EntityRepository
{
    /**
     * Persist and flush a session instance
     * 
     * @param Session $session
     */
    public function saveSession(Session $session)
    {
        if ($this->_em->isOpen()) {
            $this->_em->persist($session);
            $this->_em->flush();
        }
    }
}
