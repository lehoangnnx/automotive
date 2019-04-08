<div class="col-lg-4">
    <div class="sidebar-content-wrap m-t-50">
        <!-- Single Sidebar Start -->
        <div class="single-sidebar">
            <h3 class="label-header">THÔNG TIN LIÊN HỆ</h3>
            <div class="sidebar-body">
                <p><i class="fa fa-user"></i> Lê Công Hậu</p>
                <p><i class="fa fa-mobile"></i>0986 585 811</p>
                <p><i class="fa fa-envelope"></i>leconghau5432@gmail.com</p>
                <p><i class="fa fa-clock-o"></i> Từ thứ 2 - Chủ nhật, 24/7</p>
            </div>
        </div>
        <div class="single-sidebar">
            <div class="review-area">
                <h3 class="label-header">ĐĂNG KÝ LÁI THỬ </h3>
                <div class="review-form p-3">
                <p>Quý khách nhập thông tin dòng xe quý khách quan tâm, bộ phận báo giá sẽ gửi thông tin chương trình khuyến mãi đến quý khách ngay khi thông tin được gửi đi</p>
                <hr>
                    <form action="{{ route('sendContact')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="name-input">
                                    <input required name="name" type="text" placeholder="Họ Và Tên">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 pt-3">
                                <div class="email-input">
                                    <input required name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 pt-3">
                                <div class="email-input">
                                    <input required name="phone" type="text" placeholder="Số Điện Thoại">
                                    <input type="hidden" name="product_id" value="{{ isset($product->id) ? $product->id : ''}}">
                                </div>
                            </div>
                        </div>

                        <div class="message-input">
                            <textarea required name="content" cols="30" rows="5" placeholder="Nội Dung"></textarea>
                        </div>

                        <div class="input-submit">
                            <button type="submit">Gửi</button>
                            <button type="reset">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
