<?php

return [
    'welcome' => 'Welcome to our application!',
    'acknowledgement_receipt_buyer' => [
        'sms' => "Dear :name,\nThe Acknowledgement Receipt for \"Reference Code: :reference_code\" has already been sent to you via email for your record."
    ],
    'add_co_borrower_buyer' => [
        'sms' => "Dear :name,\nWe have just sent an email to your Co-borrower. Please remind your Co-borrower to complete the form so we can continue the consultation."
    ],
    'approved_buyer'=> [
        'sms' => "Dear :name,\nHey, congrats on signing all the documents! Our team has checked everything, and you are now approved to own your home."
    ],
    'co_borrower' => [
        'sms' => "Dear :name,\nJuan asked you to fill out the Co-borrower Form. Please click the link below to complete it so we can proceed with Juan's consultation."
    ],
    'document_signing_buyer' => [
        'sms' => "Dear :name,\nWe have gone through all the documents you uploaded and everything checks out. This is the final step to owning your home, so just go ahead and sign all the docs we have generated for you.

Kindly ensure that all documents will be uploaded before June 27, 2024 to secure your booking. Otherwise your consultation will be assigned to another buyer.

Please check your email for more details."
    ],
    'post_payment_buyer' => [
        'sms' => "Dear :name,\nPayment successful!

Kindly check your email for information regarding your Home Loan Consultation Transaction Summary."
    ],
    'prepayment_buyer' => [
        'sms' => "Dear :name,\nThank you for choosing InstaPay as your payment option.

To proceed with your Home Loan Consultation, please pay the consultation fee now.

Check your email for payment details."
    ],
    'qualified_document_buyer' => [
      'sms' => "Dear :name,\nWe are pleased to inform you that your application under Consultation Reference Code: \"Reference Code: :reference_code\" has been successfully pre-approved.

Kindly ensure that all documents will be uploaded before June 27, 2024 to secure your booking. Otherwise your consultation will be assigned to another buyer.

Please check your email for more details."
    ],
    'reupload_document_buyer' => [
        'sms' => "Dear :name,\nWe have checked out the document you uploaded and noticed some errors. Just head over to your account and upload the documents on the Re-upload page.

    Kindly ensure that all documents will be uploaded before June 27, 2024 to secure your booking. Otherwise your consultation will be assigned to another buyer.

    Please check your email for more details."
    ],

];
