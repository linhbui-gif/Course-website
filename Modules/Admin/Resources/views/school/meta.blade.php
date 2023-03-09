    <div class="row">
        <div class="col-sm-9">
            <div class="form-group">
                <label class="col-sm-3 control-label"  for="slug">Slug: </label>
                <div class="col-sm-9">
                    <input type="text" name="slug" id="slug" class="form-control"
                       placeholder="Slug sẽ được tạo tự động theo tên trường" disabled 
                       value="{{@$object['slug']}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="keywords">Keywords: <span class="required"></span></label>
                <div class="col-sm-9">
                    <input type="text" name="keywords" id="keywords" class="form-control"
                       placeholder="Nhập keyword cách nhau bởi dấu phẩy"
                       value="{{@$object['keywords']}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="meta_title">Meta title: <span class="required"></span></label>
                <div class="col-sm-9">
                    <input type="text" name="meta_title" id="meta_title" class="form-control"
                       placeholder=""
                       value="{{@$object['meta_title']}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="meta_description">Meta description: <span class="required"></span></label>
                <div class="col-sm-9">
                    <input name="meta_description" id="meta_description" cols="10" rows="5" class="form-control" 
                    value="{{ @$object['meta_description'] }}">
                </div>
            </div>
        </div>
    </div>
