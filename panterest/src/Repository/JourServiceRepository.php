<?php

namespace App\Repository;

use App\Entity\JourService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JourService|null find($id, $lockMode = null, $lockVersion = null)
 * @method JourService|null findOneBy(array $criteria, array $orderBy = null)
 * @method JourService[]    findAll()
 * @method JourService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JourServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JourService::class);
    }

    // /**
    //  * @return JourService[] Returns an array of JourService objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JourService
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
