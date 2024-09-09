<?php

use Homeful\Notifications\Notifications\AddCoBorrowerBuyerNotification;
use Homeful\Notifications\Notifications\ApprovedBuyerNotification;
use Homeful\Notifications\Notifications\CoBorrowerNotification;
use Homeful\Notifications\Notifications\DocumentSigningBuyerNotification;
use Homeful\Notifications\Notifications\PostPaymentBuyerNotification;
use Homeful\Notifications\Notifications\PrePaymentBuyerNotification;
use Homeful\Notifications\Notifications\QualifiedDocumentBuyerNotification;
use Homeful\Notifications\Notifications\ReuploadDocumentBuyerNotification;
use Illuminate\Foundation\Testing\{RefreshDatabase, WithFaker};
use Homeful\Notifications\Notifications\AcknowledgementReceiptBuyerNotification;
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
    Notification::fake();
    $reference->addEntities($lead);
    $reference->addEntities($contract);
    $reference_data = ReferenceData::fromModel($reference);
    $contact = $reference->getLead()->contact;
    if ($contact instanceof Contact) {
        $contact->notify(new AcknowledgementReceiptBuyerNotification($reference_data));
        $contact->notify(new AddCoBorrowerBuyerNotification($reference_data));
        $contact->notify(new ApprovedBuyerNotification($reference_data));
        $contact->notify(new CoBorrowerNotification($reference_data));
        $contact->notify(new DocumentSigningBuyerNotification($reference_data));
        $contact->notify(new PostPaymentBuyerNotification($reference_data));
        $contact->notify(new PrePaymentBuyerNotification($reference_data));
        $contact->notify(new QualifiedDocumentBuyerNotification($reference_data));
        $contact->notify(new ReuploadDocumentBuyerNotification($reference_data));

        Notification::assertSentTo($contact, AcknowledgementReceiptBuyerNotification::class, function (AcknowledgementReceiptBuyerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
        Notification::assertSentTo($contact, AddCoBorrowerBuyerNotification::class, function (AddCoBorrowerBuyerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
        Notification::assertSentTo($contact, ApprovedBuyerNotification::class, function (ApprovedBuyerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
        Notification::assertSentTo($contact, CoBorrowerNotification::class, function (CoBorrowerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
        Notification::assertSentTo($contact, DocumentSigningBuyerNotification::class, function (DocumentSigningBuyerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
        Notification::assertSentTo($contact, PostPaymentBuyerNotification::class, function (PostPaymentBuyerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
        Notification::assertSentTo($contact, PrePaymentBuyerNotification::class, function (PrePaymentBuyerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
        Notification::assertSentTo($contact, QualifiedDocumentBuyerNotification::class, function (QualifiedDocumentBuyerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
        Notification::assertSentTo($contact, ReuploadDocumentBuyerNotification::class, function (ReuploadDocumentBuyerNotification $notification) use ($reference_data) {
            return $notification->getReferenceData()->code == $reference_data->code;
        });
    }
})->with('reference', 'lead', 'contract', 'seller');
