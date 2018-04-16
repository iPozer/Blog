<?php

namespace AppBundle\Form;

use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Validator\Constraints\Date;

class UserRegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('UserName', \Symfony\Component\Form\Extension\Core\Type\TextType::class);
        $builder->add('UserLogin', \Symfony\Component\Form\Extension\Core\Type\TextType::class);
        $builder->add('sex',\Symfony\Component\Form\Extension\Core\Type\TextType::class);
        $builder->add('date', \Symfony\Component\Form\Extension\Core\Type\DateType::class);
        $builder->add('pswd', \Symfony\Component\Form\Extension\Core\Type\TextType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
//        $resolver->setDefaults([
//            'data_class' =>'AppBundle\Entity\Users'
//        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_user_register_form_type';
    }
}
