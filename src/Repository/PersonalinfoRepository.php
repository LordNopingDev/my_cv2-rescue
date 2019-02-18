<?php

namespace App\Repository;

use App\Entity\Personalinfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Personalinfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Personalinfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Personalinfo[]    findAll()
 * @method Personalinfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonalinfoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Personalinfo::class);
    }

    // /**
    //  * @return Personalinfo[] Returns an array of Personalinfo objects
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
    public function findOneBySomeField($value): ?Personalinfo
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
