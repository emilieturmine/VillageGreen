<?php

namespace App\Repository;

use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Categorie>
 *
 * @method Categorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorie[]    findAll()
 * @method Categorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }

    public function add(Categorie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Categorie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    //    /**
    //     * @return Categorie[] Returns an array of Categorie objects
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
    //    /**
    //     * @return Categorie[] Returns an array of Categorie objects
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

    //    public function findOneBySomeField($value): ?Categorie
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    /**
     * @return Categorie[] Returns an array of Categorie objects
     */ 
    public function findAllCategorie(): array{
        return $this->createQueryBuilder('c')
          
            // ->orderBy("Libelle")
            ->getQuery()
            ->getResult();
    }

//     public function findAllSsCatPiano(): array
//     {
//         return $this->createQueryBuilder('cp')
//             ->Where('c.categorie '==6)
//             ->getQuery()
//             ->getResult();
//     }
  
//     public function findAllSsCatBatteries(): array
//     {
//         return $this->createQueryBuilder('cb')
//             ->Where('c.categorie '==12)
//             ->getQuery()
//             ->getResult();
//     }
//     public function findAllSsCatGuitares(): array
//     {
//         return $this->createQueryBuilder('cg')
//             ->Where('c.categorie '==18)
//             ->getQuery()
//             ->getResult();
//     }
//     public function findAllSsCatAmplis(): array
//     {
//         return $this->createQueryBuilder('ca')
//             ->Where('c.categorie '==24)
//             ->getQuery()
//             ->getResult();
//     }
//     public function findAllSsCatCables(): array
//     {
//         return $this->createQueryBuilder('cc')
//             ->Where('c.categorie '==30)
//             ->getQuery()
//             ->getResult();
//     }
//     public function findAllSsCatMixages(): array
//     {
//         return $this->createQueryBuilder('cm')
//             ->Where('c.categorie '==31)
//             ->getQuery()
//             ->getResult();
//     }
//     public function findAllSsCatMicro(): array
//     {
//         return $this->createQueryBuilder('cmic')
//             ->Where('c.categorie '==32)
//             ->getQuery()
//             ->getResult();
//     }
 }
