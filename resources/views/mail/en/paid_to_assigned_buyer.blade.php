<x-mail::message>
    <b>Dear {{$reference_data->lead->name}},</b><br>

    Here's your assigned home loan consultation details.

    Customer Support

    For questions about your Home Loan Consultation Application you may submit your concern/s through:
    https://www.homeful.ph/contact-us?reference_code={{$reference_data->code}}

    This is an automatically generated email, please do not reply.
    Thanks,
    Homeful
{{--    {{ config('app.name') }}--}}
</x-mail::message>




