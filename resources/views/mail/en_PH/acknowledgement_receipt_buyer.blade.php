<x-mail::message>
    <b>Hoy {{$reference_data->lead->name}},</b><br>

    Please find attached copy of your Acknowledgment Receipt for:
    Reference Code Number: {{$reference_data->code}}

    We will notify you for further details regarding your Home Loan Consultation application.

    Customer Support

    For questions about this payment process, please click the link below:
    https://www.homeful.ph/contact-us?refence_code={{$reference_data->code}}

    This is an automatically generated email, please do not reply.
    Salamat,
    Homeful
    {{--    {{ config('app.name') }}--}}
</x-mail::message>




