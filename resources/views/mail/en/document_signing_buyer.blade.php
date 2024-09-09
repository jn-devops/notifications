<x-mail::message>
    <b>Dear {{$reference_data->lead->name}},</b><br>

    We've gone through all the documents you uploaded and everything checks out. This is the final step to owning your home, so just go ahead and sign all the docs we've generated for you.

    How to Sign Documents:

    1. Go to https://www.homeful.ph/login
    2. Log in to your account using the credentials below:
        Reference Code: JN-0921-001
        Password: [Birthdate]
    3. Click the “Go to my documents” button.
    4. Sign all documents listed in the For Signing page.
    5. After uploading all the documents, review and sign the document generated under the for signing tab using ID Mark by clicking the sign button.

    Should you have any questions or require further assistance, please do not hesitate to contact us.

    Customer Support

    For questions about the property and services you may submit your concern/s tru: https://www.homeful.ph/contact-us?reference_code={{$reference_data->code}}

    This is an automatically generated email, please do not reply.
    Thanks,
    Homeful
{{--    {{ config('app.name') }}--}}
</x-mail::message>




