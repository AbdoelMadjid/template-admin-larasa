<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('intel.intel_dashboard');
});
// INTEL
Route::get('/intel_analytics_dashboard', function () {
    return view('intel.intel_analytics_dashboard');
});
Route::get('/intel_marketing_dashboard', function () {
    return view('intel.intel_marketing_dashboard');
});
Route::get('/intel_introduction', function () {
    return view('intel.intel_introduction');
});
Route::get('/intel_privacy', function () {
    return view('intel.intel_privacy');
});
Route::get('/intel_build_notes', function () {
    return view('intel.intel_build_notes');
});

// SETTING
Route::get('/settings_how_it_works', function () {
    return view('settings.settings_how_it_works');
});
Route::get('/settings_layout_options', function () {
    return view('settings.settings_layout_options');
});
Route::get('/settings_theme_modes', function () {
    return view('settings.settings_theme_modes');
});
Route::get('/settings_skin_options', function () {
    return view('settings.settings_skin_options');
});
Route::get('/settings_saving_db', function () {
    return view('settings.settings_saving_db');
});

// INFO
Route::get('/info_app_docs', function () {
    return view('infoapp.info_app_docs');
});
Route::get('/info_app_licensing', function () {
    return view('infoapp.info_app_licensing');
});
Route::get('/info_app_flavors', function () {
    return view('infoapp.info_app_flavors');
});

// UI
Route::get('/ui_alerts', function () {
    return view('ui.ui_alerts');
});
Route::get('/ui_accordion', function () {
    return view('ui.ui_accordion');
});
Route::get('/ui_badges', function () {
    return view('ui.ui_badges');
});
Route::get('/ui_breadcrumbs', function () {
    return view('ui.ui_breadcrumbs');
});
Route::get('/ui_buttons', function () {
    return view('ui.ui_buttons');
});
Route::get('/ui_button_group', function () {
    return view('ui.ui_button_group');
});
Route::get('/ui_cards', function () {
    return view('ui.ui_cards');
});
Route::get('/ui_carousel', function () {
    return view('ui.ui_carousel');
});
Route::get('/ui_collapse', function () {
    return view('ui.ui_collapse');
});
Route::get('/ui_dropdowns', function () {
    return view('ui.ui_dropdowns');
});
Route::get('/ui_list_filter', function () {
    return view('ui.ui_list_filter');
});
Route::get('/ui_modal', function () {
    return view('ui.ui_modal');
});
Route::get('/ui_navbars', function () {
    return view('ui.ui_navbars');
});
Route::get('/ui_panels', function () {
    return view('ui.ui_panels');
});
Route::get('/ui_pagination', function () {
    return view('ui.ui_pagination');
});
Route::get('/ui_popovers', function () {
    return view('ui.ui_popovers');
});
Route::get('/ui_progress_bars', function () {
    return view('ui.ui_progress_bars');
});
Route::get('/ui_scrollspy', function () {
    return view('ui.ui_scrollspy');
});
Route::get('/ui_side_panel', function () {
    return view('ui.ui_side_panel');
});
Route::get('/ui_spinners', function () {
    return view('ui.ui_spinners');
});
Route::get('/ui_tabs_pills', function () {
    return view('ui.ui_tabs_pills');
});
Route::get('/ui_toasts', function () {
    return view('ui.ui_toasts');
});
Route::get('/ui_tooltips', function () {
    return view('ui.ui_tooltips');
});

// utilities
Route::get('/utilities_borders', function () {
    return view('utilities.utilities_borders');
});
Route::get('/utilities_clearfix', function () {
    return view('utilities.utilities_clearfix');
});
Route::get('/utilities_color_pallet', function () {
    return view('utilities.utilities_color_pallet');
});
Route::get('/utilities_display_property', function () {
    return view('utilities.utilities_display_property');
});
Route::get('/utilities_fonts', function () {
    return view('utilities.utilities_fonts');
});
Route::get('/utilities_flexbox', function () {
    return view('utilities.utilities_flexbox');
});
Route::get('/utilities_helpers', function () {
    return view('utilities.utilities_helpers');
});
Route::get('/utilities_position', function () {
    return view('utilities.utilities_position');
});
Route::get('/utilities_responsive_grid', function () {
    return view('utilities.utilities_responsive_grid');
});
Route::get('/utilities_sizing', function () {
    return view('utilities.utilities_sizing');
});
Route::get('/utilities_spacing', function () {
    return view('utilities.utilities_spacing');
});
Route::get('/utilities_typography', function () {
    return view('utilities.utilities_typography');
});

