<?php

namespace App\Repository;
use App\Entity\TypeOffre;
use App\Entity\Offre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offre>
 *
 * @method Offre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offre[]    findAll()
 * @method Offre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offre::class);
    }

//    /**
//     * @return Offre[] Returns an array of Offre objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Offre
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function findByTitreOrPourcentage(string $searchTerm): array
{
    $queryBuilder = $this->createQueryBuilder('o');

    if (!empty($searchTerm)) {
        $queryBuilder->andWhere('o.titre LIKE :searchTerm')
            ->orWhere('o.poucentage LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$searchTerm.'%');
    }

    return $queryBuilder->getQuery()->getResult();
}
public function findByFiltres( $poucentage ,$dated,$datef ): array
    {
        $queryBuilder = $this->createQueryBuilder('o');

        if ($poucentage !== null) {
            $queryBuilder->andWhere('o.poucentage = :poucentage')
                ->setParameter('poucentage', $poucentage);
        }
        dump($dated, $datef);


        return $queryBuilder->getQuery()->getResult();
    }
   
}
