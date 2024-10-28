<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice PDF </title>
</head>

<style media="all">
    body,
    th,
    td {
        font-size: 0.875rem;
        font-family: 'cairo';
        font-weight: normal;
        direction: rtl;
        text-align: right;
    }


    html,
    * {
        box-sizing: border-box;
    }

    body {
        text-align: right;
        padding: 0px;
        margin: 0;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        /* border: 1px solid #ddd; */
    }

    .logo {
        text-align: center;
        vertical-align: baseline;
        padding: 0 10px 0 70px;
    }

    .qr,
    .company {
        padding-top: 20px;
    }

    .company__name {
        font-size: 1.1rem
    }

    .company__field {
        margin-bottom: 5px;
    }

    .info tr td {
        padding-top: 3rem;
    }

    .text-primary {
        color: #0a8989 !important;
    }

    .text-decoration-none {
        text-decoration: none;
    }

    .text-left {
        text-align: right;
    }

    .text-right {
        text-align: left;
    }
</style>

<body>
    <table>
        {{-- <table class="invoice"> --}}
        <thead class="header">
            <tr>
                <td class="qr" colspan="2">
                    <h1 class="qr__title">فاتورة ضريبية</h1>
                    <div class="qr__img_wrapper">
                        {{-- <img src="{{ asset('qr.png') }}" alt="FezLee Logo" width="200" height="200"> --}}
                        <img src="{{ public_path('qr.png') }}" alt="FezLee Logo" width="150" height="150">
                    </div>
                </td>
                <td class="logo" colspan="8">
                    {{-- <img src="{{ asset('logo.png') }}" alt="FezLee Logo" width="150"> --}}
                    <img src="{{ public_path('logo.png') }}" alt="FezLee Logo" width="150">
                </td>
                <td class="company">
                    <h2 class="company__name">شركة الألوان البرمجية لتقنية المعلومات</h2>
                    <div class="company__field">
                        <span class="company__field_name">الرقم الضريبي:&nbsp;</span>
                        <span class="company__field_value">311630183800003</span>
                    </div>
                    <div class="company__field">
                        <span class="company__field_name">البريد الإلكتروني:&nbsp;</span>
                        <span class="company__field_value">info@fezlee.com</span>
                    </div>
                    <div class="company__field">
                        <span class="company__field_name">الموقع الإلكتروني:&nbsp;</span>
                        <a class="company__field_value text-primary text-decoration-none"
                            href="https://app.fezlee.com">https://app.fezlee.com</a>
                    </div>
                    <div class="company__field">
                        <span class="company__field_name">رقم التواصل:&nbsp;</span>
                        <a class="company__field_value text-decoration-none" href="tel:+966531289056">966531289056+</a>
                    </div>
                    <p clas="company__location">Jeddah, Saudi Arabia - 22230</p>
                </td>
            </tr>
        </thead>

        <tbody class="info">
            <tr>
                <td class="info__field">
                    <div class="info__field_name">رقم الفاتورة</div>
                    <div class="info__field_value">FZINV00010653</div>
                </td>
                <td class="info__field">
                    <div class="info__field_name">التاريخ</div>
                    <div class="info__field_value">AM 11:17 19/10/2024</div>
                </td>
                <td class="info__field">
                    <div class="info__field_name">الحالة</div>
                    <div class="info__field_value badge badge-green">مدفوع</div>
                </td>
                <td class="info__field">
                    <div class="info__field_name">المجموع الكلي</div>
                    <div class="info__field_value">SAR 21.84</div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
