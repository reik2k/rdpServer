namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

// Implements userproviderinterface so we can use the user entity for authentication
// Extends entityrepository so that it gets methods definded there
class UserRepository extends EntityRepository implements UserProviderInterface {

  //  This function is called when a user tries to login, the below lets the user use their username or email for username
  public function loadUserByUsername($username) {
    $user = $this->createQueryBuilder('u')
            ->select('u, r')
            ->leftJoin('u.roles', 'r')
            ->where('u.username = :username OR u.email = :username')
            ->setParameter('username', $username)
            ->getQuery();
    try {
      $user = $user->getSingleResult();
    } catch (NoResultException $exc) {
      throw new UsernameNotFoundException(sprintf('Unable to find an active UserBundle:User object identified by %s', $username));
    }
    return $user;
  }
  // 
  public function refreshUser(UserInterface $user) {
    $class = get_class($user);
    if (!$this->supportsClass($class))
      throw new UnsupportedUserException(sprintf('instances of class %s are not supported', $class));
    return $this->loadUserByUsername($user->getUsername());
  }

  public function supportsClass($class) {
    return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
  }

}