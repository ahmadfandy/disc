<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <title>Tsoal Screen</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: transparent;
            margin: 100px auto;
            font-family: Raleway;
            width: 90%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #2559e8;
        }
    </style>

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <!--end::Wrapper-->
                <form id="regForm" action="" method="post">
                    <h1>Analyze:</h1>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">Section S:
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">No</th>
                                    <th class="min-w-125px">Soal</th>
                                    <th class="min-w-125px">Sangat Benar <br>
                                        <p align="center">2</p>
                                    </th>
                                    <th class="min-w-120px">Benar <br>
                                        <p align="center">1</p>
                                    </th>
                                    <th class="min-w-125px">Kurang Benar <br>
                                        <p align="center">-1</p>
                                    </th>
                                    <th class="min-w-125px">Tidak Benar <br>
                                        <p align="center">-2</p>
                                    </th>
                                    <th class="min-w-120px">Total</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>1 </td>
                                    <td>Saya terkadang melakukan sesuatu tanpa perlu dicontohkan sebelumnya</td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="sangat_benar" name="skor" type="radio" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="kurang_benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="tidak_benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 20px;" align="center">
                                        <p>2</p>
                                    </td>
                                    <!--end::Action=-->
                                </tr>

                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <div class="tab">Section S:
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">No</th>
                                    <th class="min-w-125px">Soal</th>
                                    <th class="min-w-125px">Sangat Benar <br>
                                        <p align="center">2</p>
                                    </th>
                                    <th class="min-w-120px">Benar <br>
                                        <p align="center">1</p>
                                    </th>
                                    <th class="min-w-125px">Kurang Benar <br>
                                        <p align="center">-1</p>
                                    </th>
                                    <th class="min-w-125px">Tidak Benar <br>
                                        <p align="center">-2</p>
                                    </th>
                                    <th class="min-w-120px">Total</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>1 </td>
                                    <td>Saya terkadang melakukan sesuatu tanpa perlu dicontohkan sebelumnya</td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="sangat_benar" name="skor" type="radio" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="kurang_benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="tidak_benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 20px;" align="center">
                                        <p>2</p>
                                    </td>
                                    <!--end::Action=-->
                                </tr>

                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <div class="tab">Section P:
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">No</th>
                                    <th class="min-w-125px">Soal</th>
                                    <th class="min-w-125px">Sangat Benar <br>
                                        <p align="center">2</p>
                                    </th>
                                    <th class="min-w-120px">Benar <br>
                                        <p align="center">1</p>
                                    </th>
                                    <th class="min-w-125px">Kurang Benar <br>
                                        <p align="center">-1</p>
                                    </th>
                                    <th class="min-w-125px">Tidak Benar <br>
                                        <p align="center">-2</p>
                                    </th>
                                    <th class="min-w-120px">Total</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>1 </td>
                                    <td>Saya terkadang melakukan sesuatu tanpa perlu dicontohkan sebelumnya</td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="sangat_benar" name="skor" type="radio" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="kurang_benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="tidak_benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 20px;" align="center">
                                        <p>2</p>
                                    </td>
                                    <!--end::Action=-->
                                </tr>

                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <div class="tab">Section M:
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">No</th>
                                    <th class="min-w-125px">Soal</th>
                                    <th class="min-w-125px">Sangat Benar <br>
                                        <p align="center">2</p>
                                    </th>
                                    <th class="min-w-120px">Benar <br>
                                        <p align="center">1</p>
                                    </th>
                                    <th class="min-w-125px">Kurang Benar <br>
                                        <p align="center">-1</p>
                                    </th>
                                    <th class="min-w-125px">Tidak Benar <br>
                                        <p align="center">-2</p>
                                    </th>
                                    <th class="min-w-120px">Total</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>1 </td>
                                    <td>Saya terkadang melakukan sesuatu tanpa perlu dicontohkan sebelumnya</td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="sangat_benar" name="skor" type="radio" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="kurang_benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 40px;" align="center">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" id="tidak_benar" name="skor" type="radio" value="1" />
                                        </div>

                                    </td>
                                    <td style="padding: 20px;" align="center">
                                        <p>2</p>
                                    </td>
                                    <!--end::Action=-->
                                </tr>

                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" class="btn btn-light" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>

            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>