<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>cru-portal-prototype</title>
    <?php include '../_globals-top.php'; ?>
    <script type="text/javascript">
    $(document).ready(function() {
        $('table.table-sort').filterTable();
    });
    </script>
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
                                <a class="btn btn-back" role="button" href="/sch/sch-landing-page.php" tabindex=1>&nbsp;
                                    <i class="fas fa-angle-left"></i>&nbsp;SCH Home
                                </a>
                            </small>
                        </div>
                        <div class="report-wrapper">
                            <div class="h1">CRU Benefits Calculation Factors | Sole Community Hospital<div
                                    class="print-nav">
                                    <ul>
                                        <li>
                                            <small>
                                                <a href="#" data-toggle="modal" data-target="#print">Print&nbsp;<i
                                                        class="fas fa-print"></i></a></small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="cru" />
                            <div class="row">
                                <span class="fauxtab active">TRICARE Values</span>
                                <span class="fauxtab">Medicare Values</span>
                            </div>
                            <div class="row">

                                <h1>Sole Community Hospital CCRs | <small>Review and
                                        modify SCH CCRs
                                        below.</small></h1>

                            </div>
                            <div class="row">
                                <div class="col-12 right mb15">

                                    <button class="white mr5">Import</button>
                                    <button class="brand mr15">Add SCH</button>
                                </div>
                            </div>
                            <hr class="short" />
                            <div class="row">
                                <div class="col-3">
                                    Average Medicare Total CCR
                                </div>
                                <div class="col-3">
                                    <span class="strong">Average CAP Medicare CY CCR</span>
                                </div>
                                <div class="col-2 right">
                                    <span class="strong">Year 1:</span> 0.777
                                </div>
                                <div class="col-2 right">
                                    <span class="strong">Year 2:</span> 0.666
                                </div>
                                <div class="col-2 right">
                                    <span class="strong">Year 3:</span> 0.555
                                </div>
                            </div>
                            <hr class="short" />
                            <div class="col-12">
                                <div class="row">
                                    <!-- <form>
										<div class="row float-right">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="active">
												<label class="custom-control-label" for="active">Active</label>
											</div>&nbsp;
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input"
													id="inactive">
												<label class="custom-control-label"
													for="inactive">Inactive</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="pending">
												<label class="custom-control-label" for="pending">Pending</label>
											</div>
											<input type="text" class="daterange"
												placeholder="Date Range From"><input type="text"
												class="daterange" placeholder="Date Range To">
											<a class="label pt8 mr25" href="javascript:void()">Clear All <i
													class="fas fa-eraser"></i></a>
										</div>
									</form> -->

                                    <table class="table-sort">
                                        <thead>
                                            <tr>
                                                <th scope="col"><input type="checkbox" id="checkall" class="checkbox">
                                                </th>
                                                <th class="table-sort" scope="col">Provider ID</th>
                                                <th class="table-sort" scope="col">Tax ID</th>
                                                <th class="table-sort" scope="col">Zip Code</th>
                                                <th class="table-sort setwidth-25" scope="col">SCH Name</th>
                                                <th class="table-sort" scope="col">CY 2019</th>
                                                <th class="table-sort" scope="col">CY 2020</th>
                                                <th class="table-sort" scope="col">CY 2021</th>
                                                <th class="table-sort" scope="col">CY 2022</th>
                                                <th class="table-sort" scope="col">CY 2023</th>
                                                <th class="setwidth-3" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" name="pxcode" id="zero" class="checkbox">
                                                </td>
                                                <td>002457Z</td>
                                                <td>1234567890</td>
                                                <td>123456</td>
                                                <td class="allcaps">Southwestern...</td>
                                                <td>0.999</td>
                                                <td>0.888</td>
                                                <td>0.777</td>
                                                <td>0.666</td>
                                                <td>0.555</td>
                                                <td>
                                                    <div class="dropleft" style="float:right;">
                                                        <a class="dropleftbtn"><img
                                                                src="/dist/img/left-slideout-btn.png" /></a>
                                                        <div class="dropleft-content-short">
                                                            <ul class="nobullet">

                                                                <li><a class="history" href="#" data-toggle="modal"
                                                                        data-target="#medHistModal">Deactivate&nbsp;<i
                                                                            class="fas fa-history"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="pxcode" id="one" class="checkbox">
                                                </td>
                                                <td>002457Z</td>
                                                <td>1234567890</td>
                                                <td>123456</td>
                                                <td class="allcaps">Northwestern...</td>
                                                <td>0.999</td>
                                                <td>0.888</td>
                                                <td>0.777</td>
                                                <td>0.666</td>
                                                <td>0.555</td>
                                                <td>
                                                    <div class="dropleft" style="float:right;">
                                                        <a class="dropleftbtn"><img
                                                                src="/dist/img/left-slideout-btn.png" /></a>
                                                        <div class="dropleft-content-short">
                                                            <ul class="nobullet">

                                                                <li><a class="history" href="#" data-toggle="modal"
                                                                        data-target="#medHistModal">Deactivate&nbsp;<i
                                                                            class="fas fa-history"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="pxcode" id="zero" class="checkbox">
                                                </td>
                                                <td>002457Z</td>
                                                <td>1234567890</td>
                                                <td>123456</td>
                                                <td class="allcaps">Southwestern...</td>
                                                <td>0.999</td>
                                                <td>0.888</td>
                                                <td>0.777</td>
                                                <td>0.666</td>
                                                <td>0.555</td>
                                                <td>
                                                    <div class="dropleft" style="float:right;">
                                                        <a class="dropleftbtn"><img
                                                                src="/dist/img/left-slideout-btn.png" /></a>
                                                        <div class="dropleft-content-short">
                                                            <ul class="nobullet">

                                                                <li><a class="history" href="#" data-toggle="modal"
                                                                        data-target="#medHistModal">Deactivate&nbsp;<i
                                                                            class="fas fa-history"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="pxcode" id="one" class="checkbox">
                                                </td>
                                                <td>002457Z</td>
                                                <td>1234567890</td>
                                                <td>123456</td>
                                                <td class="allcaps">Northwestern...</td>
                                                <td>0.999</td>
                                                <td>0.888</td>
                                                <td>0.777</td>
                                                <td>0.666</td>
                                                <td>0.555</td>
                                                <td>
                                                    <div class="dropleft" style="float:right;">
                                                        <a class="dropleftbtn"><img
                                                                src="/dist/img/left-slideout-btn.png" /></a>
                                                        <div class="dropleft-content-short">
                                                            <ul class="nobullet">

                                                                <li><a class="history" href="#" data-toggle="modal"
                                                                        data-target="#medHistModal">Deactivate&nbsp;<i
                                                                            class="fas fa-history"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="pxcode" id="zero" class="checkbox">
                                                </td>
                                                <td>002457Z</td>
                                                <td>1234567890</td>
                                                <td>123456</td>
                                                <td class="allcaps">Southwestern...</td>
                                                <td>0.999</td>
                                                <td>0.888</td>
                                                <td>0.777</td>
                                                <td>0.666</td>
                                                <td>0.555</td>
                                                <td>
                                                    <div class="dropleft" style="float:right;">
                                                        <a class="dropleftbtn"><img
                                                                src="/dist/img/left-slideout-btn.png" /></a>
                                                        <div class="dropleft-content-short">
                                                            <ul class="nobullet">

                                                                <li><a class="history" href="#" data-toggle="modal"
                                                                        data-target="#medHistModal">Deactivate&nbsp;<i
                                                                            class="fas fa-history"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="pxcode" id="one" class="checkbox">
                                                </td>
                                                <td>002457Z</td>
                                                <td>1234567890</td>
                                                <td>123456</td>
                                                <td class="allcaps">Northwestern...</td>
                                                <td>0.999</td>
                                                <td>0.888</td>
                                                <td>0.777</td>
                                                <td>0.666</td>
                                                <td>0.555</td>
                                                <td>
                                                    <div class="dropleft" style="float:right;">
                                                        <a class="dropleftbtn"><img
                                                                src="/dist/img/left-slideout-btn.png" /></a>
                                                        <div class="dropleft-content-short">
                                                            <ul class="nobullet">

                                                                <li><a class="history" href="#" data-toggle="modal"
                                                                        data-target="#medHistModal">Deactivate&nbsp;<i
                                                                            class="fas fa-history"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="pxcode" id="zero" class="checkbox">
                                                </td>
                                                <td>002457Z</td>
                                                <td>1234567890</td>
                                                <td>123456</td>
                                                <td class="allcaps">Southwestern...</td>
                                                <td>0.999</td>
                                                <td>0.888</td>
                                                <td>0.777</td>
                                                <td>0.666</td>
                                                <td>0.555</td>
                                                <td>
                                                    <div class="dropleft" style="float:right;">
                                                        <a class="dropleftbtn"><img
                                                                src="/dist/img/left-slideout-btn.png" /></a>
                                                        <div class="dropleft-content-short">
                                                            <ul class="nobullet">

                                                                <li><a class="history" href="#" data-toggle="modal"
                                                                        data-target="#medHistModal">Deactivate&nbsp;<i
                                                                            class="fas fa-history"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="pxcode" id="one" class="checkbox">
                                                </td>
                                                <td>002457Z</td>
                                                <td>1234567890</td>
                                                <td>123456</td>
                                                <td class="allcaps">Northwestern...</td>
                                                <td>0.999</td>
                                                <td>0.888</td>
                                                <td>0.777</td>
                                                <td>0.666</td>
                                                <td>0.555</td>
                                                <td>
                                                    <div class="dropleft" style="float:right;">
                                                        <a class="dropleftbtn"><img
                                                                src="/dist/img/left-slideout-btn.png" /></a>
                                                        <div class="dropleft-content-short">
                                                            <ul class="nobullet">

                                                                <li><a class="history" href="#" data-toggle="modal"
                                                                        data-target="#medHistModal">Deactivate&nbsp;<i
                                                                            class="fas fa-history"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <!-- <ul class="pagination pagination-small pull-right"> -->
                            <!-- <li class="disabled"><a href="#">&#8656;</a></li> -->
                            <!-- <li class="active"><a href="#">1</a></li> -->
                            <!-- <li><a href="#">2</a></li> -->
                            <!-- <li><a href="#">3</a></li> -->
                            <!-- <li><a href="#">&#8658;</a></li> -->
                            <!-- </ul> -->
                            <div class="modal fade" id="medHistModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">PX Code 99396 Change History</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="pl60">Change Made</label>
                                                </div>
                                                <div class="col-2">
                                                    <label>User DUZ-INIT</label>
                                                </div>
                                                <div class="col-2">
                                                    <label>Activation</label>
                                                </div>
                                                <div class="col-2">
                                                    <label>Effective Date</label>
                                                </div>
                                                <div class="col-3">
                                                    <label>Inactive Date</label>
                                                </div>
                                            </div>
                                            <hr class="short" />
                                            <div class="row">
                                                <div class="col-3">
                                                    JAN 1, 2018 @ 12:00
                                                </div>
                                                <div class="col-2">
                                                    123456-ABC
                                                </div>
                                                <div class="col-2">
                                                    Activate
                                                </div>
                                                <div class="col-2">
                                                    01/01/2018
                                                </div>
                                                <div class="col-3">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-3">
                                                    OCT 10, 2018 @ 12:45
                                                </div>
                                                <div class="col-2">
                                                    767676-BBC
                                                </div>
                                                <div class="col-2">
                                                    Inactivate
                                                </div>
                                                <div class="col-2">
                                                    01/01/2018
                                                </div>
                                                <div class="col-3">
                                                    12/31/2018
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 pl30 pt8">
                                                    Code set to inactive due to new regulatory
                                                    compliance.
                                                    This service is
                                                    no longer considered preventative. Claim not
                                                    exempt from Deductible or Cost
                                                    Share waivers until
                                                    further notice
                                                    from the Centers for Medicare and Medicaide.
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-3">
                                                    JUN 1, 2019 @ 2:32
                                                </div>
                                                <div class="col-2">
                                                    998989-XYZ
                                                </div>
                                                <div class="col-2">
                                                    Activate
                                                </div>
                                                <div class="col-2">
                                                    07/01/2019
                                                </div>
                                                <div class="col-3">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 pl30 pt8">
                                                    Congressional mandate OXK-3210-7 declares this
                                                    code as
                                                    preventative for at least the next five years
                                                    (2024). Code reactivated.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    <script type="text/javascript" src="/dist/js/cru-components/jquery.filtertable.min.js"></script>
    <script type="text/javascript" src="/dist/js/cru-components/tablesort.min.js"></script>
    <script type="text/javascript">
    $(function() {
        $('table.table-sort').tablesort();
        // Check or Uncheck All checkboxes
        $("#checkall").change(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".checkbox").each(function() {
                    $(this).prop("checked", true);
                });
            } else {
                $(".checkbox").each(function() {
                    $(this).prop("checked", false);
                });
            }
        });
        // Changing state of CheckAll checkbox 
        $(".checkbox").click(function() {
            if ($(".checkbox").length == $(".checkbox:checked").length) {
                $("#checkall").prop("checked", true);
            } else {
                $("#checkall").removeAttr("checked");
            }
        });
    });
    </script>
</body>

</html>