<?php
session_start();
$currentDir = basename(dirname($_SERVER['PHP_SELF'])); // Get current directory name
include_once("../sidebar.php");
?>
<div class="page-inner">
    <?php if (!isset($_GET['tambah']) && !isset($_POST['edit']) && !isset($_POST['details'])) { ?>
        <div class="page-header">
            <h3 class="fw-bold mb-3">งานอุบัติเหตุฉุกเฉิน</h3>
            <div class="ms-md-auto py-2 py-md-0">
                <div class="btn-group">
                    <a href="?tambah" class="btn btn-primary btn-round">เพิ่มข้อมูล</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6">
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
            <div class="col-sm-6 col-md-6">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">ประเภทงานอุบัติเหตุฉุกเฉินมากที่สุด (ประเภท)</p>
                                    <h4 class="card-title">19 (เย็บแผล)</h4>
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
                        <h4 class="card-title">งานอุบัติเหตุฉุกเฉิน</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                id="basic-datatables"
                                class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ประทับเวลา (วันที่)</th>
                                        <th>ฉีดยา</th>
                                        <th>ดูดเสมหะ</th>
                                        <th>ตัดไหม</th>
                                        <th>ทำแผล</th>
                                        <th>พ่นยา</th>
                                        <th>เย็บแผล</th>
                                        <th>ให้น้ำเกลือ</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ประทับเวลา (วันที่)</th>
                                        <th>ฉีดยา</th>
                                        <th>ดูดเสมหะ</th>
                                        <th>ตัดไหม</th>
                                        <th>ทำแผล</th>
                                        <th>พ่นยา</th>
                                        <th>เย็บแผล</th>
                                        <th>ให้น้ำเกลือ</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>24 พ.ค. 2568</td>
                                        <td>5</td>
                                        <td>10</td>
                                        <td>9</td>
                                        <td>6</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>1</td>
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
                                        <td>25 พ.ค. 2568</td>
                                        <td>7</td>
                                        <td>1</td>
                                        <td>8</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>10</td>
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
                                        <td>26 พ.ค. 2568</td>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>3</td>
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
                                        <td>27 พ.ค. 2568</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
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
                                        <td>28 พ.ค. 2568</td>
                                        <td>6</td>
                                        <td>1</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>7</td>
                                        <td>3</td>
                                        <td>2</td>
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
                                        <td>29 พ.ค. 2568</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
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
                                        <td>30 พ.ค. 2568</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
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
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
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
                                        <td>1 มิ.ย. 2568</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
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
                                        <td>2 มิ.ย. 2568</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
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
                                        <td>3 มิ.ย. 2568</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
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
                                        <td>4 มิ.ย. 2568</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
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
                                        <td>5 มิ.ย. 2568</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
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
                                        <td>6 มิ.ย. 2568</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
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
                                        <td>7 มิ.ย. 2568</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
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
                                        <td>8 มิ.ย. 2568</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
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
                                        <td>9 มิ.ย. 2568</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
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
                                        <td>10 มิ.ย. 2568</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
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
                                        <td>11 มิ.ย. 2568</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
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
                                        <td>12 มิ.ย. 2568</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
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
                                        <td>13 มิ.ย. 2568</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
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
                                        <td>14 มิ.ย. 2568</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
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
                                        <td>15 มิ.ย. 2568</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
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
                                        <td>16 มิ.ย. 2568</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
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
                                        <td>17 มิ.ย. 2568</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
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
                                        <td>18 มิ.ย. 2568</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
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
                                        <td>19 มิ.ย. 2568</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
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
                                        <td>20 มิ.ย. 2568</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
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
                                        <td>21 มิ.ย. 2568</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
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
                                        <td>22 มิ.ย. 2568</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
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
                                        <td>23 มิ.ย. 2568</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
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
                                        <td>24 มิ.ย. 2568</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
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
                                        <td>25 มิ.ย. 2568</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
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
                                        <td>26 มิ.ย. 2568</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
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
                                        <td>27 มิ.ย. 2568</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
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
                                        <td>28 มิ.ย. 2568</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
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
                                        <td>29 มิ.ย. 2568</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
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
                                        <td>30 มิ.ย. 2568</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
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
                                        <td>1 ก.ค. 2568</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
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
                                        <td>2 ก.ค. 2568</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
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
                                        <td>3 ก.ค. 2568</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
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
                                        <td>4 ก.ค. 2568</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
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
                                        <td>5 ก.ค. 2568</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
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
                                        <td>6 ก.ค. 2568</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
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
                                        <td>7 ก.ค. 2568</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
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
                                        <td>8 ก.ค. 2568</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
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
                                        <td>9 ก.ค. 2568</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
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
                                        <td>10 ก.ค. 2568</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
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
                                        <td>11 ก.ค. 2568</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
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
                                        <td>12 ก.ค. 2568</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
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
                                        <td>13 ก.ค. 2568</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
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
                                        <td>14 ก.ค. 2568</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
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
                                        <td>15 ก.ค. 2568</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
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
                                        <td>16 ก.ค. 2568</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
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
                                        <td>17 ก.ค. 2568</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
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
                                    <td>18 ก.ค. 2568</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
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
                                        <td>19 ก.ค. 2568</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
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
                                        <td>20 ก.ค. 2568</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="typeNumber">ฉีดยา</label>
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="typeNumber"
                                                        placeholder="กรอกตัวเลข" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="typeNumber">ทำแผล</label>
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="typeNumber"
                                                        placeholder="กรอกตัวเลข" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="typeNumber">เย็บแผล</label>
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="typeNumber"
                                                        placeholder="กรอกตัวเลข" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="typeNumber">ตัดไหม</label>
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="typeNumber"
                                                        placeholder="กรอกตัวเลข" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="typeNumber">พ่นยา</label>
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="typeNumber"
                                                        placeholder="กรอกตัวเลข" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="typeNumber">ดูดเสมหะ</label>
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="typeNumber"
                                                        placeholder="กรอกตัวเลข" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="typeNumber">ให้น้ำเกลือ</label>
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="typeNumber"
                                                        placeholder="กรอกตัวเลข" />
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