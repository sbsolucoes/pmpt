<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Reset : BEGIN -->
    <style>

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
    </style>

    <!-- CSS Reset : END -->
</head>

<body>


<table width="600" bgcolor="#1733C8" align="center" style="width: 100%; min-width: 100%" border="0" cellpadding="0">
    <tr>
        <td style="font-size: 10px; line-height: 10px">&nbsp;</td>
    </tr>
    <tr>
        <td height="18">&nbsp;</td>
    </tr>
    <tr>
        <td align="center">
            <table bgcolor="#ffffff" width="532" style="max-width: 90%; border-radius: 10px" border="0" cellpadding="0">
                <tr>
                    <td height="25">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center">
                        <table width="486" style="max-width: 95%; border-radius: 10px" border="0" cellpadding="0">
                            <tr>
                                <td align="center">
                                    <font face="Arial, Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" color="#2C3565" style="font-size: 20px">
                                        <strong>Nova Contato</strong>
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="8">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center">
                        <table bgcolor="#F6F6F6" width="486" style="max-width: 90%; border-radius: 10px" border="0" cellpadding="0">
                            <tr>
                                <td align="center">
                                    <table width="425" style="max-width: 85%; border-radius: 10px" border="0" cellpadding="0">
                                        <tr>
                                            <td align="left">
                                                <br>
                                                <font face="Arial, Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" color="#2C3565" style="font-size: 14px">
                                                    <strong>Nome</strong>: {{ $attributes["nome"] }}
                                                </font>
                                                <br>
                                                <font face="Arial, Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" color="#2C3565" style="font-size: 14px">
                                                    <strong>E-mail</strong>: {{ $attributes["email"] }}
                                                </font>
                                                <br>
                                                <font face="Arial, Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" color="#2C3565" style="font-size: 14px">
                                                    <strong>Data/Hora</strong>: {{ $attributes["today"] }}
                                                </font>
                                                <br>
                                                <font face="Arial, Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" color="#2C3565" style="font-size: 14px">
                                                    <strong>Mensagem</strong>: {{ $attributes["mensagem"] }}
                                                </font>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="20">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="25">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td height="50">&nbsp;</td>
    </tr>
</table>

</body>
</html>
