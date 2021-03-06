function ajaxGetRequest(e, t, n) {
    $.ajax({
        type: "get",
        url: e,
        dataType: "json",
        success: function(e) {
            t && t(e)
        },
        error: function(e) {
            n && n(e)
        }
    })
}

function ajaxErrorSwal(e) {
    422 === e.status ? $.each(e.responseJSON.errors, function(e, t) {
        return swal("Invalid Data", t[0], "error"), !1
    }) : swal(e.statusText + ": " + e.status, e.responseJSON.message, "error")
}

function initAutoComplete(e, t, n, a) {
    void 0 == a && (a = 0), $(e).autocomplete({
        minLength: a,
        maxShowItems: 5,
        source: t,
        focus: function(e, t) {
            e.preventDefault()
        },
        select: function(e, t) {
            $(this).val(t.item.label), e.preventDefault()
        },
        change: function(e, a) {
            var o = $(this).val(),
                i = t.filter(function(e) {
                    return e.label == o
                });
            0 === i.length ? $(this).val(null) : (null == a.item && (a.item = i[0]), $(this).val(a.item.label)), void 0 != n && n(i, a)
        }
    })
}

function initAutocomplete(e, t, n, a, o, i) {
    a || (a = 0), e && "#" !== e[0] && (e = "#" + e), t && "#" !== t[0] && (t = "#" + t), $(e).autocomplete({
        minLength: a,
        maxShowItems: 5,
        source: n,
        focus: function(e, t) {
            e.preventDefault()
        },
        select: function(e, n) {
            $(this).val(n.item.label), $(t).val(n.item.value), void 0 != i && i(n.item), e.preventDefault()
        },
        change: function(e, a) {
            var i = $(this).val(),
                l = n.filter(function(e) {
                    return e.label == i
                }),
                r = 0 != l.length;
            r ? (null == a.item && (a.item = l[0]), $(this).val(a.item.label), $(t).val(a.item.value)) : ($(this).val(null), $(t).val(null)), void 0 != o && o(a.item, r)
        }
    }).focus(function() {
        $(this).data("ui-autocomplete").menu.bindings = $(), $(this).autocomplete("search", $(this).val())
    })
}

function initUnrestrictedAutocomplete(e, t, n, a, o, i) {
    a || (a = 0), e && "#" !== e[0] && (e = "#" + e), t && "#" !== t[0] && (t = "#" + t), $(e).autocomplete({
        minLength: a,
        maxShowItems: 5,
        source: n,
        focus: function(e, t) {
            e.preventDefault()
        },
        select: function(e, n) {
            $(this).val(n.item.label), $(t).val(n.item.value), i && i(n.item), e.preventDefault()
        },
        change: function(e, a) {
            var i = $(this).val(),
                l = n.filter(function(e) {
                    return e.label == i
                }),
                r = 0 != l.length;
            r ? (null == a.item && (a.item = l[0]), $(this).val(a.item.label), $(t).val(a.item.value)) : $(t).val(null), o && o(a.item, r)
        }
    }).focus(function() {
        $(this).autocomplete("search", $(this).val())
    })
}

function countHighestId(e) {
    var t = 0;
    return $(e).each(function() {
        var e = this.id.replace(/\D/g, "");
        t = Math.max(e, t)
    }), t
}

function idIncremental(e, t) {
    return e + "_" + (t + 1)
}

function combine(e, t) {
    return e + "_" + t
}

function generateUniqueIds(e, t) {
    for (var n = 0; n < e.length; ++n) $("#" + e[n]).prop("id", idIncremental(e[n], t))
}

function generateTableRow(e, t, n) {
    var a = document.getElementById(e),
        o = a.insertRow(-1);
    o.className = t;
    for (var i = [], l = 0; l < n; ++l) i[l] = o.insertCell(l);
    return i
}

function formatDate(e) {
    return e = new Date(e), day = e.getDate(), day < 10 && (day = "0" + day), month = e.getMonth() + 1, month < 10 && (month = "0" + month), e.getFullYear() + "-" + month + "-" + day
}

function NumbersOnly(e) {
    var t = e.charCode ? e.charCode : e.keyCode;
    if (8 != t && 46 != t && 37 != t && 27 != t && 38 != t && 39 != t && 40 != t && 9 != t && (t < 48 || t > 57)) return !1
}
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    })
}), $(document).on({
    ajaxStart: function() {
        $("body").addClass("loading")
    },
    ajaxStop: function() {
        $("body").removeClass("loading")
    },
    ajaxSuccess: function(e, t, n) {
        $("body").removeClass("loading")
    },
    ajaxError: function(e, t, n) {
        $("body").removeClass("loading"), "production" !== APP_ENV && /(Whoops, looks like something went wrong.)/.test(t.responseText) && ($("#modal-error").modal("show"), $("#iframe-error-content").attr("srcdoc", t.responseText))
    }
});