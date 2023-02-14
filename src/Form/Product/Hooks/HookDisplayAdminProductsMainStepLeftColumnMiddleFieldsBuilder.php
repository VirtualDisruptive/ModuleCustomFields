<?php
        
    namespace PrestaShop\Module\Democustomfields17\Form\Product\Hooks;

    use PrestaShop\Module\Democustomfields17\Form\Product\Hooks\HookFieldsBuilderInterface;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Module;

    class HookDisplayAdminProductsMainStepLeftColumnMiddleFieldsBuilder implements HookFieldsBuilderInterface
    {
        public function addFields(FormBuilderInterface $adminFormBuilder, Module $module) :FormBuilderInterface
        {
            $adminFormBuilder
            ->add('ordered_products', TextType::class, array(
                    'label' => $module->l('productos pedidos'),
                    'attr' => array(
                        'class' => 'my-custom-class',
                        'data-hex'=> 'true'
                    )
            ));

            $adminFormBuilder
            ->add('order_date', TextType::class, array(
                    'label' => $module->l('fecha de pedido'),
                    'attr' => array(
                        'class' => 'my-custom-class',
                        'data-hex'=> 'true'
                    )
            ));

            $adminFormBuilder
            ->add('shipmark', TextType::class, array(
                    'label' => $module->l('shipmark'),
                    'attr' => array(
                        'class' => 'my-custom-class',
                        'data-hex'=> 'true'
                    )
            ));

            $adminFormBuilder
            ->add('airplane', TextType::class, array(
                    'label' => $module->l('Avión'),
                    'attr' => array(
                        'class' => 'my-custom-class',
                        'data-hex'=> 'true'
                    )
            ));

            $adminFormBuilder
            ->add('ship', TextType::class, array(
                    'label' => $module->l('barco'),
                    'attr' => array(
                        'class' => 'my-custom-class',
                        'data-hex'=> 'true'
                    )
            ));
                    
            return $adminFormBuilder;
        }
    }
