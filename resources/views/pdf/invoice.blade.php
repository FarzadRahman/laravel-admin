<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        .page_break {
            page-break-before: always;
        }
        body{
            font-family:"Calibri", sans-serif;
        }
    </style>
</head>
<body style="padding: 10px;">
@for($i=0;$i<$r->limit;$i++)
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 10%; border: none; padding-top: -50px; vertical-align: top"><img
                    src="https://icml.gov.bd/themes/responsive_npf/img/logo/icml.png" style="height: 50px;"></td>
            <td style="width: 60%; border: none">

                <h3 style="margin-bottom: -2px;">ICB CAPITAL MANAGEMENT LIMITED</h3>
                <h5 style="margin-top: -2px;">(A Subsidiary of ICB)</h5>
                <h6 style="margin-top: -15px;">Green City Edge (5th & 6th Floor)
                    <br> 89, Kakrail, Dhaka-1000
                </h6>
            </td>
            <td style="width: 30%; text-align: right; border: none">
                <b>IA :</b> 030100003
            </td>
        </tr>

    </table>

    <table style="width: 100%;">
        <tr>
            <td style="font-weight: bold; width: 30%">Particular</td>
            <td style="text-align: center; font-weight: bold; width: 35%">Principal Holder</td>
            <td style="text-align: center; font-weight: bold; width: 35%">Joint Holder</td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Relations With Principal Holder</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Father's Name</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Mother's Name</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Spouse's Name</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Education</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Profession</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>National ID No.</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Address</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Telephone Number</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Details of Bank Account:</td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <div class="page_break"></div>

    <br>
    <table style="width: 100%">
        <tr>
            <td colspan="3" style="font-weight: bold; text-align: center;">Particular of Introducer</td>
        </tr>
        <tr>
            <td>Name</td>
            <td></td>
            <td>Account No:</td>
        </tr>
    </table>

    <br>

    <table style="width: 100%">
        <tr>
            <td colspan="5" style="font-weight: bold; text-align: center;">Particular of Nominee</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>Address</td>
            <td>Date of Birth</td>
            <td>Relation</td>
            <td>Share (%)</td>
        </tr>
    </table>
    <div class="page_break"></div>
@endfor
</body>
</html>

