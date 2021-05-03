<?php

namespace App\Repository;

use App\Entity\Fournisseur;
use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\DateType;

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
     /*  $city=$request->get('recherche')['Ville'];
      $typeS=$request->get('recherche')['TypeService'];

     $query = $this->getDoctrine()->getManager()
                 ->createQuery("select s from App\Entity\Service s
                  where   s.ville=:Ville")
                ->setParameter('Ville', "$city");
                //->setParameter('TypeService', "$typeS");
                //dd($query);
    $resultat = $query->getResult();*/
    
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

    /*public function findByCity($critaire){
        return $this->createQueryBuilder('c')//alias r comme reservation
            ->select('c.ville')
            //->join('App\Entity\Fournisseur','f')
            ->andWhere('city.ville = :cityName')
            ->setParameter('cityName', $critaire['Ville'])
           // ->andWhere('c.type = :type')
            //->setParameter('type', $critaire['type'])
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }*/

    

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

    public function findAllBetweenDates($d1,$d2): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
            ->where('p.jour BETWEEN :d1 AND :d2')
            ->setParameter('d1', $d1)
            ->setParameter('d2', $d2)
            ->orderBy('p.jour', 'ASC');

        $query = $qb->getQuery();

        return $query->execute();

    }

}
