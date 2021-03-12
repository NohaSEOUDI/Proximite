<?php

namespace App\Repository;

use App\Entity\Bbbb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bbbb|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bbbb|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bbbb[]    findAll()
 * @method Bbbb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BbbbRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bbbb::class);
    }

    // /**
    //  * @return Bbbb[] Returns an array of Bbbb objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bbbb
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
