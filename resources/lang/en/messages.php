<?php

return [
    'welcome' => 'Welcome to our application!',
    'verified_to_onboarded_buyer' => [
        'sms' => "Dear :name,\nThank you for choosing InstaPay as your payment option.

To proceed with your Home Loan Consultation, please pay the consultation fee now.

Check your email for payment details."
    ],
    'onboarded_to_paid_buyer' => [
        'sms' => "Dear :name,\nPayment successful!

Kindly check your email for information regarding your Home Loan Consultation Transaction Summary."
    ],
    'onboarded_to_payment_failed_buyer' => [
        'sms' => "Dear :name,\nPayment pending,
        You will receive a confirmation email once the payment for the consultation has been processed.

        Check your email for payment details."
    ],
    'payment_failed_to_paid_buyer' => [
        'sms' => "Dear :name,\nPayment successful!"
    ],
    'paid_to_assigned_buyer' => [
        'sms' => "Dear :name,\nHere's your assigned home loan consultation details.!"
    ],
    'assigned_to_idled_buyer' => [
        'sms' => "Dear :name,\nIdled home loan consultation.!"
    ],
    'assigned_to_acknowledged_buyer' => [
        'sms' => "Dear :name,\nAcknowledged home loan consultation.!"
    ],
    'acknowledged_to_prequalified_buyer' => [
        'sms' => "Dear :name,\nPrequalified home loan consultation.!"
    ],
    'prequalified_to_qualified_buyer' => [
        'sms' => "Dear :name,\nWe are pleased to inform you that your Home Loan Consultation under Consultation Reference Code: \"Reference Code: :reference_code\" has been successfully pre-approved.

Kindly ensure that all documents will be uploaded before June 27, 2024 to secure your booking. Otherwise your consultation will be assigned to another buyer.

Please check your email for more details."
    ],
    'prequalified_to_not_qualified_buyer' => [
        'sms' => "Dear :name,\nNot qualified home loan consultation.!"
    ],
    'qualified_to_approved_buyer' => [
        'sms' => "Dear :name,\nWe have reviewed all the documents you have submitted, and everything appears to be in order. This step represents the final stage in the process of acquiring your home. Please proceed to sign all the documents that have been prepared for you.

Kindly ensure that all documents will be uploaded before June 27, 2024 to secure your booking. Otherwise your consultation will be cancelled.

Please check your email for more details."
    ],
    'qualified_to_disapproved_buyer' => [
        'sms' => "Dear :name,\nDisapproved home loan consultation.!"
    ],
    'disapproved_to_overridden_buyer' => [
        'sms' => "Dear :name,\nOverridden home loan consultation.!"
    ],
    'approved_to_validated_buyer' => [
        'sms' => "Dear :name,\nHey, congrats on signing all the documents! Our team has checked everything, and you are now approved to own your home."
    ],
    'approved_to_cancelled_buyer' => [
        'sms' => "Dear :name,\nCancelled home loan consultation.!"
    ],
    'validated_to_cancelled_buyer' => [
        'sms' => "Dear :name,\nCancelled home loan consultation.!"
    ],
    'overridden_to_validated_buyer' => [
        'sms' => "Dear :name,\nValidated home loan consultation.!"
    ],
    'overridden_to_cancelled_buyer' => [
        'sms' => "Dear :name,\nCancelled home loan consultation.!"
    ],






    'add_co_borrower_buyer' => [
        'sms' => "Dear :name,\nWe have just sent an email to your Co-borrower. Please remind your Co-borrower to complete the form so we can continue the consultation."
    ],
    'co_borrower' => [
        'sms' => "Dear :name,\nJuan asked you to fill out the Co-borrower Form. Please click the link below to complete it so we can proceed with Juan's consultation."
    ],
    'reupload_document_buyer' => [
        'sms' => "Dear :name,\nWe have checked out the document you uploaded and noticed some errors. Just head over to your account and upload the documents on the Re-upload page.

    Kindly ensure that all documents will be uploaded before June 27, 2024 to secure your booking. Otherwise your consultation will be assigned to another buyer.

    Please check your email for more details."
    ],

];
