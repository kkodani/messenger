<!DOCTYPE html>
<html>
    <head>
        <title>Twilio Messenger</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Twilio Messenger</div>
                <div class="main-form">
                  <form class="" action="index.html" method="post">
                    <input type="text" name="phone" placeholder="10-digit phone number">
                    <input type="text" name="msg" placeholder="Message">
                    <button type="button" name="send">
                      Send
                    </button>
                  </form>
                  <?php

                    $fromPhone = getenv("TWILIO_PHONE");
                    $client = new Services_Twilio(getenv("TWILIO_ACCOUNT_SID"), getenv("TWILIO_AUTH_TOKEN"));

                    // $message = $client->account->messages->create(array(
                    //   "From" => "+" . $fromPhone, // From a valid Twilio number
                    //   "To" => "+1" . $toPhone,   // Text this number
                    //   "Body" => "hidden phone",
                    // ));

                    // Display a confirmation message on the screen
                    echo "Sent message!";

                  ?>
                </div>
            </div>
        </div>
    </body>
</html>
