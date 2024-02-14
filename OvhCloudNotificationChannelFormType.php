<?php

declare(strict_types=1);

namespace EightLines\SyliusNotificationPlugin\NotificationChannel\Symfony;

use EightLines\SyliusNotificationPlugin\Form\EventSubscriber\AddContentFormSubscriber;
use EightLines\SyliusNotificationPlugin\Form\EventSubscriber\AddCustomConfigurationFormSubscriber;
use EightLines\SyliusNotificationPlugin\Form\EventSubscriber\AddRecipientsFormSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

final class OvhCloudNotificationChannelFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->addEventSubscriber(new AddRecipientsFormSubscriber());

        $builder->addEventSubscriber(new AddCustomConfigurationFormSubscriber(
            type: OvhCloudNotificationChannelCustomConfigurationFormType::class,
        ));

        $builder->addEventSubscriber(new AddContentFormSubscriber(
            subject: false,
            message: true,
        ));
    }
}