//font
Route::get('/icons_fontawesome_light', function () {
    return view('icons.icons_fontawesome_light');
});
Route::get('/icons_fontawesome_regular', function () {
    return view('icons.icons_fontawesome_regular');
});
Route::get('/icons_fontawesome_solid', function () {
    return view('icons.icons_fontawesome_solid');
});
Route::get('/icons_fontawesome_brand', function () {
    return view('icons.icons_fontawesome_brand');
});
Route::get('/icons_nextgen_general', function () {
    return view('icons.icons_nextgen_general');
});
Route::get('/icons_nextgen_base', function () {
    return view('icons.icons_nextgen_base');
});
Route::get('/icons_stack_showcase', function () {
    return view('icons.icons_stack_showcase');
});
Route::get('/icons_stack_generate', function () {
    return view('icons.icons_stack_generate');
});

//tabel
Route::get('/tables_basic', function () {
    return view('tables.tables_basic');
});
Route::get('/tables_generate_style', function () {
    return view('tables.tables_generate_style');
});

//Form Stuff
Route::get('/form_basic_inputs', function () {
    return view('form.form_basic_inputs');
});
Route::get('/form_checkbox_radio', function () {
    return view('form.form_checkbox_radio');
});
Route::get('/form_input_groups', function () {
    return view('form.form_input_groups');
});
Route::get('/form_validation', function () {
    return view('form.form_validation');
});
Route::get('/form_elements', function () {
    return view('form.form_elements');
});
Route::get('/form_samples', function () {
    return view('form.form_samples');
});

//Plugins
Route::get('/plugin_faq', function () {
    return view('plugin.plugin_faq');
});
Route::get('/plugin_waves', function () {
    return view('plugin.plugin_waves');
});
Route::get('/plugin_pacejs', function () {
    return view('plugin.plugin_pacejs');
});
Route::get('/plugin_smartpanels', function () {
    return view('plugin.plugin_smartpanels');
});
Route::get('/plugin_bootbox', function () {
    return view('plugin.plugin_bootbox');
});
Route::get('/plugin_slimscroll', function () {
    return view('plugin.plugin_slimscroll');
});
Route::get('/plugin_throttle', function () {
    return view('plugin.plugin_throttle');
});
Route::get('/plugin_navigation', function () {
    return view('plugin.plugin_navigation');
});
Route::get('/plugin_i18next', function () {
    return view('plugin.plugin_i18next');
});
Route::get('/plugin_appcore', function () {
    return view('plugin.plugin_appcore');
});

//datatables
Route::get('/datatables_basic', function () {
    return view('datatables.datatables_basic');
});
Route::get('/datatables_autofill', function () {
    return view('datatables.datatables_autofill');
});
Route::get('/datatables_buttons', function () {
    return view('datatables.datatables_buttons');
});
Route::get('/datatables_export', function () {
    return view('datatables.datatables_export');
});
Route::get('/datatables_colreorder', function () {
    return view('datatables.datatables_colreorder');
});
Route::get('/datatables_columnfilter', function () {
    return view('datatables.datatables_columnfilter');
});
Route::get('/datatables_fixedcolumns', function () {
    return view('datatables.datatables_fixedcolumns');
});
Route::get('/datatables_fixedheader', function () {
    return view('datatables.datatables_fixedheader');
});
Route::get('/datatables_keytable', function () {
    return view('datatables.datatables_keytable');
});
Route::get('/datatables_responsive', function () {
    return view('datatables.datatables_responsive');
});
Route::get('/datatables_responsive_alt', function () {
    return view('datatables.datatables_responsive_alt');
});
Route::get('/datatables_rowgroup', function () {
    return view('datatables.datatables_rowgroup');
});
Route::get('/datatables_rowreorder', function () {
    return view('datatables.datatables_rowreorder');
});
Route::get('/datatables_scroller', function () {
    return view('datatables.datatables_scroller');
});
Route::get('/datatables_select', function () {
    return view('datatables.datatables_select');
});
Route::get('/datatables_alteditor', function () {
    return view('datatables.datatables_alteditor');
});

