<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        html,
        body {
            font-family: 'cairo';
            font-size: 0.875rem;
            color: #555;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }

        table th {
            font-weight: bold;
        }

        .font-normal {
            font-weight: normal;
        }

        .font-bold {
            font-weight: bold;
        }

        .font-bolder {
            font-weight: bolder;
        }

        .vertical-top {
            vertical-align: top;
        }

        .text-gray {
            color: #707070;
        }

        .text-primary {
            color: #0a8989;
        }

        .text-success {
            color: #2ead63
        }

        .text-danger {
            color: #ce4848
        }

        .text-black {
            color: #000;
        }

        .decoration-none {
            text-decoration: none;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-md {
            font-size: 1.2rem;
        }

        .bg-light {
            background-color: #f3f9ff;
        }

        .py-1 {
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .py-2 {
            padding-top: 3px;
            padding-bottom: 3px;
        }

        .py-3 {
            padding-top: 6px;
            padding-bottom: 6px;
        }

        .py-4 {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .py-7 {
            padding-top: 14px;
            padding-bottom: 14px;
        }

        .px-2 {
            padding-left: 3px;
            padding-right: 3px;
        }

        .px-3 {
            padding-left: 6px;
            padding-right: 6px;
        }

        .px-4 {
            padding-left: 8px;
            padding-right: 8px;
        }

        .pt-4 {
            padding-top: 8px;
        }

        .pt-7 {
            padding-top: 14px;
        }

        .pb-2 {
            padding-bottom: 3px;
        }

        .pb-3 {
            padding-bottom: 6px;
        }

        .pb-4 {
            padding-bottom: 8px;
        }

        .pb-5 {
            padding-bottom: 10px;
        }

        .pb-7 {
            padding-bottom: 14px;
        }

        .px-10 {
            padding-left: 20px;
            padding-right: 20px;
        }

        .mt-10 {
            margin-top: 20px;
        }

        .mt-12 {
            margin-top: 24px;
        }

        .mr-auto {
            margin-right: auto;
        }

        .border-t-dotted {
            border-top: 2px dotted #ccc;
        }

        .border-b-dotted {
            border-bottom: 2px dotted #ccc;
        }
    </style>
</head>

<body>

    <table class="mt-12">
        <tr>
            <td style="width: 20%;">
                <div>
                    <h2 class="text-gray">فاتورة ضريبية</h2>
                </div>
                <div>
                    <img class="pt-7" src="qr.png" alt="FezLee Qr Code" width="120" height="120">
                </div>
            </td>
            <td class="text-center vertical-top" style="width: 45%; padding-right:50px;">
                <img width="135" src="logo.png" alt="Invoice Qr Code">
            </td>
            <td class="pb-5 vertical-top text-right" style="width:35%;">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td colspan="2" class="py-2 text-gray text-md font-bold">شركة الألوان البرمجية
                                لتقنية
                                المعلومات
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <span class="text-gray font-bold">الرقم الضريبى: </span>
                                <span class="font-bold">311630183800003</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <span class="text-gray font-bold">البريد الإلكترونى: </span>
                                <a class="font-normal text-primary decoration-none"
                                    href="mailto:info@fezlee.com">info@fezlee.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <span class="text-gray font-bold">الموقع الإلكترونى: </span>
                                <a class="font-normal text-primary decoration-none"
                                    href="https://app.fezlee.com">https://app.fezlee.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <span class="text-gray font-bold">رقم التواصل: </span>
                                <span class="font-bold">966531289056+</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-gray font-bold">Jeddah, Saudi Arabia - 22230</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>

    <div class="mt-12">
        <table>
            <thead>
                <tr>
                    <th class="text-right font-bold text-gray pt-7 pb-3 border-t-dotted">رقم الفاتورة</th>
                    <th class="text-right font-bold text-gray pt-7 pb-3 border-t-dotted">التاريخ</th>
                    <th class="text-right font-bold text-gray pt-7 pb-3 px-10 border-t-dotted">
                        الحالة
                    </th>
                    <th class="text-right font-bold text-gray pt-7 pb-3 border-t-dotted">المجموع الكلى</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-right font-bold pb-7 border-b-dotted">FZINV00010653</td>
                    <td class="text-right font-bold pb-7 border-b-dotted">19/10/2024</td>
                    <td class="text-right font-bold pb-7 px-10 border-b-dotted text-success">مدفوع</td>
                    <td class="text-right font-bold pb-7 border-b-dotted">21.84 SAR</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-12">
        <table>
            <tr>
                <td class="font-bold text-md text-gray pb-4">عنوان الفاتورة</td>
            </tr>
            <tr>
                <td class="text-black pb-3">Story Story</td>
            </tr>

            <tr>
                <td class="text-gray pb-2">مكة المكرمة 124441</td>
            </tr>
            <tr>
                <td class="text-gray pb-2">البريد الإلكترونى: alnahdifatimah35@gmail.com</td>
            </tr>
            <tr>
                <td class="text-gray pb-2">رقم الجوال: 0558451755</td>
            </tr>
        </table>
    </div>

    <div class="mt-12 border-b-dotted pb-3">
        <table>
            <thead>
                <tr>
                    <th class="text-right py-3 px-4 bg-light">#</th>
                    <th class="text-right py-3 px-4 bg-light">الوصف</th>
                    <th class="text-right py-3 px-4 bg-light">سعر الوحدة</th>
                    <th class="text-right py-3 bg-light px-10">الكمية</th>
                    <th class="text-left py-3 px-4 bg-light">المجموع</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-right font-bold text-sm py-4 px-4">1</td>
                    <td class="text-right text-sm py-4 px-4">
                        <div class="font-bold">شحنة</div>
                        <div class="font-gray">FZSHVZEZ5A2NBK</div>
                    </td>
                    <td class="text-right font-bold text-sm py-4 px-4">18.99 SAR</td>
                    <td class="text-right font-bold text-sm py-4 px-10">1</td>
                    <td class="text-left font-bold text-sm py-4 px-4">18.99 SAR</td>
                </tr>
                <tr>
                    <td class="text-right font-bold text-sm py-4 px-4">2</td>
                    <td class="text-right text-sm py-4 px-4">
                        <div class="font-bold">شحنة</div>
                        <div class="font-gray">FZSHVZEZ5A2NBK</div>
                    </td>
                    <td class="text-right font-bold text-sm py-4 px-4">18.99 SAR</td>
                    <td class="text-right font-bold text-sm py-4 px-10">1</td>
                    <td class="text-left font-bold text-sm py-4 px-4">18.99 SAR</td>
                </tr>
                <tr>
                    <td class="text-right font-bold text-sm py-4 px-4">3</td>
                    <td class="text-right text-sm py-4 px-4">
                        <div class="font-bold">شحنة</div>
                        <div class="font-gray">FZSHVZEZ5A2NBK</div>
                    </td>
                    <td class="text-right font-bold text-sm py-4 px-4">18.99 SAR</td>
                    <td class="text-right font-bold text-sm py-4 px-10">1</td>
                    <td class="text-left font-bold text-sm py-4 px-4">18.99 SAR</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-left">
        <table class="mr-auto" style="width: 30%">
            <tr>
                <th class="text-right text-gray pt-7 pb-4 px-4">المجموع الفرعى</th>
                <td class="text-left font-bold text-gray text-sm pt-7 pb-4 px-4">11.90 SAR</td>
            </tr>
            <tr>
                <th class="text-right text-gray pt-4 pb-7 px-4 border-b-dotted">ضريبة المبيعات (15%)</th>
                <td class="text-left font-bold text-gray text-sm pt-4 pb-7 px-4 border-b-dotted">11.90 SAR</td>
            </tr>
            <tr>
                <th class="text-right text-black font-bold py-7 px-4">المجموع الكلى</th>
                <td class="text-left font-bold text-black text-sm py-7 px-4">11.90 SAR</td>
            </tr>
        </table>
    </div>

</body>

</html>
