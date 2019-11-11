<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('synopsis',null,[
                'attr'=>[
                    'class'=>'form-control',
                    'rows'=>'4',
                ]
            ])
            ->add('short_synopsis',null,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('size',null,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('year',null,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('category',null,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
