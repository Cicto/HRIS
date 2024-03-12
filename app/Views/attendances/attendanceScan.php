<?= $this->extend('layouts/main'); ?>

<?= $this->section('css'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        #qr-code-scanner > video{
            height: 100%;
        }
        .ff-rubik{
            font-family: 'Rubik', sans-serif;
        }
    </style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Attendance</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <i class="bi bi-dash"></i>
                </li>
                <li class="breadcrumb-item text-muted">
                    <span class="text-muted">Attendance Scanning</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row mb-3">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="card">
                    <div class="card-header align-items-center px-4">
                        <div class="ps-2">
                            <h4 class="align-middle mb-0">Today's Logs</h4>
                            <small><?=date("Y-m-d")?></small>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light-primary">
                                View all
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0 px-1">
                        <table class="table align-middle g-3 my-0 w-100" id="todays-attendance-table">
                            <thead class="text-primary fw-semibold">
                                <tr>
                                    <th>
                                        <input type="text" class="form-control form-control-solid" id="todays-attendance-table-search" placeholder="Search">
                                    </th>
                                    <th class="d-none"></th>
                                    <th class="d-none"></th>
                                    <th class="d-none"></th>
                                    <th class="d-none"></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="h-20px"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card h-100">
                    <div class="card-body p-0">
                        <div class="row m-0">
                            <div class="col-lg-7 p-5">
                                <div id="qr-code-scanner-placeholder">
                                    <div class="alert alert-secondary d-flex align-items-center p-5 mb-0">
                                        <span class="svg-icon svg-icon-muted svg-icon-2hx me-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
                                                <path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"/>
                                            </svg>
                                        </span>
    
                                        <div class="d-flex flex-column">
                                            <h4 class="mb-1 text-muted">Allow camera permission</h4>
                                            <span class="text-muted">Upon load of this page, a browser pop-up will appear asking for your device's camera to be allowed. Please select allow to continue the scanner operations. </span>
                                        </div>
                                    </div>
                                </div>

                                <div id="qr-code-scanner" class="w-100 rounded-4 overflow-hidden mb-3"></div>

                                <div class="alert alert-primary border-0 flex-grow-1 display-6 fw-bold d-flex justify-content-center align-items-end py-1" >
                                    <div class=""><i class="fas fa-clock fs-2x text-primary"></i></div>
                                    <div id="hour-display" class="w-50px ff-rubik text-center"><?=date("h")?></div>
                                    <div id="" class="px-1 ff-rubik">:</div>
                                    <div id="minute-display" class="w-50px ff-rubik text-center"><?=date("i")?></div>
                                    <div id="" style="padding-bottom: 4px;" class="fs-3 ff-rubik px-1">:</div>
                                    <div id="second-display" style="padding-bottom: 4px;" class="w-30px ff-rubik text-center fs-3"><?=date("s")?></div>
                                    <div id="meridian-display" style="padding-bottom: 4px;" class="ff-rubik fs-3"><?=date("a")?></div>
                                </div>

                                <div class="fs-7 text-gray-700 w-75">
                                    <a href="#" id="switch-qr-code-scanner-camera"><i class="fas fa-sync-alt text-primary"></i></a>
                                    Camera : 
                                    <i><u id="qr-code-scanner-camera-label">None</u></i>
                                </div>
                            </div>
                            
                            <div class="col-lg-5 p-0 position-relative">
                                <div class="position-absolute h-100 start-0 border-start z-index-2"> &nbsp; </div>
                                <div id="scanned-employee-placeholder" class="position-absolute h-100 w-100 start-0 top-0 z-index-1 rounded-start-0 alert alert-secondary border align-items-center" style="display: flex;">
                                    <div class="text-muted w-75 mx-auto text-center">
                                        <i class="fas fa-qrcode fs-2tx mb-2"></i>
                                        <br>
                                        Please scan an employee qr code to log them to the attendance.
                                    </div>
                                </div>
                                <div class="p-5 pb-0 position-relative">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="<?=base_url()?>/public/assets/media/employee-profile/default-avatar.png" class="img-fluid w-100 rounded-4 border mx-auto" style="aspect-ratio: 1 / 1;" alt="Employee Photo">
                                        </div>
                                        <div class="col-8 d-flex flex-column justify-content-end pb-2">
                                            <h3 id="">
                                                <span id="employee_firstname"></span> 
                                                <span id="employee_middlename"></span> 
                                                <span id="employee_lastname"></span> 
                                                <span id="employee_suffix"></span>
                                            </h3>
                                            <div class="mb-2"><b id="employee_dept_alias">MICTO</b> - <span id="employee_dept_name">Municipal Information Communication and Technology Office</span></div>
                                            <div id="employee-time-in" class="border border-primary rounded bg-light-primary px-2 text-primary align-self-start">
                                                <b>Time-in:</b> <span style="font-family: 'Rubik', sans-serif;" id="employee_time_in">01:46:32 pm</span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="h-20px"></div>
                                            <div class="d-flex flex-stack fs-4 pb-3 w-100">
                                                <div class="fw-bold rotate collapsible flex-grow-1 collapsed" data-bs-toggle="collapse" href="#senior-citizen-info" role="button" aria-expanded="false" aria-controls="senior-citizen-info">
                                                    Employee Information
                                                    <span class="ms-2 rotate-180">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="senior-citizen-info" class="w-100 collapse" style="">
                                                <div class="separator separator-dashed my-3 w-100"></div>
                                                <div class="pt-5 ps-3 fs-6" id="info-container" style="">
                                                    <div class="fw-bold">Employee QR Code</div>
                                                    <div class="text-gray-600" id="employee_qrcode">BALIWAG-EMP-01-00001</div>

                                                    <div class="fw-bold mt-5">Position</div>
                                                    <div class="text-gray-600" id="employee_position">Tech Support</div>

                                                    <div class="fw-bold mt-5">Sex</div>
                                                    <div class="text-gray-600" id="employee_sex">Lalaki</div>

                                                    <div class="fw-bold mt-5">Birthdate</div>
                                                    <div class="text-gray-600" id="employee_birthdate">
                                                        February 21, 1960 <br>
                                                    </div>

                                                    <div class="fw-bold mt-5">Address</div>
                                                    <div class="text-gray-600">
                                                        <span id="employee_residential_house_number"></span> 
                                                        <span id="employee_residential_street"></span>, 
                                                        <span id="employee_residential_barangay"></span>, 
                                                        <span id="employee_residential_city_mun"></span>, 
                                                        <span id="employee_residential_province"></span>
                                                    </div>
                                                    
                                                    <div class="fw-bold mt-5">Contact Number</div>
                                                    <div class="text-gray-600" id="employee_mobile_number"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator my-3 w-100"></div>
                                <div class="p-5 pt-0">
                                    <div class="fw-bold fs-4"><?=date('F')?> Attendance</div>
                                    <div class="separator separator-dashed border-secondary my-2"></div>
                                    <div class="flex-grow-1 overflow-scroll">
                                        <div class="position-relative">

                                            <?php
                                                $list=array();
                                                $month = date('m');
                                                $year = date('Y');
                                                $week = 0;
                                                for($d=1; $d<=31; $d++)
                                                {
                                                    $time=mktime(12, 0, 0, $month, $d, $year);          
                                                    if (date('m', $time)==$month){
                                                        if(date('w', $time) == 0){
                                                            $week++;
                                                        }
                                                        if(!isset($list[$week])){
                                                            $list[$week] = array();
                                                        }
                                                        $list[$week][date('w', $time)] = date('d', $time);
                                                    }
                                                }
                                            ?>
                                            <table class="w-100" style="table-layout: fixed;">
                                                <thead>
                                                    <tr>
                                                        <th class="fw-semibold text-nowrap">Su</th>
                                                        <th class="fw-semibold text-nowrap">Mo</th>
                                                        <th class="fw-semibold text-nowrap">Tu</th>
                                                        <th class="fw-semibold text-nowrap">We</th>
                                                        <th class="fw-semibold text-nowrap">Th</th>
                                                        <th class="fw-semibold text-nowrap">Fr</th>
                                                        <th class="fw-semibold text-nowrap">Sa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($list as $week => $days): ?>
                                                    <tr>
                                                        <?php for ($i=0; $i <= 6; $i++): 
                                                            $date_class = "";
                                                            if(isset($days[$i])){
                                                                switch (true) {
                                                                    case date('d') == $days[$i] && !($i == 0 || $i == 6):
                                                                        $date_class = "text-primary fw-semibold today";
                                                                        break;
                                                                    case $i == 0 || $i == 6:
                                                                        $date_class = "text-danger opacity-75 weekends";
                                                                        break;
                                                                    case date('d') > $days[$i]:
                                                                        $date_class = "text-muted yesterdays";
                                                                        break;
                                                                    default:
                                                                        $date_class = "tommorows";
                                                                        break;
                                                                }
                                                            }
                                                        ?>
                                                        <td class="fw-light ff-rubik pt-2 <?=$date_class?>">
                                                            <div class="<?=isset($days[$i]) ? date('d') == $days[$i] ? "bg-light-primary" : "" : ""?> d-inline-block text-center rounded-circle calendar-date" data-calendar-date="<?=date("Y")?>-<?=date("m")?>-<?=isset($days[$i]) ? $days[$i] : 0?>" style="width: 20px;">
                                                                <?=isset($days[$i]) ? (int)$days[$i] : "&nbsp;"?>
                                                            </div>
                                                        </td>
                                                        <?php endfor;?>
                                                    </tr>
                                                    <?php endforeach;?>
                                                </tbody>
                                            </table>
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

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script src="<?=base_url()?>/public/assets/js/html5-qrcode.min.js"></script>
<script>
    let current_camera_id = 0;
    let qr_code_scanner;
    let todays_attendance_table, todays_attendance_table_data;
    $(function () {
        startScanner();

        todays_attendance_table = $("#todays-attendance-table").DataTable({
            processing: true,
            serverSide: true,
            ajax: '<?=base_url()?>/attendances/getAttendanceTodayDataTable',
            responsive: true,
            ordering: false,
            paging: false,
            bInfo : false,
            pageLength: 1,
            lengthMenu: [1],
            columns: [
                {
                    data: "attendance_id",
                    className: "d-flex align-items-center",
                    render: function(data, display, row){
                        const time_in = mySQLTimeToText(row.time_in.split(" ")[1]);
                        return `
                        <div class="symbol symbol-50px">
                            <img src="<?=base_url()?>/public/assets/media/employee-profile/${row.photo ? row.photo : "default-avatar.png"}" class="me-5 border">
                        </div>
                        <div class="lh-sm flex-grow-1">
                            <p class="mb-0">${row.firstname} ${row.middlename} ${row.lastname}</p>
                            <small class="position-relative d-block text-gray-700 mb-1">
                                &nbsp;
                                <small class="position-absolute w-100 h-100 start-0 text-truncate">${row.dept_alias} - ${row.dept_name}</small> <br>
                            </small>
                            <small class="text-gray-700 ff-rubik"><i class="bi bi-clock text-gray-700"></i> ${time_in}</small>
                        </div>
                        `;
                    }
                },
                {
                    data: "firstname",
                    className: "d-none",
                },
                {
                    data: "middlename",
                    className: "d-none",
                },
                {
                    data: "lastname",
                    className: "d-none",
                },
                {
                    data: "dept_alias",
                    className: "d-none",
                },
            ]
        })

        $("#todays-attendance-table-search").on("keyup", function(){
            todays_attendance_table.search(this.value).draw();
        })

        $("#qr-code-scanner").on("dblclick", function(){
            $("#switch-qr-code-scanner-camera").trigger("click");
        })

        $("#switch-qr-code-scanner-camera").click(async function(e){
            e.preventDefault();
            const devices = await getCameraDevices();
            if(!devices.length-1){ return; }
            console.log(current_camera_id, devices.length, current_camera_id < devices.length)
            if(current_camera_id < devices.length - 1){
                current_camera_id++;
            }else{
                current_camera_id = 0;
            }

            startScanner(current_camera_id)
        })

        setInterval(() => {
            const date = new Date();
            const hour = date.getHours() > 12 ? date.getHours()-12 : date.getHours();
            $("#hour-display").html(hour < 10 ? "0"+hour : hour );
            $("#minute-display").html(date.getMinutes() < 10 ? "0"+date.getMinutes() : date.getMinutes());
            $("#second-display").html(date.getSeconds() < 10 ? "0"+date.getSeconds() : date.getSeconds());
            $("#meridian-display").html(date.getHours() < 12 ? "am" : "pm")
        }, 1000);
        
    });

    function startScanner(camera_id = 0){
        Html5Qrcode.getCameras().then(devices => {
            if (devices && devices.length) {
                
                const cameraId = devices[camera_id].id;
                $("#qr-code-scanner-camera-label").html(devices[camera_id].label);
                $("#qr-code-scanner-placeholder").hide();

                qr_code_scanner = new Html5Qrcode("qr-code-scanner");
                qr_code_scanner.start(cameraId, {
                    fps: 2,
                    qrbox: { width: 250, height: 250 }
                },
                (decodedText, decodedResult) => {
                    const qrcode = decodedText
                    logEmployeeAttendance(qrcode);
                },
                (error) => {
                    console.log(error)   
                })
                .catch((err) => {
                    errorAlert("Error", err, "error");
                });
            }
        }).catch(err => {
            $("#qr-code-scanner-placeholder").show()

        });
    }

    function logEmployeeAttendance(qrcode){
        if(!qr_code_scanner){ return; }
        const loading_timeout = setTimeout(() => {
            pageLoader(true, 'Loading...');
        }, 500);
        qr_code_scanner.pause();
                
        fetch(`<?=base_url()?>/attendances/logEmployeeAttendance/${qrcode}`)
            .then(data => data.json())
            .then(response => {
                clearTimeout(loading_timeout)
                pageLoader(false, 'Loading...');

                if(response.error){
                    errorAlert("Error", response.result, function(){
                        qr_code_scanner.resume();
                    });
                    return;
                }

                setLoggedEmployeeData(response.data)
                successAlert("Success", response.message, function(){
                    $("#scanned-employee-placeholder").hide();
                    qr_code_scanner.resume();
                });
                reloadDataTable(todays_attendance_table);
                console.log(response)
            })
    }

    function setLoggedEmployeeData(employee_data){
        for (const name in employee_data) {
            if (Object.hasOwnProperty.call(employee_data, name)) {
                const value = employee_data[name];
                $(`#employee_${name}`).html(value);
            }
        }
        if(employee_data.current_month_attendance){

            $(".calendar-date").each(function (index, calendar_date) {
                const calendar_date_parent = $(calendar_date).parent("td");
                $(calendar_date).removeClass("pointer");
                switch (true) {
                    case $(calendar_date).hasClass("weekends"):
                        $(calendar_date_parent).removeClass("text-primary").addClass("text-danger opacity-75");
                        break;
                    case $(calendar_date).hasClass("today"):
                        $(calendar_date_parent).removeClass("text-muted text-danger opacity-75").addClass("text-primary");
                        break;
                    case $(calendar_date).hasClass("tommorows"):
                        $(calendar_date_parent).removeClass("text-primary")
                        break;
                    case $(calendar_date).hasClass("yesterdays"):
                        $(calendar_date_parent).removeClass("text-primary").addClass("text-muted");
                        break;
                    default:
                        $(calendar_date_parent).removeClass("text-primary")
                        break;
                }
                const calendar_date_tooltip = bootstrap.Tooltip.getOrCreateInstance(calendar_date)
                calendar_date_tooltip.dispose();
            });

            employee_data.current_month_attendance.forEach(month_attendance => {
                const month = month_attendance.time_in.split(" ")[0];
                const time = month_attendance.time_in.split(" ")[1];
                const calendar_date = $(`.calendar-date[data-calendar-date="${month}"]`);
                const calendar_date_parent = calendar_date.parent("td");

                const tooltip = new bootstrap.Tooltip(calendar_date, {
                    title: mySQLTimeToText(time)
                });
                $(calendar_date).addClass("pointer");
                calendar_date_parent.removeClass("text-muted text-danger opacity-75").addClass("text-primary");
            });
        }
    }

    async function getCameraDevices(){
        return await navigator.mediaDevices.enumerateDevices().then(function (devices) {
            const device_list = [];
            for(let i = 0; i < devices.length; i++){
                const device = devices[i];
                if (device.kind === 'videoinput') {
                    device_list.push(device);
                }
            };
            return device_list;
        });
    }

    successAlert = (title, message, callback=false) => {
        Swal.fire({
            icon: "success",
            iconColor: 'var(--kt-white)',
            iconHtml: `<span class="svg-icon svg-icon-muted svg-icon-3hx text-white"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z" fill="currentColor"/>
                    <path d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z" fill="currentColor"/>
                    </svg>
                </span>`,
            title: '<span class = "fw-semibold fs-1">SUCCESS</span>',
            html: '<span class = "text-gray-600">'+message+'</span>',
            background: `var(--kt-white)`,
            customClass: {
                icon: 'shadow-md m-0 fs-2 mt-5',
                confirmButton: "btn btn-success w-50",
                header: 'p-0 m-0 bg-success pt-7 pb-5',
                title: 'w-100 m-0 text-white flex-center pt-3 pb-10',
                loader: 'pt-20',
                content: 'pt-5',
                popup: 'pb-7',
            },
            focusConfirm: false,
            buttonsStyling: false,
        }).then((result) => {
            if (result.isConfirmed) {
                if(typeof callback == "function"){
                    callback();
                }
            }
        });
    }

    errorAlert = (title, message, callback=false) => {
        Swal.fire({
            icon: "error",
            iconColor: 'var(--kt-white)',
            title: '<span class = "fw-semibold fs-1">ERROR</span>',
            html: '<span class = "text-gray-600">'+message+'</span>',
            background: `var(--kt-white)`,
            customClass: {
                icon: 'shadow-md m-0 fs-2 mt-5',
                confirmButton: "btn btn-danger w-50",
                header: 'p-0 m-0 bg-danger pt-7 pb-5',
                title: 'w-100 m-0 text-white flex-center pt-3 pb-10',
                loader: 'pt-20',
                content: 'pt-5',
                popup: 'pb-7',
            },
            focusConfirm: false,
            buttonsStyling: false,
        }).then((result) => {
            if (result.isConfirmed) {
                if(typeof callback == "function"){
                    callback();
                }
            }
        });
    }

    /**
     * If the hour is greater than 12, subtract 12 from the hour and add 'pm' to the end of the string,
     * otherwise add 'am' to the end of the string.
     * @param str - The time in mySQL format (HH:MM:SS)
     */
    function mySQLTimeToText(str) {
        let hour = Number(str.split(":")[0]);
        let minute = Number(str.split(":")[1]);

        let meridiem = hour >= 12 ? "pm" : "am";
        if (hour > 12) {
            hour -= 12;
        }
        hour = hour < 10 ? `0${hour}` : hour;
        minute = minute < 10 ? `0${minute}` : minute;

        return `${hour}:${minute} ${meridiem}`;
    }
</script>
<?= $this->endSection(); ?>
