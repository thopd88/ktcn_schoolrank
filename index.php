<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>XẾP HẠNG HỌC SINH THPT 2021</title>
    <meta name="description"
          content="Trang xếp hạng học sinh THPT">
    <meta property="og:image" content="/images/share.jpg"/>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>

<div id="wait" style="
    display: none;
    background: rgba(0, 0, 0, 0.5) no-repeat scroll center center;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 999999;">
    <img src='images/loading.gif' style="width: 150px; margin-top: 15%;margin-left: 40%;"/>
</div>
<div id="page">
    <header id="header">
        <div class="container">
            <div class="header mx-auto text-center">
                <div class="logo-ranking">
                    <a href="#">
                        <img src="images/2020-KTCN-Eng.png">
                    </a>
                </div>
                <div class="text-header">
                    <img class="img-sachoolrank" src="images/Schoolrank-logo.png" alt="schoolrank">
                    <h2>Xếp hạng học sinh THPT</h2>
                </div>
            </div>
        </div>
    </header>
    <div class="form_infor">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#hoc_ba">Xếp hạng theo học bạ THPT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#gdtx">Xếp hạng theo học bạ GDTX (cấp THPT)</a>
                </li>
                <li class="nav-item disabled" id="baotri">
                    <a class="nav-link" data-toggle="tab" href="#diem_thi">Xếp hạng theo kết quả thi THPT</a>
                </li>

            </ul>
                        <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="hoc_ba">
                    <form method="post" action="" id="form_1" class="ranking" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Họ tên:</label>
                                    <input type="text" name="fullname" class="form-control" required
                                           placeholder="Họ tên">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="sel1">Tỉnh/thành:</label>
                                    <select class="form-control" required name="province">
                                        <option value="">Tỉnh/thành</option>
                                                                                    <option value="51">An Giang</option>
                                                                                    <option value="52">Bà Rịa-Vũng Tàu</option>
                                                                                    <option value="18">Bắc Giang</option>
                                                                                    <option value="11">Bắc Kạn</option>
                                                                                    <option value="60">Bạc Liêu</option>
                                                                                    <option value="19">Bắc Ninh</option>
                                                                                    <option value="56">Bến Tre</option>
                                                                                    <option value="44">Bình Dương</option>
                                                                                    <option value="37">Bình Định</option>
                                                                                    <option value="43">Bình Phước</option>
                                                                                    <option value="47">Bình Thuận</option>
                                                                                    <option value="61">Cà Mau</option>
                                                                                    <option value="55">Cần Thơ</option>
                                                                                    <option value="6">Cao Bằng</option>
                                                                                    <option value="4">Đà Nẵng</option>
                                                                                    <option value="40">Đắk Lắk</option>
                                                                                    <option value="63">Đăk Nông</option>
                                                                                    <option value="62">Điện Biên</option>
                                                                                    <option value="48">Đồng Nai</option>
                                                                                    <option value="50">Đồng Tháp</option>
                                                                                    <option value="38">Gia Lai</option>
                                                                                    <option value="5">Hà Giang</option>
                                                                                    <option value="24">Hà Nam</option>
                                                                                    <option value="1">Hà Nội</option>
                                                                                    <option value="30">Hà Tĩnh</option>
                                                                                    <option value="21">Hải Dương</option>
                                                                                    <option value="3">Hải Phòng</option>
                                                                                    <option value="64">Hậu Giang</option>
                                                                                    <option value="23">Hoà Bình</option>
                                                                                    <option value="22">Hưng Yên</option>
                                                                                    <option value="41">Khánh Hoà</option>
                                                                                    <option value="54">Kiên Giang</option>
                                                                                    <option value="36">Kon Tum</option>
                                                                                    <option value="7">Lai Châu</option>
                                                                                    <option value="42">Lâm Đồng</option>
                                                                                    <option value="10">Lạng Sơn</option>
                                                                                    <option value="8">Lào Cai</option>
                                                                                    <option value="49">Long An</option>
                                                                                    <option value="25">Nam Định</option>
                                                                                    <option value="29">Nghệ An</option>
                                                                                    <option value="27">Ninh Bình</option>
                                                                                    <option value="45">Ninh Thuận</option>
                                                                                    <option value="15">Phú Thọ</option>
                                                                                    <option value="39">Phú Yên</option>
                                                                                    <option value="31">Quảng Bình</option>
                                                                                    <option value="34">Quảng Nam</option>
                                                                                    <option value="35">Quảng Ngãi</option>
                                                                                    <option value="17">Quảng Ninh</option>
                                                                                    <option value="32">Quảng Trị</option>
                                                                                    <option value="59">Sóc Trăng</option>
                                                                                    <option value="14">Sơn La</option>
                                                                                    <option value="46">Tây Ninh</option>
                                                                                    <option value="26">Thái Bình</option>
                                                                                    <option value="12">Thái Nguyên</option>
                                                                                    <option value="28">Thanh Hoá</option>
                                                                                    <option value="33">Thừa Thiên - Huế</option>
                                                                                    <option value="53">Tiền Giang</option>
                                                                                    <option value="2">TP. Hồ Chí Minh</option>
                                                                                    <option value="58">Trà Vinh</option>
                                                                                    <option value="9">Tuyên Quang</option>
                                                                                    <option value="57">Vĩnh Long</option>
                                                                                    <option value="16">Vĩnh Phúc</option>
                                                                                    <option value="13">Yên Bái</option>
                                                                            </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Điện thoại:</label>
                                    <input type="number" name="number" class="form-control" required
                                           placeholder="Số điện thoại">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h4>Điểm lớp 11</h4>
                                <p><i style="font-size: 14px; color: white">Nếu điểm là số thập phân, sử dụng dấu
                                        chấm</i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Toán:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" id="number" name="toan_1" class="form-control number"
                                                   required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Vật lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="ly_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Hóa học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="hoa_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Sinh học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="sinh_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Ngữ văn:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="van_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Lịch sử:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="su_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Địa lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="dia_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Ngoại ngữ:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="anh_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">GDCD:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="gdcd_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4>Điểm lớp 12 (HK1)</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Toán:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="toan_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Vật lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="ly_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Hóa học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="hoa_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Sinh học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="sinh_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Ngữ văn:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="van_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Lịch sử:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="su_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Địa lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="dia_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Ngoại ngữ:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="anh_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">GDCD:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="gdcd_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="text" name="type_ranking" hidden class="form-control" value="1">
                                <button type="submit" class="btn btn-submit">Xem kết quả</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane container fade" id="gdtx">
                    <form method="post" action="" id="form_3" class="ranking" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Họ tên:</label>
                                    <input type="text" name="fullname" class="form-control" required
                                           placeholder="Họ tên">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="sel1">Tỉnh/thành:</label>
                                    <select class="form-control" required name="province">
                                        <option value="">Tỉnh/thành</option>
                                                                                    <option value="51">An Giang</option>
                                                                                    <option value="52">Bà Rịa-Vũng Tàu</option>
                                                                                    <option value="18">Bắc Giang</option>
                                                                                    <option value="11">Bắc Kạn</option>
                                                                                    <option value="60">Bạc Liêu</option>
                                                                                    <option value="19">Bắc Ninh</option>
                                                                                    <option value="56">Bến Tre</option>
                                                                                    <option value="44">Bình Dương</option>
                                                                                    <option value="37">Bình Định</option>
                                                                                    <option value="43">Bình Phước</option>
                                                                                    <option value="47">Bình Thuận</option>
                                                                                    <option value="61">Cà Mau</option>
                                                                                    <option value="55">Cần Thơ</option>
                                                                                    <option value="6">Cao Bằng</option>
                                                                                    <option value="4">Đà Nẵng</option>
                                                                                    <option value="40">Đắk Lắk</option>
                                                                                    <option value="63">Đăk Nông</option>
                                                                                    <option value="62">Điện Biên</option>
                                                                                    <option value="48">Đồng Nai</option>
                                                                                    <option value="50">Đồng Tháp</option>
                                                                                    <option value="38">Gia Lai</option>
                                                                                    <option value="5">Hà Giang</option>
                                                                                    <option value="24">Hà Nam</option>
                                                                                    <option value="1">Hà Nội</option>
                                                                                    <option value="30">Hà Tĩnh</option>
                                                                                    <option value="21">Hải Dương</option>
                                                                                    <option value="3">Hải Phòng</option>
                                                                                    <option value="64">Hậu Giang</option>
                                                                                    <option value="23">Hoà Bình</option>
                                                                                    <option value="22">Hưng Yên</option>
                                                                                    <option value="41">Khánh Hoà</option>
                                                                                    <option value="54">Kiên Giang</option>
                                                                                    <option value="36">Kon Tum</option>
                                                                                    <option value="7">Lai Châu</option>
                                                                                    <option value="42">Lâm Đồng</option>
                                                                                    <option value="10">Lạng Sơn</option>
                                                                                    <option value="8">Lào Cai</option>
                                                                                    <option value="49">Long An</option>
                                                                                    <option value="25">Nam Định</option>
                                                                                    <option value="29">Nghệ An</option>
                                                                                    <option value="27">Ninh Bình</option>
                                                                                    <option value="45">Ninh Thuận</option>
                                                                                    <option value="15">Phú Thọ</option>
                                                                                    <option value="39">Phú Yên</option>
                                                                                    <option value="31">Quảng Bình</option>
                                                                                    <option value="34">Quảng Nam</option>
                                                                                    <option value="35">Quảng Ngãi</option>
                                                                                    <option value="17">Quảng Ninh</option>
                                                                                    <option value="32">Quảng Trị</option>
                                                                                    <option value="59">Sóc Trăng</option>
                                                                                    <option value="14">Sơn La</option>
                                                                                    <option value="46">Tây Ninh</option>
                                                                                    <option value="26">Thái Bình</option>
                                                                                    <option value="12">Thái Nguyên</option>
                                                                                    <option value="28">Thanh Hoá</option>
                                                                                    <option value="33">Thừa Thiên - Huế</option>
                                                                                    <option value="53">Tiền Giang</option>
                                                                                    <option value="2">TP. Hồ Chí Minh</option>
                                                                                    <option value="58">Trà Vinh</option>
                                                                                    <option value="9">Tuyên Quang</option>
                                                                                    <option value="57">Vĩnh Long</option>
                                                                                    <option value="16">Vĩnh Phúc</option>
                                                                                    <option value="13">Yên Bái</option>
                                                                            </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" name="email" class="form-control" required
                                           placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h4>Điểm lớp 11</h4>
                                <p><i style="font-size: 14px; color: white">Nếu điểm là số thập phân, sử dụng dấu
                                        chấm</i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Toán:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" id="number" name="toan_1" class="form-control number"
                                                   required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Vật lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="ly_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Hóa học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="hoa_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Sinh học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="sinh_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Ngữ văn:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="van_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Lịch sử:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="su_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Địa lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="dia_1" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4>Điểm lớp 12 (HK1)</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Toán:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="toan_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Vật lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="ly_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Hóa học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="hoa_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Sinh học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="sinh_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Ngữ văn:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="van_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Lịch sử:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="su_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Địa lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="dia_2" class="form-control number" required
                                                   placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="text" name="type_ranking" hidden class="form-control" value="3">
                                <button type="submit" class="btn btn-submit">Xem kết quả</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane container fade" id="diem_thi">
                    <form method="post" action="" id="form_2" class="ranking">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Họ tên:</label>
                                    <input type="text" name="fullname" class="form-control" required
                                           placeholder="Họ tên">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="sel1">Tỉnh / thành:</label>
                                    <select class="form-control" required name="province">
                                        <option value="">Tỉnh / thành</option>
                                                                                    <option value="51">An Giang</option>
                                                                                    <option value="52">Bà Rịa-Vũng Tàu</option>
                                                                                    <option value="18">Bắc Giang</option>
                                                                                    <option value="11">Bắc Kạn</option>
                                                                                    <option value="60">Bạc Liêu</option>
                                                                                    <option value="19">Bắc Ninh</option>
                                                                                    <option value="56">Bến Tre</option>
                                                                                    <option value="44">Bình Dương</option>
                                                                                    <option value="37">Bình Định</option>
                                                                                    <option value="43">Bình Phước</option>
                                                                                    <option value="47">Bình Thuận</option>
                                                                                    <option value="61">Cà Mau</option>
                                                                                    <option value="55">Cần Thơ</option>
                                                                                    <option value="6">Cao Bằng</option>
                                                                                    <option value="4">Đà Nẵng</option>
                                                                                    <option value="40">Đắk Lắk</option>
                                                                                    <option value="63">Đăk Nông</option>
                                                                                    <option value="62">Điện Biên</option>
                                                                                    <option value="48">Đồng Nai</option>
                                                                                    <option value="50">Đồng Tháp</option>
                                                                                    <option value="38">Gia Lai</option>
                                                                                    <option value="5">Hà Giang</option>
                                                                                    <option value="24">Hà Nam</option>
                                                                                    <option value="1">Hà Nội</option>
                                                                                    <option value="30">Hà Tĩnh</option>
                                                                                    <option value="21">Hải Dương</option>
                                                                                    <option value="3">Hải Phòng</option>
                                                                                    <option value="64">Hậu Giang</option>
                                                                                    <option value="23">Hoà Bình</option>
                                                                                    <option value="22">Hưng Yên</option>
                                                                                    <option value="41">Khánh Hoà</option>
                                                                                    <option value="54">Kiên Giang</option>
                                                                                    <option value="36">Kon Tum</option>
                                                                                    <option value="7">Lai Châu</option>
                                                                                    <option value="42">Lâm Đồng</option>
                                                                                    <option value="10">Lạng Sơn</option>
                                                                                    <option value="8">Lào Cai</option>
                                                                                    <option value="49">Long An</option>
                                                                                    <option value="25">Nam Định</option>
                                                                                    <option value="29">Nghệ An</option>
                                                                                    <option value="27">Ninh Bình</option>
                                                                                    <option value="45">Ninh Thuận</option>
                                                                                    <option value="15">Phú Thọ</option>
                                                                                    <option value="39">Phú Yên</option>
                                                                                    <option value="31">Quảng Bình</option>
                                                                                    <option value="34">Quảng Nam</option>
                                                                                    <option value="35">Quảng Ngãi</option>
                                                                                    <option value="17">Quảng Ninh</option>
                                                                                    <option value="32">Quảng Trị</option>
                                                                                    <option value="59">Sóc Trăng</option>
                                                                                    <option value="14">Sơn La</option>
                                                                                    <option value="46">Tây Ninh</option>
                                                                                    <option value="26">Thái Bình</option>
                                                                                    <option value="12">Thái Nguyên</option>
                                                                                    <option value="28">Thanh Hoá</option>
                                                                                    <option value="33">Thừa Thiên - Huế</option>
                                                                                    <option value="53">Tiền Giang</option>
                                                                                    <option value="2">TP. Hồ Chí Minh</option>
                                                                                    <option value="58">Trà Vinh</option>
                                                                                    <option value="9">Tuyên Quang</option>
                                                                                    <option value="57">Vĩnh Long</option>
                                                                                    <option value="16">Vĩnh Phúc</option>
                                                                                    <option value="13">Yên Bái</option>
                                                                            </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" name="email" class="form-control" required
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Tổ hợp môn:</label>
                                    <select class="form-control" required name="to_hop" id="to_hop">
                                        <option value="">-- Chọn tổ hợp môn --</option>
                                        <option value="1">Khoa học tự nhiên</option>
                                        <option value="2">Xã hội</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4>Điểm thi THPT</h4>
                            <p><i style="font-size: 14px; color: white">Nếu điểm là số thập phân, sử dụng dấu chấm</i>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Toán:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="toan_thpt" class="form-control number" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Ngữ văn:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="van_thpt" class="form-control number" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Ngoại ngữ:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="anh_thpt" class="form-control number" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="ban_khtn">
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Vật lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="ly_thpt" class="form-control number" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Hóa học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="hoa_thpt" class="form-control number" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Sinh học:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="sinh_thpt" class="form-control number" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="ban_xh">
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Lịch sử:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="su_thpt" class="form-control" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">Địa lý:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="dia_thpt" class="form-control number" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="">GDCD:</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="gdcd_thpt" class="form-control number" required
                                                   placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="text" name="type_ranking" hidden class="form-control" value="2">
                                <button type="submit" class="btn btn-submit">Xem kết quả</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="info">
                        <li>
                            Notes.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
    <div class="modal" id="myModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="img-logo mx-auto text-center">
                        <img src="images/Landingpage-Tracuu-xephangdiem-logo.png" height="59"
                             width="179"/>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h3><span id="name_user_out"></span></h3>
                    <h4 id="result_fail"></h4>
                    <h4>THPT 2021</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal_thpt" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="img-logo mx-auto text-center">
                        <!--                        <img src="images/logo_ranking.png"-->
                        <!--                             alt="logo"/>-->
                        <img src="images/Landingpage-Tracuu-xephangdiem-logo.png" height="59"
                             width="179"/>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h4>Xin chào: <strong id="name_user_thpt"></strong></h4>
                    <h4>Thứ hạng đang được cập nhật. Mời bạn quay trở lại sau</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            var diem_vali = {
                required: true,
                max: 10,
                min: 0,
                maxlength: 3,
                number: true
            };
            var ms_diem = {
                required: 'Trường nhập bắt buộc',
                max: 'Điểm tối đa là 10',
                min: 'Điểm nhỏ nhất là 0',
                maxlength: 'Nhập tối đa 1 số sau dấu phẩy'
            }
            var diem_vali_thpt = {
                required: true,
                max: 10,
                min: 0,
                maxlength: 4,
                number: true
            };
            var ms_diem_thpt = {
                required: 'Trường nhập bắt buộc',
                max: 'Điểm tối đa là 10',
                min: 'Điểm nhỏ nhất là 0',
                maxlength: 'Nhập tối đa 2 số sau dấu phẩy'
            }

            $("#form_1").validate({
                rules: {
                    toan_1: diem_vali,
                    ly_1: diem_vali,
                    hoa_1: diem_vali,
                    van_1: diem_vali,
                    anh_1: diem_vali,
                    sinh_1: diem_vali,
                    su_1: diem_vali,
                    dia_1: diem_vali,
                    gdcd_1: diem_vali,

                    toan_2: diem_vali,
                    ly_2: diem_vali,
                    hoa_2: diem_vali,
                    van_2: diem_vali,
                    anh_2: diem_vali,
                    sinh_2: diem_vali,
                    su_2: diem_vali,
                    dia_2: diem_vali,
                    gdcd_2: diem_vali,

                    toan_thpt: diem_vali,
                    ly_thpt: diem_vali,
                    hoa_thpt: diem_vali,
                    van_thpt: diem_vali,
                    anh_thpt: diem_vali,
                    sinh_thpt: diem_vali,
                    su_thpt: diem_vali,
                    dia_thpt: diem_vali,
                    gdcd_thpt: diem_vali,
                },
                messages: {
                    toan_1: ms_diem,
                    ly_1: ms_diem,
                    hoa_1: ms_diem,
                    van_1: ms_diem,
                    anh_1: ms_diem,
                    sinh_1: ms_diem,
                    su_1: ms_diem,
                    dia_1: ms_diem,
                    gdcd_1: ms_diem,

                    toan_2: ms_diem,
                    ly_2: ms_diem,
                    hoa_2: ms_diem,
                    van_2: ms_diem,
                    anh_2: ms_diem,
                    sinh_2: ms_diem,
                    su_2: ms_diem,
                    dia_2: ms_diem,
                    gdcd_2: ms_diem,

                    toan_thpt: ms_diem,
                    ly_thpt: ms_diem,
                    hoa_thpt: ms_diem,
                    van_thpt: ms_diem,
                    anh_thpt: ms_diem,
                    sinh_thpt: ms_diem,
                    su_thpt: ms_diem,
                    dia_thpt: ms_diem,
                    gdcd_thpt: ms_diem,
                },
                submitHandler: function (form) {
                    $(document).ajaxStart(function () {
                        $("#wait").css("display", "block");
                    });
                    $(document).ajaxComplete(function () {
                        $("#wait").css("display", "none");
                    });
                    $.ajax({
                        type: "POST",
                        url: "submit.php",
                        data: $(form).serialize(),
                        success: function ($response) {
                            var obj = JSON.parse($response);
                            switch (obj.data) {
                                case 'success':
                                    if (obj.dieu_kien == 1) {
                                        document.getElementById('name_user_out').innerHTML = obj.name;
                                        document.getElementById('result_fail').innerHTML = obj.ranking;
                                        $('#myModal').modal('show');
                                    } else {
                                        Swal.fire({
                                            title: obj.message,
                                            // text: obj.message,
                                            type: 'success',
                                            html: '',
                                            // confirmButtonColor: '#607D8B',
                                            confirmButtonText: 'Đóng',
                                            allowOutsideClick: false
                                        });
                                        $(".ranking").trigger("reset");
                                    }
                                    break;
                                case 'error':
                                    Swal.fire({
                                        title: obj.message,
                                        text: '',
                                        type: 'error',
                                        // html: true,
                                        confirmButtonColor: '#607D8B',
                                        confirmButtonText: 'Đóng',
                                    });
                                    break;
                            }
                        }
                    });
                }
            });

            $("#form_3").validate({
                rules: {
                    toan_1: diem_vali,
                    ly_1: diem_vali,
                    hoa_1: diem_vali,
                    van_1: diem_vali,
                    sinh_1: diem_vali,
                    su_1: diem_vali,
                    dia_1: diem_vali,

                    toan_2: diem_vali,
                    ly_2: diem_vali,
                    hoa_2: diem_vali,
                    van_2: diem_vali,
                    sinh_2: diem_vali,
                    su_2: diem_vali,
                    dia_2: diem_vali,
                },
                messages: {
                    toan_1: ms_diem,
                    ly_1: ms_diem,
                    hoa_1: ms_diem,
                    van_1: ms_diem,
                    anh_1: ms_diem,
                    sinh_1: ms_diem,
                    su_1: ms_diem,
                    dia_1: ms_diem,
                    gdcd_1: ms_diem,

                    toan_2: ms_diem,
                    ly_2: ms_diem,
                    hoa_2: ms_diem,
                    van_2: ms_diem,
                    anh_2: ms_diem,
                    sinh_2: ms_diem,
                    su_2: ms_diem,
                    dia_2: ms_diem,
                    gdcd_2: ms_diem,

                    toan_thpt: ms_diem,
                    ly_thpt: ms_diem,
                    hoa_thpt: ms_diem,
                    van_thpt: ms_diem,
                    anh_thpt: ms_diem,
                    sinh_thpt: ms_diem,
                    su_thpt: ms_diem,
                    dia_thpt: ms_diem,
                    gdcd_thpt: ms_diem,
                },
                submitHandler: function (form) {
                    $(document).ajaxStart(function () {
                        $("#wait").css("display", "block");
                    });
                    $(document).ajaxComplete(function () {
                        $("#wait").css("display", "none");
                    });
                    $.ajax({
                        type: "POST",
                        url: "submit_gdtx.php",
                        data: $(form).serialize(),
                        success: function ($response) {
                            var obj = JSON.parse($response);
                            switch (obj.data) {
                                case 'success':
                                    if (obj.dieu_kien == 1) {
                                        document.getElementById('name_user_out').innerHTML = obj.name;
                                        document.getElementById('result_fail').innerHTML = obj.ranking;
                                        $('#myModal').modal('show');
                                    } else {
                                        Swal.fire({
                                            title: obj.message,
                                            // text: obj.message,
                                            type: 'success',
                                            html: '',
                                            // confirmButtonColor: '#607D8B',
                                            confirmButtonText: 'Đóng',
                                            allowOutsideClick: false
                                        });
                                        $(".ranking").trigger("reset");
                                    }
                                    break;
                                case 'error':
                                    Swal.fire({
                                        title: obj.message,
                                        text: '',
                                        type: 'error',
                                        // html: true,
                                        confirmButtonColor: '#607D8B',
                                        confirmButtonText: 'Đóng',
                                    });
                                    break;
                            }
                        }
                    });
                }
            });

            $("#form_2").validate({
                rules: {
                    toan_thpt: diem_vali_thpt,
                    ly_thpt: diem_vali_thpt,
                    hoa_thpt: diem_vali_thpt,
                    van_thpt: diem_vali_thpt,
                    anh_thpt: diem_vali_thpt,
                    sinh_thpt: diem_vali_thpt,
                    su_thpt: diem_vali_thpt,
                    dia_thpt: diem_vali_thpt,
                    gdcd_thpt: diem_vali_thpt,
                },
                messages: {
                    toan_thpt: ms_diem_thpt,
                    ly_thpt: ms_diem_thpt,
                    hoa_thpt: ms_diem_thpt,
                    van_thpt: ms_diem_thpt,
                    anh_thpt: ms_diem_thpt,
                    sinh_thpt: ms_diem_thpt,
                    su_thpt: ms_diem_thpt,
                    dia_thpt: ms_diem_thpt,
                    gdcd_thpt: ms_diem_thpt,
                },
                submitHandler: function (form) {
                    $(document).ajaxStart(function () {
                        $("#wait").css("display", "block");
                    });
                    $(document).ajaxComplete(function () {
                        $("#wait").css("display", "none");
                    });
                    $.ajax({
                        type: "POST",
                        url: "submit_thpt.php",
                        data: $(form).serialize(),
                        success: function ($response) {
                            var obj = JSON.parse($response);
                            switch (obj.data) {
                                case 'success':
                                    if (obj.dieu_kien == 1) {
                                        document.getElementById('name_user_out').innerHTML = obj.name;
                                        document.getElementById('result_fail').innerHTML = obj.ranking;
                                        $('#myModal').modal('show');
                                    } else {
                                        Swal.fire({
                                            title: obj.message,
                                            // text: obj.message,
                                            type: 'success',
                                            html: '',
                                            // confirmButtonColor: '#607D8B',
                                            confirmButtonText: 'Đóng',
                                            allowOutsideClick: false
                                        });
                                        $(".ranking").trigger("reset");
                                    }
                                    break;
                                case 'error':
                                    Swal.fire({
                                        title: obj.message,
                                        text: '',
                                        type: 'error',
                                        // html: true,
                                        confirmButtonColor: '#607D8B',
                                        confirmButtonText: 'Đóng',
                                    });
                                    break;
                            }
                        }
                    });
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.number').keypress(function (event) {
                if (event.which < 46
                    || event.which > 59) {
                    event.preventDefault();
                } // prevent if not number/dot

                if (event.which == 46
                    && $(this).val().indexOf('.') != -1) {
                    event.preventDefault();
                } // prevent if already dot
            });

            jQuery('#to_hop').change(function () {
                var to_hop = jQuery("#to_hop").val();
                console.log(to_hop);
                if (to_hop == 1) {
                    jQuery('#ban_khtn').removeClass('d-none');
                    jQuery('#ban_xh').addClass('d-none');
                }
                if (to_hop == 2) {
                    jQuery('#ban_khtn').addClass('d-none');
                    jQuery('#ban_xh').removeClass('d-none');
                }
            });
        });
    </script>
</div>
</body>
</html>