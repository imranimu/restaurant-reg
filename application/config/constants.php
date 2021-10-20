<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', true);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  or define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        or define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          or define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         or define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   or define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  or define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     or define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       or define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      or define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      or define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

$conn = new mysqli('77.68.43.27', 'srsliveapi1', 'e7358cxqpTvK_432(25d%htsort?rYTREjio;Bfy:h#nHC).{jsbout,rdtG&/+X}', 'srs_admin');
//srscontrollive (live database username) app server 1
//srsnewserver (live database username) app server 2
//$conn = new mysqli('77.68.43.27', 'srsnewserver', 'e549cx*uYTvK_43(85d%gaGdKwM?rVzLPUkm;Bfy:h#nHC).{jsmout,ZEAG&/+X}', 'srs_admin');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn2 = new mysqli('localhost', 'central_cms', 'q19Ot*5g', 'central_cms');
// Check connection
if (!$conn2) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM `restaurant` WHERE `id` = ".RESTAURANT_ID;
$result = $conn->query($query);
$row 	= $result->fetch_object();
$result->free_result();

$query1  = "SELECT * FROM `settings` WHERE `key_flag` = 'seo_geo_tag' AND `restaurant_id` = ".RESTAURANT_ID;
$result1 = $conn2->query($query1);
$row1 	 = $result1->fetch_object();
$result1->free_result();

$query2 = "SELECT * FROM `restaurant_cuisine` WHERE `status` = 1 AND `restaurant_id` = ".RESTAURANT_ID;
$result2 = $conn->query($query2);

if ($result2->num_rows > 0) {
    $cuisine_name = '';
    while ($row2 = $result2->fetch_assoc()) {
        $cuisine_name .= ucfirst(strtolower($row2['name'])) . ', ';
    }
    define('CHEFONLINE_RESTAURANT_CUISINE', substr(trim($cuisine_name), 0, -1));
} else {
    define('CHEFONLINE_RESTAURANT_CUISINE', '');
}

$result2->free_result();

$query4 = "SELECT rs.weekday,rs.opening_time, rs.closing_time FROM restaurant_schedule rs WHERE rs.restaurant_id='" . RESTAURANT_ID . "'  AND rs.status='1' AND rs.type=3 AND rs.weekday='".date("N")."' ORDER BY rs.weekday, rs.opening_time";
$result4 = $conn->query($query4);

$today_schedule_status = 0;
if ($result4->num_rows > 0) {
    $today_schedule_status = 1;
}

$result4->free_result();

$query3 = "SELECT rs.weekday,rs.opening_time, rs.closing_time FROM restaurant_schedule rs WHERE rs.restaurant_id='" . RESTAURANT_ID . "'  AND rs.status='1' AND rs.type=3 ORDER BY rs.weekday, rs.opening_time";
$result3 = $conn->query($query3);

