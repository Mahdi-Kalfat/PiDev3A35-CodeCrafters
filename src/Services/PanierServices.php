<?php
namespace App\Services;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ProduitRepository;

class PanierServices
{
    private $session;
    private $repoproduit;
    private $tva = 0.2;

    public function __construct(SessionInterface $session, ProduitRepository $repoproduit)
    {
        $this->session = $session;
        $this->repoproduit = $repoproduit;
    }
    public function addToCart($id){
        $cart = $this->getCart();
        if(isset($cart[$id])){
            //produit est deja dans le panier
            $cart[$id]++;
        }else{
            //le produit n'est pas dans le panier
            $cart[$id] = 1;
        }$this->updateCart($cart);
    }
    public function getCart(){
        return $this->session->get('cart',[]);
    }
    public function updateCart($cart){
        $this->session->set('cart',$cart);
        $this->session->set('cartData',$this->getFullCart());
    }
    public function getFullCart(){
        $cart = $this->getCart();
        $fullCart = [];
        $quantityCart = 0;
        $subTotal = 0;

        foreach($cart as $id =>$quantity){
            $produit = $this->repoproduit->find($id);
            if($produit){
                $fullCart['produits'][] = [
                    "quantity" => $quantity,
                    "produit" => $produit,
                ];
                $quantityCart +=$quantity;
                $subTotal += $quantity * $produit ->getPrix()/100;
            }else{
                $this->deleteFromCart($id);
            }
        }
        $fullCart['data'] = [
            "quantityCart" => $quantityCart,
            "subTotalHT" => $subTotal,
            "taxe" => round($subTotal*$this->tva,2),
            "subTotalTTC"=> round(($subTotal + ($subTotal*$this->tva)),2)
        ];
        return $fullCart;
    }
    public function deleteFromCart($id){    //supprimer une unite d'un article du panier
        $cart = $this->getCart();
        //produit est dans le panier
        if(isset($cart[$id])){
            //quantity de produit superieur a 1
            if ($cart[$id] > 1){
                $cart[$id]--;
            }else{
                unset($cart[$id]);
            }
            $this->updateCart($cart);
        }
    }
    public function deleteALLToCart($id){  //supprimer un article du panier
        $cart = $this->getCart();
        //produit est dans le panier
        if(isset($cart[$id])){
            //supprimer tous
            unset($cart[$id]);
            $this->updateCart($cart);
        }
    }
    public function deleteCart(){ //suprimer panier
        $this->updateCart([]);
    }
}