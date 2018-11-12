<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <!-- Logo -->
            <a class="link-fx font-w600 font-size-lg text-white" href="{{ route('home') }}">
                <span class="text-white-75"><i class="fa fa-shipping-fast"></i> </span><span class="text-white"> PIGE</span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </a>
                <!-- END Toggle Sidebar Style -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_dashboard.html">
                    <i class="nav-main-link-icon si si-cursor"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                    <span class="nav-main-link-badge badge badge-pill badge-success">5</span>
                </a>
            </li>
            <li class="nav-main-heading">Base</li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-grid"></i>
                    <span class="nav-main-link-name">Blocks</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_styles.html">
                            <span class="nav-main-link-name">Styles</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_options.html">
                            <span class="nav-main-link-name">Options</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_forms.html">
                            <span class="nav-main-link-name">Forms</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_themed.html">
                            <span class="nav-main-link-name">Themed</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_api.html">
                            <span class="nav-main-link-name">API</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-puzzle"></i>
                    <span class="nav-main-link-name">Widgets</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_widgets_tiles.html">
                            <span class="nav-main-link-name">Tiles</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_widgets_stats.html">
                            <span class="nav-main-link-name">Statistics</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_widgets_media.html">
                            <span class="nav-main-link-name">Media</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_widgets_users.html">
                            <span class="nav-main-link-name">Users</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-star"></i>
                    <span class="nav-main-link-name">Layout</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Page</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_page_default.html">
                                    <span class="nav-main-link-name">Default</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_page_flipped.html">
                                    <span class="nav-main-link-name">Flipped</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                                    <span class="nav-main-link-name">Native Scrolling</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Main Content</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                                    <span class="nav-main-link-name">Full Width</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                                    <span class="nav-main-link-name">Narrow</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                                    <span class="nav-main-link-name">Boxed</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Side Content</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_content_side_left.html">
                                    <span class="nav-main-link-name">Left</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_content_side_right.html">
                                    <span class="nav-main-link-name">Right</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Hero</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Color</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_hero_color_dark.html">
                                            <span class="nav-main-link-name">Dark</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_hero_color_light.html">
                                            <span class="nav-main-link-name">Light</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Image</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_hero_image_dark.html">
                                            <span class="nav-main-link-name">Dark</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_hero_image_light.html">
                                            <span class="nav-main-link-name">Light</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Video</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_hero_video_dark.html">
                                            <span class="nav-main-link-name">Dark</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_hero_video_light.html">
                                            <span class="nav-main-link-name">Light</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Header</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Fixed</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                                            <span class="nav-main-link-name">Light</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_header_fixed_light_glass.html">
                                            <span class="nav-main-link-name">Light Glass</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                                            <span class="nav-main-link-name">Dark</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_header_fixed_dark_glass.html">
                                            <span class="nav-main-link-name">Dark Glass</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Static</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_header_static_light.html">
                                            <span class="nav-main-link-name">Light</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_header_static_light_glass.html">
                                            <span class="nav-main-link-name">Light Glass</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_header_static_dark.html">
                                            <span class="nav-main-link-name">Dark</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="be_layout_header_static_dark_glass.html">
                                            <span class="nav-main-link-name">Dark Glass</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Sidebar</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_sidebar_light.html">
                                    <span class="nav-main-link-name">Light</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                                    <span class="nav-main-link-name">Dark</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                                    <span class="nav-main-link-name">Hidden</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Side Overlay</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                                    <span class="nav-main-link-name">Visible</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                                    <span class="nav-main-link-name">Hover Mode</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                                    <span class="nav-main-link-name">No Page Overlay</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_api.html">
                            <span class="nav-main-link-name">API</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">Interface</li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-chemistry"></i>
                    <span class="nav-main-link-name">Elements</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_icons.html">
                            <span class="nav-main-link-name">Icon Packs</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_grid.html">
                            <span class="nav-main-link-name">Flexbox Grid</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_typography.html">
                            <span class="nav-main-link-name">Typography</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_navigation.html">
                            <span class="nav-main-link-name">Navigation</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_tabs.html">
                            <span class="nav-main-link-name">Tabs</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_buttons.html">
                            <span class="nav-main-link-name">Buttons</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_buttons_groups.html">
                            <span class="nav-main-link-name">Button Groups</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_dropdowns.html">
                            <span class="nav-main-link-name">Dropdowns</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_progress.html">
                            <span class="nav-main-link-name">Progress</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_alerts.html">
                            <span class="nav-main-link-name">Alerts</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_tooltips.html">
                            <span class="nav-main-link-name">Tooltips</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_popovers.html">
                            <span class="nav-main-link-name">Popovers</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_accordion.html">
                            <span class="nav-main-link-name">Accordion</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_modals.html">
                            <span class="nav-main-link-name">Modals</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_images.html">
                            <span class="nav-main-link-name">Images Overlay</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_timeline.html">
                            <span class="nav-main-link-name">Timeline</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_ribbons.html">
                            <span class="nav-main-link-name">Ribbons</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_animations.html">
                            <span class="nav-main-link-name">Animations</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_color_themes.html">
                            <span class="nav-main-link-name">Color Themes</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-cup"></i>
                    <span class="nav-main-link-name">Tables</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_tables_styles.html">
                            <span class="nav-main-link-name">Styles</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_tables_responsive.html">
                            <span class="nav-main-link-name">Responsive</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_tables_helpers.html">
                            <span class="nav-main-link-name">Helpers</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_tables_pricing.html">
                            <span class="nav-main-link-name">Pricing</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_tables_datatables.html">
                            <span class="nav-main-link-name">DataTables</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-notebook"></i>
                    <span class="nav-main-link-name">Forms</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_elements.html">
                            <span class="nav-main-link-name">Elements</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_layouts.html">
                            <span class="nav-main-link-name">Layouts</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_input_groups.html">
                            <span class="nav-main-link-name">Input Groups</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_plugins.html">
                            <span class="nav-main-link-name">Plugins</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_editors.html">
                            <span class="nav-main-link-name">Editors</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_validation.html">
                            <span class="nav-main-link-name">Validation</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_wizard.html">
                            <span class="nav-main-link-name">Wizard</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">Extend</li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-wrench"></i>
                    <span class="nav-main-link-name">Components</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_dialogs.html">
                            <span class="nav-main-link-name">Dialogs</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_notifications.html">
                            <span class="nav-main-link-name">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_loaders.html">
                            <span class="nav-main-link-name">Loaders</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_charts.html">
                            <span class="nav-main-link-name">Charts</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_gallery.html">
                            <span class="nav-main-link-name">Gallery</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_sliders.html">
                            <span class="nav-main-link-name">Sliders</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_rating.html">
                            <span class="nav-main-link-name">Rating</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_appear.html">
                            <span class="nav-main-link-name">Appear</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_calendar.html">
                            <span class="nav-main-link-name">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_image_cropper.html">
                            <span class="nav-main-link-name">Image Cropper</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_maps_google.html">
                            <span class="nav-main-link-name">Google Maps</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_maps_vector.html">
                            <span class="nav-main-link-name">Vector Maps</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                            <span class="nav-main-link-name">Syntax Highlighting</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-settings"></i>
                    <span class="nav-main-link-name">Main Menu</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <i class="nav-main-link-icon si si-drawer"></i>
                            <span class="nav-main-link-name">1.1 Item</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <i class="nav-main-link-icon si si-fire"></i>
                            <span class="nav-main-link-name">1.2 Item</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <i class="nav-main-link-icon si si-graph"></i>
                            <span class="nav-main-link-name">1.3 Item</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Sub Level 2</span>
                            <span class="nav-main-link-badge badge badge-pill badge-primary">3</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                    <i class="nav-main-link-icon si si-tag"></i>
                                    <span class="nav-main-link-name">2.1 Item</span>
                                    <span class="nav-main-link-badge badge badge-pill badge-info">2</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                    <i class="nav-main-link-icon si si-pie-chart"></i>
                                    <span class="nav-main-link-name">2.2 Item</span>
                                    <span class="nav-main-link-badge badge badge-pill badge-danger">2</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                    <i class="nav-main-link-icon si si-note"></i>
                                    <span class="nav-main-link-name">2.3 Item</span>
                                    <span class="nav-main-link-badge badge badge-pill badge-warning">3</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">Sub Level 3</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                            <i class="nav-main-link-icon si si-map"></i>
                                            <span class="nav-main-link-name">3.1 Item</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                            <i class="nav-main-link-icon si si-cup"></i>
                                            <span class="nav-main-link-name">3.2 Item</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                            <i class="nav-main-link-icon si si-user-female"></i>
                                            <span class="nav-main-link-name">3.3 Item</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Sub Level 4</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="#">
                                                    <i class="nav-main-link-icon si si-heart"></i>
                                                    <span class="nav-main-link-name">4.1 Item</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="#">
                                                    <i class="nav-main-link-icon si si-magnifier"></i>
                                                    <span class="nav-main-link-name">4.2 Item</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="#">
                                                    <i class="nav-main-link-icon si si-microphone"></i>
                                                    <span class="nav-main-link-name">4.3 Item</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">Pages</li>
            <li class="nav-main-item open">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-docs"></i>
                    <span class="nav-main-link-name">Generic</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="be_pages_generic_blank.html">
                            <span class="nav-main-link-name">Blank</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                            <span class="nav-main-link-name">Blank (Block)</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_search.html">
                            <span class="nav-main-link-name">Search</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_profile.html">
                            <span class="nav-main-link-name">Profile</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_inbox.html">
                            <span class="nav-main-link-name">Inbox</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_invoice.html">
                            <span class="nav-main-link-name">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_faq.html">
                            <span class="nav-main-link-name">FAQ</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                            <span class="nav-main-link-name">Upgrade Plan</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_maintenance.html">
                            <span class="nav-main-link-name">Maintenance</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_status.html">
                            <span class="nav-main-link-name">Status</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_coming_soon.html">
                            <span class="nav-main-link-name">Coming Soon</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_coming_soon_2.html">
                            <span class="nav-main-link-name">Coming Soon 2</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-cup"></i>
                    <span class="nav-main-link-name">Dashboards</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_dashboard_all.html">
                            <span class="nav-main-link-name">All</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_social.html">
                            <span class="nav-main-link-name">Social</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_messages.html">
                            <span class="nav-main-link-name">Messages</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_dark.html">
                            <span class="nav-main-link-name">Dark</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_minimal.html">
                            <span class="nav-main-link-name">Minimal</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_modern.html">
                            <span class="nav-main-link-name">Modern</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_classic_boxed.html">
                            <span class="nav-main-link-name">Classic Boxed</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_banking.html">
                            <span class="nav-main-link-name">Banking</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="db_crypto.html">
                            <span class="nav-main-link-name">Crypto</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-users"></i>
                    <span class="nav-main-link-name">Auth</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_auth_all.html">
                            <span class="nav-main-link-name">All</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_auth_signin.html">
                            <span class="nav-main-link-name">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_auth_signin_box.html">
                            <span class="nav-main-link-name">Sign In Box</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_auth_signup.html">
                            <span class="nav-main-link-name">Sign Up</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_auth_signup_box.html">
                            <span class="nav-main-link-name">Sign Up Box</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_auth_lock.html">
                            <span class="nav-main-link-name">Lock Screen</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_auth_lock_box.html">
                            <span class="nav-main-link-name">Lock Screen Box</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_auth_reminder.html">
                            <span class="nav-main-link-name">Pass Reminder</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_auth_reminder_box.html">
                            <span class="nav-main-link-name">Pass Reminder Box</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">New</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-ghost"></i>
                    <span class="nav-main-link-name">Error</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_error_all.html">
                            <span class="nav-main-link-name">All</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_error_400.html">
                            <span class="nav-main-link-name">400</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_error_401.html">
                            <span class="nav-main-link-name">401</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_error_403.html">
                            <span class="nav-main-link-name">403</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_error_404.html">
                            <span class="nav-main-link-name">404</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_error_500.html">
                            <span class="nav-main-link-name">500</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="op_error_503.html">
                            <span class="nav-main-link-name">503</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>