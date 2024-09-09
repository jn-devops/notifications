<x-mail::message>
    <b>Dear {{$reference_data->lead->name}},</b><br>

    We are pleased to inform you that your Consultation Reference Code: JN-0921-001  has been successfully pre-approved.

    Kindly ensure that all documents will be uploaded before June 27, 2024 to confirm your final eligibility for a housing loan.

    How to Upload Documents:

    1. Go to https://www.homeful.ph/login
    2. Log in to your account using the credentials below:
        Reference Code:{{$reference_data->code}}
        Password: [Birthdate]
    3. Click the “Go to my documents” button.
    4. Upload all documents listed in the page.
    5. After uploading all the documents, review and sign the document generated under the for signing tab using ID Mark by clicking the sign button.

    Should you have any questions or require further assistance, please do not hesitate to contact us.

    Customer Support

    For questions about the property and services you may submit your concern/s tru: https://www.homeful.ph/contact-us?reference_code={{$reference_data->code}}

    This is an automatically generated email, please do not reply.
    Thanks,
    Homeful
{{--    {{ config('app.name') }}--}}
</x-mail::message>




