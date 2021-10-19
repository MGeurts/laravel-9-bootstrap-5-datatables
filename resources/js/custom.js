$(function () {
    /* -------------------------------------------------------------------------------------------- */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        error: function (jqXHR, textStatus, errorThrown) {
            showToast({
                type: 'error',
                title: 'ERROR ' + jqXHR.status,
                message: errorThrown + " ...<hr/>",
            });
        }
    });
    /* ------------------------------------------- */
    $("select").select2({
        theme: "bootstrap-5",
        minimumResultsForSearch: Infinity,
        placeholder: "Choose ...",
        language: "nl",
    });
    /* ------------------------------------------- */
    function nthIndex(str, pat, n) {
        var L = str.length,
            i = -1;
        while (n-- && i++ < L) {
            i = str.indexOf(pat, i);
            if (i < 0) break;
        }
        return i;
    }
    /* -------------------------------------------------------------------------------------------- */
});
