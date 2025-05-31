<?php
session_start();
$currentDir = basename(dirname($_SERVER['PHP_SELF'])); // Get current directory name
include_once("../sidebar.php");
?>
<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">พื้นที่ออกเหตุและเวลา</h3>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-danger">ไม่พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
                                    <td><span class="badge badge-success">พบเหตุ</span></td>
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
            </div>
        </div>
    </div>
</div>
<?php
include_once("../footer.php");
?>