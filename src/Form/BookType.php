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
            ->add('id')
            ->add('title',null,[
                'attr'=>[
                    'class'=>'form-control input-floating',
                    'placeholder'=>"Enter a title",
                ],
                'label'=> 'Title',
                'label_attr'=>[
                    'class'=>"label-floating"
                ],
            ])
            ->add('synopsis',null,[
                'attr'=>[
                    'class'=>'form-control input-floating',
                    'placeholder'=>"Enter a synopsis",
                ],
                'label'=> 'Synopsis',
                'label_attr'=>[
                    'class'=>"label-floating"
                ],
            ])
            ->add('short_synopsis',null,[
                'attr'=>[
                    'class'=>'form-control input-floating',
                    'placeholder'=>"Enter a lil synopsis",
                ],
                'label'=> 'Short synopsis',
                'label_attr'=>[
                    'class'=>"label-floating"
                ],
            ])
            ->add('size',null,[
                'attr'=>[
                    'class'=>'form-control input-floating',
                    'placeholder'=>"Enter number of pages",
                ],
                'label'=> 'Size',
                'label_attr'=>[
                    'class'=>"label-floating"
                ],
            ])
            ->add('year',null,[
                'attr'=>[
                    'class'=>'form-control input-floating',
                    'placeholder'=>"Enter book year",
                ],
                'label'=> 'Year',
                'label_attr'=>[
                    'class'=>"label-floating"
                ],
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
