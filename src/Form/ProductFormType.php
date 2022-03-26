<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\User;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user', EntityType::class, [
                'class' => User::class,
                'query_builder' => function(UserRepository $repository) {
                    return $repository->createQueryBuilder('u');
                },
                'placeholder' => 'Select a user',
            ])
            ->add('product', EntityType::class, [
                'class' => Product::class,
                'query_builder' => function(ProductRepository $productRepository) {
                    return $productRepository->createQueryBuilder('p');
                },
                'help' => 'You can select multiple products',
                'expanded'  => true,
                'multiple' => true,
                'mapped' => false,
            ])
            ->add('submit', SubmitType::class, [
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
