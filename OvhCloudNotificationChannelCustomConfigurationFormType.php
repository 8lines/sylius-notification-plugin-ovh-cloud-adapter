<?php

declare(strict_types=1);

namespace EightLines\SyliusNotificationPlugin\NotificationChannel\Symfony;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

final class OvhCloudNotificationChannelCustomConfigurationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('phone_number_from', TextType::class, [
            'label' => 'eightlines_sylius_notification_plugin.ui.phone_number_from',
            'required' => true,
            'constraints' => [
                new NotBlank([
                    'message' => 'eightlines_sylius_notification_plugin.notification.action.custom.phone_number_from.not_blank',
                    'groups' => ['sylius'],
                ]),
                new Length([
                    'max' => 250,
                    'maxMessage' => 'eightlines_sylius_notification_plugin.notification.action.custom.phone_number_from.max_length',
                    'groups' => ['sylius'],
                ]),
            ],
        ]);
    }
}
