<?php
session_start();
$currentDir = basename(dirname($_SERVER['PHP_SELF'])); // Get current directory name
include_once("../sidebar.php");
?>
<div class="page-inner">
    <?php if (!isset($_GET['tambah']) && !isset($_POST['edit']) && !isset($_POST['details'])) { ?>
        <div class="page-header">
            <h3 class="fw-bold mb-3">สรุปรายงานการเงิน</h3>
            <div class="ms-md-auto py-2 py-md-0">
                <div class="btn-group">
                    <a href="?tambah" class="btn btn-primary btn-round">เพิ่มข้อมูล</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">สรุปรายงานการเงินทั้งหมด (บาท)</p>
                                    <h4 class="card-title">38,000.00</h4>
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
                        <h4 class="card-title">สรุปรายงานการเงิน</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                id="basic-datatables"
                                class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ประทับเวลา (วันที่)</th>
                                        <th>ยอดเงิน (บาท)</th>
                                        <th>เครื่องมือ</th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ประทับเวลา (วันที่)</th>
                                        <th>ยอดเงิน (บาท)</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>30 พ.ค. 2568</td>
                                        <td>7000</td>
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
                                        <td>31 พ.ค. 2568</td>
                                        <td>5500</td>
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
                                        <td>1 พ.ค. 2568</td>
                                        <td>9500</td>
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
                                        <td>2 พ.ค. 2568</td>
                                        <td>2000</td>
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
                    <?php } if (isset($_GET['tambah']) && !isset($_POST['edit'])) { ?>
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
                                        <div class="row">
                                            <div class="col-md-12">
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
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="largeInput">ยอดเงิน (บาท)</label>
                                                    <input
                                                        type="number"
                                                        class="form-control form-control"
                                                        id="defaultInput"
                                                        placeholder="กรอกยอดเงิน (บาท)" />
                                                </div>
                                            </div>
                                        </div>
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