<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entré un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au minimum {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('discordid', TextType::class, ['label' => 'Discord ID','help' => 'Exemple : MonPseudo#1111'])
            ->add('pseudo', TextType::class, ['label' => 'Pseudo'])
            ->add('level', IntegerType::class, ['label' => 'Level'])
            ->add('spe', ChoiceType::class, [
                'label' => 'Spé',
                'choices'  => [
                    'Choissisez votre spé' => '',
                    'Tank' => 'Tank',
                    'Off Tank' => 'Off Tank',
                    'Heal' => 'Heal',
                    'PalaHeal (Epée & Bouclier ou Marteau + Bâton de vie)' => 'PalaHeal',
                    'Mage' => 'Mage',
                    'DPS Distant (Déxtérité)' => 'DPS Distant (Déxtérité)',
                ],
            ])
            ->add('FirstWeapon', ChoiceType::class, [
                'label' => 'Arme principal',
                'choices'  => [
                    'Choissisez votre Armes' => '',
                    'Epée et bouclier' => 'Epée et bouclier',
                    'Lance' => 'Lance',
                    'Arc' => 'Arc',
                    'Bâton de feu' => 'Bâton de feu',
                    'Rapière' => 'Rapière',
                    'Mousquet' => 'Mousquet',
                    'Hache Double' => 'Hache Double',
                    'Bâton de vie' => 'Bâton de vie',
                    'Hachette' => 'Hachette',
                    'Marteau D\'armes' => 'Marteau D\'armes',
                    'Gantelets de glace' => 'Gantelets de glace',
                ],
            ])
            ->add('SecondWeapon', ChoiceType::class, [
                'label' => 'Arme Secondaire',
                'choices'  => [
                    'Choissisez votre Armes' => '',
                    'Epée et bouclier' => 'Epée et bouclier',
                    'Lance' => 'Lance',
                    'Arc' => 'Arc',
                    'Bâton de feu' => 'Bâton de feu',
                    'Rapière' => 'Rapière',
                    'Mousquet' => 'Mousquet',
                    'Hache Double' => 'Hache Double',
                    'Bâton de vie' => 'Bâton de vie',
                    'Hachette' => 'Hachette',
                    'Marteau D\'armes' => 'Marteau D\'armes',
                    'Gantelets de glace' => 'Gantelets de glace',
                ],
            ])
            ->add('compagnie', TextType::class, ['label' => 'Compagnie'])
            ->add('GearScore', TextType::class, ['label' => 'GearScore'])

            ->add('FabArmes', ChoiceType::class, [
                'label' => 'Fabrication d\'armes',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('FabArmures', ChoiceType::class, [
                'label' => 'Fabrication d\'armures',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('Ingenierie', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('Joaillerie', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('ArtsObscurs', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('Cuisine', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('Ameublement', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('TailleurDePierre', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('fonderie', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('menuiserie', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('tannerie', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('tissage', ChoiceType::class, [
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '10' => 10,
                    '30' => 30,
                    '50' => 50,
                    '70' => 70,
                    '90' => 90,
                    '110' => 110,
                    '130' => 130,
                    '150' => 150,
                    '170' => 170,
                    '180' => 180,
                    '190' => 190,
                    '200' => 200,
                ],
            ])
            ->add('SwordShield', ChoiceType::class, [
                'label' => 'Epée et bouclier',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('Lance', ChoiceType::class, [
                'label' => 'Lance',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('Arc', ChoiceType::class, [
                'label' => 'Arc',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('BatonFeu', ChoiceType::class, [
                'label' => 'Bâton de feu',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('Rapiere', ChoiceType::class, [
                'label' => 'Rapiere',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('HacheDouble', ChoiceType::class, [
                'label' => 'Hache Double',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('Mousquet', ChoiceType::class, [
                'label' => 'Mousquet',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('BatonVie', ChoiceType::class, [
                'label' => 'Bâton de vie',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('Hachette', ChoiceType::class, [
                'label' => 'Hachette',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('MarteauDarmes', ChoiceType::class, [
                'label' => 'Marteau d\'armes',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ])
            ->add('GanteletsGlace', ChoiceType::class, [
                'label' => 'Gantelets de glace',
                'choices'  => [
                    'Choisissez un niveau' => '',
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}