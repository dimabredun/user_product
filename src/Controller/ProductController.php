<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProductFormType;
use App\Repository\UserRepository;
use App\Service\ProductCrudService;
use App\Service\UserCrudService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    private UserCrudService $userCrud;
    private EntityManagerInterface $entityManager;
    private ProductCrudService $productCrud;

    public function __construct
    (
        UserCrudService $userCrud,
        ProductCrudService $productCrud,
        EntityManagerInterface $entityManager
    ) {
        $this->userCrud = $userCrud;
        $this->entityManager = $entityManager;
        $this->productCrud = $productCrud;
    }

    #[Route('/', name: 'app_product')]
    public function select(Request $request): Response
    {
        $form = $this->createForm(ProductFormType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $user = $this->userCrud->read($form->get('user')->getData()->getId());
            $products = $form->get('product')->getData();

            foreach ($products as $product) {
                $user->addProduct($this->productCrud->read($product->getId()));
            }

            $this->entityManager->flush();

            return $this->redirectToRoute('app_checkout');
        }

        return $this->renderForm('product/select.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/checkout', name: 'app_checkout')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('checkout/list.html.twig', [
            'users' => $users,
        ]);
    }
}
