<?php
/**
 * googlefroogle.php
 *
 * @package google froogle
 * @copyright Copyright 2007 Numinix Technology http://www.numinix.com
 * @copyright Portions Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: googlefroogle.php 57 2011-05-17 00:35:31Z numinix $
 */
 
define('TEXT_GOOGLE_PRODUCTS_STARTED', 'Feed file creation started ' . date("d/m/Y H:i:s"));
define('TEXT_GOOGLE_PRODUCTS_FILE_LOCATION', 'File location:');
define('TEXT_GOOGLE_PRODUCTS_FEED_COMPLETE', 'Feed File completed in %s seconds.');

define('TEXT_GOOGLE_PRODUCTS_FEED_RECORDS', '%1$s entries created from %2$s records (%3$s record(s) skipped).');
define('GOOGLE_PRODUCTS_TIME_TAKEN', 'in');
define('GOOGLE_PRODUCTS_VIEW_FILE', 'View File:');
define('ERROR_GOOGLE_PRODUCTS_DIRECTORY_DOES_NOT_EXIST', 'The folder specified for the feed file ("<b>' . GOOGLE_PRODUCTS_DIRECTORY . '</b>") does not exist.<br>Please correct the path in Admin->Configuration->Google Merchant Center->Output Directory or create the specified directory and chmod to 755 or 777 depending on your host.');
define('ERROR_GOOGLE_PRODUCTS_DIRECTORY_NOT_WRITEABLE', 'The folder specified for the feed file ("<b>' . GOOGLE_PRODUCTS_DIRECTORY . '</b>") is not writeable (currently set to %u).<br>Please chmod the folder to 755 or 777 depending on your host.');
define('ERROR_GOOGLE_PRODUCTS_OPEN_FILE', 'Error opening Google Merchant Center output file "' . DIR_FS_CATALOG . GOOGLE_PRODUCTS_DIRECTORY . GOOGLE_PRODUCTS_OUTPUT_FILENAME . '"');
define('TEXT_GOOGLE_PRODUCTS_UPLOAD_STARTED', 'Upload started...');
define('TEXT_GOOGLE_PRODUCTS_UPLOAD_FAILED', 'Upload failed...');
define('TEXT_GOOGLE_PRODUCTS_UPLOAD_OK', 'Upload ok!');
define('TEXT_GOOGLE_PRODUCTS_ERRSETUP', 'Google Merchant Center error setup:');
define('TEXT_GOOGLE_PRODUCTS_ERRSETUP_L', 'Google Merchant Center Feed Language "%s" not defined in zen-cart store.');
define('TEXT_GOOGLE_PRODUCTS_ERRSETUP_C', 'Google Merchant Center Default Currency "%s" not defined in zen-cart store.');

define('FTP_FAILED', 'Your hosting does not support ftp functions.');
define('FTP_CONNECTION_FAILED', 'Connection failed:');
define('FTP_CONNECTION_OK', 'Connected to:');
define('FTP_LOGIN_FAILED', 'Login failed:');
define('FTP_LOGIN_OK', 'Login ok:');
define('FTP_CURRENT_DIRECTORY', 'Current Directory Is:');
define('FTP_CANT_CHANGE_DIRECTORY', 'Can not change directory on:');
define('FTP_UPLOAD_FAILED', 'Upload Failed');
define('FTP_UPLOAD_SUCCESS', 'Uploaded Successfully');
define('FTP_SERVER_NAME', ' Server Name: ');
define('FTP_USERNAME', ' Username: ');
define('FTP_PASSWORD', ' Password: ');
define('TEXT_GOOGLE_PRODUCTS_PROCESSING', 'Processing...');
define('TEXT_GOOGLE_PRODUCTS_FEED', 'Feed Creation: ');
define('TEXT_GOOGLE_PRODUCTS_YES', 'Yes');
define('TEXT_GOOGLE_PRODUCTS_NO', 'No');
define('TEXT_GOOGLE_PRODUCTS_UPLOAD', 'Feed FTP Upload: ');
