<?php

return [
    'invalid_vat_format' => 'The given vat id has a wrong format',
    'security-warning' => 'Suspicious activity found!!!',
    'nothing-to-delete' => 'Nothing to delete',

    'layouts' => [
        'my-account' => 'My Account',
        'profile' => 'Profile',
        'address' => 'Address',
        'reviews' => 'Reviews',
        'wishlist' => 'Wishlist',
        'orders' => 'Orders',
        'downloadable-products' => 'Downloadable Products'
    ],

    'common' => [
        'error' => 'Something went wrong, please try again later.',
        'no-result-found' => 'We could not find any records.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Home',
        'featured-products' => 'Featured Products',
        'new-products' => 'New Products',
        'verify-email' => 'Verify your email account',
        'resend-verify-email' => 'Resend Verification Email'
    ],

    'header' => [
        'title' => 'Account',
        'dropdown-text' => 'Manage Cart, Orders & Wishlist',
        'sign-in' => 'Sign In',
        'sign-up' => 'Գրանցվել',
        'account' => 'Account',
        'cart' => 'Cart',
        'profile' => 'Profile',
        'wishlist' => 'Wishlist',
        'cart' => 'Cart',
        'logout' => 'Դուրս գալ',
        'search-text' => 'Փնտրել'
    ],

    'minicart' => [
        'view-cart' => 'View Shopping Cart',
        'checkout' => 'Checkout',
        'cart' => 'Cart',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Subscribe Newsletter',
        'subscribe' => 'Subscribe',
        'locale' => 'Locale',
        'currency' => 'Currency',
    ],

    'subscription' => [
        'unsubscribe' => 'Unsubcribe',
        'subscribe' => 'Subscribe',
        'subscribed' => 'You are now subscribed to subscription emails.',
        'not-subscribed' => 'You can not be subscribed to subscription emails, please try again later.',
        'already' => 'You are already subscribed to our subscription list.',
        'unsubscribed' => 'You are unsubscribed from subscription mails.',
        'already-unsub' => 'You are already unsubscribed.',
        'not-subscribed' => 'Error! Mail can not be sent currently, please try again later.'
    ],

    'search' => [
        'no-results' => 'No Results Found',
        'page-title' => config('app.name') . ' - Search',
        'found-results' => 'Search Results Found',
        'found-result' => 'Search Result Found'
    ],

    'reviews' => [
        'title' => 'Title',
        'add-review-page-title' => 'Add Review',
        'write-review' => 'Write a review',
        'review-title' => 'Give your review a title',
        'product-review-page-title' => 'Product Review',
        'rating-reviews' => 'Rating & Reviews',
        'submit' => 'SUBMIT',
        'delete-all' => 'All Reviews has deleted Succesfully',
        'ratingreviews' => ':rating Ratings & :review Reviews',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Name',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Already have an account',
            'title' => 'Sign In'
        ],

        'signup-form' => [
            'page-title' => 'Create New Customer Account',
            'title' => 'Sign Up',
            'firstname' => 'Անուն',
            'lastname' => 'Ազգանուն',
            'email' => 'Էլ․ հասցե',
            'password' => 'Գաղտնաբառ',
            'confirm_pass' => 'Գաղտնաբառի հաստատում',
            'button_title' => 'Գրանցվել',
            'agree' => 'Agree',
            'terms' => 'Terms',
            'conditions' => 'Conditions',
            'using' => 'by using this website',
            'agreement' => 'Agreement',
            'success' => 'Հաշիվը հաջողությամբ ստեղծվել է',
            'success-verify' => 'Account created successfully, an e-mail has been sent for verification.',
            'success-verify-email-unsent' => 'Account created successfully, but verification e-mail unsent.',
            'failed' => 'Error! Can not create your account, pleae try again later.',
            'already-verified' => 'Your account is already verified Or please try sending a new verification email again.',
            'verification-not-sent' => 'Error! Problem in sending verification email, please try again later.',
            'verification-sent' => 'Verification email sent',
            'verified' => 'Your account has been verified, try to login now.',
            'verify-failed' => 'We cannot verify your mail account.',
            'dont-have-account' => 'You do not have account with us.',
            'success' => 'Account Created Successfully',
            'success-verify' => 'Account Created Successfully, an e-mail has been sent for verification.',
            'success-verify-email-unsent' => 'Account created successfully, but verification e-mail unsent',
            'failed' => 'Error! Cannot Create Your Account, Try Again Later',
            'already-verified' => 'Your Account is already verified Or Please Try Sending A New Verification Email Again',
            'verification-not-sent' => 'Error! Problem In Sending Verification Email, Try Again Later',
            'verification-sent' => 'Verification Email Sent',
            'verified' => 'Your Account Has Been Verified, Try To Login Now',
            'verify-failed' => 'We Cannot Verify Your Mail Account',
            'dont-have-account' => 'You Do Not Have Account With Us',
            'customer-registration' => 'Customer Registered Successfully',
            'address' => 'Հասցե',
            'home' => 'Բնակարան',
            'city' => 'Քաղաք',
            'index' => 'Ինդեքս'
        ],

        'login-text' => [
            'no_account' => 'Դեռ գրանցված չեք? ',
            'title' => 'Գրանցվել',
        ],

        'login-form' => [
            'not_account_yet' => 'Դեռ հաշիվ չունե՞ք',
            'page-title' => 'Customer Login',
            'title' => 'Մուտք',
            'email' => 'Էլ․ հասցե',
            'password' => 'Գաղտնաբառ',
            'forgot_pass' => 'Մոռացել ե՞ք գաղտնաբառը',
            'button_title' => 'Մուտք',
            'remember' => 'Հիշել',
            'footer' => '© Copyright :year Webkul Software, All rights reserved',
            'invalid-creds' => 'Խնդրում ենք ստուգեք ձեր տվյալները և կրկին փորձեք:',
            'verify-first' => 'Verify your email account first.',
            'not-activated' => 'Your activation seeks admin approval',
            'resend-verification' => 'Resend verification mail again'
        ],

        'forgot-password' => [
            'title' => 'Վերականգնել գախտնաբառը',
            'email' => 'Էլ․ հասցե',
            'submit' => 'Ուղարկեք Վերագործարկված գաղտնաբառը էլ. հասցեին',
            'page_title' => 'Forgot your password ?'
        ],

        'reset-password' => [
            'title' => 'Reset Password',
            'email' => 'Registered Email',
            'password' => 'Password',
            'confirm-password' => 'Confirm Password',
            'back-link-title' => 'Վերադառնալ մուտք',
            'submit-btn-title' => 'Reset Password'
        ],

        'account' => [
            'dashboard' => 'Edit Profile',
            'menu' => 'Menu',

            'profile' => [
                'index' => [
                    'page-title' => 'Profile',
                    'title' => 'Profile',
                    'edit' => 'Edit',
                ],

                'edit-success' => 'Profile updated successfully.',
                'edit-fail' => 'Error! Profile cannot be updated, please try again later.',
                'unmatch' => 'The old password does not match.',

                'fname' => 'Անուն',
                'lname' => 'Ազգանուն',
                'gender' => 'Gender',
                'other' => 'Other',
                'male' => 'Male',
                'female' => 'Female',
                'dob' => 'Date Of Birth',
                'phone' => 'Հեռախոս',
                'email' => 'էլ․ հասցե',
                'opassword' => 'Հին գախտնաբառ',
                'password' => 'Գախտնաբառ',
                'cpassword' => 'Հաստատել գախտնաբառը',
                'submit' => 'Հաստատել փոփոխությունները',

                'edit-profile' => [
                    'title' => 'Edit Profile',
                    'page-title' => 'Edit Profile Form'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Address',
                    'title' => 'Address',
                    'add' => 'Add Address',
                    'edit' => 'Edit',
                    'empty' => 'You do not have any saved addresses here, please try to create it by clicking the link below',
                    'create' => 'Create Address',
                    'delete' => 'Delete',
                    'make-default' => 'Make Default',
                    'default' => 'Սկզբնական',
                    'contact' => 'Contact',
                    'confirm-delete' =>  'Do you really want to delete this address?',
                    'default-delete' => 'Default address cannot be changed.',
                    'enter-password' => 'Enter Your Password.',
                ],

                'create' => [
                    'page-title' => 'Add Address Form',
                    'company_name' => 'Company name',
                    'first_name' => 'First name',
                    'last_name' => 'Last name',
                    'vat_id' => 'Vat id',
                    'vat_help_note' => '[Note: Use Country Code with VAT Id. Eg. INV01234567891]',
                    'title' => 'Add Address',
                    'street-address' => 'Street Address',
                    'country' => 'Country',
                    'state' => 'State',
                    'select-state' => 'Select a region, state or province',
                    'city' => 'City',
                    'postcode' => 'Postal Code',
                    'phone' => 'Հեռախոս',
                    'submit' => 'Save Address',
                    'success' => 'Address have been successfully added.',
                    'error' => 'Address cannot be added.'
                ],

                'edit' => [
                    'page-title' => 'Edit Address',
                    'company_name' => 'Company name',
                    'first_name' => 'First name',
                    'last_name' => 'Last name',
                    'vat_id' => 'Vat id',
                    'title' => 'Edit Address',
                    'street-address' => 'Street Address',
                    'submit' => 'Save Address',
                    'success' => 'Address updated successfully.',
                ],
                'delete' => [
                    'success' => 'Address successfully deleted',
                    'failure' => 'Address cannot be deleted',
                    'wrong-password' => 'Wrong Password !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Պատվերներ',
                    'title' => 'Պատվերներ',
                    'order_id' => 'Պատվերի համար',
                    'date' => 'Ամսաթիվ',
                    'status' => 'Կարգավիճակը',
                    'total' => 'Հնդհանուր',
                    'order_number' => 'Պատվերի համար'
                ],

                'view' => [
                    'page-tile' => 'Պատվեր #:order_id',
                    'info' => 'Տեղեկություն',
                    'placed-on' => 'Տեղադրվել է',
                    'products-ordered' => 'Պատվիրված ապրանքներ',
                    'invoices' => 'Ապրանքագիր',
                    'shipments' => 'Առաքում',
                    'SKU' => 'SKU',
                    'product-name' => 'Անուն',
                    'qty' => 'Քանակ',
                    'item-status' => 'կարգավիճակը',
                    'item-ordered' => 'Պատվիրվել է (:qty_ordered)',
                    'item-invoice' => 'Ապրանքագրվել է (:qty_invoiced)',
                    'item-shipped' => 'Առաքվել է (:qty_shipped)',
                    'item-canceled' => 'Չեղարկվել է (:qty_canceled)',
                    'item-refunded' => 'Վերադարձվել է (:qty_refunded)',
                    'price' => 'Գին',
                    'total' => 'Ընդհանուր',
                    'subtotal' => 'Ընդհանուր գին',
                    'shipping-handling' => 'Առաքում',
                    'tax' => 'Tax',
                    'discount' => 'Զեղճ',
                    'tax-percent' => 'Tax Percent',
                    'tax-amount' => 'Tax Amount',
                    'discount-amount' => 'Discount Amount',
                    'grand-total' => 'Ընդհանուր գին',
                    'total-paid' => 'Total Paid',
                    'total-refunded' => 'Total Refunded',
                    'total-due' => 'Total Due',
                    'shipping-address' => 'Shipping Address',
                    'billing-address' => 'Billing Address',
                    'shipping-method' => 'Առաքման եղանակ',
                    'payment-method' => 'Վճարման եղանակ',
                    'individual-invoice' => 'Invoice #:invoice_id',
                    'individual-shipment' => 'Shipment #:shipment_id',
                    'print' => 'Print',
                    'invoice-id' => 'Invoice Id',
                    'order-id' => 'Order Id',
                    'order-date' => 'Order Date',
                    'bill-to' => 'Bill to',
                    'ship-to' => 'Ship to',
                    'contact' => 'Contact',
                    'refunds' => 'Refunds',
                    'individual-refund' => 'Refund #:refund_id',
                    'adjustment-refund' => 'Adjustment Refund',
                    'adjustment-fee' => 'Adjustment Fee',
                    'flatrate-shipping' => 'Առաքիչի առաքւոմ'
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Delete All',
                'moveall' => 'Move All Products To Cart',
                'move-to-cart' => 'Move To Cart',
                'error' => 'Cannot add product to wishlist due to unknown problems, please checkback later',
                'add' => 'Item successfully added to wishlist',
                'remove' => 'Item successfully removed from wishlist',
                'moved' => 'Item successfully moved To cart',
                'option-missing' => 'Product options are missing, so item can not be moved to the wishlist.',
                'move-error' => 'Item cannot be moved to wishlist, Please try again later',
                'success' => 'Item successfully added to wishlist',
                'failure' => 'Item cannot be added to wishlist, Please try again later',
                'already' => 'Item already present in your wishlist',
                'removed' => 'Item successfully removed from wishlist',
                'remove-fail' => 'Item cannot Be removed from wishlist, Please try again later',
                'empty' => 'You do not have any items in your wishlist',
                'remove-all-success' => 'All the items from your wishlist have been removed',
            ],

            'downloadable_products' => [
                'title' => 'Downloadable Products',
                'order-id' => 'Order Id',
                'date' => 'Date',
                'name' => 'Title',
                'status' => 'Status',
                'pending' => 'Pending',
                'available' => 'Available',
                'expired' => 'Expired',
                'remaining-downloads' => 'Remaining Downloads',
                'unlimited' => 'Unlimited',
                'download-error' => 'Download link has been expired.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Reviews',
                    'page-title' => 'Reviews'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Shop By',
        'price-label' => 'As low as',
        'remove-filter-link-title' => 'Clear All',
        'sort-by' => 'Sort By',
        'from-a-z' => 'From A-Z',
        'from-z-a' => 'From Z-A',
        'newest-first' => 'Newest First',
        'oldest-first' => 'Oldest First',
        'cheapest-first' => 'Cheapest First',
        'expensive-first' => 'Expensive First',
        'show' => 'Show',
        'pager-info' => 'Showing :showing of :total Items',
        'description' => 'Description',
        'specification' => 'Specification',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'By :name',
        'up-sell-title' => 'We found other products you might like!',
        'related-product-title' => 'Related Products',
        'cross-sell-title' => 'More choices',
        'reviews-title' => 'Ratings & Reviews',
        'write-review-btn' => 'Write Review',
        'choose-option' => 'Choose an option',
        'sale' => 'Sale',
        'new' => 'New',
        'empty' => 'No products available in this category',
        'add-to-cart' => 'Add To Cart',
        'buy-now' => 'Buy Now',
        'whoops' => 'Whoops!',
        'quantity' => 'Quantity',
        'in-stock' => 'In Stock',
        'out-of-stock' => 'Out Of Stock',
        'view-all' => 'View All',
        'select-above-options' => 'Please select above options first.',
        'less-quantity' => 'Quantity can not be less than one.',
        'samples' => 'Samples',
        'links' => 'Links',
        'sample' => 'Sample',
        'name' => 'Name',
        'qty' => 'Qty',
        'starting-at' => 'Starting at',
        'customize-options' => 'Customize Options',
        'choose-selection' => 'Choose a selection',
        'your-customization' => 'Your Customization',
        'total-amount' => 'Total Amount',
        'none' => 'None'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Please select options before buying this product.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Some required fields missing for this product.',
                'missing_options' => 'Options are missing for this product.',
                'missing_links' => 'Downloadable links are missing for this product.',
                'qty_missing' => 'Atleast one product should have more than 1 quantity.',
                'qty_impossible' => 'Cannot add more than one of these products to cart.'
            ],
            'create-error' => 'Encountered some issue while making cart instance.',
            'title' => 'Զամբյուղ',
            'empty' => 'Ձեր Զամբյուղը դատարկ է',
            'update-cart' => 'Թարմացնել զամբյուղը',
            'continue-shopping' => 'Շարունակել գնումներ կատարել',
            'proceed-to-checkout' => 'Շարունակեք վճարումը',
            'remove' => 'Հեռացնել',
            'remove-link' => 'Հեռացնել',
            'move-to-wishlist' => 'Տեղափոխել նախնտրածներ',
            'move-to-wishlist-success' => 'Item moved to wishlist successfully.',
            'move-to-wishlist-error' => 'Cannot move item to wishlist, please try again later.',
            'add-config-warning' => 'Please select option before adding to cart.',
            'quantity' => [
                'quantity' => 'Քանակ',
                'success' => 'Զամբյուղի ապրանք(ներ)ը թարմացվեցին',
                'illegal' => 'Քանակը չի կարող մեկից փոքր լինել:',
                'inventory_warning' => 'Հայցվող քանակն անհասանելի է, խնդրում ենք փորձել ավելի ուշ.',
                'error' => 'Հնարավոր չէ թարմացնել ապրանք(ներ)ը տվյալ պահին, փորձեք ավելի ուշ:'
            ],

            'item' => [
                'error_remove' => 'Զամբյուղում չկան ապրանքներ Ջնջելու համար',
                'success' => 'Ապրանքը հաջողությամբ ավելացվեց զամբյուղում։',
                'success-remove' => 'Ապրանքը հեռացվեց զամբյուղից։',
                'error-add' => 'Ապրանքը չհաջողվեց ավելացնել զամբյուղում։',
            ],
            'quantity-error' => 'Չթույլատրված քանակ',
            'cart-subtotal' => 'Զամբյուղի քանակ',
            'cart-remove-action' => 'Դուք իսկապես ուզում եք դա անել:',
            'partial-cart-update' => 'Միայն որոշ ապրանքներ թարմացվեցին',
            'link-missing' => ''
        ],

        'onepage' => [
            'house' => 'Հասցե բնակարան',
            'title' => 'Վճարում',
            'information' => 'Տեղեկատվություն',
            'shipping' => 'առաքում',
            'payment' => 'Վճարում',
            'complete' => 'Complete',
            'billing-address' => 'Billing Address',
            'sign-in' => 'Sign In',
            'company-name' => 'Company Name',
            'first-name' => 'Անուն',
            'last-name' => 'Ազգանուն',
            'email' => 'Էլ․ հասցե',
            'address1' => 'Փողոց',
            'city' => 'Քաղաք',
            'state' => 'State',
            'select-state' => 'Select a region, state or province',
            'postcode' => 'Ինդեքս',
            'phone' => 'Հեռախոս',
            'country' => 'Country',
            'order-summary' => 'Ընդհանուր',
            'shipping-address' => 'Առաքման հասցե',
            'use_for_shipping' => 'Ship to this address',
            'continue' => 'Continue',
            'shipping-method' => 'Առաքում',
            'payment-methods' => 'Վճարում',
            'payment-method' => 'Վճարում',
            'summary' => 'Ընդհանուր',
            'price' => 'Price',
            'quantity' => 'Քանակ',
            'contact' => 'Contact',
            'place-order' => 'Պատվիրել',
            'new-address' => 'Add New Address',
            'save_as_address' => 'Save this address',
            'apply-coupon' => 'Apply Coupon',
            'amt-payable' => 'Amount Payable',
            'got' => 'Got',
            'free' => 'Free',
            'coupon-used' => 'Coupon Used',
            'applied' => 'Applied',
            'back' => 'Back',
            'cash-desc' => 'Cash On Delivery',
            'money-desc' => 'Money Transfer',
            'paypal-desc' => 'Paypal Standard',
            'free-desc' => 'This is a free shipping',
            'flat-desc' => 'This is a flat rate',
            'password' => 'Password',
            'login-exist-message' => 'You already have an account with us, Sign in or continue as guest.',
            'enter-coupon-code' => 'Enter Coupon Code',
            'payment-term' => 'Սեղմելով այս կոճակը ՝ Դուք հաստատում եք, Ձեր չափահասությունը և համաձայն եք անձնական տվյալների մշակմանը `համաձայն Պայմանների, ինչպես նաև Վաճառքի պայմանների:'
        ],

        'total' => [
            'order-summary' => 'Order Summary',
            'sub-total' => 'Items',
            'grand-total' => 'Ընդհանուր գին',
            'delivery-charges' => 'Delivery Charges',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'price' => 'price',
            'disc-amount' => 'Amount discounted',
            'new-grand-total' => 'New Grand Total',
            'coupon' => 'Coupon',
            'coupon-applied' => 'Applied Coupon',
            'remove-coupon' => 'Remove Coupon',
            'cannot-apply-coupon' => 'Cannot Apply Coupon',
            'invalid-coupon' => 'Coupon code is invalid.',
            'success-coupon' => 'Coupon code applied successfully.',
            'coupon-apply-issue' => 'Coupon code can\'t be applied.'
        ],

        'success' => [
            'title' => 'Պատվերը հաջողությամբ տեղադրված է',
            'thanks' => 'Շնորհակալություն պատվերի համար!',
            'order-id-info' => 'Ձեր պատվերի ID - ն է #:order_id',
            'info' => 'Մենք կուղարկենք ձեզ էլ. Փոստին, ձեր պատվերի մանրամասներին և տեղեկություններին հետևելու համար։'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Նոր պատվերի հաստատում',
            'heading' => 'Պատվերի հաստատում!',
            'dear' => 'Սիրելի :customer_name',
            'dear-admin' => 'Սիրելի :admin_name',
            'greeting' => 'Շնորհակալություն պատվերի համար :order_id տեղադրվել է :created_at',
            'greeting-admin' => 'Պատվերի համար :order_id տեղադրվել է :created_at',
            'summary' => 'Պատվերի ամփոփում',
            'shipping-address' => 'Առաքման հասցե',
            'billing-address' => 'Վճարման հասցե',
            'contact' => 'Կապ',
            'shipping' => 'Առաքման եղանակ',
            'payment' => 'Վճարման եղանակ',
            'price' => 'Գին',
            'quantity' => 'Քանակ',
            'subtotal' => 'Արժեք',
            'shipping-handling' => 'Առաքում',
            'tax' => 'Tax',
            'discount' => 'Զեղճ',
            'grand-total' => 'Ընդհանուր գումար',
            'final-summary' => 'Շնորհակալություն մեր խանութի նկատմամբ հետաքրքրությունը ցուցաբերելու համար',
            'help' => 'Եթե Ձեզ անհրաժեշտ է որևէ տեսակի օգնություն, դիմեք մեզ :support_email',
            'thanks' => 'Շնորհակալություն!',
            'cancel' => [
                'subject' => 'Պատվիրել Չեղարկել հաստատումը',
                'heading' => 'Պատվերը չեղարկվեց',
                'dear' => 'Սիրելի :customer_name',
                'greeting' => 'You Order with order id #:order_id placed on :created_at has been cancelled',
                'summary' => 'Summary of Order',
                'shipping-address' => 'Shipping Address',
                'billing-address' => 'Billing Address',
                'contact' => 'Contact',
                'shipping' => 'Առաքման տարբերակ',
                'payment' => 'Վճարման տարբերակ',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Shipping & Handling',
                'tax' => 'Tax',
                'discount' => 'Discount',
                'grand-total' => 'Ընդհանուր գին',
                'final-summary' => 'Thanks for showing your interest in our store',
                'help' => 'If you need any kind of help please contact us at :support_email',
                'thanks' => 'Thanks!',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice #:invoice_id for Order #:order_id',
            'subject' => 'Invoice for your order #:order_id',
            'summary' => 'Summary of Invoice',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id  has been generated for Order #:order_id',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Shipment for your order #:order_id',
            'inventory-subject' => 'New shipment had been generated for Order #:order_id',
            'summary' => 'Summary of Shipment',
            'carrier' => 'Carrier',
            'tracking-number' => 'Tracking Number',
            'greeting' => 'An order :order_id has been placed on :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Summary of Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Customer Reset Password',
            'dear' => 'Dear :name',
            'info' => 'You are receiving this email because we received a password reset request for your account',
            'reset-password' => 'Reset Password',
            'final-summary' => 'If you did not request a password reset, no further action is required',
            'thanks' => 'Thanks!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'New Customer Registration',
                'password' => 'Password',
                'summary' => 'Your account has been created.
                Your account details are below: ',
                'thanks' => 'Thanks!',
            ],

            'registration' => [
                'subject' => 'Հաճախորդների նոր գրանցում',
                'customer-registration' => 'Հաճախորդը գրանցվեց հաջողությամբ',
                'dear' => 'Սիրելի :customer_name',
                'greeting' => 'Բարի գալուստ և շնորհակալություն ՝ մեզ մոտ գրանցվելու համար!',
                'summary' => 'Ձեր հաշիվն այժմ հաջողությամբ ստեղծվել է, և դուք կարող եք մուտք գործել ՝ օգտագործելով ձեր էլ.փոստի հասցեն և գաղտնաբառի հավատարմագրերը: Մտնելուց հետո դուք կկարողանաք մուտք գործել այլ ծառայություններ ՝ ներառյալ անցյալի պատվերների վերանայում, և խմբագրելու ձեր հաշվի տեղեկությունները:',
                'thanks' => 'Շնորհակալություն!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Էլ.փոստի հաստատում',
                'subject' => 'Էլ.փոստի հաստատում',
                'verify' => 'Հաստատեք Ձեր հաշիվը',
                'summary' => 'Սա այն փոստն է, որ ձեր մուտքագրված էլփոստի հասցեն ձերն է:
                 Ձեր հաշիվը հաստատելու համար սեխմեք ստորեվ բերված կոճակը:'
            ],

            'subscription' => [
                'subject' => 'Բաժանորդագրվեք',
                'greeting' => 'Բարի գալուստ ' . config('app.name') . ' - Էլ.փոստի բաժանորդագրություն',
                'unsubscribe' => 'Ապաբաժանորդագրվել',
                'summary' => 'Thanks for putting me into your inbox. It’s been a while since you’ve read ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
                the latest email marketing news then for sure click the button below.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name created successfully.',
        'update-success' => ':name updated successfully.',
        'delete-success' => ':name deleted successfully.',
        'submit-success' => ':name submitted successfully.'
    ],
];
