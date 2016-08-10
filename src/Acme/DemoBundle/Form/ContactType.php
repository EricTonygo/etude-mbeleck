<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('email')
                ->add('nom')
                ->add('telephone')
                ->add('compagnie')
                ->add('objet')
                ->add('message', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}