// statistics
Route::get('/statistics_flot', function () {
    return view('statistics.statistics_flot');
});
Route::get('/statistics_chartjs', function () {
    return view('statistics.statistics_chartjs');
});
Route::get('/statistics_chartist', function () {
    return view('statistics.statistics_chartist');
});
Route::get('/statistics_c3', function () {
    return view('statistics.statistics_c3');
});
Route::get('/statistics_peity', function () {
    return view('statistics.statistics_peity');
});
Route::get('/statistics_sparkline', function () {
    return view('statistics.statistics_sparkline');
});
Route::get('/statistics_easypiechart', function () {
    return view('statistics.statistics_easypiechart');
});
Route::get('/statistics_dygraph', function () {
    return view('statistics.statistics_dygraph');
});

//notifikasi
Route::get('/notifications_sweetalert2', function () {
    return view('notifications.notifications_sweetalert2');
});
Route::get('/notifications_toastr', function () {
    return view('notifications.notifications_toastr');
});

//form plugins
Route::get('/form_plugins_colorpicker', function () {
    return view('formplugins.form_plugins_colorpicker');
});
Route::get('/form_plugins_datepicker', function () {
    return view('formplugins.form_plugins_datepicker');
});
Route::get('/form_plugins_daterange_picker', function () {
    return view('formplugins.form_plugins_daterange_picker');
});
Route::get('/form_plugins_dropzone', function () {
    return view('formplugins.form_plugins_dropzone');
});
Route::get('/form_plugins_ionrangeslider', function () {
    return view('formplugins.form_plugins_ionrangeslider');
});
Route::get('/form_plugins_inputmask', function () {
    return view('formplugins.form_plugins_inputmask');
});
Route::get('/form_plugin_imagecropper', function () {
    return view('formplugins.form_plugin_imagecropper');
});
Route::get('/form_plugin_select2', function () {
    return view('formplugins.form_plugin_select2');
});
Route::get('/form_plugin_summernote', function () {
    return view('formplugins.form_plugin_summernote');
});

//Miscellaneous
Route::get('/miscellaneous_fullcalendar', function () {
    return view('miscellaneous.miscellaneous_fullcalendar');
});
Route::get('/miscellaneous_lightgallery', function () {
    return view('miscellaneous.miscellaneous_lightgallery');
});

//Page Views
Route::get('/page_chat', function () {
    return view('page.page_chat');
});
Route::get('/page_contacts', function () {
    return view('page.page_contacts');
});

// Forum
Route::get('/page_forum_list', function () {
    return view('page.page_forum_list');
});
Route::get('/page_forum_threads', function () {
    return view('page.page_forum_threads');
});
Route::get('/page_forum_discussion', function () {
    return view('page.page_forum_discussion');
});

//pages inbox
Route::get('/page_inbox_general', function () {
    return view('page.page_inbox_general');
});
Route::get('/page_inbox_read', function () {
    return view('page.page_inbox_read');
});
Route::get('/page_inbox_write', function () {
    return view('page.page_inbox_write');
});

//Invoice (printable)
Route::get('/page_invoice', function () {
    return view('page.page_invoice');
});

//Authentication
Route::get('/page_forget', function () {
    return view('page.page_forget');
});
Route::get('/page_locked', function () {
    return view('page.page_locked');
});
Route::get('/page_login', function () {
    return view('page.page_login');
});
Route::get('/page_login-alt', function () {
    return view('page.page_login-alt');
});
Route::get('/page_register', function () {
    return view('page.page_register');
});
Route::get('/page_confirmation', function () {
    return view('page.page_confirmation');
});

//Error Pages
Route::get('/page_error', function () {
    return view('page.page_error');
});
Route::get('/page_error_404', function () {
    return view('page.page_error_404');
});
Route::get('/page_error_announced', function () {
    return view('page.page_error_announced');
});

//Profile
Route::get('/page_profile', function () {
    return view('page.page_profile');
});

//search
Route::get('/page_search', function () {
    return view('page.page_search');
});

//blank
Route::get('/blank', function () {
    return view('page.blank');
});

