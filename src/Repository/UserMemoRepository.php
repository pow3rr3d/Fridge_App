<?php

namespace App\Repository;

use App\Entity\UserMemo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserMemo|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserMemo|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserMemo[]    findAll()
 * @method UserMemo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserMemoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserMemo::class);
    }

    // /**
    //  * @return UserMemo[] Returns an array of UserMemo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserMemo
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
