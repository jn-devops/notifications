<x-mail::message>
    <b>Dear {{$reference_data->lead->name}},</b><br>

    We have reviewed all the documents you have submitted, and everything appears to be in order. This step represents the final stage in the process of acquiring your home. Please proceed to sign all the documents that have been prepared for you.

    How to Sign Documents:
    1. Go to https://www.homeful.ph/login
    2. Log in to your account using the credentials below:
        Registered Email Address: sample@gmail.com
        Password: JN-0921-001
    3. Click the “Go to my documents” button.
    4. Sign all documents listed in the For Signing page.
    5. After uploading all the documents, review and sign the document generated under the For Signing tab using ID Mark by clicking the sign button.

    Should you have any questions or require further assistance, please do not hesitate to contact us.

    Customer Support

    For questions about the property and services you may submit your concern/s tru: https://www.homeful.ph/contact-us?reference_code={{$reference_data->code}}

    This is an automatically generated email, please do not reply.
    Thanks,
    Homeful
{{--    {{ config('app.name') }}--}}
</x-mail::message>




