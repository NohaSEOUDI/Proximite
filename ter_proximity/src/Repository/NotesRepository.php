<?php

namespace App\Repository;

use App\Entity\Fournisseur;
use App\Entity\Reservation;
use App\Entity\Notes;
use App\Entity\Client;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Notes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Notes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Notes[]    findAll()
 * @method Notes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notes::class);
    }

    // /**
    //  * @return Notes[] Returns an array of Notes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    //$sql="select AVG(niveau_satisfaction) AS moyenne from notes where fournisseur_id=idFournisseur";


    public function avgScore($idFournisseur){
       return $this->createQueryBuilder('n')
            ->select('AVG(n.niveauSatisfaction) as scoreMoyenne')
            ->Where('n.fournisseur = :val')
            ->setParameter('val', $idFournisseur)
            ->getQuery()
            ->getOneOrNullResult()
            
        ;
    }
    /*
    public function findOneBySomeField($value): ?Notes
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
