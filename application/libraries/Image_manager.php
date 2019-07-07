<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_manager {

    public function load_manager($field = 'img', $img = '', $max_width_cropzoom = 277, $max_height_cropzoom = 150)
    {
        $html['config'] = '
        <div class="modal fade invis" id="popImageManager">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Image Manager - Max filesize('.ini_get('upload_max_filesize').') </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row-fluid" id="list-image-manager">
                            <i class="fa fa-refresh fa-spin"></i> Loading...
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <input type="file" id="imagemanagersource"  name="img">
                            </div>
                            <div class="col-md-4">
                                <label style="display:inline;"><input type="checkbox" value="1" id="is_public"> Public Access</label>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary" id="upload-img">Upload</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade invis" id="popImageManagerDetail">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Image Detail </h4>
                    </div>
                    <div class="modal-body">
                        <img id="imageDetail">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-message fade invis" id="modal-crop">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <h4 class="modal-title">Create Thumbnail </h4>
                    </div>
                    <div class="modal-body">
                        <div id="crop_container"></div>

                        <div id="image-thumb">
                            <img src="">
                        </div>
                        <a id="crop" class="btn btn-success">Create Thumbnail</a>

                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="modal-footer">
                        <a id="imagemanager-cancel" class="btn btn-warning">Cancel</a>
                        <a class="btn btn-primary" id="imagemanager-save"> Simpan </a>
                        <input type="hidden" id="imagemanager-name">
                    </div>
                </div>
            </div>
        </div>
        <script>
            var max_width_cropzoom = "'.$max_width_cropzoom.'";
            var max_height_cropzoom = "'.$max_height_cropzoom.'";
        </script>
        <link href="'.admin_assets().'plugins/cropzoom/jquery.cropzoom.css" rel="Stylesheet" type="text/css" />
        <script type="text/javascript" src="'.admin_assets().'plugins/cropzoom/jquery.cropzoom.js"></script>
        ';

        $html['browse'] = '<div class="browse-image" id="'.$field.'">
                        <img src="'.$img.'" width="100%">
                        <div>Select Image</div>
                        <i class="fa fa-file-picture-o" style="font-size: 60px;"></i>
                    </div>
                    <input type="hidden" name="'.$field.'">';

        return $html;
    }

    public function upload_file($field, $path = '', $allowed_type = '*', $max_size = 0)
    {
        $CI        = & get_instance();
        $name      = strtolower($_FILES[$field]['name']);
        $ext       = end(explode('.',$name));

        $config['upload_path']     = UPLOAD_DIR.$path;
        $config['allowed_types']   = $allowed_type;
        $config['file_name']       = url_title(str_replace($ext,'',$name));
        $config['max_size']        = $max_size;

        $CI->load->library('upload', $config);
        if(! $CI->upload->do_upload($field)){
          return $CI->upload->display_errors(' ', ' ');
        }
        else {
          return $CI->upload->data();
        }
    }
}
