<?php

namespace App\Repository;

use Doctrine\ORM\QueryBuilder;
use App\Entity\DemandeIntervention;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method DemandeIntervention|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandeIntervention|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandeIntervention[]    findAll()
 * @method DemandeIntervention[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandeInterventionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeIntervention::class);
    }

    // /**
    //  * @return DemandeIntervention[] Returns an array of DemandeIntervention objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DemandeIntervention
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    //trouver toutes les demandes d'intervention

    /**
     * @return Demande
     */
    public function findAllAskQuery(): array {
        return $this->findAskQuery()
            ->getQuery()
            ->getResult();
    }

    //creation d'une requête
    public function findAskQuery(): QueryBuilder{
        return $this->createQueryBuilder('p');
    }

    
}
