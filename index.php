<html>
<head>
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script
        src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>
</head>
<body>
    <form id="checkout" method="post" action="sale.php<?php echo isset($_GET['amount']) ? '?amount='.$_GET['amount'] : ''?>">
        <div id="payment-form"></div>
        <input type="submit" value="Pay">
    </form>

    <script>
        $.get({
            url: 'token.php',
            success: function(token) {
                braintree.setup(token, "dropin", {
                    container: "payment-form"
                });
            }
        })
    </script>
</body>
</html>