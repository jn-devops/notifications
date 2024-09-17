<x-mail::message>
    <b>Dear {{$reference_data->lead->name}},</b><br>

    Cancelled

    Customer Support

    For questions about the property and services you may submit your concern/s tru: https://www.homeful.ph/contact-us?reference_code={{$reference_data->code}}

    This is an automatically generated email, please do not reply.
    Thanks,
    Homeful
{{--    {{ config('app.name') }}--}}
</x-mail::message>




