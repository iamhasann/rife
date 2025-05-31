<?php
session_start();
$currentDir = basename(dirname($_SERVER['PHP_SELF'])); // Get current directory name
include_once("../sidebar.php");
?>
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">หน้าแรก</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                <h5 class="mb-3 text-primary">
                    <i class="fas fa-filter"></i><b> ตัวกรอง</b>
                </h5>
                <form>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">55</label>
                                <input type="text" class="form-control" placeholder="พิมพ์ชื่อเรื่อง/รหัส/ชื่อผู้แจ้ง/เลขที่รับ" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name_en" class="form-label">คำนำหน้า</label>
                                <div class="dropdown">
                                    <button class="form-control text-start dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        เลือกคำนำหน้า
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">นาย</a></li>
                                        <li><a class="dropdown-item" href="#">นาง</a></li>
                                        <li><a class="dropdown-item" href="#">นางสาว</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name_en" class="form-label">คำนำหน้า</label>
                                <div class="dropdown">
                                    <button class="form-control text-start dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        เลือกคำนำหน้า
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">นาย</a></li>
                                        <li><a class="dropdown-item" href="#">นาง</a></li>
                                        <li><a class="dropdown-item" href="#">นางสาว</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name_en" class="form-label">คำนำหน้า</label>
                                <div class="dropdown">
                                    <button class="form-control text-start dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        เลือกคำนำหน้า
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">นาย</a></li>
                                        <li><a class="dropdown-item" href="#">นาง</a></li>
                                        <li><a class="dropdown-item" href="#">นางสาว</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name_en" class="form-label">คำนำหน้า</label>
                                <div class="dropdown">
                                    <button class="form-control text-start dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        เลือกคำนำหน้า
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">นาย</a></li>
                                        <li><a class="dropdown-item" href="#">นาง</a></li>
                                        <li><a class="dropdown-item" href="#">นางสาว</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name_en" class="form-label">คำนำหน้า</label>
                                <input type="date" class="form-control" placeholder="ตั้งแต่วันที่" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name_en" class="form-label">คำนำหน้า</label>
                                <input type="date" class="form-control" placeholder="ถึงวันที่" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name_en" class="form-label">คำนำหน้า</label>
                                <div class="dropdown">
                                    <button class="form-control text-start dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        เลือกคำนำหน้า
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">นาย</a></li>
                                        <li><a class="dropdown-item" href="#">นาง</a></li>
                                        <li><a class="dropdown-item" href="#">นางสาว</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name_en" class="form-label">คำนำหน้า</label>
                                <div class="dropdown">
                                    <button class="form-control text-start dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        เลือกคำนำหน้า
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">นาย</a></li>
                                        <li><a class="dropdown-item" href="#">นาง</a></li>
                                        <li><a class="dropdown-item" href="#">นางสาว</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 d-flex justify-content-end align-items-end">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> ค้นหา
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
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
                                class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-briefcase-medical"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">งานอุบัติเหตุฉุกเฉินทั้งหมด (ครั้ง)</p>
                                <h4 class="card-title">453</h4>
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
        <div class="col-md-9">
            <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">อัตราการออกเหตุ</div>
                        <div class="card-tools">
                            <a
                                href="#"
                                class="btn btn-label-success btn-round btn-sm me-2">
                                <span class="btn-label">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                ส่งออก
                            </a>
                            <a href="#" class="btn btn-label-info btn-round btn-sm">
                                <span class="btn-label">
                                    <i class="fa fa-print"></i>
                                </span>
                                พิมพ์
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-round">
                <div class="card-body">
                    <div class="card-head-row card-tools-still-right">
                        <div class="card-title">เจ้าหน้าที่ออนไลน์อยู่</div>
                        <div class="card-tools">
                            <div class="dropdown">
                                <button
                                    class="btn btn-icon btn-clean me-0"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-list py-4">
                        <div class="item-list">
                            <div class="avatar avatar-online">
                                <img
                                    src="../../assets/img/jm_denis.jpg"
                                    alt="..."
                                    class="avatar-img rounded-circle" />
                            </div>
                            <div class="info-user ms-3">
                                <div class="username">มูฮัมหมัด</div>
                                <div class="status">0626245438</div>
                            </div>
                            <button class="btn btn-icon btn-link btn-success op-8 me-1">
                                <i class="fas fa-phone"></i>
                            </button>
                        </div>
                        <div class="item-list">
                            <div class="avatar avatar-online">
                                <span
                                    class="avatar-title rounded-circle border border-white">CF</span>
                            </div>
                            <div class="info-user ms-3">
                                <div class="username">อันวา</div>
                                <div class="status">0862453198</div>
                            </div>
                            <button class="btn btn-icon btn-link btn-success op-8 me-1">
                                <i class="fas fa-phone"></i>
                            </button>
                        </div>
                        <div class="item-list">
                            <div class="avatar avatar-offline">
                                <img
                                    src="../../assets/img/talha.jpg"
                                    alt="..."
                                    class="avatar-img rounded-circle" />
                            </div>
                            <div class="info-user ms-3">
                                <div class="username">อับดุลเลาะ</div>
                                <div class="status">0935413583</div>
                            </div>
                            <button class="btn btn-icon btn-link btn-success op-8 me-1">
                                <i class="fas fa-phone"></i>
                            </button>
                        </div>
                        <div class="item-list">
                            <div class="avatar avatar-offline">
                                <img
                                    src="../../assets/img/chadengle.jpg"
                                    alt="..."
                                    class="avatar-img rounded-circle" />
                            </div>
                            <div class="info-user ms-3">
                                <div class="username">อิสมาแอ</div>
                                <div class="status">0869046312</div>
                            </div>
                            <button class="btn btn-icon btn-link btn-success op-8 me-1">
                                <i class="fas fa-phone"></i>
                            </button>
                        </div>
                        <div class="item-list">
                            <div class="avatar avatar-online">
                                <span
                                    class="avatar-title rounded-circle border border-white bg-primary">H</span>
                            </div>
                            <div class="info-user ms-3">
                                <div class="username">ฟุรกอน</div>
                                <div class="status">0645875036</div>
                            </div>
                            <button class="btn btn-icon btn-link btn-success op-8 me-1">
                                <i class="fas fa-phone"></i>
                            </button>
                        </div>
                        <div class="item-list">
                            <div class="avatar avatar-offline">
                                <span
                                    class="avatar-title rounded-circle border border-white bg-secondary">F</span>
                            </div>
                            <div class="info-user ms-3">
                                <div class="username">ฮัมดัน</div>
                                <div class="status">0795426910</div>
                            </div>
                            <button class="btn btn-icon btn-link btn-success op-8 me-1">
                                <i class="fas fa-phone"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">งานอุบัติเหตุฉุกเฉิน</div>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">ตำแหน่งรถฉุกเฉิน</div>
                </div>
                <div class="card-body">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31694.811535209534!2d101.17264664984086!3d6.787925680395897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b30f885600f10d%3A0x48d7fbdd3e180bc4!2z4Lib4Li44LmC4Lil4Liw4Lib4Li44LmC4LiiIOC4reC4s-C5gOC4oOC4rSDguKvguJnguK3guIfguIjguLTguIEg4Lib4Lix4LiV4LiV4Liy4LiZ4Li1IDk0MTcw!5e0!3m2!1sth!2sth!4v1747300099144!5m2!1sth!2sth"
                        width="600"
                        height="450"
                        style="border: 0; width: 100%"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include_once("../footer.php");
?>