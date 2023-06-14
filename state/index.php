<?php
include('../config/config.php');
$title =  "State";

$total_budget = "7500";

function calculateMaxDiscount($total_budget)
{
    if ($total_budget >= 1000 && $total_budget <= 100000) {
        $max_dis = intval(round($total_budget / 2 / 100) * 100);
    } else if ($total_budget >= 1000 && $total_budget <= 100000) {
        $max_dis = intval(round($total_budget / 2 / 1000) * 1000);
    } else if ($total_budget >= 100000) {
        $max_dis = intval(round($total_budget / 2 / 1000) * 1000);
    } else if ($total_budget <= 1000) {
        $max_dis = intval(round($total_budget / 2 / 10) * 10);
    }

    return $max_dis;
}

$max_dis = calculateMaxDiscount($total_budget);
$whoUser = "Bagmati State";
include('../include/header.php');
include('../include/navbar.php');
?>

<!-- Modal -->
<div class="modal fade" id="db" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form class="form-ui" action="<?= base_url('admin/index.php') ?>" autocomplete="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Budget Distribution</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Your Total Budget</label>
                    <div class="progress mb-3 d-flex align-items-center">
                        <div class="progress-bar bg-success text-white text-end pe-3" role="progressbar" style="width: 100%;height:56px" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" disabled>
                            <strong class="my-auto fw-bold">Rs. <span id="total_budget"><?= $total_budget ?></span>.00 /-</strong>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Fiscal Year<span>*</span></label>
                        <input type="text" disabled name="fiscal_year" class="form-control" id="fiscal_this_year" required>
                    </div>

                    <div class="form-group">
                        <label for="">State<span>*</span></label>
                        <select name="" id="state" class="form-control" required>
                            <option value="" selected>Select State</option>
                            <option value="Bagmati">Bagmati</option>
                            <option value="Gandaki">Gandaki</option>
                            <option value="Karnali">Karnali</option>
                            <option value="Province No. 1">Province No. 1</option>
                            <option value="Province No. 2">Province No. 2</option>
                            <option value="Province No. 5">Province No. 5</option>
                            <option value="Sudurpashchim">Sudurpashchim</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="mb-0">Budget Amount <span id="selected_date"></span></label>
                        <input type="range" class="form-range custom-range" id="progress-slider" min="1" max="<?= $total_budget ?>" value="0">

                        <strong> Rs. <input type="number" class="border-0 px-2 fw-bold" name="" id="progress-text" required>
                        </strong>

                        <span id="budgetDistributeError"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Distribute</button>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="sect-admin-index">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#db">
                    Distribute Budget
                </button>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Districts</h4>
                    </div>
                    <div class="card-body">
                        <div class="flex-between">
                            <div>
                                <p>77</p>
                            </div>
                            <div><a href="<?= base_url('view_zones') ?>">View Details <i class="fas fa-arrow-right"></i></a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js" type="text/javascript"></script>

<script type="text/javascript">
    var state = document.getElementById('state');
    state.addEventListener("change", budgetF);

    function budgetF(event) {
        var inputValue = event.target.value;
        document.getElementById('selected_date').innerText = "for " + inputValue;
    }

    // display current fiscal year
    const currentYear = NepaliFunctions.GetCurrentBsDate().year;
    const nextYear = currentYear + 1;
    const yearFiscalRange = `${currentYear}/${nextYear}`;
    // console.log(yearFiscalRange);

    document.getElementById('fiscal_this_year').value = yearFiscalRange;

   // display the amount in progress text while sliding and stop at min_dis value
var progressSlider = document.getElementById('progress-slider');
var progressText = document.getElementById('progress-text');
var maxDis = <?= $max_dis ?>;

progressSlider.addEventListener('input', function() {
    var value = parseInt(progressSlider.value);
    if (value > maxDis) {
        progressSlider.value = maxDis;
        value = maxDis;
    }
    var roundedAmount = Math.round(value / 100) * 100;
    progressText.value = roundedAmount.toFixed(0);
});

progressText.addEventListener('input', function() {
    var enteredValue = parseFloat(progressText.value);
    if (enteredValue > maxDis) {
        progressText.value = maxDis.toFixed(0);
        enteredValue = maxDis;
    }
    var roundedAmount = Math.round(enteredValue / 100) * 100;
    progressSlider.value = roundedAmount.toFixed(0);
});
</script>

<?php
include('../include/footer.php');
?>
