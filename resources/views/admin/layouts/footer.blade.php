<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    @php

        $locale = app()->getLocale();
    @endphp
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2"><script></script>©</span>
            <a href="" target="_blank" class="text-dark-75 text-hover-primary">{{ settings()->name }}</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Nav-->
        <div class="nav nav-dark">
            <input type="hidden" value="{{ $locale }}" class="locale">
            {{-- <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
      <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
      <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a> --}}
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->
@include('admin.layouts.profile')
<!--end::Demo Panel-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

<script>
    var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5weF",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('admin') }}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="{{ asset('admin') }}/assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->

<script src="{{ asset('admin') }}/assets/js/pages/features/miscellaneous/sweetalert2.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/crud/datatables/advanced/column-rendering.js') }}"></script>
<script src="{{ asset('admin') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('admin') }}/assets/js/pages/widgets.js"></script>
<script src="{{ asset('admin') }}/assets/js/pages/features/miscellaneous/sweetalert2.js"></script>





<script src="{{ asset('admin') }}/assets/date/js/bootstrap.js"></script>
<script src="{{ asset('admin') }}/assets/date/js/momentjs.js"></script>
<script src="{{ asset('admin') }}/assets/date/js/moment-with-locales.js"></script>
<script src="{{ asset('admin') }}/assets/date/js/moment-hijri.js"></script>
<script src="{{ asset('admin') }}/assets/date/js/bootstrap-hijri-datetimepicker.js"></script>

<script type="text/javascript">


    $(function () {

        initHijrDatePicker();

        //initHijrDatePickerDefault();

        $('.disable-date').hijriDatePicker({

            minDate:"1900-01-01",
            viewMode:"years",
            hijri:true,
            debug:true
        });

    });

    function initHijrDatePicker() {

        $(".hijri-date-input").hijriDatePicker({
            locale: "ar-sa",
            format: "DD-MM-YYYY",
            hijriFormat:"iYYYY-iMM-iDD",
            dayViewHeaderFormat: "MMMM YYYY",
            hijriDayViewHeaderFormat: "iMMMM iYYYY",
            showSwitcher: true,
            allowInputToggle: true,
            showTodayButton: false,
            useCurrent: true,
            isRTL: false,
            viewMode:'months',
            keepOpen: false,
            hijri: false,
            debug: true,
            showClear: true,
            showTodayButton: true,
            showClose: true
        });
    }

    function initHijrDatePickerDefault() {

        $(".hijri-date-input").hijriDatePicker();
    }


</script>






<script>
    function confirmDelete(item_id) {
        Swal.fire({
            title: "@lang('general.translation.sure')",
            text: `@lang('general.translation.revert')`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "@lang('general.translation.delete')",
            cancelButtonText: "@lang('general.translation.cancel')",
            reverseButtons: false
        }).then(function(result) {
            if (result.value) {
                console.log(item_id);
                $('#' + item_id).submit();
            } else if (result.dismiss === "cancel") {
                Swal.fire(
                    "@lang('general.translation.canceled')",
                    "@lang('general.translation.files_saved')",
                    "error"
                )
            }
        });


    }
</script>
<script src="{{ asset('admin') }}/assets/js/pages/crud/file-upload/image-input.js"></script>
<script src="{{ asset('admin/assets/js/iconpicker-1.5.0.js') }}"></script>
<script type="text/javascript">
    if ($('#GetIconPicker').length > 0) {

        IconPicker.Init({
            // Required: You have to set the path of IconPicker JSON file to "jsonUrl" option. e.g. '/content/plugins/IconPicker/dist/iconpicker-1.5.0.json'
            jsonUrl: '{{ asset('admin') }}/assets/js/iconpicker-1.5.0.json',
            // Optional: Change the buttons or search placeholder text according to the language.
            searchPlaceholder: 'Search Icon',
            showAllButton: 'Show All',
            cancelButton: 'Cancel',
            noResultsFound: 'No results found.', // v1.5.0 and the next versions
            borderRadius: '20px', // v1.5.0 and the next versions
        });
        IconPicker.Run('#GetIconPicker');
    }


    $('document').ready(function() {
        if ($('#editor1').length > 1) {
            CKEDITOR.replace('editor1');
        }
    });
</script>

@yield('script')



@stack('js')
@stack('css')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
