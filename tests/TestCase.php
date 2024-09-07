<?php

namespace Homeful\Notifications\Tests;

use Homeful\Contracts\Providers\EventServiceProvider as ContractEventServiceProvider;
use Homeful\KwYCCheck\Providers\EventServiceProvider as KyWCCheckEventServiceProvider;
use Homeful\Mortgage\Providers\EventServiceProvider as MortgageEventServiceProvider;
use Spatie\SchemalessAttributes\SchemalessAttributesServiceProvider;
use Homeful\Notifications\NotificationsServiceProvider;
use LBHurtado\EngageSpark\EngageSparkServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Homeful\References\ReferencesServiceProvider;
use Homeful\KwYCCheck\KwYCCheckServiceProvider;
use Homeful\Contracts\ContractsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Homeful\Contacts\ContactsServiceProvider;
use LBHurtado\SMS\SMSServiceProvider;


class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Homeful\\Notifications\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            NotificationsServiceProvider::class,
            EngageSparkServiceProvider::class,
            SMSServiceProvider::class,
            ReferencesServiceProvider::class,
            KwYCCheckServiceProvider::class,
            ContactsServiceProvider::class,
            SchemalessAttributesServiceProvider::class,
            KyWCCheckEventServiceProvider::class,
            ContractsServiceProvider::class,
            ReferencesServiceProvider::class,
            KwYCCheckServiceProvider::class,
            ContactsServiceProvider::class,
            SchemalessAttributesServiceProvider::class,
            KyWCCheckEventServiceProvider::class,
            ContractsServiceProvider::class,
            ContractsServiceProvider::class,
            SchemalessAttributesServiceProvider::class,
            MortgageEventServiceProvider::class,
            ContactsServiceProvider::class,
            ContractEventServiceProvider::class
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        config()->set('engagespark.api_key', 'e333ee0937f093dbacc77db00dd5b48a199c4cc8');
        config()->set('engagespark.org_id', '16089');
        config()->set('engagespark.sender_id', 'Homeful');

        config()->set('mail.default', 'ses');
        config()->set('services.ses.key', 'AKIASZKRPTCUF7DQZF43');
        config()->set('services.ses.secret', '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');
        config()->set('services.ses.region', 'ap-northeast-1');
        config()->set('mail.from', '3neti@lyflyn.net');

        config()->set('data.validation_strategy', 'always');
        config()->set('data.max_transformation_depth', 6);
        config()->set('data.throw_when_max_transformation_depth_reached', 6);

        /*
        $migration = include __DIR__.'/../database/migrations/create_notifications_table.php.stub';
        $migration->up();
        */
    }
}
