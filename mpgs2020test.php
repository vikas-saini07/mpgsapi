<html>
    <head>
        <script src="https://test-gateway.mastercard.com/checkout/version/55/checkout.js"
                data-error="errorCallback"
                data-cancel="cancelCallback">
        </script>

        <script type="text/javascript">
            function errorCallback(error) {
                  console.log(JSON.stringify(error));
            }
            function cancelCallback() {
                  console.log('Payment cancelled');
            }

            Checkout.configure({
                merchant: 'TESTJUNIAD201',
                order: {
                    amount: function() {
                        //Dynamic calculation of amount
                        return 80 + 20;
                    },
                    currency: 'AUD',
                    description: 'Ordered goods',
                   id: 'ererure211212'
                },
                interaction: {
                    operation: 'AUTHORIZE', // set this field to 'PURCHASE' for Hosted Checkout to perform a Pay Operation.
                    merchant: {
                        name: 'Vikas - MPGS',
                        address: {
                            line1: '200 Sample St',
                            line2: '1234 Example Town'            
                        }    
                    }
                                                                }
            });
        </script>
    </head>
    <body>
        ...
        <input type="button" value="Pay with Lightbox" onclick="Checkout.showLightbox();" />
        <input type="button" value="Pay with Payment Page" onclick="Checkout.showPaymentPage();" />
        ...
    </body>
</html>
