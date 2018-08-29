<?php

namespace GSEB\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use GSEB\MainBundle\Form\RackspaceType;
use GSEB\MainBundle\Form\AttributType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ObjectType extends AbstractType
{
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $objtype = intval($options['idObjType']);
        //$id_baie = intval($options['idBaie']);
        // $attrObj = $options['attrObj'];
        // $res = count($attrObj);
        // $i = 0;
        $builder
            ->add('objtypeId', HiddenType::class, array(
                'data' => $objtype,
            ))
            ->add('name',  TextType::class)
        ;

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['idObjType']);
        //$resolver->setRequired(['idBaie']);
        //$resolver->setRequired(['attrObj']);
    
        $resolver->setDefaults(array(
             'data_class' => 'GSEB\MainBundle\Entity\Object'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gseb_Mainbundle_object';
    }
   

}
