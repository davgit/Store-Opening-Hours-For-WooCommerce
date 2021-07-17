<?php

if (!defined('ABSPATH'))
  exit;

if (!class_exists('SOH_frontend_menu')) {

    class SOH_frontend_menu {

        protected static $SOH_front_instance;

        function soh_alert_notification() {
            global $soh_comman;

            $soh_imagelogo_id = get_option( 'soh_imagelogo');
            $soh_image_logo = wp_get_attachment_url( $soh_imagelogo_id, 'full' );
            ?>
            <div class="soh_alert_notification_content">
                <div class="soh_alert_notification_main" style="display: none;background-color: <?php echo esc_html($soh_comman['soh_alert_box_color']);?>">
                    <div class="soh_alert_notification_inner">
                        <div class="soh_alert_status">
                            <?php
                            $soh_opening_time_monday = get_option('soh_opening_time_monday',true);
                            $soh_closing_time_monday = get_option('soh_closing_time_monday',true);

                            $soh_opening_time_tuesday = get_option('soh_opening_time_tuesday',true);
                            $soh_closing_time_tuesday = get_option('soh_closing_time_tuesday',true);

                            $soh_opening_time_wednesday = get_option('soh_opening_time_wednesday',true);
                            $soh_closing_time_wednesday = get_option('soh_closing_time_wednesday',true);

                            $soh_opening_time_thursday = get_option('soh_opening_time_thursday',true);
                            $soh_closing_time_thursday = get_option('soh_closing_time_thursday',true);

                            $soh_opening_time_friday = get_option('soh_opening_time_friday',true);
                            $soh_closing_time_friday = get_option('soh_closing_time_friday',true);

                            $soh_opening_time_saturday = get_option('soh_opening_time_saturday',true);
                            $soh_closing_time_saturday = get_option('soh_closing_time_saturday',true);

                            $soh_opening_time_sunday = get_option('soh_opening_time_sunday',true);
                            $soh_closing_time_sunday = get_option('soh_closing_time_sunday',true);


                            if ($soh_comman['soh_period_monday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_monday)  && $soh_opening_time_monday['0'] != '') {
                                $value11 = false;
                                foreach ($soh_opening_time_monday as $key => $value) {
                                    $time_now = mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_monday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_monday[$key]) && $soh_comman['soh_period_monday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value11 = true;
                                    }elseif($soh_comman['soh_holiday_monday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_monday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_monday[$key])){
                                        $value11 = false;
                                    }
                                }
                                if($value11 == true){
                                    echo esc_html($soh_comman['soh_text_hours_open_model']);
                                }elseif($value11 == false){
                                    echo esc_html($soh_comman['soh_text_hours_close_model']);
                                }
                            }elseif ($soh_comman['soh_period_tuesday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_tuesday)  && $soh_opening_time_tuesday['0'] != '') {
                                $value111 = false;
                                foreach ($soh_opening_time_tuesday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_tuesday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_tuesday[$key]) && $soh_comman['soh_period_tuesday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value111 = true;
                                    }elseif($soh_comman['soh_holiday_tuesday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_tuesday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_tuesday[$key])){
                                        $value111 = false;
                                    }
                                }
                                if($value111 == true){
                                    echo esc_html($soh_comman['soh_text_hours_open_model']);
                                }elseif($value111 == false){
                                    echo esc_html($soh_comman['soh_text_hours_close_model']);
                                }
                            }elseif ($soh_comman['soh_period_wednesday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_wednesday)  && $soh_opening_time_wednesday['0'] != '') {
                                $value222 = false;
                                foreach ($soh_opening_time_wednesday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_wednesday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_wednesday[$key]) && $soh_comman['soh_period_wednesday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value222 = true;
                                    }elseif($soh_comman['soh_holiday_wednesday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_wednesday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_wednesday[$key])){
                                        $value222 = false;
                                    }
                                }
                                if($value222 == true){
                                    echo esc_html($soh_comman['soh_text_hours_open_model']);
                                }elseif($value222 == false){
                                    echo esc_html($soh_comman['soh_text_hours_close_model']);
                                }
                            }elseif ($soh_comman['soh_period_thursday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_thursday)  && $soh_opening_time_thursday['0'] != '') {
                                $value333 = false;
                                foreach ($soh_opening_time_thursday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_thursday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_thursday[$key]) && $soh_comman['soh_period_thursday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value333 = true;
                                    }elseif($soh_comman['soh_holiday_thursday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_thursday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_thursday[$key])){
                                        $value333 = false;
                                    }
                                }
                                if($value333 == true){
                                    echo esc_html($soh_comman['soh_text_hours_open_model']);
                                }elseif($value333 == false){
                                    echo esc_html($soh_comman['soh_text_hours_close_model']);
                                }
                            }elseif ($soh_comman['soh_period_friday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_friday)  && $soh_opening_time_friday['0'] != '') {
                                $value444 = false;
                                foreach ($soh_opening_time_friday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_friday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_friday[$key]) && $soh_comman['soh_period_friday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value444 = true;
                                    }elseif($soh_comman['soh_holiday_friday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_friday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_friday[$key])){
                                        $value444 = false;
                                    }
                                }
                                if($value444 == true){
                                    echo esc_html($soh_comman['soh_text_hours_open_model']);
                                }elseif($value444 == false){
                                    echo esc_html($soh_comman['soh_text_hours_close_model']);
                                }
                            }elseif ($soh_comman['soh_period_saturday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_saturday)  && $soh_opening_time_saturday['0'] != '') {
                                $value555 = false;
                                foreach ($soh_opening_time_saturday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_saturday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_saturday[$key]) && $soh_comman['soh_period_saturday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value555 = true;
                                    }elseif($soh_comman['soh_holiday_saturday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_saturday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_saturday[$key])){
                                        $value555 = false;
                                    }
                                }
                                if($value555 == true){
                                    echo esc_html($soh_comman['soh_text_hours_open_model']);
                                }elseif($value555 == false){
                                    echo esc_html($soh_comman['soh_text_hours_close_model']);
                                }
                            }elseif ($soh_comman['soh_period_sunday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_sunday)  && $soh_opening_time_sunday['0'] != '') {
                                $value666 = false;
                                foreach ($soh_opening_time_sunday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_sunday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_sunday[$key]) && $soh_comman['soh_period_sunday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value666 = true;
                                    }elseif($soh_comman['soh_holiday_sunday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_sunday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_sunday[$key])){
                                        $value666 = false;
                                    }
                                }
                                if($value666 == true){
                                    echo esc_html($soh_comman['soh_text_hours_open_model']);
                                }elseif($value666 == false){
                                    echo esc_html($soh_comman['soh_text_hours_close_model']);
                                }
                            }elseif($soh_comman['soh_holiday_monday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_hours_close_model']);
                            }elseif($soh_comman['soh_holiday_tuesday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_hours_close_model']);
                            }elseif($soh_comman['soh_holiday_wednesday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_hours_close_model']);
                            }elseif($soh_comman['soh_holiday_thursday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_hours_close_model']);
                            }elseif($soh_comman['soh_holiday_friday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_hours_close_model']);
                            }elseif($soh_comman['soh_holiday_saturday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_hours_close_model']);
                            }elseif($soh_comman['soh_holiday_sunday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_hours_close_model']);
                            }else{
                                echo esc_html($soh_comman['soh_text_hours_open_model']);
                            }
                            ?>
                        </div>
                        <div class="soh_modal_icon_middle soh_modal_icon_circle" style="font-size: 45px; ">
                            <?php
                            if ($soh_image_logo != "") {
                                ?>
                                <img src="<?php echo esc_html($soh_image_logo);?>" style="width: 45px;">
                                <?php
                            }
                            ?>
                        </div>
                        <i class="soh_modal_close_icon soh_icon soh_icon_close"><img src="<?php echo SOH_PLUGIN_DIR;?>/images/Close.png"></i>
                    </div>
                    <div id="soh_modal_content" style="background-color: <?php echo esc_html($soh_comman['soh_alert_box_background_color']);?>">
                        <h3 class="soh_modal_schedule_header"><?php echo esc_html($soh_comman['soh_text_schedule_header']);?></h3>
                        <div class="soh_modal_schedule" style="min-height: 260px; font-size: <?php echo esc_html($soh_comman['soh_alert_box_font_size']).'px';?>">
                            <div class="soh_modal_day">Monday</div>
                            <div>
                                <?php
                                $soh_opening_time_monday = get_option('soh_opening_time_monday',true);
                                $soh_closing_time_monday = get_option('soh_closing_time_monday',true);
                                if ($soh_comman['soh_period_monday'] == 'Monday' && !empty($soh_opening_time_monday)  && $soh_opening_time_monday['0'] != '') {
                                    foreach ($soh_opening_time_monday as $key => $value) {
                                        ?>
                                    <div>
                                        <?php 
                                            echo date("h:i A", strtotime($soh_opening_time_monday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_monday[$key]));
                                        ?>
                                    </div>
                                    <?php
                                    }
                                }else{
                                    ?>
                                    <div>
                                        <?php
                                            if($soh_comman['soh_holiday_monday'] == 'Monday'){
                                                echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                            }else{
                                                echo esc_html($soh_comman['soh_text_open_widget']);
                                            }
                                        ?>
                                    </div>
                                    <?php 
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day">Tuesday</div>
                            <div>
                                <?php
                                $soh_opening_time_tuesday = get_option('soh_opening_time_tuesday',true);
                                $soh_closing_time_tuesday = get_option('soh_closing_time_tuesday',true);
                                if ($soh_comman['soh_period_tuesday'] == 'Tuesday' && !empty($soh_opening_time_tuesday)  && $soh_opening_time_tuesday['0'] != '') {
                                    foreach ($soh_opening_time_tuesday as $key => $value) {
                                        ?>
                                    <div>
                                        <?php 
                                            echo date("h:i A", strtotime($soh_opening_time_tuesday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_tuesday[$key]));
                                        ?>
                                    </div>
                                    <?php
                                    }
                                }else{
                                    ?>
                                    <div>
                                        <?php
                                            if($soh_comman['soh_holiday_tuesday'] == 'Tuesday'){
                                                echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                            }else{
                                                echo esc_html($soh_comman['soh_text_open_widget']);
                                            }
                                        ?>
                                    </div>
                                    <?php 
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day">Wednesday</div>
                            <div>
                                <?php
                                $soh_opening_time_wednesday = get_option('soh_opening_time_wednesday',true);
                                $soh_closing_time_wednesday = get_option('soh_closing_time_wednesday',true);
                                if ($soh_comman['soh_period_wednesday'] == 'Wednesday' && !empty($soh_opening_time_wednesday)  && $soh_opening_time_wednesday['0'] != '') {
                                    foreach ($soh_opening_time_wednesday as $key => $value) {
                                        ?>
                                    <div>
                                        <?php 
                                            echo date("h:i A", strtotime($soh_opening_time_wednesday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_wednesday[$key]));
                                        ?>
                                    </div>
                                    <?php
                                    }
                                }else{
                                    ?>
                                    <div>
                                        <?php
                                            if($soh_comman['soh_holiday_wednesday'] == 'Wednesday'){
                                                echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                            }else{
                                                echo esc_html($soh_comman['soh_text_open_widget']);
                                            }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day">Thursday</div>
                            <div>
                                <?php
                                $soh_opening_time_thursday = get_option('soh_opening_time_thursday',true);
                                $soh_closing_time_thursday = get_option('soh_closing_time_thursday',true);
                                if ($soh_comman['soh_period_thursday'] == 'Thursday' && !empty($soh_opening_time_thursday)  && $soh_opening_time_thursday['0'] != '') {
                                    foreach ($soh_opening_time_thursday as $key => $value) {
                                        ?>
                                    <div>
                                        <?php 
                                            echo date("h:i A", strtotime($soh_opening_time_thursday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_thursday[$key]));
                                        ?>
                                    </div>
                                    <?php
                                    }
                                }else{
                                    ?>
                                    <div>
                                        <?php
                                            if($soh_comman['soh_holiday_thursday'] == 'Thursday'){
                                                echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                            }else{
                                                echo esc_html($soh_comman['soh_text_open_widget']);
                                            }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day">Friday</div>
                            <div>
                                <?php
                                $soh_opening_time_friday = get_option('soh_opening_time_friday',true);
                                $soh_closing_time_friday = get_option('soh_closing_time_friday',true);
                                if ($soh_comman['soh_period_friday'] == 'Friday' && !empty($soh_opening_time_friday)  && $soh_opening_time_friday['0'] != '') {
                                    foreach ($soh_opening_time_friday as $key => $value) {
                                        ?>
                                    <div>
                                        <?php 
                                            echo date("h:i A", strtotime($soh_opening_time_friday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_friday[$key]));
                                        ?>
                                    </div>
                                    <?php
                                    }
                                }else{
                                    ?>
                                    <div>
                                        <?php
                                            if($soh_comman['soh_holiday_friday'] == 'Friday'){
                                                echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                            }else{
                                                echo esc_html($soh_comman['soh_text_open_widget']);
                                            }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day">Saturday</div>
                            <div>
                                <?php
                                $soh_opening_time_saturday = get_option('soh_opening_time_saturday',true);
                                $soh_closing_time_saturday = get_option('soh_closing_time_saturday',true);
                                if ($soh_comman['soh_period_saturday'] == 'Saturday' && !empty($soh_opening_time_saturday)  && $soh_opening_time_saturday['0'] != '') {
                                    foreach ($soh_opening_time_saturday as $key => $value) {
                                        ?>
                                    <div>
                                        <?php 
                                            echo date("h:i A", strtotime($soh_opening_time_saturday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_saturday[$key]));
                                        ?>
                                    </div>
                                    <?php
                                    }
                                }else{
                                    ?>
                                    <div>
                                        <?php
                                            if($soh_comman['soh_holiday_saturday'] == 'Saturday'){
                                                echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                            }else{
                                                echo esc_html($soh_comman['soh_text_open_widget']);
                                            }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day">Sunday</div>
                            <div>
                                <?php
                                $soh_opening_time_sunday = get_option('soh_opening_time_sunday',true);
                                $soh_closing_time_sunday = get_option('soh_closing_time_sunday',true);
                                if ($soh_comman['soh_period_sunday'] == 'Sunday' && !empty($soh_opening_time_sunday)  && $soh_opening_time_sunday['0'] != '') {
                                    foreach ($soh_opening_time_sunday as $key => $value) {
                                        ?>
                                    <div>
                                        <?php 
                                            echo date("h:i A", strtotime($soh_opening_time_sunday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_sunday[$key]));
                                        ?>
                                    </div>
                                    <?php
                                    }
                                }else{
                                    ?>
                                    <div>
                                        <?php
                                            if($soh_comman['soh_holiday_sunday'] == 'Sunday'){
                                                echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                            }else{
                                                echo esc_html($soh_comman['soh_text_open_widget']);
                                            }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="soh_alert_notification_popup_widget" style="background-color: <?php echo esc_html($soh_comman['soh_widget_background_color']);?>;">
                <div class="soh_alert_notification_popup_widget_content">
                    <div class="soh_alert_notification_popup_widget_top_part">
                        <i class="soh_clock_icon soh_icon soh_icon_time"><img src="<?php echo esc_html($soh_image_logo);?>"></i>
                        <span style="color: <?php echo esc_attr($soh_comman['soh_widget_font_color']);?>; font-size: <?php echo esc_html($soh_comman['soh_widget_countdown_font_size']).'px';?>;">
                            <?php
                            $soh_opening_time_monday = get_option('soh_opening_time_monday',true);
                            $soh_closing_time_monday = get_option('soh_closing_time_monday',true);

                            $soh_opening_time_tuesday = get_option('soh_opening_time_tuesday',true);
                            $soh_closing_time_tuesday = get_option('soh_closing_time_tuesday',true);

                            $soh_opening_time_wednesday = get_option('soh_opening_time_wednesday',true);
                            $soh_closing_time_wednesday = get_option('soh_closing_time_wednesday',true);

                            $soh_opening_time_thursday = get_option('soh_opening_time_thursday',true);
                            $soh_closing_time_thursday = get_option('soh_closing_time_thursday',true);

                            $soh_opening_time_friday = get_option('soh_opening_time_friday',true);
                            $soh_closing_time_friday = get_option('soh_closing_time_friday',true);

                            $soh_opening_time_saturday = get_option('soh_opening_time_saturday',true);
                            $soh_closing_time_saturday = get_option('soh_closing_time_saturday',true);

                            $soh_opening_time_sunday = get_option('soh_opening_time_sunday',true);
                            $soh_closing_time_sunday = get_option('soh_closing_time_sunday',true);

                            if ($soh_comman['soh_period_monday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_monday)  && $soh_opening_time_monday['0'] != '') {
                                $value11 = false;
                                foreach ($soh_opening_time_monday as $key => $value) {
                                    $time_now = mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_monday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_monday[$key]) && $soh_comman['soh_period_monday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value11 = true;
                                    }elseif($soh_comman['soh_holiday_monday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_monday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_monday[$key])){
                                        $value11 = false;
                                    }
                                }
                                if($value11 == true){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($value11 == false){
                                    echo esc_html($soh_comman['soh_text_close_widget']);
                                }
                            }elseif ($soh_comman['soh_period_tuesday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_tuesday)  && $soh_opening_time_tuesday['0'] != '') {
                                $value111 = false;
                                foreach ($soh_opening_time_tuesday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_tuesday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_tuesday[$key]) && $soh_comman['soh_period_tuesday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value111 = true;
                                    }elseif($soh_comman['soh_holiday_tuesday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_tuesday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_tuesday[$key])){
                                        $value111 = false;
                                    }
                                }
                                if($value111 == true){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($value111 == false){
                                    echo esc_html($soh_comman['soh_text_close_widget']);
                                }
                            }elseif ($soh_comman['soh_period_wednesday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_wednesday)  && $soh_opening_time_wednesday['0'] != '') {
                                $value222 = false;
                                foreach ($soh_opening_time_wednesday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_wednesday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_wednesday[$key]) && $soh_comman['soh_period_wednesday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value222 = true;
                                    }elseif($soh_comman['soh_holiday_wednesday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_wednesday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_wednesday[$key])){
                                        $value222 = false;
                                    }
                                }
                                if($value222 == true){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($value222 == false){
                                    echo esc_html($soh_comman['soh_text_close_widget']);
                                }
                            }elseif ($soh_comman['soh_period_thursday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_thursday)  && $soh_opening_time_thursday['0'] != '') {
                                $value333 = false;
                                foreach ($soh_opening_time_thursday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_thursday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_thursday[$key]) && $soh_comman['soh_period_thursday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value333 = true;
                                    }elseif($soh_comman['soh_holiday_thursday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_thursday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_thursday[$key])){
                                        $value333 = false;
                                    }
                                }
                                if($value333 == true){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($value333 == false){
                                    echo esc_html($soh_comman['soh_text_close_widget']);
                                }
                            }elseif ($soh_comman['soh_period_friday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_friday)  && $soh_opening_time_friday['0'] != '') {
                                $value444 = false;
                                foreach ($soh_opening_time_friday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_friday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_friday[$key]) && $soh_comman['soh_period_friday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value444 = true;
                                    }elseif($soh_comman['soh_holiday_friday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_friday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_friday[$key])){
                                        $value444 = false;
                                    }
                                }
                                if($value444 == true){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($value444 == false){
                                    echo esc_html($soh_comman['soh_text_close_widget']);
                                }
                            }elseif ($soh_comman['soh_period_saturday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_saturday)  && $soh_opening_time_saturday['0'] != '') {
                                $value555 = false;
                                foreach ($soh_opening_time_saturday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_saturday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_saturday[$key]) && $soh_comman['soh_period_saturday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value555 = true;
                                    }elseif($soh_comman['soh_holiday_saturday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_saturday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_saturday[$key])){
                                        $value555 = false;
                                    }
                                }
                                if($value555 == true){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($value555 == false){
                                    echo esc_html($soh_comman['soh_text_close_widget']);
                                }
                            }elseif ($soh_comman['soh_period_sunday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_sunday)  && $soh_opening_time_sunday['0'] != '') {
                                $value666 = false;
                                foreach ($soh_opening_time_sunday as $key => $value) {
                                    $time_now=mktime(date('h')+5,date('i')+30);
                                    $date = date('h:i A', $time_now);
                                    if (strtotime($soh_opening_time_sunday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_sunday[$key]) && $soh_comman['soh_period_sunday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                                        $value666 = true;
                                    }elseif($soh_comman['soh_holiday_sunday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_sunday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_sunday[$key])){
                                        $value666 = false;
                                    }
                                }
                                if($value666 == true){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($value666 == false){
                                    echo esc_html($soh_comman['soh_text_close_widget']);
                                }
                            }elseif($soh_comman['soh_holiday_monday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_close_widget']);
                            }elseif($soh_comman['soh_holiday_tuesday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_close_widget']);
                            }elseif($soh_comman['soh_holiday_wednesday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_close_widget']);
                            }elseif($soh_comman['soh_holiday_thursday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_close_widget']);
                            }elseif($soh_comman['soh_holiday_friday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_close_widget']);
                            }elseif($soh_comman['soh_holiday_saturday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_close_widget']);
                            }elseif($soh_comman['soh_holiday_sunday'] == date("l", strtotime(date("Y-m-d")))){
                                echo esc_html($soh_comman['soh_text_close_widget']);
                            }else{
                                echo esc_html($soh_comman['soh_text_open_widget']);
                            }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php
        }

        function soh_wc_shop_checkout_disabled() {

            wc_print_notice( 'Our Online Shop is Closed Today :) Please Come Back Tomorrow!', 'error');
            exit();

        }


        function init() {
            global $soh_comman;
            if ($soh_comman['soh_store_hours_manager'] == 'yes') {

                if ($soh_comman['soh_notification_management_mode'] == 'yes') {
                    $user = wp_get_current_user();
                    $user_roles = get_option('wg_roles_select2');
                    if(!empty($user_roles)){  
                        if (array_intersect($user_roles, $user->roles )) {
                            add_action( 'wp_footer', array($this,'soh_alert_notification'), 100 );
                        }
                    }
                }else{
                    add_action( 'wp_footer', array($this,'soh_alert_notification'), 100 );
                }

                $soh_opening_time_monday = get_option('soh_opening_time_monday',true);
                $soh_closing_time_monday = get_option('soh_closing_time_monday',true);

                $soh_opening_time_tuesday = get_option('soh_opening_time_tuesday',true);
                $soh_closing_time_tuesday = get_option('soh_closing_time_tuesday',true);

                $soh_opening_time_wednesday = get_option('soh_opening_time_wednesday',true);
                $soh_closing_time_wednesday = get_option('soh_closing_time_wednesday',true);

                $soh_opening_time_thursday = get_option('soh_opening_time_thursday',true);
                $soh_closing_time_thursday = get_option('soh_closing_time_thursday',true);

                $soh_opening_time_friday = get_option('soh_opening_time_friday',true);
                $soh_closing_time_friday = get_option('soh_closing_time_friday',true);

                $soh_opening_time_saturday = get_option('soh_opening_time_saturday',true);
                $soh_closing_time_saturday = get_option('soh_closing_time_saturday',true);

                $soh_opening_time_sunday = get_option('soh_opening_time_sunday',true);
                $soh_closing_time_sunday = get_option('soh_closing_time_sunday',true);

                if ($soh_comman['soh_period_monday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_monday)  && $soh_opening_time_monday['0'] != '') {
                    $value11 = false;
                    foreach ($soh_opening_time_monday as $key => $value) {
                        $time_now = mktime(date('h')+5,date('i')+30);
                        $date = date('h:i A', $time_now);
                        if (strtotime($soh_opening_time_monday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_monday[$key]) && $soh_comman['soh_holiday_monday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                            $value11 = true;
                        }elseif($soh_comman['soh_holiday_monday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_monday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_monday[$key])){
                            $value11 = false;
                        }
                    }
                    if($value11 == false){
                        add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                    }
                }elseif ($soh_comman['soh_period_tuesday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_tuesday)  && $soh_opening_time_tuesday['0'] != '') {
                    $value111 = false;
                    foreach ($soh_opening_time_tuesday as $key => $value) {
                        $time_now=mktime(date('h')+5,date('i')+30);
                        $date = date('h:i A', $time_now);
                        if (strtotime($soh_opening_time_tuesday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_tuesday[$key]) && $soh_comman['soh_holiday_tuesday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                            $value111 = true;
                        }elseif($soh_comman['soh_holiday_tuesday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_tuesday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_tuesday[$key])){
                            $value111 = false;
                        }
                    }
                    if($value111 == false){
                        add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                    }
                }elseif ($soh_comman['soh_period_wednesday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_wednesday)  && $soh_opening_time_wednesday['0'] != '') {
                    $value222 = false;
                    foreach ($soh_opening_time_wednesday as $key => $value) {
                        $time_now=mktime(date('h')+5,date('i')+30);
                        $date = date('h:i A', $time_now);
                        if (strtotime($soh_opening_time_wednesday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_wednesday[$key]) && $soh_comman['soh_holiday_wednesday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                            $value222 = true;
                        }elseif($soh_comman['soh_holiday_wednesday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_wednesday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_wednesday[$key])){
                            $value222 = false;
                        }
                    }
                    if($value222 == false){
                        add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                    }
                }elseif ($soh_comman['soh_period_thursday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_thursday)  && $soh_opening_time_thursday['0'] != '') {
                    $value333 = false;
                    foreach ($soh_opening_time_thursday as $key => $value) {
                        $time_now=mktime(date('h')+5,date('i')+30);
                        $date = date('h:i A', $time_now);
                        if (strtotime($soh_opening_time_thursday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_thursday[$key]) && $soh_comman['soh_holiday_thursday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                            $value333 = true;
                        }elseif($soh_comman['soh_holiday_thursday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_thursday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_thursday[$key])){
                            $value333 = false;
                        }
                    }
                    if($value333 == false){
                        add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                    }
                }elseif ($soh_comman['soh_period_friday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_friday)  && $soh_opening_time_friday['0'] != '') {
                    $value444 = false;
                    foreach ($soh_opening_time_friday as $key => $value) {
                        $time_now=mktime(date('h')+5,date('i')+30);
                        $date = date('h:i A', $time_now);
                        if (strtotime($soh_opening_time_friday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_friday[$key]) && $soh_comman['soh_holiday_friday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                            $value444 = true;
                        }elseif($soh_comman['soh_holiday_friday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_friday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_friday[$key])){
                            $value444 = false;
                        }
                    }
                    if($value444 == false){
                        add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                    }
                }elseif ($soh_comman['soh_period_saturday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_saturday)  && $soh_opening_time_saturday['0'] != '') {
                    $value555 = false;
                    foreach ($soh_opening_time_saturday as $key => $value) {
                        $time_now=mktime(date('h')+5,date('i')+30);
                        $date = date('h:i A', $time_now);
                        if (strtotime($soh_opening_time_saturday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_saturday[$key]) && $soh_comman['soh_holiday_saturday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                            $value555 = true;
                        }elseif($soh_comman['soh_holiday_saturday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_saturday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_saturday[$key])){
                            $value555 = false;
                        }
                    }
                    if($value555 == false){
                        add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                    }
                }elseif ($soh_comman['soh_period_sunday'] == date("l", strtotime(date("Y-m-d"))) && !empty($soh_opening_time_sunday)  && $soh_opening_time_sunday['0'] != '') {
                    $value666 = false;
                    foreach ($soh_opening_time_sunday as $key => $value) {
                        $time_now=mktime(date('h')+5,date('i')+30);
                        $date = date('h:i A', $time_now);
                        if (strtotime($soh_opening_time_sunday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_sunday[$key]) && $soh_comman['soh_holiday_sunday'] == date("l", strtotime(date("Y-m-d")))) {                                        
                            $value666 = true;
                        }elseif($soh_comman['soh_holiday_sunday'] == date("l", strtotime(date("Y-m-d"))) && strtotime($soh_opening_time_sunday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_sunday[$key])){
                            $value666 = false;
                        }
                    }
                    if($value666 == false){
                        add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                    }
                }elseif($soh_comman['soh_holiday_monday'] == date("l", strtotime(date("Y-m-d")))){
                    add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                }elseif($soh_comman['soh_holiday_tuesday'] == date("l", strtotime(date("Y-m-d")))){
                    add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                }elseif($soh_comman['soh_holiday_wednesday'] == date("l", strtotime(date("Y-m-d")))){
                    add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                }elseif($soh_comman['soh_holiday_thursday'] == date("l", strtotime(date("Y-m-d")))){
                    add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                }elseif($soh_comman['soh_holiday_friday'] == date("l", strtotime(date("Y-m-d")))){
                    add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                }elseif($soh_comman['soh_holiday_saturday'] == date("l", strtotime(date("Y-m-d")))){
                    add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                }elseif($soh_comman['soh_holiday_sunday'] == date("l", strtotime(date("Y-m-d")))){
                    add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                }
            }
        }       

        public static function SOH_front_instance() {
            if (!isset(self::$SOH_front_instance)) {
                self::$SOH_front_instance = new self();
                self::$SOH_front_instance->init();
            }
            return self::$SOH_front_instance;
        }
    }
    SOH_frontend_menu::SOH_front_instance();
}

?>