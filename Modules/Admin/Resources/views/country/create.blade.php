@extends('admin::layouts.master')

@section('content')
    <div id="page-content">
        <div class="panel panel-bordered-info">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin</h3>
            </div>
            @php
                $link = isset($id) ? route($controllerName . '.edit', ['id' => $id]) : route($controllerName . '.create');
            @endphp
            <form class="form-horizontal" method="post" id="form_update" action="{{ $link }}">
                <div class="panel-body overflow-hidden">
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="col-md-3 control-label">
                                <label>Quốc gia:<span class="required"></span></label>
                            </div>
                            <div class="col-md-8">
                                    <input type="text" class="form-control" id="name" name="name" value="{{@$object->name}}">
                                    <label id="name-error" class="error" for="name" style="display: none;"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            {{-- Logo --}}
                              <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-field-1"> <strong>
                                        Logo <span class="required"></span></strong>
                                </label>
                                <div class="col-sm-8 btn-file">
                                <span class="btn btn-sm btn-success btn-rounded fileinput-button">
                                  <i class="fa fa-folder-open-o"></i>
                                  <span>Chọn hình...</span>
                                  <input id="fileupload_logo" type="file" name="files[]"
                                         onchange="uploadLoadFile(event, 'preview-logo')" accept="image/*"
                                         data-location="#image_location_logo" data-error="#image_location_logo-error"
                                         data-is-change="#is_change_image_logo" data-object="home"
                                         data-progress="#progress_logo .progress-bar">
                                </span>
                                    <div style="clear: both;"></div>
                                    <div id="progress_logo" class="progress" style="margin-top: 10px;">
                                        <div class="progress-bar progress-bar-success"></div>
                                    </div>
                                    <p><img id="preview-logo" width="200"
                                           src="{{ isset($object['logo'])?url($object['logo']):'/images/default.png' }}"/>
                                    </p>
                                    <input id="image_location_logo" type="hidden" name="image_location_logo"value="{{@$object['logo']}}">
                                    <input id="is_change_image_logo" type="hidden" name="is_change_image_logo" value="0">
                                    <label id="image_location_logo-error" class="error" for="image_location_logo"style="display: none;"></label>
                                </div>
                            </div>
                            {{--  --}}
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Trạng thái
                            </label>
                            <div class="col-sm-9">
                                <?php
                                    $status = isset($object) ? old('status', @$object['status']) : 1;
                                ?>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" value="1"
                                               class="minimal-red" {{$status==1?'checked':''}}> Kích hoạt
                                    </label>
                                    <label>
                                        <input type="radio" name="status" value="0"
                                               class="minimal-red" {{$status==0 ?'checked':''}}> Ngừng kích hoạt
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        {{-- Banner --}}
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-field-1"> <strong>
                                    Icon <span class="required"></span></strong>
                            </label>
                            <div class="col-sm-8 btn-file">
                            <span class="btn btn-sm btn-success btn-rounded fileinput-button">
                              <i class="fa fa-folder-open-o"></i>
                              <span>Chọn hình...</span>
                                <!-- The file input field used as target for the file upload widget -->
                              <input id="fileupload_icon" type="file" name="files[]"
                                     onchange="uploadLoadFile(event, 'preview-icon')" accept="image/*"
                                     data-location="#image_location_icon" data-error="#image_location_icon-error"
                                     data-is-change="#is_change_image" data-object="home"
                                     data-progress="#progress .progress-bar">
                            </span>
                                <div style="clear: both;"></div>
                                <div id="progress" class="progress" style="margin-top: 10px;">
                                    <div class="progress-bar progress-bar-success"></div>
                                </div>
                                <p><img id="preview-icon" width="50"
                                        src="{{ isset($object['icon'])?url($object['icon']):'/images/default.png' }}"/>
                                </p>
                                <input id="image_location_icon" type="hidden" name="image_location_icon"value="{{@$object['icon']}}">
                                <input id="is_change_image" type="hidden" name="is_change_image" value="0">
                                <label id="image_location_icon-error" class="error" for="image_location_icon"style="display: none;"></label>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel-body -->
                <div class="panel-footer text-center">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="hidden" id="is_next" value="0">
                            <input type="hidden" name="id" id="id" value="0">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <a href="{{route($controllerName . '.index')}}" class="btn btn-info btn-rounded">
                                <i class="fa fa-undo" aria-hidden="true"></i> Trở về trang danh sách
                            </a>

                            <button type="submit" class="btn btn-primary btn-rounded" onclick="$('#is_next').val(0)">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu lại
                            </button>

                            <button type="reset" class="btn btn-default btn-rounded" onclick="$('#is_next').val(0)">
                                <i class="fa fa-refresh" aria-hidden="true"></i> Huỷ bỏ
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.panel -->
    </div>
@endsection

@section('after_styles')
    <link href="/assets/plugins/iCheck/flat/green.css" rel="stylesheet">
@stop
@section('after_scripts')
@include('admin::includes.js-upload-image')
    <script type="text/javascript">
        $(document).ready(function () {
            
            initUpload('#fileupload_logo');
            initUpload('#fileupload_icon');

            @if($message=json_decode(session('message'), 1))
            show_pnotify("{!! $message['text'] !!}", "{!! $message['title'] !!}", "{!! $message['type'] !!}");
            @endif

            $('input.slider-toggle').each(function (key, msg) {
                if ($(this).is(':checked')) {
                    $(this).closest('div').find('.tooltiptext').text('Đã kích hoạt');
                } else {
                    $(this).closest('div').find('.tooltiptext').text('Chưa kích hoạt');
                }
            });

            $('#form_update').validate({
                ignore: ".ignore",
                rules: {
                    name: "required",
                    image_location_logo:'required',
                    image_location_icon:'required',
                },
                messages: {
                    name: "Name is not empty",
                    image_location_logo:'Chọn hình ảnh',
                    image_location_icon:'Chọn icon',
                },
                submitHandler: function (form) {
                    // do other things for a valid form
                    var data = $(form).serializeArray();
                    var url = $(form).attr('action');
                    request_ajax(url, data, "POST", function (res) {
                        show_pnotify(res.msg, "Thông báo", res.rs ? 'success' : 'error');
                        if (res.rs) {
                            if (res.redirect_url) {
                                location.href = res.redirect_url;
                            } else {
                                location.reload();
                            }
                        } else if (res.errors) {
                            $.each(res.errors, function (key, msg) {
                                $('#' + key + '-error').html(msg).show();
                            });
                        }
                    });
                    return false;
                }
            });      
         
        });
    </script>
  
@endsection