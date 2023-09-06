<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Recaptcha Demo</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <?php

    // Checks if form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function post_captcha($user_response)
        {
            $fields_string = '';
            $fields = array(
                'secret' => '6LeEh94ZAAAAAPM7jNHl6QBR-0Zi97pbvnOW9ccW',
                'response' => $user_response
            );
            foreach ($fields as $key => $value)
                $fields_string .= $key . '=' . $value . '&';
            $fields_string = rtrim($fields_string, '&');

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($ch);
            curl_close($ch);

            return json_decode($result, true);
        }

        // Call the function post_captcha
        $res = post_captcha($_POST['g-recaptcha-response']);

        if (!$res['success']) {
            // What happens when the CAPTCHA wasn't checked
            echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
        } else {
            // If CAPTCHA is successfully completed...

            // Paste mail function or whatever else you want to happen here!
            echo '<br><p>CAPTCHA was completed successfully!</p><br>';
        }
    } else { ?>

        <!-- FORM GOES HERE -->
        <form class="formulier mb-4" action="to.php" action="contactform.php" method="POST">

            <h2 class="subtitle-contact">Contact Formulier</h2>

            <div class="div mb-4">
                <label for="inputEmail4"> <strong class="contactnaam">Naam: </strong></label>
                <input type="text" class="form-control" name="name" placeholder="Uw voor en/of achternaam">
            </div>
            <div class="con mb-4">
                <label for="email"> <strong class="contactnaam">Email: </strong> </label>
                <input type="text" class="form-control" placeholder="Enter email" name="email" required>
            </div>

            <div class="con mb-4">
                <label for="exampleFormControlTextarea1"><strong class="contactnaam">Bericht:</strong></label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Uw bericht"></textarea>
                <button type="submit" name="submit" class="btn btn-primary mt-4 send-email-btn">SEND MAIL</button>
                <div class="g-recaptcha" data-callback="callback" data-expired-callback="ex-callback" data-sitekey="6LeEh94ZAAAAAPM7jNHl6QBR-0Zi97pbvnOW9ccW"></div>
            </div>

        </form>

    <?php } ?>

</body>

</html>