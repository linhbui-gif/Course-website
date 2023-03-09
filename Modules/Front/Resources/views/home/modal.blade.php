<div class="ModalContactInformation Modal" id="ModalContactInformation">
    <div class="Modal-overlay"> </div>
    <div class="Modal-main">
        <div class="Modal-header">
            <H4>HỌC HOÀN TOÀN MIỄN PHÍ</H4>
            <div class="Modal-close Modal-header-close"><img src="{{asset('frontend/assets/icons/icon-close.svg')}}" width="16px" alt=""></div>
        </div>
        <div class="Modal-body">
            <div class="noty_error"></div>
            <form class="ModalContactInformation-form" action="{{route('create_contacts')}}" id="contact_frm" method="POST">
                @csrf
                <div class="ModalContactInformation-form-control flex flex-wrap">
                    <div class="form-group">
                        <label for="name" class="label">HỌ VÀ TÊN <span class="require">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập Họ và Tên..." id="name">
                    </div>
                    <div class="form-group">
                        <label for="#" class="label">EMAIL <span class="require">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Emaill..." id="email">
                    </div>
                    <div class="form-group">
                        <label for="#" class="label">SỐ ĐIỆN THOẠI LIÊN KẾT ZALO <span class="require">*</span></label>
                        <input type="text" name="phone" class="form-control" placeholder="Số điện thoại..." id="phone">
                    </div>
                    <div class="form-group">
                        <label for="#" class="label">Chọn khóa học yêu thích <span class="require">*</span></label>
                        <select class="form-control" name="national" id="course-change">
                            <option value="0">Khóa học</option>
                            <option value="1">Khóa học php cơ bản</option>
                            <option value="2">Javascript nền tảng lập trình</option>
                            <option value="3">Khởi đầu với laravel</option>
                            <option value="4">NodeJS complete Api</option>
                            <option value="5">Master ReactJS</option>
                            <option value="6">Khóa học PHP nâng cao</option>
                        </select>
                    </div>
                    <div class="form-group link-zalo">
                        <label for="#" class="label">Link nhóm Zalo Khóa học<span class="require">*</span></label>
                        <input type="text" name="link" class="form-control" placeholder="Link Nhóm Zalo..." id="link" >
                    </div>
                </div>
                <button class="btn btn-primary" id="btn_contact_frm" type="submit" style="width: 100%;    border-radius: 4px;">
                    GỬI THÔNG TIN
                </button>

            </form>
        </div>
    </div>
</div>
