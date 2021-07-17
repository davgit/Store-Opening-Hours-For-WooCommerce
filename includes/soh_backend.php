<?php

if (!defined('ABSPATH'))
  exit;

if (!class_exists('SOH_admin_menu')) {

    class SOH_admin_menu {

        protected static $SOH_instance;

        function SOH_submenu_page() {
            add_menu_page(__( 'woocommerce Store Opening Hours', 'Store Opening Hours' ),'Store Opening Hours Settings','manage_options','store-opening-hours-settings',array($this, 'SOH_callback'));
        }

        function SOH_callback(){
        	global $soh_comman;
        	?>
        	<div class="soh-container">
	            <form method="post" enctype="multipart/form-data">
	            	<div class="wrap">
	                	<h2>Products Attachments for WooCommerce</h2>	            		
	            	</div>
	                <ul class="tabs">
	                    <li class="tab-link" data-tab="soh-tab-Schedule">Schedule</li>
	                    <li class="tab-link" data-tab="soh-tab-Notification">Notification</li>
	                    <li class="tab-link" data-tab="soh-tab-Settings">Settings</li>
	                </ul>
	                <div id="soh-tab-Schedule" class="soh-tab-content soh-current"> 
	                    <table class="data_table">
	                        <tbody>
	                            <tr class="soh_table_headers">
	                                <th colspan="2">
	                                    <h3>Status</h3>
	                                </th>                               
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Store Hours Manager','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="checkbox" name="soh_comman[soh_store_hours_manager]" value="yes"<?php if($soh_comman['soh_store_hours_manager'] == 'yes'){echo "checked";}?>>
	                                    <span class="soh_store_status_note"><strong>Note:</strong> check this checkbox than plugin is working on frontend.</span>
	                                </td>
	                            </tr>
	                            <tr class="soh_table_headers">
	                                <th colspan="2">
	                                    <h3>Days Schedule</h3>
	                                </th>                               
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Period','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                	<div class="soh_day_monday">
	                                		<input type="checkbox" class="soh_period_check_monday" name="soh_comman[soh_period_monday]" value="Monday"<?php if($soh_comman['soh_period_monday'] == 'Monday'){echo "checked";}?>>
	                                		<label>Monday</label>
	                                	</div>
	                                    <div class="soh_day_period_monday soh_period">
						                    <table>
						                        <thead>
							                        <tr>
							                            <th><?php echo __('Monday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <th><?php echo __('Monday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <td>
							                                <input class="soh_all_day_value_monday" type="hidden" name="" value=""/>
							                                <a href="#" class="soh_all_day_monday button">
							                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
							                                </a>
							                             </td>
							                            <td>
							                                <a href="javascript:void(0);" class="soh_day_add_monday button">+</a>
							                            </td>
							                        </tr>
						                        </thead>
						                        <tbody class="soh_time_wrapaer_monday">
					                        		<?php 
					                        		$soh_opening_time_monday = get_option('soh_opening_time_monday',true);
					                        		$soh_closing_time_monday = get_option('soh_closing_time_monday',true);
					                        		if (empty($soh_opening_time_monday) || $soh_opening_time_monday['0'] == '') {
					                        			?>
					                        			<tr class="soh_time_current_monday">
							                        		<th class="soh_opening_timepicker_field_monday">
							                        			<input type="time" class="soh_opening_timepicker_monday" name="soh_opening_time_monday[]" value="">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_monday">
		                                    					<input type="time" class="soh_closing_timepicker_monday" name="soh_closing_time_monday[]" value="">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_monday button">X</a>
							                        		</td>
							                        	</tr>
							                        	<?php
					                        		}else{
					                        			foreach ($soh_opening_time_monday as $key => $value) {
				                        				?>
							                        	<tr class="soh_time_current_monday">
							                        		<th class="soh_opening_timepicker_field_monday">
							                        			<input type="time" class="soh_opening_timepicker_monday" name="soh_opening_time_monday[]" value="<?php echo $soh_opening_time_monday[$key];?>">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_monday">
		                                    					<input type="time" class="soh_closing_timepicker_monday" name="soh_closing_time_monday[]" value="<?php echo $soh_closing_time_monday[$key];?>">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_monday button">X</a>
							                        		</td>
							                        	</tr>
	                                					<?php
					                        			}	
					                        		}
				                        			?>
                                                </tbody>
						                    </table>
						                </div>
						                <div class="soh_day_tuesday">
	                                		<input type="checkbox" class="soh_period_check_tuesday" name="soh_comman[soh_period_tuesday]" value="Tuesday"<?php if($soh_comman['soh_period_tuesday'] == 'Tuesday'){echo "checked";}?>>
	                                		<label>Tuesday</label>
	                                	</div>
						                <div class="soh_day_period_tuesday soh_period">
						                    <table>
						                        <thead>
							                        <tr>
							                            <th><?php echo __('Tuesday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <th><?php echo __('Tuesday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <td>
							                                <input class="soh_all_day_value_tuesday" type="hidden" name="" value=""/>
							                                <a href="#" class="soh_all_day_tuesday button">
							                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
							                                </a>
							                             </td>
							                            <td>
							                                <a href="javascript:void(0);" class="soh_day_add_tuesday button">+</a>
							                            </td>
							                        </tr>
						                        </thead>
						                        <tbody class="soh_time_wrapaer_tuesday">
					                        		<?php 
					                        		$soh_opening_time_tuesday = get_option('soh_opening_time_tuesday',true);
					                        		$soh_closing_time_tuesday = get_option('soh_closing_time_tuesday',true);
					                        		if (empty($soh_opening_time_tuesday) || $soh_opening_time_tuesday['0'] == '') {
					                        			?>
					                        			<tr class="soh_time_current_tuesday">
							                        		<th class="soh_opening_timepicker_field_tuesday">
							                        			<input type="time" class="soh_opening_timepicker_tuesday" name="soh_opening_time_tuesday[]" value="">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_tuesday">
		                                    					<input type="time" class="soh_closing_timepicker_tuesday" name="soh_closing_time_tuesday[]" value="">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_tuesday button">X</a>
							                        		</td>
							                        	</tr>
							                        	<?php
					                        		}else{
					                        			foreach ($soh_opening_time_tuesday as $key => $value) {
				                        				?>
							                        	<tr class="soh_time_current_tuesday">
							                        		<th class="soh_opening_timepicker_field_tuesday">
							                        			<input type="time" class="soh_opening_timepicker_tuesday" name="soh_opening_time_tuesday[]" value="<?php echo $soh_opening_time_tuesday[$key];?>">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_tuesday">
		                                    					<input type="time" class="soh_closing_timepicker_tuesday" name="soh_closing_time_tuesday[]" value="<?php echo $soh_closing_time_tuesday[$key];?>">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_tuesday button">X</a>
							                        		</td>
							                        	</tr>
	                                					<?php
					                        			}	
					                        		}
				                        			?>
                                                </tbody>
						                    </table>
						                </div>
						                <div class="soh_day_wednesday">
	                                		<input type="checkbox" class="soh_period_check_wednesday" name="soh_comman[soh_period_wednesday]" value="Wednesday"<?php if($soh_comman['soh_period_wednesday'] == 'Wednesday'){echo "checked";}?>>
	                                		<label>Wednesday</label>
	                                	</div>
						                <div class="soh_day_period_wednesday soh_period">
						                    <table>
						                        <thead>
							                        <tr>
							                            <th><?php echo __('Wednesday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <th><?php echo __('Wednesday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <td>
							                                <input class="soh_all_day_value_wednesday" type="hidden" name="" value=""/>
							                                <a href="#" class="soh_all_day_wednesday button">
							                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
							                                </a>
							                             </td>
							                            <td>
							                                <a href="javascript:void(0);" class="soh_day_add_wednesday button">+</a>
							                            </td>
							                        </tr>
						                        </thead>
						                        <tbody class="soh_time_wrapaer_wednesday">
					                        		<?php 
					                        		$soh_opening_time_wednesday = get_option('soh_opening_time_wednesday',true);
					                        		$soh_closing_time_wednesday = get_option('soh_closing_time_wednesday',true);
					                        		if (empty($soh_opening_time_wednesday) || $soh_opening_time_wednesday['0'] == '') {
					                        			?>
					                        			<tr class="soh_time_current_wednesday">
							                        		<th class="soh_opening_timepicker_field_wednesday">
							                        			<input type="time" class="soh_opening_timepicker_wednesday" name="soh_opening_time_wednesday[]" value="">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_wednesday">
		                                    					<input type="time" class="soh_closing_timepicker_wednesday" name="soh_closing_time_wednesday[]" value="">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_wednesday button">X</a>
							                        		</td>
							                        	</tr>
							                        	<?php
					                        		}else{
					                        			foreach ($soh_opening_time_wednesday as $key => $value) {
				                        				?>
							                        	<tr class="soh_time_current_wednesday">
							                        		<th class="soh_opening_timepicker_field_wednesday">
							                        			<input type="time" class="soh_opening_timepicker_wednesday" name="soh_opening_time_wednesday[]" value="<?php echo $soh_opening_time_wednesday[$key];?>">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_wednesday">
		                                    					<input type="time" class="soh_closing_timepicker_wednesday" name="soh_closing_time_wednesday[]" value="<?php echo $soh_closing_time_wednesday[$key];?>">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_wednesday button">X</a>
							                        		</td>
							                        	</tr>
	                                					<?php
					                        			}	
					                        		}
				                        			?>
                                                </tbody>
						                    </table>
						                </div>
						                <div class="soh_day_thursday">
	                                		<input type="checkbox" class="soh_period_check_thursday" name="soh_comman[soh_period_thursday]" value="Thursday"<?php if($soh_comman['soh_period_thursday'] == 'Thursday'){echo "checked";}?>>
	                                		<label>Thursday</label>
	                                	</div>
						                <div class="soh_day_period_thursday soh_period">
						                    <table>
						                        <thead>
							                        <tr>
							                            <th><?php echo __('Thursday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <th><?php echo __('Thursday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <td>
							                                <input class="soh_all_day_value_thursday" type="hidden" name="" value=""/>
							                                <a href="#" class="soh_all_day_thursday button">
							                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
							                                </a>
							                             </td>
							                            <td>
							                                <a href="javascript:void(0);" class="soh_day_add_thursday button">+</a>
							                            </td>
							                        </tr>
						                        </thead>
						                        <tbody class="soh_time_wrapaer_thursday">
					                        		<?php 
					                        		$soh_opening_time_thursday = get_option('soh_opening_time_thursday',true);
					                        		$soh_closing_time_thursday = get_option('soh_closing_time_thursday',true);
					                        		if (empty($soh_opening_time_thursday) || $soh_opening_time_thursday['0'] == '') {
					                        			?>
					                        			<tr class="soh_time_current_thursday">
							                        		<th class="soh_opening_timepicker_field_thursday">
							                        			<input type="time" class="soh_opening_timepicker_thursday" name="soh_opening_time_thursday[]" value="">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_thursday">
		                                    					<input type="time" class="soh_closing_timepicker_thursday" name="soh_closing_time_thursday[]" value="">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_thursday button">X</a>
							                        		</td>
							                        	</tr>
							                        	<?php
					                        		}else{
					                        			foreach ($soh_opening_time_thursday as $key => $value) {
				                        				?>
							                        	<tr class="soh_time_current_thursday">
							                        		<th class="soh_opening_timepicker_field_thursday">
							                        			<input type="time" class="soh_opening_timepicker_thursday" name="soh_opening_time_thursday[]" value="<?php echo $soh_opening_time_thursday[$key];?>">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_thursday">
		                                    					<input type="time" class="soh_closing_timepicker_thursday" name="soh_closing_time_thursday[]" value="<?php echo $soh_closing_time_thursday[$key];?>">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_thursday button">X</a>
							                        		</td>
							                        	</tr>
	                                					<?php
					                        			}	
					                        		}
				                        			?>
                                                </tbody>
						                    </table>
						                </div>
						                <div class="soh_day_friday">
	                                		<input type="checkbox" class="soh_period_check_friday" name="soh_comman[soh_period_friday]" value="Friday"<?php if($soh_comman['soh_period_friday'] == 'Friday'){echo "checked";}?>>
	                                		<label>Friday</label>
	                                	</div>
						                <div class="soh_day_period_friday soh_period">
						                    <table>
						                        <thead>
							                        <tr>
							                            <th><?php echo __('Friday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <th><?php echo __('Friday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <td>
							                                <input class="soh_all_day_value_friday" type="hidden" name="" value=""/>
							                                <a href="#" class="soh_all_day_friday button">
							                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
							                                </a>
							                             </td>
							                            <td>
							                                <a href="javascript:void(0);" class="soh_day_add_friday button">+</a>
							                            </td>
							                        </tr>
						                        </thead>
						                        <tbody class="soh_time_wrapaer_friday">
					                        		<?php 
					                        		$soh_opening_time_friday = get_option('soh_opening_time_friday',true);
					                        		$soh_closing_time_friday = get_option('soh_closing_time_friday',true);
					                        		if (empty($soh_opening_time_friday) || $soh_opening_time_friday['0'] == '') {
					                        			?>
					                        			<tr class="soh_time_current_friday">
							                        		<th class="soh_opening_timepicker_field_friday">
							                        			<input type="time" class="soh_opening_timepicker_friday" name="soh_opening_time_friday[]" value="">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_friday">
		                                    					<input type="time" class="soh_closing_timepicker_friday" name="soh_closing_time_friday[]" value="">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_friday button">X</a>
							                        		</td>
							                        	</tr>
							                        	<?php
					                        		}else{
					                        			foreach ($soh_opening_time_friday as $key => $value) {
				                        				?>
							                        	<tr class="soh_time_current_friday">
							                        		<th class="soh_opening_timepicker_field_friday">
							                        			<input type="time" class="soh_opening_timepicker_friday" name="soh_opening_time_friday[]" value="<?php echo $soh_opening_time_friday[$key];?>">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_friday">
		                                    					<input type="time" class="soh_closing_timepicker_friday" name="soh_closing_time_friday[]" value="<?php echo $soh_closing_time_friday[$key];?>">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_friday button">X</a>
							                        		</td>
							                        	</tr>
	                                					<?php
					                        			}	
					                        		}
				                        			?>
                                                </tbody>
						                    </table>
						                </div>
						                <div class="soh_day_saturday">
	                                		<input type="checkbox" class="soh_period_check_saturday" name="soh_comman[soh_period_saturday]" value="Saturday"<?php if($soh_comman['soh_period_saturday'] == 'Saturday'){echo "checked";}?>>
	                                		<label>Saturday</label>
	                                	</div>
						                <div class="soh_day_period_saturday soh_period">
						                    <table>
						                        <thead>
							                        <tr>
							                            <th><?php echo __('Saturday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <th><?php echo __('Saturday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <td>
							                                <input class="soh_all_day_value_saturday" type="hidden" name="" value=""/>
							                                <a href="#" class="soh_all_day_saturday button">
							                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
							                                </a>
							                             </td>
							                            <td>
							                                <a href="javascript:void(0);" class="soh_day_add_saturday button">+</a>
							                            </td>
							                        </tr>
						                        </thead>
						                        <tbody class="soh_time_wrapaer_saturday">
					                        		<?php 
					                        		$soh_opening_time_saturday = get_option('soh_opening_time_saturday',true);
					                        		$soh_closing_time_saturday = get_option('soh_closing_time_saturday',true);
					                        		if (empty($soh_opening_time_saturday) || $soh_opening_time_saturday['0'] == '') {
					                        			?>
					                        			<tr class="soh_time_current_saturday">
							                        		<th class="soh_opening_timepicker_field_saturday">
							                        			<input type="time" class="soh_opening_timepicker_saturday" name="soh_opening_time_saturday[]" value="">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_saturday">
		                                    					<input type="time" class="soh_closing_timepicker_saturday" name="soh_closing_time_saturday[]" value="">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_saturday button">X</a>
							                        		</td>
							                        	</tr>
							                        	<?php
					                        		}else{
					                        			foreach ($soh_opening_time_saturday as $key => $value) {
				                        				?>
							                        	<tr class="soh_time_current_saturday">
							                        		<th class="soh_opening_timepicker_field_saturday">
							                        			<input type="time" class="soh_opening_timepicker_saturday" name="soh_opening_time_saturday[]" value="<?php echo $soh_opening_time_saturday[$key];?>">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_saturday">
		                                    					<input type="time" class="soh_closing_timepicker_saturday" name="soh_closing_time_saturday[]" value="<?php echo $soh_closing_time_saturday[$key];?>">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_saturday button">X</a>
							                        		</td>
							                        	</tr>
	                                					<?php
					                        			}	
					                        		}
				                        			?>
                                                </tbody>
						                    </table>
						                </div>
						                <div class="soh_day_sunday">
	                                		<input type="checkbox" class="soh_period_check_sunday" name="soh_comman[soh_period_sunday]" value="Sunday"<?php if($soh_comman['soh_period_sunday'] == 'Sunday'){echo "checked";}?>>
	                                		<label>Sunday</label>
	                                	</div>
						                <div class="soh_day_period_sunday soh_period">
						                    <table>
						                        <thead>
							                        <tr>
							                            <th><?php echo __('Sunday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <th><?php echo __('Sunday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
							                            <td>
							                                <input class="soh_all_day_value_sunday" type="hidden" name="" value=""/>
							                                <a href="#" class="soh_all_day_sunday button">
							                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
							                                </a>
							                             </td>
							                            <td>
							                                <a href="javascript:void(0);" class="soh_day_add_sunday button">+</a>
							                            </td>
							                        </tr>
						                        </thead>
						                        <tbody class="soh_time_wrapaer_sunday">
					                        		<?php 
					                        		$soh_opening_time_sunday = get_option('soh_opening_time_sunday',true);
					                        		$soh_closing_time_sunday = get_option('soh_closing_time_sunday',true);
					                        		if (empty($soh_opening_time_sunday) || $soh_opening_time_sunday['0'] == '') {
					                        			?>
					                        			<tr class="soh_time_current_sunday">
							                        		<th class="soh_opening_timepicker_field_sunday">
							                        			<input type="time" class="soh_opening_timepicker_sunday" name="soh_opening_time_sunday[]" value="">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_sunday">
		                                    					<input type="time" class="soh_closing_timepicker_sunday" name="soh_closing_time_sunday[]" value="">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_sunday button">X</a>
							                        		</td>
							                        	</tr>
							                        	<?php
					                        		}else{
					                        			foreach ($soh_opening_time_sunday as $key => $value) {
				                        				?>
							                        	<tr class="soh_time_current_sunday">
							                        		<th class="soh_opening_timepicker_field_sunday">
							                        			<input type="time" class="soh_opening_timepicker_sunday" name="soh_opening_time_sunday[]" value="<?php echo $soh_opening_time_sunday[$key];?>">
							                        		</th>
							                        		<th class="soh_closing_timepicker_field_sunday">
		                                    					<input type="time" class="soh_closing_timepicker_sunday" name="soh_closing_time_sunday[]" value="<?php echo $soh_closing_time_sunday[$key];?>">
							                        		</th>
							                        		<td></td>
							                        		<td>
							                        			<a href="javascript:void(0);" class="soh_day_close_sunday button">X</a>
							                        		</td>
							                        	</tr>
	                                					<?php
					                        			}	
					                        		}
				                        			?>
                                                </tbody>
						                    </table>
						                </div>
	                                </td>
	                            </tr>
	                            <tr class="soh_table_headers">
	                                <th colspan="2">
	                                    <h3>Holidays Schedule</h3>
	                                </th>                               
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Holidays','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                	<input type="checkbox" name="soh_comman[soh_holiday_monday]" value="Monday"<?php if($soh_comman['soh_holiday_monday'] == 'Monday'){echo "checked";}?>>
	                                	<label>Monday</label>
	                                	<input type="checkbox" name="soh_comman[soh_holiday_tuesday]" value="Tuesday"<?php if($soh_comman['soh_holiday_tuesday'] == 'Tuesday'){echo "checked";}?>>
	                                	<label>Tuesday</label>
	                                	<input type="checkbox" name="soh_comman[soh_holiday_wednesday]" value="Wednesday"<?php if($soh_comman['soh_holiday_wednesday'] == 'Wednesday'){echo "checked";}?>>
	                                	<label>Wednesday</label>
	                                	<input type="checkbox" name="soh_comman[soh_holiday_thursday]" value="Thursday"<?php if($soh_comman['soh_holiday_thursday'] == 'Thursday'){echo "checked";}?>>
	                                	<label>Thursday</label>
	                                	<input type="checkbox" name="soh_comman[soh_holiday_friday]" value="Friday"<?php if($soh_comman['soh_holiday_friday'] == 'Friday'){echo "checked";}?>>
	                                	<label>Friday</label>
	                                	<input type="checkbox" name="soh_comman[soh_holiday_saturday]" value="Saturday"<?php if($soh_comman['soh_holiday_saturday'] == 'Saturday'){echo "checked";}?>>
	                                	<label>Saturday</label>
	                                	<input type="checkbox" name="soh_comman[soh_holiday_sunday]" value="Sunday"<?php if($soh_comman['soh_holiday_sunday'] == 'Sunday'){echo "checked";}?>>
	                                	<label>Sunday</label>
	                                </td>
	                            </tr>
	                        </tbody>                         
	                    </table>
	                </div>               
	                <div id="soh-tab-Notification" class="soh-tab-content">
	                    <table class="data_table">
	                        <tbody>
	                            <tr class="soh_table_headers">
	                                <th colspan="2">
	                                    <h3>Alert box</h3>
	                                </th>                               
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Alert Box schedule Font Size','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="number" name="soh_comman[soh_alert_box_font_size]" value="<?php echo $soh_comman['soh_alert_box_font_size'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Alert Box Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_alert_box_color]" value="<?php echo $soh_comman['soh_alert_box_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Alert Box schedule Background Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_alert_box_background_color]" value="<?php echo $soh_comman['soh_alert_box_background_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Alert Box Icon/Logo','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                	<?php
	                                		$soh_imagelogo_id = get_option( 'soh_imagelogo');
					                        $soh_image_logo = wp_get_attachment_url( $soh_imagelogo_id, 'full' );
	                                	?>
	                                	<div class="soh_upload_logo_main">
											<input type="text" name="soh_logo_image_input_val" class="soh_logo_image_input_val regular-text" value="<?php echo $soh_image_logo;?>" readonly>
	                                		<a href="#" class="soh_upload_icon_logo button">Upload</a>
	                                		<a href="#" class="soh_remove_icon_logo button">Remove</a>
	                                		<input type="hidden" name="soh_imagelogo" id="soh_imagelogo" value="" />
										</div>
										<input type="hidden" name="soh_imagelogo" class="soh_logo_hidden_img" value="<?php echo $soh_imagelogo_id;?>">
										<img src="<?php echo $soh_image_logo;?>" class="soh_logo_image">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_headers">
	                                <th colspan="2">
	                                    <h3>Alert Widget</h3>
	                                </th>                               
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Alert Widget Countdown Font Size','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="number" name="soh_comman[soh_widget_countdown_font_size]" value="<?php echo $soh_comman['soh_widget_countdown_font_size'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Alert Widget font Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_widget_font_color]" value="<?php echo $soh_comman['soh_widget_font_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Alert Widget Background Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_widget_background_color]" value="<?php echo $soh_comman['soh_widget_background_color'];?>">
	                                </td>
	                            </tr>
	                        </tbody>                         
	                    </table>
	                </div>
	                <div id="soh-tab-Settings" class="soh-tab-content">
	                    <table class="data_table">
	                        <tbody>
	                            <tr class="soh_table_headers">
	                                <th colspan="2">
	                                    <h3>Notification Settings</h3>
	                                </th>                               
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Management Mode','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="checkbox" class="soh_notification_management_mode" name="soh_comman[soh_notification_management_mode]" value="yes"<?php if($soh_comman['soh_notification_management_mode'] == 'yes'){echo "checked";}?>>
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr" id="soh_role_section">
	                                <th>
	                                    <label><?php echo __('By Role','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                	<select id="wg_select_user_role" name="wg_roles_select2[]" multiple="multiple" style="width:50%;">
	                                		<?php 
				                           		$user_roles = get_option('wg_roles_select2');
				                           		
				                           		if (!empty($user_roles)) {
					                           		foreach ($user_roles as $key => $value) {
					                           			$role_names = ( mb_strlen( $value ) > 50 ) ? mb_substr( $value, 0, 49 ) . '...' : $value;
					                                 	?>
					                                 		<option value="<?php echo esc_attr($value);?>" selected="selected"><?php echo esc_attr($role_names);?></option>
					                                 	<?php   
					                           		}
				                           		}
				                           	?>
	                                	</select>
	                                </td>
	                            </tr>
	                            <tr class="soh_table_headers">
	                                <th colspan="2">
	                                    <h3>Alert Texts</h3>
	                                </th>                               
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Text for Open widget','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" name="soh_comman[soh_text_open_widget]" class="regular-text" value="<?php echo $soh_comman['soh_text_open_widget'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Text for Close widget','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" name="soh_comman[soh_text_close_widget]" class="regular-text" value="<?php echo $soh_comman['soh_text_close_widget'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Text for Hours Open Modal','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" name="soh_comman[soh_text_hours_open_model]" class="regular-text" value="<?php echo $soh_comman['soh_text_hours_open_model'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Text for Hours Close Modal','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" name="soh_comman[soh_text_hours_close_model]" class="regular-text" value="<?php echo $soh_comman['soh_text_hours_close_model'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Text for Schedule Header','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" name="soh_comman[soh_text_schedule_header]" class="regular-text" value="<?php echo $soh_comman['soh_text_schedule_header'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th>
	                                    <label><?php echo __('Text for Holiday Schedule','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td>
	                                    <input type="text" name="soh_comman[soh_text_holiday_schedule]" class="regular-text" value="<?php echo $soh_comman['soh_text_holiday_schedule'];?>">
	                                </td>
	                            </tr>
	                        </tbody>                         
	                    </table>
	                </div>
	                <div class="submit_button">
	                    <input type="hidden" name="soh_form_submit" value="soh_save_option">
	                    <input type="submit" value="Save changes" name="submit" class="button-primary" id="soh-btn-space">
	                </div>              
	            </form>  
	        </div>
	        <?php
        }


        function soh_role_ajax(){
        	global $wp_roles;
        	$return = array();
            
            foreach( $wp_roles->role_names as $role => $name ) {
            	$return[] = array( $role, $name );
            }

            echo json_encode( $return );
            die;
        }

        function SOH_recursive_sanitize_text_field( $array ) {
            foreach ( $array as $key => &$value ) {
                if ( is_array( $value ) ) {
                    $value = $this->SOH_recursive_sanitize_text_field($value);
                }else{
                    $value = sanitize_text_field( $value );
                }
            }
            return $array;
        
        }


        function SOH_save_option(){
        	if( current_user_can('administrator') ) { 
	            if(isset($_REQUEST['soh_form_submit']) && $_REQUEST['soh_form_submit'] == 'soh_save_option'){
	            	

	            	$attachment_image_id = sanitize_text_field($_REQUEST['soh_imagelogo']);
	            	update_option('soh_imagelogo',$attachment_image_id,'yes' );
	            	
	                //if(!empty($_REQUEST['soh_comman'])){
	                    $isecheckbox = array(
	                    	'soh_store_hours_manager',
	                    	'soh_enable_cache_clearing',
	                    	'soh_notification_management_mode',
	                    	'soh_all_products',
	                    	'soh_all_pages',
	                    	'soh_all_posts',
	                    	'soh_holiday_monday',
	                    	'soh_holiday_tuesday',
	                    	'soh_holiday_wednesday',
	                    	'soh_holiday_thursday',
	                    	'soh_holiday_friday',
	                    	'soh_holiday_saturday',
	                    	'soh_holiday_sunday',
	                    	'soh_period_monday',
	                    	'soh_period_tuesday',
	                    	'soh_period_wednesday',
	                    	'soh_period_thursday',
	                    	'soh_period_friday',
	                    	'soh_period_saturday',
	                    	'soh_period_sunday',
	                    );

	                    foreach ($isecheckbox as $key_isecheckbox => $value_isecheckbox) {
	                        if(!isset($_REQUEST['soh_comman'][$value_isecheckbox])){
	                            $_REQUEST['soh_comman'][$value_isecheckbox] ='no';
	                        }
	                    }

	                    $wg_roles_select2 = $this->SOH_recursive_sanitize_text_field( $_REQUEST['wg_roles_select2'] );
	        			update_option('wg_roles_select2', $wg_roles_select2, 'yes');

	        			// if (!empty($_REQUEST['soh_opening_time_monday'])) {
		        			$soh_opening_time_monday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_monday'] );
		        			update_option('soh_opening_time_monday', $soh_opening_time_monday, 'yes');
	        			// }
	        			// if (!empty($_REQUEST['soh_closing_time_monday'])) {
		        			$soh_closing_time_monday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_monday'] );
		        			update_option('soh_closing_time_monday', $soh_closing_time_monday, 'yes');
		        		// }

		        		// if (!empty($_REQUEST['soh_opening_time_tuesday'])) {
		        			$soh_opening_time_tuesday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_tuesday'] );
		        			update_option('soh_opening_time_tuesday', $soh_opening_time_tuesday, 'yes');
		        		// }
		        		// if (!empty($_REQUEST['soh_closing_time_tuesday'])) {
		        			$soh_closing_time_tuesday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_tuesday'] );
		        			update_option('soh_closing_time_tuesday', $soh_closing_time_tuesday, 'yes');
		        		// }

		        		// if (!empty($_REQUEST['soh_opening_time_wednesday'])) {
		        			$soh_opening_time_wednesday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_wednesday'] );
		        			update_option('soh_opening_time_wednesday', $soh_opening_time_wednesday, 'yes');
		        		// }
		        		// if (!empty($_REQUEST['soh_closing_time_wednesday'])) {
		        			$soh_closing_time_wednesday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_wednesday'] );
		        			update_option('soh_closing_time_wednesday', $soh_closing_time_wednesday, 'yes');
		        		// }

		        		// if (!empty($_REQUEST['soh_opening_time_thursday'])) {
		        			$soh_opening_time_thursday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_thursday'] );
		        			update_option('soh_opening_time_thursday', $soh_opening_time_thursday, 'yes');
		        		// }
		        		// if (!empty($_REQUEST['soh_closing_time_thursday'])) {
		        			$soh_closing_time_thursday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_thursday'] );
		        			update_option('soh_closing_time_thursday', $soh_closing_time_thursday, 'yes');
		        		// }

		        		// if (!empty($_REQUEST['soh_opening_time_friday'])) {
		        			$soh_opening_time_friday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_friday'] );
		        			update_option('soh_opening_time_friday', $soh_opening_time_friday, 'yes');
		        		// }
		        		// if (!empty($_REQUEST['soh_closing_time_friday'])) {
		        			$soh_closing_time_friday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_friday'] );
		        			update_option('soh_closing_time_friday', $soh_closing_time_friday, 'yes');
		        		// }

		        		// if (!empty($_REQUEST['soh_opening_time_saturday'])) {
		        			$soh_opening_time_saturday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_saturday'] );
		        			update_option('soh_opening_time_saturday', $soh_opening_time_saturday, 'yes');
		        		// }
		        		// if (!empty($_REQUEST['soh_closing_time_saturday'])) {
		        			$soh_closing_time_saturday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_saturday'] );
		        			update_option('soh_closing_time_saturday', $soh_closing_time_saturday, 'yes');
		        		// }

		        		// if (!empty($_REQUEST['soh_opening_time_sunday'])) {
		        			$soh_opening_time_sunday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_sunday'] );
		        			update_option('soh_opening_time_sunday', $soh_opening_time_sunday, 'yes');
		        		// }
		        		// if (!empty($_REQUEST['soh_closing_time_sunday'])) {
		        			$soh_closing_time_sunday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_sunday'] );
		        			update_option('soh_closing_time_sunday', $soh_closing_time_sunday, 'yes');
	                   	// }

	                    //print_r($_REQUEST);
	                    foreach ($_REQUEST['soh_comman'] as $key_soh_comman => $value_soh_comman) {
	                       // echo $key_soh_comman;
	                        update_option($key_soh_comman, sanitize_text_field($value_soh_comman), 'yes');
	                    }
	                    //exit;
	                //}                      
	                wp_redirect( admin_url( '/admin.php?page=store-opening-hours-settings' ) );
	                exit;     
	            }
	        }
        }			
				
        function init() {
        	add_action( 'admin_menu',  array($this, 'SOH_submenu_page'));
        	add_action( 'init',  array($this, 'SOH_save_option'));
        	add_action( 'wp_ajax_nopriv_wg_roles_ajax',array($this, 'soh_role_ajax') );
            add_action( 'wp_ajax_wg_roles_ajax', array($this, 'soh_role_ajax') );
        }

        public static function SOH_instance() {
            if (!isset(self::$SOH_instance)) {
                self::$SOH_instance = new self();
                self::$SOH_instance->init();
            }
            return self::$SOH_instance;
        }
    }
    SOH_admin_menu::SOH_instance();
}

?>