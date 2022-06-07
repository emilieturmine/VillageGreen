<?php

namespace App\Repository;

use App\Entity\SsCategorie;
use App\Entity\Categorie;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<SsCategories>
 *
 * @method SsCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method SsCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method SsCategories[]    findAll()
 * @method SsCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SsCategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SsCategorie::class);
    }

    public function add(SsCategorie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SsCategorie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SsCategories[] Returns an array of SsCategories objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SsCategories
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    // public function findAllSsCatByCatID(): array
    // {
    //     return $this->createQueryBuilder('s')
    //         ->Where('s.catParent'=='c.id')
    //         ->getQuery()
    //         ->getResult();
    // }
}
