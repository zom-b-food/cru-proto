<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Waiver Accrual Report - cru-prototype</title>
    <?php include '../_globals-top.php'; ?>
</head>

<body>
    <main role="main">
        <div class="col-12">
            <div class="row">
                <div class="col-3 pt25">
                    <div class="fauxnav">
                        <?php include '../components/_sidebar.php'; ?>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row header">
                        <?php include '../components/_header.php'; ?>
                        <div class="row mt15">
                            <small>
                                <a class="btn btn-back" role="button" href="/dcs/dcs-landing-page.php" tabindex=1>&nbsp;
                                    <i class="fas fa-angle-left"></i>&nbsp;DCS Home
                                </a>
                            </small>
                        </div>


                        <div class="report-wrapper">
                            <div class="h1">DCS Waiver Accumulator Report<div class="print-nav">

                                    <ul>
                                        <li>
                                            <small>
                                                <a href="#" data-toggle="modal" data-target="#print">Print&nbsp;<i
                                                        class="fas fa-print"></i></a></small>
                                        </li>
                                    </ul>
                                </div>
                                <h6>Date Range From MM/DD/YYYY To MM/DD/YYYY</h6>
                                 <h6>Date/Time Run: MM/DD/YYYY hh:mm</h6>
                            </div>
                            <hr class="cru" />
                            <div class="row">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" class="setwidth-10 center">Claim #</th>
                                            <th scope="col" class="setwidth-10 center">DOS</th>
                                            <th scope="col" class="setwidth-10 center">Amount Billed</th>
                                            <th scope="col" class="setwidth-10 center">Amount Allowed</th>
                                           
                                            <th scope="col" class="setwidth-5 center">OHI PR</th>
                                            <th scope="col" class="setwidth-5 center">CHAMPVA Payment</th>
                                          
                                            <th scope="col" class="setwidth-5 center">Code<br/>Type</th>
                                            <th scope="col" class="setwidth-10 center">Code<br/>(PX/DX)</th>
                                            <th scope="col" class="setwidth-3 center">Prev Code (Y/N)</th>
                                            <th scope="col" class="setwidth-10 center">Waiver Type D</th>
                                            <th scope="col" class="setwidth-10 center">Waiver Type CS</th>
                                            <th scope="col" class="setwidth-15 center">Total Waived
                                                @ Line
                                                Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TT26477</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                           
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>V70.0</td>
                                            <td>Y</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT26477</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                           
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>V76.2</td>
                                            <td>Y</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>




                                        <tr>
                                            <td>TT26477</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">200.00</td>
                                            <td class="r">91.88</td>
                                             <td class="r"></td>
                                            <td class="r">91.88</td>
                                           
                                            <td>PX</td>
                                            <td>99396</td>
                                            <td>Y</td>
                                            <td class="r">0.00</td>
                                            <td class="r">22.97</td>
                                            <td class="r">22.97</td>
                                        </tr>
                                        <tr>
                                            <td>TT26477</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">8.00</td>
                                            <td class="r">3.00</td>
                                           <td class="r"></td>
                                            <td class="r">3.00</td>
                                           
                                            <td>PX</td>
                                            <td>36415</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.75</td>
                                            <td class="r">0.75</td>
                                        </tr>
                                        <tr>
                                            <td>TT26477</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">15.00</td>
                                            <td class="r">4.48</td>
                                          <td class="r"></td>
                                            <td class="r">4.48</td>
                                          
                                            <td>PX</td>
                                            <td>81000</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">1.12</td>
                                            <td class="r">1.12</td>
                                        </tr>
                                        <tr class="totals">
                                            <td>Claim Total</td>
                                            <td></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                         
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r">24.84</td>
                                        </tr>
                                        <tr>
                                            <td colspan="12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>TT63398</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                           
                                            <td class="r"></td>
                                            <td class="r">0.00</td>
                                            <td>DX</td>
                                            <td>V90.4</td>
                                            <td>Y</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT63398</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">100.00</td>
                                            <td class="r">45.22</td>
                                          <td class="r"></td>
                                            <td class="r">45.22</td>
                                           
                                            <td>PX</td>
                                            <td>99212</td>
                                            <td>Y</td>
                                            <td class="r">45.22</td>
                                            <td class="r">0.00</td>
                                            <td class="r">45.22</td>
                                        </tr>
                                        <tr class="totals">
                                            <td>Claim Total</td>
                                            <td></td>
                                            <td class="r"></td>
                                       
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r">45.22</td>
                                        </tr>
                                        <tr>
                                            <td colspan="12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>TT74207</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>V55.0</td>
                                            <td>Y</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT74227</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">75.00</td>
                                            <td class="r">25.00</td>
                                            <td class="r"></td>
                                            <td class="r">25.00</td>
                                          
                                            <td>PX</td>
                                            <td>99397</td>
                                            <td>Y</td>
                                            <td class="r">10.00</td>
                                            <td class="r">3.75</td>
                                            <td class="r">13.75</td>
                                        </tr>
                                        <tr>
                                            <td>TT74227</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">50.00</td>
                                            <td class="r">10.00</td>
                                            <td class="r"></td>
                                            <td class="r">10.00</td>
                                          
                                            <td>PX</td>
                                            <td>82022</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT74227</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">50.00</td>
                                            <td class="r">10.00</td>
                                           <td class="r"></td>
                                            <td class="r">10.00</td>
                                          
                                            <td>PX</td>
                                            <td>72901</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">2.50</td>
                                            <td class="r">2.50</td>
                                        </tr>
                                        <tr class="totals">
                                            <td>Claim Total</td>
                                            <td></td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r">16.25</td>
                                        </tr>
                                        <tr>
                                            <td colspan="12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>TT89090</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>Z11.51</td>
                                            <td>Y</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT89090</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">138.00</td>
                                            <td class="r">42.92</td>
                                            <td class="r"></td>
                                            <td class="r">42.92</td>
                                          
                                            <td>PX</td>
                                            <td>87624</td>
                                            <td>Y</td>
                                            <td class="r">33.83</td>
                                            <td class="r">2.27</td>
                                            <td class="r">36.10</td>
                                        </tr>
                                        <tr class="totals">
                                            <td>Claim Total</td>
                                            <td></td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r">36.10</td>
                                        </tr>
                                        <tr>
                                            <td colspan="12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>TT99902</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>K21.9</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99902</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                         
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>R11.2</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99902</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>Z23</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99902</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">95.00</td>
                                            <td class="r">95.00</td>
                                            <td class="r">18.87</td>
                                            <td class="r">18.87</td>
                                          
                                            <td>PX</td>
                                            <td>G0463-25</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99902</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">33.00</td>
                                           <td class="r">33.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td>PX</td>
                                            <td>2039</td>
                                            <td>Y</td>
                                           <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99902</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">31.00</td>
                                            <td class="r">23.65</td>
                                          <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                          
                                            <td>PX</td>
                                            <td>G0008</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr class="totals">
                                            <td>Claim Total</td>
                                            <td></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>E11.9</td>
                                            <td>N</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                           
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>Z91.19</td>
                                            <td>N</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                         
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>Z71.3</td>
                                            <td>N</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>Z71.89</td>
                                            <td>N</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                         
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>W95.1</td>
                                            <td>N</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r"></td>
                                         
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td>DX</td>
                                            <td>Z23</td>
                                            <td>Y</td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">150.00</td>
                                            <td class="r">99.70</td>
                                            <td class="r">97.71</td>
                                            <td class="r">97.71</td>
                                          
                                            <td>PX</td>
                                            <td>99214-25</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">230.00</td>
                                          
                                            <td class="r">0.00</td>
                                             <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                          
                                            <td>PX</td>
                                            <td>G0402</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">87.00</td>
                                            <td class="r">0.00</td>
                                          <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                          
                                            <td>PX</td>
                                            <td>99497</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">20.00</td>
                                            <td class="r">0.01</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td>PX</td>
                                            <td>G0442-59</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">250.00</td>
                                            <td class="r">36.72</td>
                                       <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                           
                                            <td>PX</td>
                                            <td>77080-59</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">35.00</td>
                                            <td class="r">22.73</td>
                                        <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                           
                                            <td>PX</td>
                                            <td>G0009-59</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>TT99943</td>
                                            <td>mm/dd/yy</td>
                                            <td class="r">210.00</td>
                                            <td class="r">181.06</td>
                                           <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                          
                                            <td>PX</td>
                                            <td>90670</td>
                                            <td>N</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr class="totals">
                                            <td>Claim Total</td>
                                            <td></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                          
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="r"></td>
                                            <td class="r"></td>
                                            <td class="r">0.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="12">&nbsp;</td>
                                        </tr>
                                        <tr class="totals">
                                            <td class="fauxth setwidth-10 center">Total # Clms</td>
                                            <td class="fauxth setwidth-10 center">&nbsp;</td>
                                            <td class="fauxth setwidth-10 center">Total Amt Billed</td>
                                            <td class="fauxth setwidth-10 center">Total Allowed</td>
                                          
                                            <td class="fauxth setwidth-5 center">OHI PR Total</td>
                                            <td class="fauxth setwidth-5 center">CHAMPVA Total Paid</td>
                                            <td class="fauxth setwidth-5 center">&nbsp;</td>
                                            <td class="fauxth setwidth-10 center"></td>
                                         
                                            <td class="fauxth setwidth-3 center">&nbsp;</td>
                                            <td class="fauxth setwidth-10 center">Total Ded Waived</td>
                                            <td class="fauxth setwidth-10 center">Total CS Waived</td>
                                            <td class="fauxth setwidth-15 center">Grand Total Amt Waived</td>
                                        </tr>
                                        <tr>
                                            <td class="r">6</td>
                                            <td></td>
                                            <td class="r">1,777.00</td>
                                            <td class="r">724.36</td>
                                            <td class="r">186.98</td>
                                            <td class="r">349.08</td>
                                            <td class="r"></td>
                                         
                                            <td></td>
                                         
                                            <td></td>
                                            <td class="r">89.05</td>
                                            <td class="r">33.36</td>
                                            <td class="r">122.41</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php include '../components/_footer.php'; ?>
        </div>
    </main>

    <?php include '../components/_printbutton.php'; ?>
    <?php include '../_globals-bottom.php'; ?>
</body>

</html>