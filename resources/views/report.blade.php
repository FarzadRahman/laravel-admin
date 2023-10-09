<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .header {
        text-align: center;
    }
    #customers {
        font-family: "Calibri", sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    body{
        font-family:"Calibri", sans-serif;
        font-size: 12px;
    }
    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 4px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
    .page_break { page-break-before: always; }
</style>
<body>
<div class="container">
    <div class="header">
        <table style="width: 100%;">
            <tr>
                <td style="width: 30%; text-align: right;">
                    <img src="https://icml.gov.bd/themes/responsive_npf/img/logo/icml.png" style="height: 50px;">
                </td>
                <td style="width: 40%">
                    <h2 style="margin-bottom: 0px; ">ICB Capital Management Limited</h2>
                    <P style="margin-bottom: 0px; margin-top: 2px;">(A Subsidiary of ICB)</P>
                    <h5 style="margin-top: 2px;">Green City Edge (5th & 6th Floor) 89, Kakrail, Dhaka-1000.</h5>
                </td>
                <td style="width: 30%"></td>
            </tr>
        </table>



    </div>
    <div class="titleInformation">
        <p>Discretionary Investment Account Opening Form</p>
        <p style="font-weight: bold;">Term Investment Plan (TIP)</p>
    </div>
    <div class="subject">
        <h4>Sub: Application for opening of a TIP Account.</h4>
        <p>Dear Sir, </p>
        <p style="text-align: justify;">I/We the undersigned do hereby request you to open a Term Investment Plan (TIP) Account in the name as stated below. I/we have read and fully understood the enclosed instructions. I/we am/are also well aware about rules, regulations and procedures regarding operation of a TIP Account of the company. I/we am/are also agreed to abide by the rules & regulations of BSEC and other related regulators/Govt. etc. Particulars about myself/ourselves as required for opening a TIP account are furnished below:</p>
    </div>
    {{--    <div>--}}
    {{--        <h3>TIP Account Number: </h3>--}}
    {{--        <p>Scheme Type:  </p>--}}
    {{--    </div>--}}
    <table style="width: 100%">
        <tr>
            <td><b>Scheme Type:  </b></td>
            <td style="text-align: right"><b>TIP Account Number:</b></td>
        </tr>
    </table>
    <div class="tableInformation">
        <table id="customers" style="font-size: 12px;">
            <tr>
                <th colspan="2" style="width: 30%;">Particulars</th>
                <th style="width: 35%">Principal Holder</th>
                <th style="width: 35%">Joint Holder</th>
            </tr>
            <tr>
                <td colspan="2">Full Name</td>
                <td >Md. Habibur Rahman</td>
                <td>Md. Mahabubur Rahman</td>
            </tr>
            <tr>
                <td rowspan="6">For Institution only</td>
                <td>Name of the Institute</td>
                <td>Beximco Pharma limited</td>
                <td>Square Pharma</td>
            </tr>
            <tr>
                <td>Name of CEO/MD</td>
                <td>Aminul Islam</td>
                <td>Rakibul Islam</td>
            </tr>
            <tr>
                <td>Type of Business</td>
                <td>Pharma</td>
                <td>Textile</td>
            </tr>
            <tr>
                <td>Trade License No. </td>
                <td>TD-11090</td>
                <td>TD-110503</td>
            </tr>
            <tr>
                <td>Date of Incorporation</td>
                <td>01-01-2022</td>
                <td>01-01-2022</td>
            </tr>
            <tr>
                <td>Registration No. and Date</td>
                <td>Yoshi Tannamuri</td>
                <td>Canada</td>
            </tr>

            <tr>
                <td colspan="2">Gender</td>
                <td>Male</td>
                <td>Male</td>
            </tr>
            <tr>
                <td colspan="2">Relations of Joint Holder with Principal Holder</td>
                <td colspan="2">Brother</td>
            </tr>

            <tr>
                <td colspan="2">Father's / Husband's name</td>
                <td>Md. Hafizur rahman</td>
                <td>Md. Hafizur rahman</td>
            </tr>
            <tr>
                <td colspan="2">Mother's Name</td>
                <td>Rokeya Parvin</td>
                <td>Rokeya Parvin</td>
            </tr>
            <tr>
                <td colspan="2">Spouse's Name</td>
                <td>Hamima Akter</td>
                <td>N/A</td>
            </tr>
            <tr>
                <td colspan="2">Nationality</td>
                <td>Bangladeshi</td>
                <td>Bangladeshi</td>
            </tr>
            <tr>
                <td colspan="2">National Id No.</td>
                <td>1992121048</td>
                <td>1992121048</td>
            </tr>
            <tr>
                <td colspan="2">Resident/Non- Resident</td>
                <td>Resident</td>
                <td>Resident</td>
            </tr>
            <tr>
                <td rowspan="3">Passport Details</td>
                <td>Passport No</td>
                <td>afsdf</td>
                <td>afgfsd</td>
            </tr>
            <tr>
                <td>Date of Issue</td>
                <td>10-10-2022</td>
                <td>10-10-2022</td>
            </tr>
            <tr>
                <td>Date of Expiry</td>
                <td>10-10-2022</td>
                <td>10-10-2022</td>
            </tr>
            <tr>
                <td colspan="2">Date of Birth</td>
                <td>10-10-2022</td>
                <td>10-10-2022</td>
            </tr>
            <tr>
                <td colspan="2">Education</td>
                <td>BSC</td>
                <td>MSC</td>
            </tr>
            <tr>
                <td colspan="2">E-TIN/TIN No.</td>
                <td>165456155</td>
                <td>548554</td>
            </tr>
            <tr>
                <td colspan="2">Profession</td>
                <td>Officer</td>
                <td>Data Entry</td>
            </tr>
            <tr>
                <td colspan="2">Present/ Office Address</td>
                <td>BSC</td>
                <td>MSC</td>
            </tr>
            <tr>
                <td colspan="2">Permanent Address</td>
                <td>BSC</td>
                <td>MSC</td>
            </tr>
            <tr>
                <td rowspan="3">Telephone Number</td>
                <td>Office</td>
                <td>6416514561</td>
                <td>54541</td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>10-10-2022</td>
                <td>10-10-2022</td>
            </tr>
            <tr>
                <td>Residence/Alternative Mobile No.</td>
                <td>10-10-2022</td>
                <td>10-10-2022</td>
            </tr>
            <tr>
                <td colspan="2">Email</td>
                <td>BSC@gmail.com</td>
                <td>MSC@gmail.com</td>
            </tr>
            <tr>
                <td rowspan="4">Details of Bank</td>
                <td>A/C No.</td>
                <td colspan="2">6416514561</td>

            </tr>
            <tr>
                <td>Bank Name</td>
                <td colspan="2">IFIC Bank</td>

            </tr>
            <tr>
                <td>Branch Name</td>
                <td colspan="2">Motijheel</td>
            </tr>
            <tr>
                <td>Routing Number</td>
                <td  colspan="2">0909090</td>
            </tr>
            <tr>
                <td colspan="2">Monthly Income</td>
                <td>500000</td>
                <td>50,0000</td>
            </tr>
            <tr>
                <td colspan="2">Source of Fund</td>
                <td>Job</td>
                <td>Salary</td>
            </tr>
            <tr>
                <td colspan="2">Monthly Installment Amount</td>
                <td colspan="2">5000</td>
            </tr>
            <tr>
                <td colspan="2">Installment Payment Date</td>
                <td colspan="2">01-01-2023</td>
            </tr>
        </table>

        <br>
        <div class="page_break"></div>
        <table id="customers"  style="font-size: 12px;">
            <tr>
                <td colspan="3" style="text-align: center;"> <h4>Particulars of Introducer</h4></td>

            </tr>
            <tr>
                <th>Introducer Type</th>
                <th>Account No./Employee Id </th>
                <th>Signature</th>
            </tr>
            <tr>
                <td>ICB Employee</td>
                <td>2010006 </td>
                <td></td>
            </tr>
        </table>
        {{--        <h2>Particulars of Nominee</h2>--}}

        <br>
        <table id="customers"  style="font-size: 12px;">
            <tr>
                <td colspan="6" style="text-align: center;"> <h4>Particulars of Nominee</h4></td>

            </tr>
            <tr>
                <th>Name</th>
                <th>Address </th>
                <th>Age</th>
                <th>Relation</th>
                <th>Share (%)</th>
                <th>Signature</th>
            </tr>
            <tr>
                <td>Maria Rahman Tisha</td>
                <td>Green City Edge </td>
                <td>22</td>
                <td>Sister</td>
                <td>50</td>
                <td></td>
            </tr>
            <tr>
                <td>Maria Rahman Tisha</td>
                <td>Green City Edge </td>
                <td>22</td>
                <td>Sister</td>
                <td>50</td>
                <td></td>
            </tr>
            <tr>
                <td>Maria Rahman Tisha</td>
                <td>Green City Edge </td>
                <td>22</td>
                <td>Sister</td>
                <td>50</td>
                <td></td>
            </tr>
        </table>

        <br>
        <br>
        <br>
        <table style="border: 2px solid black; width: 100%; font-size: 14px;">
            <tr>
                <td colspan="2">I/we solemnly declare that the information furnished above are true and if anything found wrong, I/we shall be held liable for that.
                    <br><br>
                    <br><br>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td rowspan="3" style="font-weight: bold; margin-top: 15px;"><b style="text-decoration:overline">Signature of Principal Holder</b></td>
                <td rowspan="3" style="font-weight: bold; margin-top: 15px; text-align: right;"><b style="text-decoration:overline">Signature of Joint Holder</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    &nbsp;
                    &nbsp;
                    <br>
                    <br>
                </td>
            </tr>
        </table>


        {{--        Others Pages--}}
        <div class="page_break"></div>

        <h2>Term Investment Plan (TIP) হিসাব পরিচালনা সংক্রান্ত শর্তাবলি এবং অঙ্গীকারনামা</h2>



    </div>
</div>
</body>
</html>
