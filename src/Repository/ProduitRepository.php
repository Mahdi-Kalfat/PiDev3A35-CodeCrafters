<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 *
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }
    public function findByFilters($type, $taille, $etat)
{
    $query = $this->createQueryBuilder('p');

    if ($type) {
        $query->andWhere('p.type = :type')
            ->setParameter('type', $type);
    }

    if ($taille) {
        $query->andWhere('p.taille = :taille')
            ->setParameter('taille', $taille);
    }

    if ($etat) {
        $query->andWhere('p.etat = :etat')
            ->setParameter('etat', $etat);
    }

    return $query->getQuery()->getResult();
}

public function findByMarque($marque)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.marque = :marque')
            ->setParameter('marque', $marque)
            ->getQuery()
            ->getResult();
    }

    public function findByPrix($order = 'ASC')
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.prix', $order)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Produit[] Returns an array of Produit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Produit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
