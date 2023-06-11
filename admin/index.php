<?php
include('../config/config.php');
$title =  "Admin Login";
include('../include/header.php');
include('../include/navbar.php');
?>

<!-- Modal -->
<div class="modal fade" id="db" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form class="form-ui" action="<?= base_url('admin/index.php') ?>" autocomplete="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Budget Distribution </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Total Budget</label>
                    <div class="progress mb-3 d-flex align-items-center">
                        <div class="progress-bar bg-success text-white text-end pe-3" role="progressbar" style="width: 100%;height:56px" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" disabled>
                            <strong class="my-auto fw-bold">Rs. <span id="total_budget">18756800000</span>.00 /-</strong>
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
                            <option value="Province No. 3">Province No. 3</option>
                            <option value="Province No. 5">Province No. 5</option>
                            <option value="Sudurpashchim">Sudurpashchim</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="mb-0">Budget Amount <span id="selected_date"></span></label>
                        <input type="range" class="form-range custom-range" id="progress-slider" min="1" max="18756800000" value="0">

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
                        <h4>States</h4>
                    </div>
                    <div class="card-body">
                        <div class="flex-between">
                            <div>
                                <p>7</p>
                            </div>
                            <div><a href="<?= base_url('admin/pages/view_states.php') ?>">View Details <i class="fas fa-arrow-right"></i></a></div>

                        </div>
                    </div>
                </div>
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

            <div class="col-lg-4">
                <table class="table table-responsive w-100">
                    <thead>
                        <tr>
                            <th scope="col">Zones</th>
                            <th scope="col">GDP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mechi</td>
                            <td>3.32</td>
                        </tr>
                        <tr>
                            <td>Koshi</td>
                            <td>4.12</td>
                        </tr>
                        <tr>
                            <td>Sagarmatha</td>
                            <td>5.20</td>
                        </tr>
                        <tr>
                            <td>Janakpur</td>
                            <td>2.78</td>
                        </tr>
                        <tr>
                            <td>Bagmati</td>
                            <td>7.50</td>
                        </tr>
                        <tr>
                            <td>Narayani</td>
                            <td>4.92</td>
                        </tr>
                        <tr>
                            <td>Gandaki</td>
                            <td>3.89</td>
                        </tr>
                        <tr>
                            <td>Lumbini</td>
                            <td>2.97</td>
                        </tr>
                        <tr>
                            <td>Dhaulagiri</td>
                            <td>1.56</td>
                        </tr>
                        <tr>
                            <td>Rapti</td>
                            <td>2.05</td>
                        </tr>
                        <tr>
                            <td>Karnali</td>
                            <td>1.78</td>
                        </tr>
                        <tr>
                            <td>Bheri</td>
                            <td>1.32</td>
                        </tr>
                        <tr>
                            <td>Seti</td>
                            <td>1.89</td>
                        </tr>
                        <tr>
                            <td>Mahakali</td>
                            <td>0.95</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-12 d-none">
                <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" mapsvg:geoViewBox="80.051163 30.431317 88.193593 26.348125" width="800.36517" height="454.28867">
                    <path d="m 507.66161,235.81836 3.61,5.49 4.8,-0.38 3.96,-1.72 0.53,1.07 3.23,0.86 4.33,-4.08 3.57,-1.28 6.95,0.5 5.89,2.92 3.74,5.22 2.57,0.1 7.37,6.1 1.2,0.06 2.64,-1.43 12.28,10.52 1.56,3.25 0.12,3.11 5.1,8.31 0.23,1.91 -1.25,1.84 0.22,1.1 7.41,3.06 3.43,0.28 0,0 -1.45,5.86 -3.37,2.7 2.78,9.52 -0.24,2.94 -7.7,0.77 -2.21,2.77 -1.36,4.24 -3.03,4.27 -1.4,3.58 -3.2,1.33 -2.4,2.26 0.65,11.94 -6.4,4.49 -2.52,-0.53 -2.13,0.94 -0.03,3.29 -2.45,3.71 -5.85,-0.95 -2.02,0.33 -3.07,-0.83 -2.91,-1.84 -5.81,-1.44 0,0 -4.41,-2.27 -12.89,-4.27 -5.74,-4.18 -0.92,-7.39 0.71,-1.87 -1.45,-1.98 -1.74,-7.71 -1.55,-2.48 -6.02,-0.79 -9.95,-4.19 -6.89,1.85 -2.79,1.72 -3.74,-1.84 -2.49,3.44 -2.53,-0.31 -1.26,-0.86 -3.09,0.45 -1.77,-1.22 -0.4,-2.43 -2.73,-1.17 -0.86,-1.26 -4.3,0.91 -8.26,-1.68 -0.3,-1.47 2.53,-3.24 -0.81,-1.63 0.45,-1.42 2.85,-3.18 0,0 3.69,3.44 2.13,-0.3 3.14,-1.93 0.36,-1.93 -1.87,-9.74 2.23,-3.45 4.07,-3.66 0.86,-3.96 1.84,-1.57 1.27,-5.24 2.24,-1.01 1.62,0.61 1.88,-0.6 1.02,0.35 1.23,-2.43 3.25,-2.54 0.48,-6.92 1.17,-3 3.37,-2.18 1.58,-2.59 0.63,-3.72 1.99,-2.08 4.72,-1.64 0,0 3.78,1.13 4.63,-1.92 z" title="Bagmati" id="NP-BA" />
                    <path d="m 148.37161,147.36836 2.21,0.72 -2.04,4.21 0.47,2.5 1.76,0.52 2.05,1.9 5.95,-1.79 2.94,0.75 1.98,3.49 8.9,1.12 1.85,2.52 3.07,1.78 4.14,-2.66 2.99,0.96 3.36,-1.05 2,-2 2.72,0.15 4.79,3.38 3.03,0.35 2.79,-1.5 1.2,-3.77 3.24,-4.43 12.42,-7.08 6.18,0.96 5.18,-0.1 1.14,0.9 -0.84,1.76 -0.18,9.45 2.03,1.6 6.73,-2.12 7.37,2.21 0,0 -5.08,2.98 -0.39,6.57 -2.56,2.87 -9.02,4.88 -4.74,6.28 -3.85,-0.59 -2.59,3.38 0.6,4.34 -2.37,1.63 -5.42,2.1 -2.44,8.08 -11.7,-2.77 -2.41,-0.15 -2.12,1.07 -1.23,4.52 2.04,4.61 0.35,4.23 -2.45,4.39 -3,2.62 1.57,4.3 -0.16,2.15 -5.25,6.29 -2.6,-0.1 -7.04,-4.88 -4.78,-1.68 -3.19,2.99 0.18,1.06 -1.26,2.63 0.19,1.58 3.49,3.13 1.48,2.26 4.01,-0.4 2.67,1.21 0.13,1.01 1.86,1.49 2.05,0.26 1.7,1.33 0.62,2.43 8.08,4.15 1.39,3.17 3.4,4.36 7.97,2.37 0.84,3.7 2.04,0.36 1.51,1.75 -0.07,3.71 1.09,1.35 -0.28,3.56 -4.59,-0.92 -2.21,0.91 -3.6,0.18 -2.66,1.79 0,0 -9.63,-0.37 -4.67,7.63 -3.86,-0.15 -5.44,-4.39 -2.8,-0.54 -10.47,-9.6 -3.12,-0.18 -3.51,-1.37 -14.84,-8.7 0.22,-3.64 -2.25,-1.81 -1.09,-2.9 -2.07,-1.61 -4.7,-0.24 -0.78,0.87 0.6,2.22 -5.88,1.09 0.89,-2.39 -0.91,0.21 -1.19,-1 1.97,-0.76 -0.68,-3.43 -7.87,-8.78 -0.33,-4.94 -2.11,-3.56 -11.04,-2.26 -3.600005,-2.26 0,0 2.510005,-3.47 0.57,-3.24 3.05,-1.87 4.92,-4.59 3.64,-4.55 0.88,-3.19 7.28,-8.13 -0.4,-3.11 -3.92,-6.75 -1.34,-4.01 -1.12,-6.83 -2.19,0.58 -2.48,4.22 -3.29,-2.21 -0.04,-3.08 -6.4,-1.6 -5.450005,-2.71 -3.46,-5.74 7.51,-2.48 3.330005,-0.05 11.21,6.65 8.16,0.69 5.29,-1.17 1.65,2.05 2.83,-1.25 2.52,0.24 2.13,-0.73 3.51,6.83 6.05,6.35 0.58,2.39 2.01,0.92 2.59,-0.84 -1.06,-3.45 -2.25,-1.73 -1.16,-3.56 -5.49,-6.32 -0.91,-3.3 -3.38,-3.66 -0.03,-6.77 3.62,-4.92 8.23,-4.99 z" title="Bheri" id="NP-BH" />
                    <path d="m 387.87161,126.93836 0.48,0.19 -0.37,2.23 1.91,1.16 2.38,-1.21 2.58,1.53 2.76,-0.43 3.98,4.25 3.74,0.82 2.06,1.26 0.14,0.93 -2.81,2.89 -1.07,10.31 -3.92,4.88 0.61,2.34 4.27,4.68 0.14,1.28 -1.45,3.06 -0.68,6.69 0,0 -3.26,1.02 -8.1,8.24 -1.89,0.31 -3.64,-2.38 -2.97,0.27 -0.53,4.36 -1.32,2.26 -4.32,3.4 -5.6,2.85 0.07,3.17 1.19,2.09 2.21,1.52 1.76,4.13 -0.6,1.38 -2.25,-0.65 -3.41,1.92 -0.24,1.43 1.76,3.66 0.01,2.25 -4.21,3.29 -4.5,5.04 -1.74,4.91 -1.63,0.47 -0.75,2 4.35,1.85 2.26,2.63 1.82,4.98 -0.35,1.64 4.14,2.67 -0.19,1.07 -1.96,3.17 -2.05,-1.36 -2.03,0.42 -1.1,3.01 0.77,1.12 -0.62,4.27 -2.88,2.77 -0.39,1.99 0.82,0.86 -0.57,5.19 -3.01,3.79 -3.59,1.9 -4.67,-1.64 0,0 -0.88,-0.14 -1.83,-6.18 -1.23,-1.26 -3.27,-1.09 -1.79,-1.56 -3.95,1.11 -3.93,-1.95 -3.36,-4.9 -1.57,0.27 -4.15,-2.7 -4.23,-0.77 -1.44,-1.56 2.35,-3.39 0.38,-2.4 -0.57,-1.01 -4.57,0.21 -1.5,-1.31 -2.57,1.35 -2.5,-0.27 -6.9,1.77 -3.07,-0.15 0,0 -0.06,-1.95 -4.7,-5.34 -7.44,-4.18 -3.74,-4.89 -1.8,-1.25 -1.37,-3.05 -2.23,-2.41 -0.07,-1.48 2.54,-0.5 -0.64,-1.77 -1.65,-1.05 -0.58,-1.37 1.16,-1.19 2.64,-0.81 1.64,-2.63 4.81,0.96 1.04,-2.11 -1.1,-2.64 -1.5,-1.06 2.07,-1.91 6.38,0.47 4.53,-1.54 2.02,-1.61 1.76,-1.82 2.32,-6.26 -0.9,-2.55 0.41,-0.42 0,0 0.9,-0.93 3.92,2.67 3.74,0.46 1.75,0.96 2.45,-0.19 7.33,-2.33 4.01,-2.6 5.4,-1.59 3.92,-2.09 0.16,-4.86 1.64,-4.37 11.29,-14 -0.01,-6.97 1.1,-3.86 1.11,-1.6 2.82,-0.49 1.61,-3.71 -0.58,-1.64 -3.48,-3.63 0,0 1.4,-1.81 1.62,-0.65 4.1,-3.64 6.52,0.84 1.7,-0.7 2.93,-4.37 4.33,-2.49 4.07,-0.93 3.05,0.83 2.33,-1.08 z" title="Dhawalagiri" id="NP-DH" />
                    <path d="m 413.75161,170.99836 1.2,0.53 1.46,2.89 2.48,0.61 3.15,2.07 5.39,0.72 2.65,2.63 0.86,2.09 -0.19,2.1 -1.29,2.51 -0.14,3.5 2.93,-0.84 3.24,2.15 3.16,0.87 4.26,-0.62 4.84,-1.86 6.51,2.34 0.48,2.5 2.49,4.51 -1.64,3.91 0.42,0.9 4.82,1.78 8.02,0.66 3.63,2.53 2.16,-1.95 5.71,-3.16 3.96,1.41 1.97,-0.32 3.93,-4.86 3.18,-2.48 5.92,-0.85 1.94,1.45 4.13,5.21 -1.07,1.87 0.42,4.53 -1.04,0.74 -2.1,8.05 -1.43,2.73 -2.58,13.57 0,0 -4.72,1.64 -1.99,2.08 -0.63,3.72 -1.58,2.59 -3.37,2.18 -1.17,3 -0.48,6.92 -3.25,2.54 -1.23,2.43 -1.02,-0.35 -1.88,0.6 -1.62,-0.61 -2.24,1.01 -1.27,5.24 -1.84,1.57 -0.86,3.96 -4.07,3.66 -2.23,3.45 1.87,9.74 -0.36,1.93 -3.14,1.93 -2.13,0.3 -3.69,-3.44 0,0 -4.27,-5.59 -4,0.35 -3.09,2.64 -3.24,1.58 -0.61,1.17 -8.1,2.65 2.14,6.08 -0.33,0.78 0,0 -8.18,-1.58 -2.17,2.14 -2.85,-3.49 -0.87,-4.11 -3.16,-3.95 -9.53,-0.27 -8.47,-1.33 -5.67,0.69 -12.23,-2.22 -10.59,0.12 -2.96,-2.46 -5.29,-1.54 -3.7,-0.32 -3.33,1.5 -5.46,-2.95 -2.54,-0.54 -10.69,0.91 -2.14,-0.84 -0.16,-1.01 2.31,-2.16 10.43,-2.03 1.57,-0.98 1.91,-3.68 0,0 4.67,1.64 3.59,-1.9 3.01,-3.79 0.57,-5.19 -0.82,-0.86 0.39,-1.99 2.88,-2.77 0.62,-4.27 -0.77,-1.12 1.1,-3.01 2.03,-0.42 2.05,1.36 1.96,-3.17 0.19,-1.07 -4.14,-2.67 0.35,-1.64 -1.82,-4.98 -2.26,-2.63 -4.35,-1.85 0.75,-2 1.63,-0.47 1.74,-4.91 4.5,-5.04 4.21,-3.29 -0.01,-2.25 -1.76,-3.66 0.24,-1.43 3.41,-1.92 2.25,0.65 0.6,-1.38 -1.76,-4.13 -2.21,-1.52 -1.19,-2.09 -0.07,-3.17 5.6,-2.85 4.32,-3.4 1.32,-2.26 0.53,-4.36 2.97,-0.27 3.64,2.38 1.89,-0.31 8.1,-8.24 3.26,-1.02 0,0 1.53,0.4 3.51,-1.72 z" title="Gandaki" id="NP-GA" />
                    <path d="m 607.04161,274.71836 9.07,0.49 3.37,3.51 4.9,-2.26 2.22,-0.15 0.45,0.48 -2.63,3.9 1.47,1.8 1.09,0.01 4.23,-2.76 4.33,1.87 1.23,-2.48 -0.93,-1.58 0,0 3.54,4.41 1.35,4.5 -1.1,2.31 -0.37,4.21 2.57,7.04 -0.37,4.6 -3.27,2.03 -4.84,1.7 -2.04,4.78 -4.33,5.2 -0.89,2.17 -3.42,1.97 -4.37,5.3 -1.46,3.17 -4.75,3.98 -3.76,6.17 0.12,5.71 1.32,3.55 -2.54,5.07 1.11,1.08 3.96,0.4 10.86,7.82 -2.3,7.13 0.61,2.93 -0.38,2.16 1.22,2.54 -2.14,8.93 -1.32,1.29 -4.54,1.35 -2,2.69 -2.74,2.08 -4.02,0.3 -5.05,-2.38 -1.26,0.54 1.04,9.67 -1.07,5.52 1.4,4.09 2.34,1.38 1.71,3.74 -3.03,6.22 0,0 -0.47,-0.45 -3.45,1.45 0.07,-2.45 -5.24,-1.89 -1.66,-1.62 -3.74,-0.84 -1.88,1.16 -3.81,-0.38 -1.88,1.06 -1.2,3.73 -3.15,0.75 -2.59,2.8 -0.76,-0.21 -1.97,1.69 -0.97,-0.03 0.84,-2.36 -0.48,-1.85 -2.11,-0.51 -0.04,1.14 -1.18,-0.07 -1.58,-2.4 -3.28,-0.72 -3.11,-2.04 -0.12,-1.56 -1.18,-1.8 0.31,-4.71 0.8,-1.56 -0.54,-1.1 0.59,-5.09 -0.95,-2.39 -4.75,-3.08 -3.42,-0.92 -0.6,-2.1 -1.26,-0.18 -1.47,1.85 -2.07,0.96 -0.34,-1.08 -0.84,-0.17 -0.88,2.06 -0.82,-0.22 -0.4,0.98 -0.97,-0.39 -2.21,2.69 -2.12,0.01 -0.45,1.75 -1.6,-0.6 -0.31,1.3 -1.79,0.91 -4.85,-0.97 -3.17,3.31 -1.51,-0.27 -2.47,2.36 0,0 2.48,-9.04 5.12,-7.46 1.73,-4.37 0.08,-3.72 -1.39,-3.99 1.49,-4.48 6.74,-6.65 -0.34,-2.18 2.22,-7.29 -0.14,-2.12 -1.54,-3.6 -1.85,-2.18 -1.81,-0.87 -1.18,-3.95 0.47,-2.12 4.35,-4.85 0,0 5.81,1.44 2.91,1.84 3.07,0.83 2.02,-0.33 5.85,0.95 2.45,-3.71 0.03,-3.29 2.13,-0.94 2.52,0.53 6.4,-4.49 -0.65,-11.94 2.4,-2.26 3.2,-1.33 1.4,-3.58 3.03,-4.27 1.36,-4.24 2.21,-2.77 7.7,-0.77 0.24,-2.94 -2.78,-9.52 3.37,-2.7 1.45,-5.86 0,0 3.5,-1.19 2.48,-2.09 -1.37,-2.58 -0.57,-2.99 -2.75,-2.63 -0.64,-3.09 0.68,-6.62 2.3,-1.33 6.28,-6.41 0.92,0.69 0.02,1.84 3.45,5.24 -1.94,2.57 1.18,7.33 1.17,2.53 z" title="Janakpur" id="NP-JA" />
                    <path d="m 156.40161,0.2583641 1.49,1.23 3.67,0.68 3.11,2.19 3.9,1.12 18.64,3.47 5.1,2.1299999 4.57,-0.66 7.61,0.86 2.26,0.87 0.55,0.94 -1.68,2.37 1.68,7.54 3.9,3.58 0.99,2.56 0.03,2.15 -2.21,5.71 1.09,1.58 8.03,3.28 3.22,0.33 1.63,1.5 5.57,1.99 2.04,-0.08 2.45,2.04 2.03,-0.31 2.89,1.14 1.62,-0.28 1.91,2.74 6.22,3.35 2.06,2.35 0.41,2.18 5.45,5.62 3.87,2.69 2.53,3.65 0.36,2.17 1.95,3 6.53,2.81 2.57,2.98 1.13,0.62 6.41,0.26 4.94,3.01 2.43,0.01 2.73,1.33 5.34,3.77 6.47,0.83 1.62,2.36 3.09,-0.06 4.73,2.14 1.53,2.33 0.08,4.569996 6.86,2.34 0.69,0.98 -0.39,4.09 6.52,6.23 0.98,3.33 2.5,2.98 1.29,6.18 4.27,2.61 3.27,5.07 2.89,2.41 7.13,3.33 1.78,-0.73 0.72,-1.71 0,0 3.48,3.63 0.58,1.64 -1.61,3.71 -2.82,0.49 -1.11,1.6 -1.1,3.86 0.01,6.97 -11.29,14 -1.64,4.37 -0.16,4.86 -3.92,2.09 -5.4,1.59 -4.01,2.6 -7.33,2.33 -2.45,0.19 -1.75,-0.96 -3.74,-0.46 -3.92,-2.67 -0.9,0.93 0,0 -7.57,-3.94 -3.85,-0.82 -7.77,-4.09 -5.39,-0.69 -4.94,1.05 -2.42,-1.04 -2.29,0.55 -9.34,-4.26 0.34,-4.46 -3.02,-3.18 -3.31,-5.13 -4.17,-0.95 -2.84,-1.72 0,0 -7.37,-2.21 -6.73,2.12 -2.03,-1.6 0.18,-9.45 0.84,-1.76 -1.14,-0.9 -5.18,0.1 -6.18,-0.96 -12.42,7.08 -3.24,4.43 -1.2,3.77 -2.79,1.5 -3.03,-0.35 -4.79,-3.38 -2.72,-0.15 -2,2 -3.36,1.05 -2.99,-0.96 -4.14,2.66 -3.07,-1.78 -1.85,-2.52 -8.9,-1.12 -1.98,-3.49 -2.94,-0.75 -5.95,1.79 -2.05,-1.9 -1.76,-0.52 -0.47,-2.5 2.04,-4.21 -2.21,-0.72 0,0 -2.28,-0.5 -3.37,-3.05 -1.3,-2.64 0.67,-7.68 -1.63,-1.39 -0.72,-1.84 2.54,-3.15 8.4,-7.32 3.75,-0.1 2.85,3.12 0.43,2.77 1.61,0.68 6.67,-2.99 3.42,-2.86 3.09,-4.3 0.94,-3.84 -2.16,-8.5 -1.54,-1.87 -0.39,-9.539996 -2.1,-1.86 -3.26,-0.28 -1.03,-6.23 0.25,-2.48 3.6,-2.47 0.92,-2.45 -0.26,-2.53 1.35,-5.98 1.41,-1.69 1.18,-0.13 0.51,-4.57 -0.59,-3.3 -8.52,-1.29 -1.7,-2.19 -2.87,-0.86 -7.03,2.3 -3.52,-0.27 -4.15,2.54 -1.42,-0.01 -2.55,1.31 -0.68,-6.04 0.3,-4.21 -1.76,-1.97 -4.03,-1.92 -2.89,2.31 -2.38,0.06 -2.39,-2.11 -3.22,-0.37 -3.93,-3.28 0,0 1.03,-5.67 -0.22,-4.02 2.68,-0.99 4.59,0.14 5.07,-7.21 0.12,-4.1 1.98,-6.01 -2.13,-5.4099999 -0.29,-3.19 1.09,-3 3.47,-1.33 4.86,-0.41 1.23,0.64 2.34,3.54 5.65,1.65 0.89,-6.27 z" title="Karnali" id="NP-KA" />
                    <path d="m 695.88161,291.65836 10.01,1.1 3.59,-2.8 7.22,1.48 7.39,-2.47 1.19,0.63 -1.02,1.33 0.41,0.57 3.78,0.71 5.2,-1.74 4.29,-2.82 1.97,-0.47 1.08,0.86 0.19,4.6 1.96,0.89 3.73,-2.43 4.02,-1.12 0,0 -1.62,11.39 -2.31,3.59 -2.26,1.36 -0.57,2.27 -1.25,1.54 -1.72,-1.87 -1.41,-0.38 -1.57,2.14 -0.85,5.75 -0.96,2 -4.67,2.78 -2.57,16.94 0.4,6.78 3.25,3.67 1.47,3.72 4.43,2.58 6.94,0.52 4.26,1.07 7.12,3.41 1.03,1.34 -4.1,4.39 -0.96,2.19 -3.2,2.95 -7.65,4.04 -5.08,6.33 -0.85,3.71 -3.11,4.06 2.34,5.29 -0.51,2.4 5.12,2.19 1.28,0.99 0.81,1.93 2.59,0.82 5.64,3.46 0.5,2.07 -0.96,5.96 -3.29,9.37 1.31,5.7 -1.59,1.47 1.61,9.83 2.11,4.71 0,0 -1.11,0.01 -0.05,2.11 -2.66,1.16 0.13,1.39 -3.8,0.22 -0.48,1.07 -1.87,-0.16 -0.36,-1.24 -3.08,-1.23 -0.56,-1.48 -5.49,-2 -3.05,-0.3 -3.35,2.04 -3.93,0.25 -1.83,1.23 -1.41,2.39 0.25,2.73 -1.68,1.33 -2.72,-2.57 -1.02,0.58 -1.25,-0.87 -2.33,0.08 -0.49,-4.01 -3.07,-0.36 -1.23,1.03 -0.52,-0.95 -2.47,-0.11 0.31,1.02 -3.28,-0.12 -6.4,-5.07 -1.99,-14.68 -2.62,-0.08 0.03,1.55 -2.95,4.29 -2.88,0.63 -0.87,0.94 -3.19,0.26 0,0 -0.4,-4.29 1.33,-4.25 4.24,-6.64 2.75,-2.51 5.63,-7.98 8.45,-8.28 1.66,-2.33 0.84,-4.36 -1.83,-2.26 -2.79,-0.5 -7.62,1.96 -5.19,3.42 -2.52,-2.37 -0.97,-1.88 1.04,-4.36 -2.28,-4.58 -0.14,-8.46 -3.87,-2.8 -0.51,-2.13 2.19,-6.71 -0.2,-3.09 -1.33,-1.33 -0.74,-3.6 1.89,-1.23 2.11,0.09 3.81,-4.17 -3.05,-0.96 0.11,-3.49 -3.26,-3.6 -1,-5.73 3.43,-4.99 1.52,-13.38 2.68,-5.42 0.38,-6.32 1.43,-3.37 -3.28,-3.51 0.4,-2.07 2.91,-3.9 -3.56,-9.51 0.65,-6.82 0,0 3.49,-0.02 4.13,3.23 2.94,3.6 4.11,1.93 1.37,1.96 -2.24,2.3 z" title="Koshi" id="NP-KO" />
                    <path d="m 298.83161,245.13836 3.07,0.15 6.9,-1.77 2.5,0.27 2.57,-1.35 1.5,1.31 4.57,-0.21 0.57,1.01 -0.38,2.4 -2.35,3.39 1.44,1.56 4.23,0.77 4.15,2.7 1.57,-0.27 3.36,4.9 3.93,1.95 3.95,-1.11 1.79,1.56 3.27,1.09 1.23,1.26 1.83,6.18 0.88,0.14 0,0 -1.91,3.68 -1.57,0.98 -10.43,2.03 -2.31,2.16 0.16,1.01 2.14,0.84 10.69,-0.91 2.54,0.54 5.46,2.95 3.33,-1.5 3.7,0.32 5.29,1.54 2.96,2.46 10.59,-0.12 12.23,2.22 5.67,-0.69 8.47,1.33 9.53,0.27 3.16,3.95 0.87,4.11 2.85,3.49 2.17,-2.14 8.18,1.58 0,0 -0.58,1.75 -3.13,3.25 -3.59,1.33 -1.47,-1.11 -9.65,4.48 -1.31,1.48 -2.78,0.82 -0.51,1.21 -3.48,1.38 -2.26,4.77 -1.86,1.83 -4.34,0.88 -16.17,0.95 -0.95,0.66 0.06,1.11 4.25,1.19 -1.96,2.64 -1.39,3.86 0,0 -1.2,-0.61 -2.02,0.98 -4.03,0.55 -2.31,-1.22 -0.93,0.98 -0.43,1.66 4.85,5.06 -1.94,3.43 -4.25,-3.32 -20.62,-10.36 -20.78,-1.02 -0.8,0.28 0.13,1 1.13,1.35 -1.56,2.82 1.42,1.49 0.05,1.81 -1.07,1.07 -0.37,1.78 -1.65,0.81 -0.07,1.14 -1.57,1.65 -4.5,1.18 -3.26,-1.92 -0.86,-1.64 0.24,-2.1 -5.55,-4.04 -1.03,-2.04 -2.1,-1.89 -12.89,0.53 -2.94,-0.52 -7.17,-2.17 -1.07,-2.36 -1.33,-0.75 -4.17,0.48 -4.17,-0.57 -2.22,0.64 -7.52,-0.6 -0.37,-1.45 1.13,-1.05 -0.82,-2.78 1.36,-3.81 -1.69,-3.2 0.62,-2.13 -1.09,-1.05 -0.01,-1.25 -1.25,-0.27 -0.41,-0.81 0.35,-2.9 -1.07,-2.37 0.48,-2.04 -1.24,0.97 0,0 -0.11,-1.78 1.75,-1.45 7.81,1.15 2.6,-2.22 2.73,-0.5 1.39,-1.95 -1.54,-0.94 -2.89,-0.26 -3.63,-2.48 2.67,-6.99 3.87,-2.4 4.37,0.34 6.41,-2.07 7.6,-0.36 0.02,-2.34 -1.81,-2.56 -4.45,-2.74 1.06,-7.28 4.71,-4.49 1.97,-0.79 2.41,-2.78 -3.7,-2.44 0.25,-4.58 -1.19,-1.26 2.56,-2.33 3.65,-1.22 z" title="Lumbini" id="NP-LU" />
                    <path d="m 85.741605,28.418364 3.41,-0.71 0.94,-0.88 1.28,0.46 3.39,-1.23 4.13,-0.14 2.650005,2.72 1.96,3.38 -1.26,3 0.09,3.86 1.34,1.82 1.55,0.35 0,0 -3.49,1.75 -1.44,1.91 -2.820005,1.02 -1.76,1.61 -2.52,7.43 1.35,3.33 2.95,3.54 0.16,3.72 2.2,2.52 1.010005,4.52 -2.250005,4.26 -8.66,2.17 -5.93,0.24 -12.76,5.83 1.19,4.92 -0.43,4.3 -1.3,2.94 -1.89,0.52 0.46,2.979996 3.59,2.46 0.42,3.45 4.37,-0.09 2.37,1.52 1.18,1.61 0.5,2.72 -2.34,4.35 -2.7,2.2 -4.21,0.55 -3.62,2.28 0.85,5.63 -3.1,5.97 -2.34,2.19 -0.64,2.38 -11.93,5.54 -1.39,4.37 -2.83,1.53 1.28,2.78 -3.17,9.1 -0.29,2.21 0.7,2.34 -1.4,12.92 3.81,9.45 0.47,3.26 -0.82,3.98 0,0 -4.06,2.71 1.2,9.58 1.21,1.24 -1.01,1.23 -3.27,-2.92 -1.73,-0.48 0.2,-1.49 -0.81,-2.09 -2.69,-1.91 -5.45,0.8 -1.34,-0.56 -0.72,-1.83 -2.9,-1.68 -0.94,-3.33 -4.25,-1.46 -1.71,-1.68 0.83,-2.09 -0.84,-1.11 -5.06,-0.73 -7.5999999,-6.94 -5.03,-0.16 -1.16,-0.63 -0.67,-1.79 0.29,-8.2 3.53,-7 1.82,-0.43 0.42,-1.92 1.51,-0.43 -1.02,-0.89 -0.03,-2.27 1.31,-2.4 -0.73,-1.84 1.57,-3.6 3.3099999,-3.07 3.3,1.44 2.04,0.05 1.22,-1.67 2.05,-1.19 -1.01,-2.28 0.06,-2.53 -1.34,-1.69 0.36,-1.87 0.74,0.07 0.3,0.89 1.85,0.35 0.81,1.31 1.03,-0.3 -0.46,-4.1 0.65,-0.68 0.36,-4.69 1.12,-1.86 -0.27,-2.57 -1.95,-0.48 -0.21,-1.52 -0.91,-0.38 -0.18,-1.67 -0.81,-0.71 0.56,-0.99 -0.35,-2.28 -2.82,-1.57 -0.26,-3.66 0.07,-0.57 3.29,-1.3 0.73,1.09 1.47,-0.31 -1.07,-2.13 1.04,-1.85 1.31,0.59 0.2,-1.38 3.48,-2.65 0.42,-1.66 -0.92,-0.69 0.29,-1.469996 3.37,-2.24 1.16,-0.02 1.59,-3.05 -0.06,-1.98 1.03,-2.85 -2.85,-3.15 -1.44,-5.05 -0.96,-1.28 0.35,-2.69 1.29,0.05 1.47,-1.28 0.77,-3.37 2.76,-1.75 1.56,0.85 1.6,-0.38 2.57,0.56 1.13,-2.73 5.18,-4.72 1.32,-3.66 -0.18,-3.19 2.73,-3.43 2.81,-1.16 5.16,0.36 3.88,-4.38 2.28,-0.29 2.44,-6.02 1.96,-1.24 2.15,-3.18 2.98,-0.76 0.97,-1.78 2.29,-1.52 0.29,-1.51 -0.97,-3.18 3.42,-4.98 1.48,0.08 0.25,3.31 z" title="Mahakali" id="NP-MA" />
                    <path d="m 789.81161,286.88836 2.53,0.34 1.33,-0.59 4.2,0.68 2.24,1.66 -0.04,1.43 -2.39,2.09 2.17,3.43 -1.76,4.28 -2.26,2.11 -0.66,6.8 -2.5,2.41 -1.41,4.38 -2.72,2.24 0,2.77 -1.6,1.38 -0.38,1.25 0.67,0.72 -2.23,4.18 0.32,2.36 1.99,3.18 0,1.91 -1.95,1.63 -0.65,3.1 0.12,1.69 1.56,1.55 0.36,1.69 -2.92,6.32 -0.19,3.61 -1.58,3.09 0.04,6.21 -2.56,5.64 3.33,2.95 0.31,3.22 1.73,1.9 2.29,0.77 1.51,-0.48 0.84,3.14 2.25,2.1 1.87,0.23 -1.12,4.19 2.05,2.17 0.01,4.21 3.17,3.1 -0.75,2.48 1.58,4.52 0.19,8.64 -1.97,4.07 -0.67,4.96 -1.89,1.45 -0.83,2.18 0.06,3.11 -1.72,0.51 -0.06,1.12 -0.78,0.42 0.56,1.79 -1.23,3.3 0.9,4.72 -1.18,1.29 0.66,0.82 -1.61,2.59 -5.27,4.92 -0.22,2.38 -2.06,0.05 -1.07,-0.84 -0.68,-1.08 0.08,-2.23 -2.54,-0.53 -3.74,-2.25 -1.15,-1.59 0.89,-1.4 -2.57,-0.32 1.05,-1.05 -1.97,-3.03 -0.41,1.11 -2.65,1.43 0.46,1.19 -1.13,0.7 -0.28,1.09 -2.06,-0.52 0.14,-1.03 -1.47,-1.13 -2.64,-0.84 0.28,0.54 -1.48,1.25 0.3,1.85 -1.32,2.78 -1.23,0.12 -0.4,-1.08 -0.95,-0.1 -0.47,1.21 -1.08,-0.48 -0.91,-1.67 -2.45,-0.91 0,0 -2.11,-4.71 -1.61,-9.83 1.59,-1.47 -1.31,-5.7 3.29,-9.37 0.96,-5.96 -0.5,-2.07 -5.64,-3.46 -2.59,-0.82 -0.81,-1.93 -1.28,-0.99 -5.12,-2.19 0.51,-2.4 -2.34,-5.29 3.11,-4.06 0.85,-3.71 5.08,-6.33 7.65,-4.04 3.2,-2.95 0.96,-2.19 4.1,-4.39 -1.03,-1.34 -7.12,-3.41 -4.26,-1.07 -6.94,-0.52 -4.43,-2.58 -1.47,-3.72 -3.25,-3.67 -0.4,-6.78 2.57,-16.94 4.67,-2.78 0.96,-2 0.85,-5.75 1.57,-2.14 1.41,0.38 1.72,1.87 1.25,-1.54 0.57,-2.27 2.26,-1.36 2.31,-3.59 1.62,-11.39 0,0 2.35,0.84 0.97,2.25 1.56,-2.02 0.94,-0.08 4.32,2.32 1.97,-2.68 3.12,0.62 2.68,2.71 0.73,-0.58 2.23,0.1 1.35,-0.6 2.2,-2.62 1.55,-4.45 4.96,-4.1 4.16,1.21 z" title="Mechi" id="NP-ME" />
                    <path d="m 454.68161,291.50836 -2.85,3.18 -0.45,1.42 0.81,1.63 -2.53,3.24 0.3,1.47 8.26,1.68 4.3,-0.91 0.86,1.26 2.73,1.17 0.4,2.43 1.77,1.22 3.09,-0.45 1.26,0.86 2.53,0.31 2.49,-3.44 3.74,1.84 2.79,-1.72 6.89,-1.85 9.95,4.19 6.02,0.79 1.55,2.48 1.74,7.71 1.45,1.98 -0.71,1.87 0.92,7.39 5.74,4.18 12.89,4.27 4.41,2.27 0,0 -4.35,4.85 -0.47,2.12 1.18,3.95 1.81,0.87 1.85,2.18 1.54,3.6 0.14,2.12 -2.22,7.29 0.34,2.18 -6.74,6.65 -1.49,4.48 1.39,3.99 -0.08,3.72 -1.73,4.37 -5.12,7.46 -2.48,9.04 0,0 -2.84,-1.17 -4.25,-0.27 -2.47,-0.92 -2.97,0.27 -2.94,-5.93 1.42,-2.21 0.18,-3.75 -8.38,-0.29 -2.27,0.71 0.53,0.63 -0.54,0.58 -0.77,-0.47 -1.39,0.97 -3.06,-0.4 -0.67,-0.3 0.55,-2.04 2.55,-1.11 -4.72,-1.08 -0.97,-0.64 0.57,-0.64 -0.5,-1.06 -2.97,-0.49 0.96,-2.27 -1.93,-2.41 -5.97,-1.15 -4.22,-2.08 -0.02,-1.78 -2.83,-1.36 -1.26,0.16 -1.86,2.49 -1.94,-2.35 -1.41,1.96 -11.51,-5.12 0.43,-2.89 2.73,-3.24 -0.36,-1.08 0.59,-0.25 0.81,-4.96 -0.8,-0.19 -0.31,-1.07 0.81,-1.11 0.53,-4.61 -4.81,-9.95 -2.05,-2.79 -13.2,-2.29 -1.49,0.57 -4.71,-1.83 -8.24,-0.47 -3.62,-1.76 -0.94,0.74 -1.65,-1.34 -0.29,-3.13 -1.4,-1.04 -0.5,-1.67 -2.52,0.01 -0.4,1.07 -0.68,0.03 -0.74,-3.07 -2.39,-0.41 -3.1,-1.7 -0.62,-1.11 0.52,-2.42 -2.47,0.86 -1.17,-1.12 -1.06,0.2 -0.69,2.68 -1.13,0.95 -1.32,0.04 -2.05,4.69 -0.98,-0.22 -1.75,1.09 -2.43,-1.05 -1.69,0.8 -1.29,-0.87 -2.21,0.23 0,0 1.39,-3.86 1.96,-2.64 -4.25,-1.19 -0.06,-1.11 0.95,-0.66 16.17,-0.95 4.34,-0.88 1.86,-1.83 2.26,-4.77 3.48,-1.38 0.51,-1.21 2.78,-0.82 1.31,-1.48 9.65,-4.48 1.47,1.11 3.59,-1.33 3.13,-3.25 0.58,-1.75 0,0 0.33,-0.78 -2.14,-6.08 8.1,-2.65 0.61,-1.17 3.24,-1.58 3.09,-2.64 4,-0.35 z" title="Narayani" id="NP-NA" />
                    <path d="m 247.80161,162.09836 2.84,1.72 4.17,0.95 3.31,5.13 3.02,3.18 -0.34,4.46 9.34,4.26 2.29,-0.55 2.42,1.04 4.94,-1.05 5.39,0.69 7.77,4.09 3.85,0.82 7.57,3.94 0,0 -0.41,0.42 0.9,2.55 -2.32,6.26 -1.76,1.82 -2.02,1.61 -4.53,1.54 -6.38,-0.47 -2.07,1.91 1.5,1.06 1.1,2.64 -1.04,2.11 -4.81,-0.96 -1.64,2.63 -2.64,0.81 -1.16,1.19 0.58,1.37 1.65,1.05 0.64,1.77 -2.54,0.5 0.07,1.48 2.23,2.41 1.37,3.05 1.8,1.25 3.74,4.89 7.44,4.18 4.7,5.34 0.06,1.95 0,0 -0.83,1.21 -3.65,1.22 -2.56,2.33 1.19,1.26 -0.25,4.58 3.7,2.44 -2.41,2.78 -1.97,0.79 -4.71,4.49 -1.06,7.28 4.45,2.74 1.81,2.56 -0.02,2.34 -7.6,0.36 -6.41,2.07 -4.37,-0.34 -3.87,2.4 -2.67,6.99 3.63,2.48 2.89,0.26 1.54,0.94 -1.39,1.95 -2.73,0.5 -2.6,2.22 -7.81,-1.15 -1.75,1.45 0.11,1.78 0,0 -2.54,0.38 -1.39,-0.5 -0.41,0.82 -2.24,0.15 -3.5,1.76 -5.42,1.17 -2.61,-0.42 -4.12,1.5 -1.6,-0.09 -6.96,-4.18 -1.61,-2.77 -7.51,-4.27 -8.63,-7.53 -4.64,-2.19 -0.81,0.83 -2.53,-0.86 -2.4,-2.18 -2.57,-4.05 0,0 2.66,-1.79 3.6,-0.18 2.21,-0.91 4.59,0.92 0.28,-3.56 -1.09,-1.35 0.07,-3.71 -1.51,-1.75 -2.04,-0.36 -0.84,-3.7 -7.97,-2.37 -3.4,-4.36 -1.39,-3.17 -8.08,-4.15 -0.62,-2.43 -1.7,-1.33 -2.05,-0.26 -1.86,-1.49 -0.13,-1.01 -2.67,-1.21 -4.01,0.4 -1.48,-2.26 -3.49,-3.13 -0.19,-1.58 1.26,-2.63 -0.18,-1.06 3.19,-2.99 4.78,1.68 7.04,4.88 2.6,0.1 5.25,-6.29 0.16,-2.15 -1.57,-4.3 3,-2.62 2.45,-4.39 -0.35,-4.23 -2.04,-4.61 1.23,-4.52 2.12,-1.07 2.41,0.15 11.7,2.77 2.44,-8.08 5.42,-2.1 2.37,-1.63 -0.6,-4.34 2.59,-3.38 3.85,0.59 4.74,-6.28 9.02,-4.88 2.56,-2.87 0.39,-6.57 z" title="Rapti" id="NP-RA" />
                    <a href="<?= base_url('admin/add-district.php') ?>" title="Sagarmatha">
                        <path d="m 657.31161,262.18836 0.55,4.54 1.13,1.31 1.68,-0.22 3.18,3.06 4.14,-1.42 1.08,0.27 0.79,2.19 5.04,2.6 1.71,2.57 2.48,0.88 2.59,-0.16 0,0 -0.65,6.82 3.56,9.51 -2.91,3.9 -0.4,2.07 3.28,3.51 -1.43,3.37 -0.38,6.32 -2.68,5.42 -1.52,13.38 -3.43,4.99 1,5.73 3.26,3.6 -0.11,3.49 3.05,0.96 -3.81,4.17 -2.11,-0.09 -1.89,1.23 0.74,3.6 1.33,1.33 0.2,3.09 -2.19,6.71 0.51,2.13 3.87,2.8 0.14,8.46 2.28,4.58 -1.04,4.36 0.97,1.88 2.52,2.37 5.19,-3.42 7.62,-1.96 2.79,0.5 1.83,2.26 -0.84,4.36 -1.66,2.33 -8.45,8.28 -5.63,7.98 -2.75,2.51 -4.24,6.64 -1.33,4.25 0.4,4.29 0,0 -1.09,0.14 -0.23,2.97 -3.49,0.19 0.04,2.75 -3.43,0.68 -1.87,1.69 -7.31,-1.96 -3.28,3.64 -3.17,-1.56 -0.55,-1.16 -6.43,-2.11 -1.75,-2.12 -4.04,-1.08 -3.42,-4.76 -3.67,-0.09 -4,-2.72 -6.1,-2.02 -0.18,-1 -5.24,-1.24 0.24,-1.16 -3.41,-0.36 -1.42,0.75 -3.93,-0.04 -2.53,2.55 -2.91,-0.5 -0.41,-2.08 -1.56,-0.02 0,0 3.03,-6.22 -1.71,-3.74 -2.34,-1.38 -1.4,-4.09 1.07,-5.52 -1.04,-9.67 1.26,-0.54 5.05,2.38 4.02,-0.3 2.74,-2.08 2,-2.69 4.54,-1.35 1.32,-1.29 2.14,-8.93 -1.22,-2.54 0.38,-2.16 -0.61,-2.93 2.3,-7.13 -10.86,-7.82 -3.96,-0.4 -1.11,-1.08 2.54,-5.07 -1.32,-3.55 -0.12,-5.71 3.76,-6.17 4.75,-3.98 1.46,-3.17 4.37,-5.3 3.42,-1.97 0.89,-2.17 4.33,-5.2 2.04,-4.78 4.84,-1.7 3.27,-2.03 0.37,-4.6 -2.57,-7.04 0.37,-4.21 1.1,-2.31 -1.35,-4.5 -3.54,-4.41 0,0 -1.95,-2.15 0.54,-3.95 0.79,-1.65 3.58,-2.14 3.17,-4.09 2.05,-0.49 3.09,1.07 4.32,-3.34 4.04,0.06 z" title="Sagarmatha" id="NP-SA" />
                    </a>
                    <path d="m 110.99161,44.508364 1.93,1.14 1.4,-0.22 1.73,-0.51 2.54,-2.52 0,0 3.93,3.28 3.22,0.37 2.39,2.11 2.38,-0.06 2.89,-2.31 4.03,1.92 1.76,1.97 -0.3,4.21 0.68,6.04 2.55,-1.31 1.42,0.01 4.15,-2.54 3.52,0.27 7.03,-2.3 2.87,0.86 1.7,2.19 8.52,1.29 0.59,3.3 -0.51,4.57 -1.18,0.13 -1.41,1.69 -1.35,5.98 0.26,2.53 -0.92,2.45 -3.6,2.47 -0.25,2.48 1.03,6.23 3.26,0.28 2.1,1.86 0.39,9.539996 1.54,1.87 2.16,8.5 -0.94,3.84 -3.09,4.3 -3.42,2.86 -6.67,2.99 -1.61,-0.68 -0.43,-2.77 -2.85,-3.12 -3.75,0.1 -8.4,7.32 -2.54,3.15 0.72,1.84 1.63,1.39 -0.67,7.68 1.3,2.64 3.37,3.05 2.28,0.5 0,0 0.17,1.03 -8.23,4.99 -3.62,4.92 0.03,6.77 3.38,3.66 0.91,3.3 5.49,6.32 1.16,3.56 2.25,1.73 1.06,3.45 -2.59,0.84 -2.01,-0.92 -0.58,-2.39 -6.05,-6.35 -3.51,-6.83 -2.13,0.73 -2.52,-0.24 -2.83,1.25 -1.65,-2.05 -5.29,1.17 -8.16,-0.69 -11.21,-6.65 -3.330005,0.05 -7.51,2.48 3.46,5.74 5.450005,2.71 6.4,1.6 0.04,3.08 3.29,2.21 2.48,-4.22 2.19,-0.58 1.12,6.83 1.34,4.01 3.92,6.75 0.4,3.11 -7.28,8.13 -0.88,3.19 -3.64,4.55 -4.92,4.59 -3.05,1.87 -0.57,3.24 -2.510005,3.47 0,0 -2.26,-1.57 -0.65,1.33 -1.45,-1.14 1.71,-2.15 -0.95,-0.78 -1.33,0.39 -0.27,-1.63 -1.15,-0.21 -2.94,1.69 -0.6,-0.73 1.2,-1.07 -1.95,0.57 -1.88,-0.59 0.29,-1.69 -1.32,1.31 -0.75,-0.09 -0.14,-0.8 -0.74,0.65 -0.97,-0.49 -0.31,-1.9 1.02,-1.76 -1.71,-1.19 -2.71,-0.03 0.13,1.41 -2.36,-0.62 -1.75,-2.02 -3.64,-0.97 0.1,-1.78 -1.55,-1.21 -0.1,-1.54 -2.36,-0.86 -1.17,0.69 -3.22,-0.95 -0.77,-1.21 0.37,-1.74 -1.66,-0.26 -0.06,-1.66 -1.04,-0.88 -0.17,-1.44 -3.66,0.35 -2.36,-1.37 -1.33,0.33 0.18,-1.06 -1.13,-0.63 0.65,-2.02 -4.03,-1.2 0,0 0.82,-3.98 -0.47,-3.26 -3.81,-9.45 1.4,-12.92 -0.7,-2.34 0.29,-2.21 3.17,-9.1 -1.28,-2.78 2.83,-1.53 1.39,-4.37 11.93,-5.54 0.64,-2.38 2.34,-2.19 3.1,-5.97 -0.85,-5.63 3.62,-2.28 4.21,-0.55 2.7,-2.2 2.34,-4.35 -0.5,-2.72 -1.18,-1.61 -2.37,-1.52 -4.37,0.09 -0.42,-3.45 -3.59,-2.46 -0.46,-2.979996 1.89,-0.52 1.3,-2.94 0.43,-4.3 -1.19,-4.92 12.76,-5.83 5.93,-0.24 8.66,-2.17 2.250005,-4.26 -1.010005,-4.52 -2.2,-2.52 -0.16,-3.72 -2.95,-3.54 -1.35,-3.33 2.52,-7.43 1.76,-1.61 2.820005,-1.02 1.44,-1.91 3.49,-1.75 0,0 z" title="Seti" id="NP-SE" />
                </svg>
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

    // display the slided budget from the total budget 
    var totalBudget = parseInt(document.getElementById('total_budget').innerText);
    var progressSlider = document.getElementById('progress-slider');
    var progressText = document.getElementById('progress-text');

    progressSlider.addEventListener('input', function() {
        var value = parseInt(progressSlider.value);
        var amount = (value / totalBudget) * totalBudget;
        var roundedAmount = Math.round(amount / 100) * 100;
        progressText.value = roundedAmount.toFixed(2);
    });

    progressText.addEventListener('input', function() {
        var enteredValue = parseFloat(progressText.value);
        if (enteredValue > totalBudget) {
            progressText.value = totalBudget.toFixed(2);
            enteredValue = totalBudget;
        }
        var sliderValue = (enteredValue / totalBudget) * totalBudget;
        var roundedAmount = Math.round(sliderValue / 100) * 100;

        progressSlider.value = roundedAmount.toFixed(2);
    });

    // display current fiscal year 
    const currentYear = NepaliFunctions.GetCurrentBsDate().year;
    const nextYear = currentYear + 1;
    const yearFiscalRange = `${currentYear}/${nextYear}`;
    // console.log(yearFiscalRange);

    document.getElementById('fiscal_this_year').value = yearFiscalRange;
</script>

<?php
include('../include/footer.php');
?>