<!doctype html>
<html lang="en" xmlns="https://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ISO Confirmation :: {{ $data['company'] }}</title>
    <style>
        /* -------------------------------------
        GLOBAL RESETS
        ------------------------------------- */
        /*All the styling goes here*/
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }
        body {
            background-color: #f6f6f6;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: 'Verdana';
            width: 100%;
            font-weight: 400;
        }
        .logo-text{
            font-size: 35px;
            color: #545454;
        }
        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }
        table td {
            font-family: 'Verdana';
            font-size: 14px;
            vertical-align: top;
        }
        a, body, button, div, form, html, img, label, span, textarea, p{
            font-family: 'Verdana';
            font-weight: 400;
        }
        /* -------------------------------------
        BODY & CONTAINER
        ------------------------------------- */
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }
        /* This should also be a block element, so that it will fill 100% of the .container */
        /* .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px;
        } */
        /* -------------------------------------
        HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }
        .wrapper {
            box-sizing: border-box;
            padding: 30px 60px;
        }
        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }
        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }
        /* -------------------------------------
        TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: 'Verdana';
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 10px;
            margin-top: 10px;
        }
        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }
        p,
        ul,
        ol {
            font-family: 'Verdana';
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }
        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }
        a {
            color: #3498db;
            text-decoration: underline;
        }
        /* -------------------------------------
        BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%; }
        .btn > tbody > tr > td {
            padding-bottom: 15px; }
        .btn table {
            width: auto;
        }
        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }
        .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }
        .btn-primary table td {
            background-color: #3498db;
        }
        .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff;
        }
        /* -------------------------------------
        OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }
        .first {
            margin-top: 0;
        }
        .align-center {
            text-align: center;
        }
        .align-right {
            text-align: right;
        }
        .align-left {
            text-align: left;
        }
        .clear {
            clear: both;
        }
        .mt0 {
            margin-top: 0;
        }
        .mb0 {
            margin-bottom: 0;
        }
        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }
        .powered-by a {
            text-decoration: none;
        }
        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }
        /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            html, body {
                width: 100% !important;
            }
            table {
                width: 100% !important;
                margin: 0 auto 0 !important;
                border: 0 none!important;
            }
            table table {
                width: 80% !important;
                margin: 0 auto !important;
                padding: 20px;
            }
            .wrapper,
            .wrapper td {
                padding: 0 !important;
            }
            .wrapper td p {
                font-size: 14px!important;
            }
            .wrapper td p a {
                font-size: 13px!important;
            }
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important;
            }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }
            table[class=body] .content {
                padding: 0 !important;
            }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }
            table[class=body] .btn table {
                width: 100% !important;
            }
            table[class=body] .btn a {
                width: 100% !important;
            }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }
        /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            html, body {
                width: 100% !important;
            }
            table {
                width: 100% !important;
                margin: 0 auto 0 !important;
                border: 0 none!important;
            }
            table table {
                width: 80% !important;
                margin: 0 auto !important;
                padding: 20px;
            }
            .wrapper,
            .wrapper td {
                padding: 0 !important;
            }
            .wrapper td p {
                font-size: 14px!important;
            }
            .wrapper td p a {
                font-size: 13px!important;
            }
            .ExternalClass {
                width: 100%;
            }
            .ExternalClass {
                width: 100%;
            }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }
            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
            }
            .btn-primary table td:hover {
                background-color: #34495e !important;
            }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }
    </style>
</head>
<body class="">
<table role="presentation" border="0" cellpadding="0" cellspacing="0"  background-size="cover" style="width:730px!important;margin:50px auto!important; border: 1px solid #d6d6d6!important;background-position:top center!important;">
    <tr align="center">
        <td style="padding: 30px 0 20px 0;">
            <a href="{{ $data['domain'] }}" target="_blank" title="{{ $data['company'] }}"></a>
        </td>
    </tr>
    <!-- START MAIN CONTENT AREA -->
    <tr>
        <td class="wrapper">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0"  style="background:#FFFFFF!important">
                <tr >
                    <td style="padding: 30px; font-weight: 400; font-family: 'Verdana'!important;">

                        <p style="color: #000000; font-size :20px; font-weight: 600"> Dear {!! $data['email']!!}</p>
                        <p style="color: #0d445f; font-size :25px; text-align: justify;">
                            <span style="font-weight: 500;"> Welcome to </span><strong> {{ config('app.name') }}. </strong>
                        </p>

                        <p style="padding-top: 10px; color: #717274; font-size: 17px; text-align: justify">
                            {!! $data['mail_body']!!}
                        </p>

                        <p style="color: #717274; font-size :17px">
                            OTP: <span style="font-weight: 600;">{!! $data['otp']!!} </span>
                        </p>

                        <p style="padding-top: 10px; color: #717274; font-size: 15px;">
                             Best Wishes,<br/>
                            <strong>The Team at {{ $data['company'] }}</strong>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- START FOOTER -->
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="footer">
    <tr align="center">
        <td class="content-block">
            <span class="apple-link"> © {{ date('Y') }}  {{ $data['company'] }}. All rights reserved.  </span>
        </td>
    </tr>
</table>
<!-- END FOOTER -->
</body>
</html>
