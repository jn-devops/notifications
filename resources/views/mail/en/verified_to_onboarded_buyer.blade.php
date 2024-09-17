<x-mail::message>
    <b>Dear {{$reference_data->lead->name}},</b><br>

    Thank you for choosing InstaPay as your payment option for your Home Loan Consultation Fee.

    To proceed please follow the instruction below:

    1. Download/Screenshot the attached QRCode.
    2. Open your Mobile Banking App.
    3. Scan/Upload the InstaPay QRCode to proceed with the Payment.

    After payment is received, an email confirmation containing the payment details will be sent to you.

    Customer Support

    For questions about this payment process, please click the link below:
    https://www.homeful.ph/contact-us?reference_code={{$reference_data->code}}

    This is an automatically generated email, please do not reply.
    Thanks,
    Homeful

{{--    insert qr code/attachment--}}
{{--    {{ config('app.name') }}--}}
</x-mail::message>




