window.onload = function () {
    $('#search-schedule-datestart').datepicker({
        language: 'ja',
        format: 'dd/mm/yyyy',
        autoclose: true,
        clearBtn: true,
    })
    $('#search-schedule-dateend').datepicker({
        language: 'ja',
        format: 'dd/mm/yyyy',
        autoclose: true,
        clearBtn: true,
    })
}
