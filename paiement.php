<?php
    if(isset($_POST['total_commande']) && !empty($_POST['total_commande'])){
        require_once('vendor/autoload.php');
        $total_commande = (float)$_POST['total_commande'];

        \Stripe\Stripe::setApiKey('sk_test_51IicjtGmtxsUqbOkN0PRRAoPR1R1dORBmZi6lMjIfadIcP3g1FzvbZ5nj6aV2Rhe5nxV2Yeh6J7RG1bvn2z7Xw8t00aYSnW5Om');

        $intent = \Stripe\PaymentIntent::create([
            'amount' => $total_commande*100,
            'currency' => 'eur'

        ]);

        echo '<pre>';
        var_dump($intent);
        echo '</pre>';
        die();
    }


    $template='paiement';
include 'layout.phtml';

?>


