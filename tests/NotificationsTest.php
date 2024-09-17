<?php


use Homeful\Notifications\Notifications\VerifiedToOnboardedBuyerNotification;
use Homeful\Notifications\Notifications\OnboardedToPaidBuyerNotification;
use Homeful\Notifications\Notifications\OnboardedToPaymentFailedBuyerNotification;
use Homeful\Notifications\Notifications\PaymentFailedToPaidBuyerNotification;
use Homeful\Notifications\Notifications\PaidToAssignedBuyerNotification;
use Homeful\Notifications\Notifications\AssignedToIdledBuyerNotification;
use Homeful\Notifications\Notifications\AssignedToAcknowledgedBuyerNotification;
use Homeful\Notifications\Notifications\IdledToAcknowledgedBuyerNotification;
use Homeful\Notifications\Notifications\AcknowledgedToPrequalifiedBuyerNotification;
use Homeful\Notifications\Notifications\PrequalifiedToQualifiedBuyerNotification;
use Homeful\Notifications\Notifications\PrequalifiedToNotQualifiedBuyerNotification;
use Homeful\Notifications\Notifications\QualifiedToApprovedBuyerNotification;
use Homeful\Notifications\Notifications\QualifiedToDisapprovedBuyerNotification;
use Homeful\Notifications\Notifications\DisapprovedToOverriddenBuyerNotification;
use Homeful\Notifications\Notifications\ApprovedToValidatedBuyerNotification;
use Homeful\Notifications\Notifications\ApprovedToCancelledBuyerNotification;
use Homeful\Notifications\Notifications\ValidatedToCancelledBuyerNotification;
use Homeful\Notifications\Notifications\OverriddenToValidatedBuyerNotification;
use Homeful\Notifications\Notifications\OverriddenToCancelledBuyerNotification;
use Illuminate\Foundation\Testing\{RefreshDatabase, WithFaker};
use Homeful\References\Actions\CreateReferenceAction;
use Illuminate\Support\Facades\Notification;
use Homeful\Contacts\Models\Contact as Seller;
use Homeful\Contacts\Models\Contact;
use Homeful\References\Models\Reference;
use Homeful\Common\Classes\Input as InputFieldName;
use Homeful\KwYCCheck\Models\Lead;
use Homeful\Contracts\Models\Contract;
use Homeful\References\Data\ReferenceData;

uses(RefreshDatabase::class, WithFaker::class);

const LEAD_ID = 1999;
const CONTRACT_ID = 317;
const SELLER_ID = 537;

beforeEach(function () {
    $migration = include 'vendor/frittenkeez/laravel-vouchers/publishes/migrations/2018_06_12_000000_create_voucher_tables.php';
    $migration->up();
    $migration = include 'vendor/homeful/kwyc-check/database/migrations/create_leads_table.php.stub';
    $migration->up();
    $migration = include 'vendor/homeful/references/database/migrations/create_inputs_table.php.stub';
    $migration->up();
    $migration = include 'vendor/spatie/laravel-medialibrary/database/migrations/create_media_table.php.stub';
    $migration->up();
    $migration = include 'vendor/jn-devops/contacts/database/migrations/create_contacts_table.php.stub';
    $migration->up();
    $migration = include 'vendor/jn-devops/products/database/migrations/create_products_table.php.stub';
    $migration->up();
    $migration = include 'vendor/jn-devops/properties/database/migrations/create_properties_table.php.stub';
    $migration->up();
    $migration = include 'vendor/jn-devops/contracts/database/migrations/create_contracts_table.php.stub';
    $migration->up();
});

dataset('reference', function () {
    return [
        [fn() => app(CreateReferenceAction::class)->run([
            InputFieldName::PERCENT_DP => $this->faker->numberBetween(5, 10)/100,
            InputFieldName::PERCENT_MF => $this->faker->numberBetween(8, 10)/100,
            InputFieldName::DP_TERM => $this->faker->numberBetween(12, 24) * 1.00,
            InputFieldName::BP_TERM => $this->faker->numberBetween(20, 30) * 1.00,
            InputFieldName::BP_INTEREST_RATE => $this->faker->numberBetween(3, 7)/100,
            InputFieldName::SELLER_COMMISSION_CODE => $this->faker->word(),
        ], ['author' => 'Lester'])]
    ];
});

dataset('lead', function () {
    return [
        [fn () => Lead::factory()->forContact(['email' => 'aacsantos@joy-nostalg.com', 'mobile' => '09467438575'])->create(['id' => LEAD_ID])],
    ];
});

dataset('contract', function () {
    return [
        [fn () => Contract::factory()->create(['id' => CONTRACT_ID])],
    ];
});

dataset('seller', function () {
    return [
        [fn () => Seller::factory()->create(['id' => SELLER_ID])],
    ];
});

it('can test', function (Reference $reference, Lead $lead, Contract $contract, Seller $seller) {
//    Notification::fake();
    $reference->addEntities($lead);
    $reference->addEntities($contract);
    $reference_data = ReferenceData::fromModel($reference);
    $contact = $reference->getLead()->contact;
    if ($contact instanceof Contact) {
        $contact->notify(new VerifiedToOnboardedBuyerNotification($reference_data));
        $contact->notify(new OnboardedToPaidBuyerNotification($reference_data));
        $contact->notify(new OnboardedToPaymentFailedBuyerNotification($reference_data));
        $contact->notify(new PaymentFailedToPaidBuyerNotification($reference_data));
        $contact->notify(new PaidToAssignedBuyerNotification($reference_data));
        $contact->notify(new AssignedToIdledBuyerNotification($reference_data));
        $contact->notify(new AssignedToAcknowledgedBuyerNotification($reference_data));
        $contact->notify(new IdledToAcknowledgedBuyerNotification($reference_data));
        $contact->notify(new AcknowledgedToPrequalifiedBuyerNotification($reference_data));
        $contact->notify(new PrequalifiedToQualifiedBuyerNotification($reference_data));
        $contact->notify(new PrequalifiedToNotQualifiedBuyerNotification($reference_data));
        $contact->notify(new QualifiedToApprovedBuyerNotification($reference_data));
        $contact->notify(new QualifiedToDisapprovedBuyerNotification($reference_data));
        $contact->notify(new DisapprovedToOverriddenBuyerNotification($reference_data));
        $contact->notify(new ApprovedToValidatedBuyerNotification($reference_data));
        $contact->notify(new ApprovedToCancelledBuyerNotification($reference_data));
        $contact->notify(new ValidatedToCancelledBuyerNotification($reference_data));
        $contact->notify(new OverriddenToValidatedBuyerNotification($reference_data));
        $contact->notify(new OverriddenToCancelledBuyerNotification($reference_data));



//        Notification::assertSentTo($contact, VerifiedToOnboardedBuyerNotification::class, function (VerifiedToOnboardedBuyerNotification $notification) use ($reference_data) {
//            return $notification->getReferenceData()->code == $reference_data->code;
//        });

    }
})->with('reference', 'lead', 'contract', 'seller');
