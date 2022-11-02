window.onload = function () {
    $('#reservationdatetime').datepicker({
        language: 'ja',
        startDate: new Date(),
        format: 'dd/mm/yyyy',
        autoclose: true,
        clearBtn: true,
    }),
    $('#schedule-start-index-search').datepicker({
        language: 'ja',
        startDate: new Date(),
        format: 'dd/mm/yyyy',
        autoclose: true,
        clearBtn: true,
    }),
    $('#schedule-end-index-search').datepicker({
        language: 'ja',
        startDate: new Date(),
        format: 'dd/mm/yyyy',
        autoclose: true,
        clearBtn: true,
    })
}
