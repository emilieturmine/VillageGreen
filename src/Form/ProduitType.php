<?php
namespace App\Form;

use App\Entity\Produit;
use App\Entity\Fournisseur;
use App\Entity\SsCategorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference', TextType::class)
            ->add('libelle', TextType::class)
            ->add('description', TextareaType::class)
            ->add('prixUnitaire', MoneyType::class)
            ->add('photo', TextType::class)
            ->add('stock', IntegerType::class)
            ->add('tva', PercentType::class)
            ->add('prixAchat', MoneyType::class)
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
                'choice_label' => 'nom',
            ])
            ->add('ssCategorie', EntityType::class, [
                'class' => SsCategorie::class,
                'choice_label' => 'nom',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
