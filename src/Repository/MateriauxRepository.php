<?php

namespace App\Repository;

use App\Entity\Materiaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Materiaux>
 *
 * @method Materiaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Materiaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Materiaux[]    findAll()
 * @method Materiaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MateriauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Materiaux::class);
    }

    public function save(Materiaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Materiaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function getStatisticsByType()
{
    return $this->createQueryBuilder('m')
        ->select('m.type, COUNT(m) as count')
        ->groupBy('m.type')
        ->getQuery()
        ->getResult()
    ;
}
    public function getTypes(): array
    {
        $qb = $this->createQueryBuilder('m')
            ->select('DISTINCT m.type')
            ->orderBy('m.type', 'ASC');
    
        $query = $qb->getQuery();
        $types = $query->getResult();
    
        $result = [];
        foreach ($types as $type) {
            $result[] = $type['type'];
        }
    
        return $result;
    }
    public function searchByType($type = null)
{
    $queryBuilder = $this->createQueryBuilder('m');

    if ($type) {
        $queryBuilder
            ->where('m.type = :type')
            ->setParameter('type', $type);
    } else {
        // return all materials if no type selected
        $queryBuilder->select('m');
    }

    return $queryBuilder->getQuery()->getResult();
}

//    /**
//     * @return Materiaux[] Returns an array of Materiaux objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Materiaux
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
