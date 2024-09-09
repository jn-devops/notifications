<x-mail::message>
    <b>Dear {{$reference_data->lead->name}},</b><br>

    Payment successful!

    This email serves as confirmation that your payment for the Home Loan Consultation has been received.

    An Acknowledgement Receipt will be emailed in the coming days.

    Transaction Summary

    Reference Code:         {{$reference_data->code}}
    Name:                   Juan Pedro Dela Cruz
    Contact number:         09478800962
    Project:                Pasinaya
    Total Contract Price:   ₱850,000
    Consulting Fee:         ₱10,000 (PAID)
    Mode of payment:        Credit Card

    Customer Support

    For questions about your Home Loan Consultation Application you may submit your concern/s through:
    https://www.homeful.ph/contact-us?reference_code={{$reference_data->code}}

    This is an automatically generated email, please do not reply.
    Thanks,
    Homeful
{{--    {{ config('app.name') }}--}}
</x-mail::message>




