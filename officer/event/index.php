<?php
session_start();
$currentDir = basename(dirname($_SERVER['PHP_SELF'])); // Get current directory name
include_once("../sidebar.php");
?>
<div class="page-inner">
    <?php if (!isset($_GET['tambah']) && !isset($_POST['edit']) && !isset($_POST['details'])) { ?>
        <div class="page-header">
            <h3 class="fw-bold mb-3">พื้นที่ออกเหตุและเวลา</h3>
            <div class="ms-md-auto py-2 py-md-0">
                <div class="btn-group">
                    <a href="?tambah" class="btn btn-primary btn-round">เพิ่มข้อมูล</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-secondary bubble-shadow-small">
                                    <i class="fas fa-ambulance"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">พื้นที่ออกเหตุและเวลาทั้งหมด (ครั้ง)</p>
                                    <h4 class="card-title">1,597</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">งานออกเหตุต่อเขตรับผิดชอบ (ครั้ง)</p>
                                    <h4 class="card-title">998</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-map"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">งานออกเหตุนอกเขตรับผิดชอบ (ครั้ง)</p>
                                    <h4 class="card-title">599</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">พื้นที่ออกเหตุและเวลา</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                id="basic-datatables"
                                class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ประทับเวลา (วันที่)</th>
                                        <th>ผลการปฏิบัติงาน</th>
                                        <th>ชื่อผู้ป่วย</th>
                                        <th>ผู้สรุปรายงาน</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ประทับเวลา (วันที่)</th>
                                        <th>ผลการปฏิบัติงาน</th>
                                        <th>ชื่อผู้ป่วย</th>
                                        <th>ผู้สรุปรายงาน</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>26 พฤษภาคม 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นายหามะ วาเลาะดี</td>
                                        <td>นายอันวาร์ แวมะเด็ง</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27 พฤษภาคม 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นางสาวฟาตีเมาะ อาแว</td>
                                        <td>นายอดินันท์ สาแม</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28 พฤษภาคม 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นายมูฮัมหมัด รอมลี</td>
                                        <td>นางสาวซูไฮลา มะแซ</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29 พฤษภาคม 2568</td>
                                        <td>ไม่พบเหตุ</td>
                                        <td>นายอดิศักดิ์ เจ๊ะมะ</td>
                                        <td>นายอามีน ปาเยาะ</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30 พฤษภาคม 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นางสาวอาอีเซาะ เจ๊ะลี</td>
                                        <td>นายอับดุลรอฮิม วาเลาะ</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>31 พฤษภาคม 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นายมูฮัมหมัดซาการียา เจ๊ะดือราแม</td>
                                        <td>นายซาการียา สาและ</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1 มิถุนายน 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นางสาวมายา อิบรอฮิม</td>
                                        <td>นายอับดุลเลาะ กาซอ</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2 มิถุนายน 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นายซากี เจ๊ะมะ</td>
                                        <td>นายมูฮัมหมัดฟาอิส บือราเฮง</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3 มิถุนายน 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นางสาวนูรียะห์ อาแว</td>
                                        <td>นายมะซากี เจะมะ</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4 มิถุนายน 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นายมะซากี มะแซ</td>
                                        <td>นางสาวซูมัยยะห์ สะแลแม</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5 มิถุนายน 2568</td>
                                        <td>พบเหตุ</td>
                                        <td>นายรอซาลี วาเฮ็ง</td>
                                        <td>นายมูซา บือราเฮง</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-label-primary me-2"
                                                    type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> ดู</a>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash"></i> ลบ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php }
            if (isset($_GET['tambah']) && !isset($_POST['edit'])) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <?php
                                if (isset($_GET['tambah'])) {
                                    if (isset($_SESSION['error'])) {
                                        echo '
                                        <div class="alert alert-danger col-8 mx-auto text-center p-2 border rounded text-center">' . $_SESSION['error'] . '</div>';
                                        unset($_SESSION['error']);
                                    }
                                }
                                ?>
                                <form role="form" method="post" action="./index.php" enctype="multipart/form-data">
                                    <div class="card-header">
                                        <div class="card-title">แบบฟอร์มบันทึก</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>1. หน่วยงาน</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="largeInput">ชื่อหน่วยบริการ</label>
                                                    <input
                                                        type="text"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกชื่อหน่วยบริการ" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                date_default_timezone_set('Asia/Bangkok');
                                                setlocale(LC_TIME, 'th_TH.UTF-8'); // Set locale to Thai

                                                $currentDate = new DateTime();
                                                $thaiMonths = [
                                                    'January' => 'มกราคม',
                                                    'February' => 'กุมภาพันธ์',
                                                    'March' => 'มีนาคม',
                                                    'April' => 'เมษายน',
                                                    'May' => 'พฤษภาคม',
                                                    'June' => 'มิถุนายน',
                                                    'July' => 'กรกฎาคม',
                                                    'August' => 'สิงหาคม',
                                                    'September' => 'กันยายน',
                                                    'October' => 'ตุลาคม',
                                                    'November' => 'พฤศจิกายน',
                                                    'December' => 'ธันวาคม'
                                                ];
                                                $monthName = $thaiMonths[$currentDate->format('F')];
                                                $thaiYear = $currentDate->format('Y') + 543;

                                                $thaiDateString = $currentDate->format('d') . ' ' . $monthName . ' ' . $thaiYear;
                                                $gregorianDate = $currentDate->format('Y-m-d');
                                                ?>
                                                <div class="form-group">
                                                    <label for="largeInput">วันที่บันทึก</label>
                                                    <input type="text" class="form-control" id="thai_date_display" value="<?= $thaiDateString ?>" readonly>
                                                    <input type="hidden" id="prg_date" name="prg_date" value="<?= $gregorianDate ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="largeInput">ปฏิบัติการที่</label>
                                                    <input
                                                        type="text"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกปฏิบัติการที่" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="defaultSelect">เจ้าหน้าที่ผู้ให้บริการ</label>
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            เลือกเจ้าหน้าที่ผู้ให้บริการ
                                                        </button>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> มูฮัมหมัด บากอ
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อันวา สีดิ
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อับดุลเลาะ มูฮัมหมัด
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อิสมาแอ เจะมะ
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ผลการปฏิบัติงาน</label><br />
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="1"
                                                                id="flexRadioDefault1" />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault1">
                                                                ไม่พบเหตุ
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="1"
                                                                id="flexRadioDefault2" />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault2">
                                                                พบเหตุ
                                                            </label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="1" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="largeInput">สถานที่เกิดเหตุ</label>
                                                    <input
                                                        type="text"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกสถานที่เกิดเหตุ" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="largeInput">เหตุการณ์</label>
                                                    <input
                                                        type="text"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกเหตุการณ์" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>2. ข้อมูลเวลา</h5>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center align-middle">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">เวลา (น.)</th>
                                                        <th>รับแจ้ง</th>
                                                        <th>สั่งการ</th>
                                                        <th>ออกฐาน</th>
                                                        <th>ถึงที่เกิดเหตุ</th>
                                                        <th>ออกจากที่เกิดเหตุ</th>
                                                        <th>ถึง รพ.</th>
                                                        <th>กลับถึงฐาน</th>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="time" class="form-control" name="receive_time"></td>
                                                        <td><input type="time" class="form-control" name="receive_time"></td>
                                                        <td><input type="time" class="form-control" name="receive_time"></td>
                                                        <td><input type="time" class="form-control" name="receive_time"></td>
                                                        <td><input type="time" class="form-control" name="receive_time"></td>
                                                        <td><input type="time" class="form-control" name="receive_time"></td>
                                                        <td><input type="time" class="form-control" name="receive_time"></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th rowspan="2">รวมเวลา (นาที)</th>
                                                        <td colspan="4" rowspan="2">Response time =
                                                            <input type="number" class="form-control d-inline-block w-auto" name="response_time" style="width: 80px;">
                                                            นาที
                                                        </td>
                                                        <td colspan="2"><input type="number" class="form-control d-inline-block w-auto" name="distance_go" style="width: 60px;"> นาที</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="2"><input type="number" class="form-control d-inline-block w-auto" name="distance_go" style="width: 60px;"> นาที</td>
                                                    </tr>
                                                    <tr>
                                                        <th>เลข กม.</th>
                                                        <td colspan="3"><input type="number" class="form-control d-inline-block w-auto" name="distance_go" style="width: 60px;"></td>
                                                        <td colspan="2"><input type="number" class="form-control d-inline-block w-auto" name="distance_go" style="width: 60px;"></td>
                                                        <td><input type="number" class="form-control d-inline-block w-auto" name="distance_go" style="width: 60px;"></td>
                                                        <td><input type="number" class="form-control d-inline-block w-auto" name="distance_go" style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">ระยะทาง (กม.)</th>
                                                        <td colspan="4" rowspan="2">รวมระยะทางไป <input type="number" class="form-control d-inline-block w-auto" name="response_time" style="width: 80px;"> กม.</td>
                                                        <td></td>
                                                        <td colspan="2">รวมระยะทางกลับ <input type="number" class="form-control d-inline-block w-auto" name="distance_go" style="width: 60px;"> กม.</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">ระยะไป รพ. <input type="number" class="form-control d-inline-block w-auto" name="distance_go" style="width: 60px;"> กม.</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>3. ข้อมูลผู้ป่วย</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="largeInput">ชื่อผู้ป่วย</label>
                                                    <input
                                                        type="text"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกชื่อหน่วยบริการ" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="largeInput">อายุ</label>
                                                    <input
                                                        type="number"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกปฏิบัติการที่" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>เพศ</label>
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="gander" id="gander1">
                                                            <label class="form-check-label" for="gander1">ชาย</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="gander" id="gander2">
                                                            <label class="form-check-label" for="gander2">หญิง</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="gander" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="idCardInput">เลขบัตรประชาชน</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="idCardInput"
                                                        maxlength="13"
                                                        placeholder="กรอกเลขบัตรประชาชน"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                                                    <small id="idCardError" class="text-danger d-none">
                                                        กรุณากรอกเลขบัตรประชาชนให้ครบ 13 หลัก
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            const idCardInput = document.getElementById("idCardInput");
                                            const idCardError = document.getElementById("idCardError");

                                            idCardInput.addEventListener("blur", function() {
                                                if (idCardInput.value.length !== 13) {
                                                    idCardError.classList.remove("d-none");
                                                } else {
                                                    idCardError.classList.add("d-none");
                                                }
                                            });
                                        </script>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>สิทธิการรักษา</label>
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="heal" id="heal1">
                                                            <label class="form-check-label" for="heal1">บัตรทอง</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="heal" id="heal2">
                                                            <label class="form-check-label" for="heal2">ข้าราชการ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="heal" id="heal3">
                                                            <label class="form-check-label" for="heal3">ประกันสังคม</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="heal" id="heal4">
                                                            <label class="form-check-label" for="heal4">แรงงานต่างด้าวขึ้นทะเบียน</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="heal" id="heal5">
                                                            <label class="form-check-label" for="heal5">ไม่มีหลักประกัน</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="heal" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ประกันอื่น ๆ (ถ้ามี)</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="insuranceOption"
                                                                id="insuranceLife"
                                                                value="life" />
                                                            <label class="form-check-label" for="insuranceLife">
                                                                ประกันชีวิต
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="insuranceOption"
                                                                id="insuranceAccident"
                                                                value="accident" />
                                                            <label class="form-check-label" for="insuranceAccident">
                                                                ผู้ประสบภัยจากรถ
                                                            </label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="insuranceOption" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>

                                                    <!-- ฟอร์มกรอกทะเบียนรถ -->
                                                    <div id="plateInput" class="mt-3">
                                                        <label for="licensePlate">เลขทะเบียนรถ</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="licensePlate"
                                                            name="licensePlate"
                                                            placeholder="กรอกเลขทะเบียนรถ" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            // เมื่อโหลดหน้าและมีการเปลี่ยนตัวเลือก
                                            document.addEventListener("DOMContentLoaded", function() {
                                                const radioLife = document.getElementById("insuranceLife");
                                                const radioAccident = document.getElementById("insuranceAccident");
                                                const plateInput = document.getElementById("plateInput");

                                                function togglePlateInput() {
                                                    if (radioAccident.checked) {
                                                        plateInput.style.display = "block";
                                                    } else {
                                                        plateInput.style.display = "none";
                                                    }
                                                }

                                                // เรียกใช้ตอนโหลด
                                                togglePlateInput();

                                                // เพิ่ม event listener
                                                radioLife.addEventListener("change", togglePlateInput);
                                                radioAccident.addEventListener("change", togglePlateInput);
                                            });
                                        </script>

                                        <div class="card-title" style="text-align: center;">
                                            <h5>สภาพผู้ป่วย</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ประเภทผู้ป่วย</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="typeheal"
                                                                id="flexRadioDefault10" />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault10">
                                                                บาดเจ็บ/อุบัติเหตุ
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="typeheal"
                                                                id="flexRadioDefault11" />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault11">
                                                                ป่วยฉุกเฉิน
                                                            </label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="typeheal" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center align-middle">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Time</th>
                                                        <th colspan="4">Vital Signs</th>
                                                        <th colspan="3">Neuro Signs</th>
                                                        <th rowspan="2">DTX</th>
                                                    </tr>
                                                    <tr>
                                                        <th>T</th>
                                                        <th>BP</th>
                                                        <th>PR</th>
                                                        <th>RR</th>
                                                        <th>E</th>
                                                        <th>V</th>
                                                        <th>M</th>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="time" class="form-control" name="receive_time"></td>
                                                        <td><input type="number" class="form-control d-inline-block" name="distance_go"></td>
                                                        <td><input type="number" class="form-control d-inline-block" name="distance_go"></td>
                                                        <td><input type="number" class="form-control d-inline-block" name="distance_go"></td>
                                                        <td><input type="number" class="form-control d-inline-block" name="distance_go"></td>
                                                        <td><input type="number" class="form-control d-inline-block" name="distance_go"></td>
                                                        <td><input type="number" class="form-control d-inline-block" name="distance_go"></td>
                                                        <td><input type="number" class="form-control d-inline-block" name="distance_go"></td>
                                                        <td><input type="number" class="form-control d-inline-block" name="distance_go"></td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ความรู้สึกตัว</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="feeling" id="flexRadioDefault12" />
                                                            <label class="form-check-label" for="flexRadioDefault12">รู้สึกตัวดี</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="feeling" id="flexRadioDefault13" />
                                                            <label class="form-check-label" for="flexRadioDefault13">ซึม</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="feeling" id="flexRadioDefault14" />
                                                            <label class="form-check-label" for="flexRadioDefault14">หมดสติปลุกตื่น</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="feeling" id="flexRadioDefault15" />
                                                            <label class="form-check-label" for="flexRadioDefault15">หมดสติปลุกไม่ตื่น</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="feeling" id="flexRadioDefault16" />
                                                            <label class="form-check-label" for="flexRadioDefault16">เอะอะโวยวาย</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="feeling" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>การหายใจ</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="breathing" id="flexRadioDefault17" />
                                                            <label class="form-check-label" for="flexRadioDefault17">ปกติ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="breathing" id="flexRadioDefault18" />
                                                            <label class="form-check-label" for="flexRadioDefault18">เร็ว</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="breathing" id="flexRadioDefault19" />
                                                            <label class="form-check-label" for="flexRadioDefault19">ช้า</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="breathing" id="flexRadioDefault20" />
                                                            <label class="form-check-label" for="flexRadioDefault20">ไม่สม่ำเสมอ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="breathing" id="flexRadioDefault21" />
                                                            <label class="form-check-label" for="flexRadioDefault21">ไม่หานใจ</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="breathing" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>บาดแผล</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault22" />
                                                            <label class="form-check-label" for="flexRadioDefault22">ไม่มี</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault23" />
                                                            <label class="form-check-label" for="flexRadioDefault23">แผลถลอก</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault24" />
                                                            <label class="form-check-label" for="flexRadioDefault24">ฉีกขาด/ตัด</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault25" />
                                                            <label class="form-check-label" for="flexRadioDefault25">แผลฟกช้ำ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault26" />
                                                            <label class="form-check-label" for="flexRadioDefault26">แผลไฟม้</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault27" />
                                                            <label class="form-check-label" for="flexRadioDefault27">ถูกยิง</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault28" />
                                                            <label class="form-check-label" for="flexRadioDefault28">ถูกแทง</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault29" />
                                                            <label class="form-check-label" for="flexRadioDefault29">อวัยวะตัดขาด</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="wound" id="flexRadioDefault30" />
                                                            <label class="form-check-label" for="flexRadioDefault30">ถูกระเบิด</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="wound" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>กระดูกผิดรูป</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="bone" id="flexRadioDefault31" />
                                                            <label class="form-check-label" for="flexRadioDefault31">ไม่มี</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="bone" id="flexRadioDefault32" />
                                                            <label class="form-check-label" for="flexRadioDefault32">ผิดรูป</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="bone" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>อวัยวะ</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault33" />
                                                            <label class="form-check-label" for="flexRadioDefault33">ศรีษะ/คอ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault34" />
                                                            <label class="form-check-label" for="flexRadioDefault34">ใบหน้า</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault35" />
                                                            <label class="form-check-label" for="flexRadioDefault35">สันหลัง/หลัง</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault36" />
                                                            <label class="form-check-label" for="flexRadioDefault36">หน้าอก/ไหปลาร้า</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault37" />
                                                            <label class="form-check-label" for="flexRadioDefault37">ช่องท้อง</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault38" />
                                                            <label class="form-check-label" for="flexRadioDefault38">เชิงกราน</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault39" />
                                                            <label class="form-check-label" for="flexRadioDefault39">Extremities</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault40" />
                                                            <label class="form-check-label" for="flexRadioDefault40">ผิวหนัง</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="organ" id="flexRadioDefault41" />
                                                            <label class="form-check-label" for="flexRadioDefault41">Multiple injury back</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="organ" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-title">
                                            <h6 class="ms-2">การช่วยเหลือ</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ทางเดินหายใจ/การหายใจ</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="haijai" id="flexRadioDefault42" />
                                                            <label class="form-check-label" for="flexRadioDefault42">ไม่</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="haijai" id="flexRadioDefault43" />
                                                            <label class="form-check-label" for="flexRadioDefault43">เปิดทางเดินหายใจ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="haijai" id="flexRadioDefault44" />
                                                            <label class="form-check-label" for="flexRadioDefault44">ใส่ Oral airway</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="haijai" id="flexRadioDefault45" />
                                                            <label class="form-check-label" for="flexRadioDefault45">ให้ O2 canula/mask</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="haijai" id="flexRadioDefault46" />
                                                            <label class="form-check-label" for="flexRadioDefault46">Ambu bag</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="haijai" id="flexRadioDefault47" />
                                                            <label class="form-check-label" for="flexRadioDefault47">Pocket Mask</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="haijai" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>บาดแผล/ห้ามเลือด</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="batplay" id="01" />
                                                            <label class="form-check-label" for="01">ไม่</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="batplay" id="02" />
                                                            <label class="form-check-label" for="02">การกดห้ามเลือด</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="batplay" id="03" />
                                                            <label class="form-check-label" for="03">ทำแผล</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="batplay" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>การดามกระดูก</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="kraduk" id="04" />
                                                            <label class="form-check-label" for="04">ไม่</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="kraduk" id="05" />
                                                            <label class="form-check-label" for="05">เฝือกลม/ไม้ดาม/sling</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="kraduk" id="06" />
                                                            <label class="form-check-label" for="06">เฝือกเามคอและกระดานรองหลังยาว</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="kraduk" id="07" />
                                                            <label class="form-check-label" for="07">เฝือกหลังและคอ (KED)</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="kraduk" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ช่วยฟื้นคืนชีพ</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="fenken" id="08" />
                                                            <label class="form-check-label" for="08">ไม่ได้ทำ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="fenken" id="09" />
                                                            <label class="form-check-label" for="09">ทำ</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="fenken" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ผลการดูแลรักษาขั้นต้น</label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="ponkandulay" id="10" />
                                                            <label class="form-check-label" for="10">ไม่ยอมให้รักษา</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="ponkandulay" id="11" />
                                                            <label class="form-check-label" for="11">ทุเลา</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="ponkandulay" id="12" />
                                                            <label class="form-check-label" for="12">คงเดิม/คงที่</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="ponkandulay" id="13" />
                                                            <label class="form-check-label" for="13">ทรุดหนัก</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="ponkandulay" id="14" />
                                                            <label class="form-check-label" for="14">เสียชีวิต ณ จุดเกิดเหตุ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="ponkandulay" id="15" />
                                                            <label class="form-check-label" for="15">เสียชีวิตขณะนำส่ง</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="ponkandulay" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>4. เกณฑ์การตัดสินใจส่งโรงบาล (โดยหัวหน้าทีมและ/ผ่านการเห็นชอบของศูนย์)</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="largeInput">นำส่งห้องฉุกเฉินโรงพยาบาล</label>
                                                    <input
                                                        type="text"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกข้อมูลนำส่งห้องฉุกเฉินโรงพยาบาล" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="namsong" id="16" />
                                                            <label class="form-check-label" for="16">รพ.รัฐ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="namsong" id="17" />
                                                            <label class="form-check-label" for="17">รพ.เอกชน</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="namsong" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>เหตุผล <i>(เลือกได้มากกว่า 1 ข้อ)</i></label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="18" />
                                                            <label class="form-check-label" for="18">เหมาะสม/สามารถรักษาได้</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="19" />
                                                            <label class="form-check-label" for="19">อยู่ใกล้</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="20" />
                                                            <label class="form-check-label" for="20">มีหลักประกัน</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="21" />
                                                            <label class="form-check-label" for="21">เป็นผู้ป่วยเก่า</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="22" />
                                                            <label class="form-check-label" for="22">เป็นความประสงค์</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="defaultSelect">ผู้สรุปรายงาน</label>
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            เลือกผู้สรุปรายงาน
                                                        </button>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> มูฮัมหมัด บากอ
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อันวา สีดิ
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อับดุลเลาะ มูฮัมหมัด
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อิสมาแอ เจะมะ
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>5. การประเมิน/รับรองการนำส่ง (โดยแพทย์ พยาบาล ประจำโรงพยาบาลที่รับดูแลต่อ)</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="largeInput">นำส่งห้องฉุกเฉินโรงพยาบาล</label>
                                                    <input
                                                        type="text"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกข้อมูลนำส่งห้องฉุกเฉินโรงพยาบาล" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="rb" id="16" />
                                                            <label class="form-check-label" for="16">รพ.รัฐ</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="rb" id="17" />
                                                            <label class="form-check-label" for="17">รพ.เอกชน</label>
                                                        </div>
                                                        <a type="button" class="clear-radio-btn" data-target="rb" style="display: none; margin-left: 15px; margin-top: 7px; padding: 4px 12px; font-size: 12px; color: red; cursor: pointer;">
                                                            ล้างคำตอบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>เหตุผล <i>(เลือกได้มากกว่า 1 ข้อ)</i></label><br />
                                                    <div class="d-lg-flex flex-wrap gap-3">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="18" />
                                                            <label class="form-check-label" for="18">เหมาะสม/สามารถรักษาได้</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="19" />
                                                            <label class="form-check-label" for="19">อยู่ใกล้</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="20" />
                                                            <label class="form-check-label" for="20">มีหลักประกัน</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="21" />
                                                            <label class="form-check-label" for="21">เป็นผู้ป่วยเก่า</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="checkbox" name="but[]" id="22" />
                                                            <label class="form-check-label" for="22">เป็นความประสงค์</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="defaultSelect">ผู้สรุปรายงาน</label>
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            เลือกผู้สรุปรายงาน
                                                        </button>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> มูฮัมหมัด บากอ
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อันวา สีดิ
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อับดุลเลาะ มูฮัมหมัด
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="dropdown-item d-flex align-items-center">
                                                                    <input type="checkbox" class="form-check-input me-2"> อิสมาแอ เจะมะ
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            // ฟังก์ชันสำหรับจัดการ radio button ทั้งหมด
                                            function initRadioClearButtons() {
                                                // หา radio group ทั้งหมด
                                                const radioGroups = {};

                                                // จัดกลุ่ม radio button ตาม name
                                                document.querySelectorAll('input[type="radio"]').forEach(radio => {
                                                    const groupName = radio.name;
                                                    if (!radioGroups[groupName]) {
                                                        radioGroups[groupName] = [];
                                                    }
                                                    radioGroups[groupName].push(radio);
                                                });

                                                // สร้าง event listener สำหรับแต่ละกลุ่ม
                                                Object.keys(radioGroups).forEach(groupName => {
                                                    const radios = radioGroups[groupName];
                                                    const clearBtn = document.querySelector(`[data-target="${groupName}"]`);

                                                    if (clearBtn) {
                                                        // ฟังการเปลี่ยนแปลงของ radio ในกลุ่ม
                                                        radios.forEach(radio => {
                                                            radio.addEventListener('change', function() {
                                                                clearBtn.style.display = 'inline-block';
                                                            });
                                                        });

                                                        // เพิ่ม event สำหรับปุ่มล้าง
                                                        clearBtn.addEventListener('click', function() {
                                                            radios.forEach(radio => {
                                                                radio.checked = false;
                                                            });
                                                            clearBtn.style.display = 'none';
                                                        });
                                                    }
                                                });
                                            }

                                            // เรียกใช้เมื่อโหลดหน้าเสร็จ
                                            document.addEventListener('DOMContentLoaded', initRadioClearButtons);

                                            // หรือเรียกใช้ทันทีถ้าไม่ใช้ DOMContentLoaded
                                            initRadioClearButtons();
                                        </script>
                                    </div>
                                    <div class="card-action">
                                        <button class="btn btn-success">บันทึก</button>
                                        <button class="btn btn-danger">ย้อนกลับ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
</div>
<?php
include_once("../footer.php");
?>