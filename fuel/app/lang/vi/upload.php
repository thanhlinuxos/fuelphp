<?php

return array(
	'error_'.\Upload::UPLOAD_ERR_OK						=> 'Các tập tin được tải lên thành công',
	'error_'.\Upload::UPLOAD_ERR_INI_SIZE				=> 'Các tập tin được tải lên vượt quá chỉ post_max_filesize trong php.ini',
	'error_'.\Upload::UPLOAD_ERR_FORM_SIZE				=> 'Các tập tin được tải lên vượt quá chỉ MAX_FILE_SIZE đã được quy định trong định dạng HTML',
	'error_'.\Upload::UPLOAD_ERR_PARTIAL				=> 'Các tập tin chỉ tải lên được một phần',
	'error_'.\Upload::UPLOAD_ERR_NO_FILE				=> 'Không có tập tin được tải lên',
	'error_'.\Upload::UPLOAD_ERR_NO_TMP_DIR				=> 'Cấu hình thư mục tải lên tạm thời không tìm thấy',
	'error_'.\Upload::UPLOAD_ERR_CANT_WRITE				=> 'Không thể ghi tập tin được tải lên vào đĩa',
	'error_'.\Upload::UPLOAD_ERR_EXTENSION				=> 'Tải lên bị chặn bởi một phần mở rộng PHP được cài đặt',
	'error_'.\Upload::UPLOAD_ERR_MAX_SIZE				=> 'Các tập tin được tải lên vượt quá kích thước tối đa qui định',
	'error_'.\Upload::UPLOAD_ERR_EXT_BLACKLISTED		=> 'Tải các tập tin với phần mở rộng không được phép',
	'error_'.\Upload::UPLOAD_ERR_EXT_NOT_WHITELISTED	=> 'Tải các tập tin với phần mở rộng này không được phép',
	'error_'.\Upload::UPLOAD_ERR_TYPE_BLACKLISTED		=> 'Tải các tập tin của loại tập tin này không được phép',
	'error_'.\Upload::UPLOAD_ERR_TYPE_NOT_WHITELISTED	=> 'Tải các tập tin của loại tập tin này không được phép',
	'error_'.\Upload::UPLOAD_ERR_MIME_BLACKLISTED		=> 'Upload of files of this mime type is not allowed',
	'error_'.\Upload::UPLOAD_ERR_MIME_NOT_WHITELISTED	=> 'Upload of files of this mime type is not allowed',
	'error_'.\Upload::UPLOAD_ERR_MAX_FILENAME_LENGTH	=> 'The uploaded file name exceeds the defined maximum length',
	'error_'.\Upload::UPLOAD_ERR_MOVE_FAILED			=> 'Unable to move the uploaded file to it\'s final destination',
	'error_'.\Upload::UPLOAD_ERR_DUPLICATE_FILE 		=> 'A file with the name of the uploaded file already exists',
	'error_'.\Upload::UPLOAD_ERR_MKDIR_FAILED			=> 'Unable to create the file\'s destination directory',
);
