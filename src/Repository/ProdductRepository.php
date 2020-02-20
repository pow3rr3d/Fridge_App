<?php

namespace App\Repository;

use App\Entity\Prodduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Prodduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prodduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prodduct[]    findAll()
 * @method Prodduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prodduct::class);
    }

    // /**
    //  * @return Prodduct[] Returns an array of Prodduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Prodduct
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
