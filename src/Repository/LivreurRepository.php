<?php

namespace App\Repository;

use App\Entity\Livreur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

/**
 * @extends ServiceEntityRepository<Livreur>
 *
 * @method Livreur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livreur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livreur[]    findAll()
 * @method Livreur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivreurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livreur::class);
    }

//    /**
//     * @return Livreur[] Returns an array of Livreur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Livreur
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function updateLivreurStatus(string $id, string $statut): void
    {
        $livreur = $this->find($id);

        if ($livreur) {
            $livreur->setStatut($statut);

            $entityManager = $this->getEntityManager();
            $entityManager->flush();
        }
    }
    public function findByzoneOrvehicule(string $searchTerm): array
{
    $queryBuilder = $this->createQueryBuilder('o');

    if (!empty($searchTerm)) {
        $queryBuilder->andWhere('o.zonelivraison LIKE :searchTerm')
            ->orWhere('o.vehicule LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$searchTerm.'%');
    }

    return $queryBuilder->getQuery()->getResult();
}




}