if ($result3->num_rows > 0) {
    $scheduleTime = [];
    $count = 0;
    while ($row3 = $result3->fetch_assoc()) {
        $scheduleTime[$count]['weekday'] = $row3['weekday'];
        $scheduleTime[$count]['opening_time'] = $row3['opening_time'];
        $scheduleTime[$count]['closing_time'] = $row3['closing_time'];
        $count++;
    }

    $today = date("N");
    $weekDays = [ 1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday' ];
    $resStatus = "Closed Now";

    $currentDay = '';
    $counter = 0;
    $dayCount = 0;
    
    if ($today_schedule_status == 0) {
        $currentDay .= $weekDays[$today].' Closed &';
    } else {
        foreach ($scheduleTime as $schedule) {
            if ($schedule["weekday"] == $today && $schedule["opening_time"] !='' && $schedule["closing_time"] !='') {
                $dayName    = '';
                $spanClosed = '';
                
                if ($dayCount == 0) {
                    $dayName = '<span>'.$weekDays[$schedule["weekday"]].': </span><span> ';
                } else {
                    if ($dayCount > 4) {
                        $spanClosed = "</span>";
                    }
                }

                if ($schedule["opening_time"] <= time() && $schedule["closing_time"] > time()) {
                    $resStatus = "Open Now";
                }

                $currentDay .= $dayName.date("g:i A", $schedule["opening_time"]) . " - " . date("g:i A", $schedule["closing_time"]).' & ';
                $currentDay .= $spanClosed;
                $counter++;
                $dayCount++;
            }
        }
    }
    
    $fullWeekDay = '';
    $stored_weekday_id = 0;
    $schedule_counter = 1;
    
    $data["weeklyScheduleText"] = '';

    foreach ($scheduleTime as $daily_schedule) :

        if ($stored_weekday_id != $daily_schedule['weekday']) :

            if ($schedule_counter != 1) :
                $fullWeekDay.= "</span></li>";
    endif;

    $fullWeekDay .= "<li class='list-group-item'><span class='pull-left'>" . $weekDays[$daily_schedule['weekday']] . ":<br/> " . date("g:i A", $daily_schedule['opening_time']) . " - " . date("g:i A", $daily_schedule['closing_time']); else :
            $fullWeekDay .= ", " . date("g:i A", $daily_schedule['opening_time']) . " - " . date("g:i A", $daily_schedule['closing_time']);
    endif;

    $stored_weekday_id = $daily_schedule['weekday'];
    $schedule_counter++;

    endforeach;
    
    $scheduleHtml = '';
    $scheduleHtml .= '<div class="overview-info-block">'.
                        '<h3 class="widget-title">Today\'s Opening Hours</h3>'.
                        '<div class="show_first_time footer-menu">'.
                            '<p>'.substr(trim($currentDay), 0, -1).'</p>'.
                        '</div>'.
                        '<div class="clearfix"></div>'.
                        '<a class="red-color" data-toggle="popover" data-trigger="focus" data-placement="top" tabindex="0" role="button" id="seemore">See more</a>'.
                        '<div id="popover-content-login" class="hide">'.
                            '<ul class="list-group text-left">'.$fullWeekDay .'</ul>'.
                        '</div>'.
                     '</div>';
    define('CHEFONLINE_SCHEDULE_TIME', $scheduleHtml);
} else {
    define('CHEFONLINE_SCHEDULE_TIME', '');
}

$result3->free_result();

if (!empty($row)) {
    if ($_SERVER['SERVER_NAME'] == 'srsdraft.co.uk') {
        define('CHEFONLINE_MENU_URL', 'https://backoffice.chefonline.co.uk/draft/'.$row->menu_page_slug.'/menu');
    } else {
        define('CHEFONLINE_MENU_URL', 'https://www.chefonline.co.uk/'.$row->menu_page_slug.'/menu');
    }
    
    if ($row->accept_reservation == 1) {
        if ($_SERVER['SERVER_NAME'] == 'srsdraft.co.uk') {
            define('CHEFONLINE_RESERVATION_URL', 'https://backoffice.chefonline.co.uk/draft/'.$row->menu_page_slug.'/reservations');
        } else {
            define('CHEFONLINE_RESERVATION_URL', 'https://www.chefonline.co.uk/'.$row->menu_page_slug.'/reservations');
        }
    } else {
        define('CHEFONLINE_RESERVATION_URL', '');
    }
    
    $business_tel = "";
    if ($row->business_tel !=""):
        $arr 		  = [];
    ;
    $business_tel = explode(",", $row->business_tel);
    foreach ($business_tel as $number):
            $tel = "<a href='tel:".str_Replace(" ", "", $number)."'>".$number."</a>";
    array_push($arr, $tel);
    endforeach;
    $business_tel = implode(', ', $arr);
    endif;
    
    $business_tel_og = "";
    if ($row->business_tel !=""):
        $ogarr 		  = [];
    ;
    $business_tel_og = explode(",", $row->business_tel);
    foreach ($business_tel_og as $number):
            $tel_of = '+44'.substr(str_replace(" ", "", $number), 1);
    array_push($ogarr, $tel_of);
    endforeach;
    $business_tel_og = implode(', ', $ogarr);
    endif;

    define('CHEFONLINE_RESTAURANT_NAME', $row->restaurant_name !="" ? $row->restaurant_name : '');
    define('CHEFONLINE_ADDRESS_DOOR', $row->door !="" ? $row->door.' ' : '');
    define('CHEFONLINE_ADDRESS_HOUSE', $row->house !="" ? $row->house.' ' : '');
    define('CHEFONLINE_ADDRESS_ADDRESS1', $row->address1 !="" ? $row->address1.', ' : '');
    define('CHEFONLINE_ADDRESS_ADDRESS2', $row->address2 !="" ? $row->address2.', ' : '');
    define('CHEFONLINE_ADDRESS_TOWN', $row->town !="" ? $row->town.', ' : '');
    define('CHEFONLINE_ADDRESS_POSTCODE', $row->postcode);
    define('CHEFONLINE_RESTAURANT_REGION', $row->region);
    define('CHEFONLINE_RESTAURANT_LATITUDE', $row->latitude);
    define('CHEFONLINE_RESTAURANT_LONGITUDE', $row->longitude);
    define('CHEFONLINE_RESTAURANT_BUSINESS_TEL', $business_tel);
    define('CHEFONLINE_RESTAURANT_BUSINESS_TEL_OG', $business_tel_og);
    define('CHEFONLINE_RESTAURANT_GOOGLE_MAP_SRC', $row->google_map_src);
    define('CHEFONLINE_RESTAURANT_FACEBOOK_LINK', $row->facebook_link !="" ? $row->facebook_link : '#');
    define('CHEFONLINE_RESTAURANT_TWITTER_LINK', $row->twitter_link);
    define('CHEFONLINE_RESTAURANT_PINTEREST_LINK', $row->pinterest_link);
    define('CHEFONLINE_RESTAURANT_INSTAGRAM_LINK', $row->instagram_link);
    define('CHEFONLINE_RESTAURANT_YOUTUBE_LINK', $row->youtube_link);
    define('CHEFONLINE_RESTAURANT_FOODHYGIENE_RATING', $row->foodhygiene_rating);
    define('CHEFONLINE_RESTAURANT_TRIPADVISOR_LINK', $row->tripadvisor_link);
    define('CHEFONLINE_RESTAURANT_OWNER_EMAIL', $row->owner_email);
    define('SEO_GEO_TAG', $row1->key_value);
} else {
    define('CHEFONLINE_MENU_URL', '');
    define('CHEFONLINE_RESERVATION_URL', '');
    
    define('CHEFONLINE_RESTAURANT_NAME', '');
    define('CHEFONLINE_ADDRESS_DOOR', '');
    define('CHEFONLINE_ADDRESS_HOUSE', '');
    define('CHEFONLINE_ADDRESS_ADDRESS1', '');
    define('CHEFONLINE_ADDRESS_ADDRESS2', '');
    define('CHEFONLINE_ADDRESS_TOWN', '');
    define('CHEFONLINE_ADDRESS_POSTCODE', '');
    define('CHEFONLINE_RESTAURANT_REGION', '');
    define('CHEFONLINE_RESTAURANT_LATITUDE', '');
    define('CHEFONLINE_RESTAURANT_LONGITUDE', '');
    define('CHEFONLINE_RESTAURANT_BUSINESS_TEL', '');
    define('CHEFONLINE_RESTAURANT_BUSINESS_TEL_OG', '');
    define('CHEFONLINE_RESTAURANT_GOOGLE_MAP_SRC', '');
    define('CHEFONLINE_RESTAURANT_FACEBOOK_LINK', '');
    define('CHEFONLINE_RESTAURANT_TWITTER_LINK', '');
    define('CHEFONLINE_RESTAURANT_PINTEREST_LINK', '');
    define('CHEFONLINE_RESTAURANT_INSTAGRAM_LINK', '');
    define('CHEFONLINE_RESTAURANT_YOUTUBE_LINK', '');
    define('CHEFONLINE_RESTAURANT_FOODHYGIENE_RATING', '');
    define('CHEFONLINE_RESTAURANT_TRIPADVISOR_LINK', '');
    define('CHEFONLINE_RESTAURANT_OWNER_EMAIL', '');
    define('SEO_GEO_TAG', '');
}
