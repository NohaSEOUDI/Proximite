<?php

namespace App\Repository;

use App\Entity\Fournisseur;
use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Product;
/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    // /**
    //  * @return Reservation[] Returns an array of Reservation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

$query =  $this->createQueryBuilder('a')
    ->select('a.id, a.name, v.name')
      ->join('a.ville', 'v')
      ->andWhere('a.created_at BETWEEN :dateOne AND :dateTwo')
      ->andWhere('v.name = "Troyes"')
      ->setParameters([
         'dateOne' => $dateOne,
         'dateTwo' => $dateTwo
      ])

    */
    
   //fonction qui me récupere la politique du F 
    public function findOneBySomeField($value): ?Array
    {
        return $this->createQueryBuilder('r')//alias r comme reservation
            ->select('Distinct f.politique')
            ->join('App\Entity\Fournisseur','f')
            ->andWhere('f.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    //SELECT f.politique FROM App\Entity\Reservation r INNER JOIN App\Entity\Fournisseur WHERE f.id = :val

     /*id du fournisseur en de reservation 
     fonction pour récuperer l'id du f 
     public function findIdFournisseur($value): ?Array
    {
        return $this->createQueryBuilder('f')//alias r comme reservation
            ->select('f.id')
            ->join('App\Entity\Fournisseur','f')
            ->andWhere('f.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }*/
}
