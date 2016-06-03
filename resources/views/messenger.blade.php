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

            #message-body {
                width: 30%;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Twilio Messenger</div>
                <div class="main-form">
                  <form action="{{ url('sendMsg')}}" method="POST">
                    {{ csrf_field() }}
                    <input id="phone-input" type="text" name="phone" placeholder="10-digit phone number">
                    <input id="message-body" type="text" name="message" placeholder="Message">
                    <button id="send-button" type="submit" name="send">
                      Send
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </body>
</html>
