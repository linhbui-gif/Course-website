<div class="row" style="margin-left:6px">
    <div class="col-md-7">
        <div class="form-group">
            <select name="category_id" id="category_id" class="form-control select2">
                <option value="">--Chọn danh mục bài viết--</option>
                @php
                    $categories = \Modules\Admin\Entities\CategoryNew::all();
                @endphp
                @foreach($categories as $k => $category)
                    @php
                        $selected = $category->id == @$object->category_id ? 'selected' :'';
                    @endphp
                    <option {{$selected}} value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

    </div>

</div>