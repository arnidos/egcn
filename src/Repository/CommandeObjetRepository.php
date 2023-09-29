<?php

namespace App\Repository;

use App\Entity\CommandeObjet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandeObjet>
 *
 * @method CommandeObjet|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeObjet|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeObjet[]    findAll()
 * @method CommandeObjet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeObjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeObjet::class);
    }

//    /**
//     * @return CommandeObjet[] Returns an array of CommandeObjet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CommandeObjet
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
