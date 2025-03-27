// function slideToggle(t, e, o) {
//     0 === t.clientHeight ? j(t, e, o, !0) : j(t, e, o)
// }

// function slideUp(t, e, o) {
//     j(t, e, o)
// }

// function slideDown(t, e, o) {
//     j(t, e, o, !0)
// }

// function j(t, e, o, i) {
//     void 0 === e && (e = 400), void 0 === i && (i = !1), t.style.overflow = "hidden", i && (t.style.display = "block");
//     var p, l = window.getComputedStyle(t),
//         n = parseFloat(l.getPropertyValue("height")),
//         a = parseFloat(l.getPropertyValue("padding-top")),
//         s = parseFloat(l.getPropertyValue("padding-bottom")),
//         r = parseFloat(l.getPropertyValue("margin-top")),
//         d = parseFloat(l.getPropertyValue("margin-bottom")),
//         g = n / e,
//         y = a / e,
//         m = s / e,
//         u = r / e,
//         h = d / e;
//     window.requestAnimationFrame(function l(x) {
//         void 0 === p && (p = x);
//         var f = x - p;
//         i ? (t.style.height = g * f + "px", t.style.paddingTop = y * f + "px", t.style.paddingBottom = m * f + "px", t.style.marginTop = u * f + "px", t.style.marginBottom = h * f + "px") : (t.style.height = n - g * f + "px", t.style.paddingTop = a - y * f + "px", t.style.paddingBottom = s - m * f + "px", t.style.marginTop = r - u * f + "px", t.style.marginBottom = d - h * f + "px"), f >= e ? (t.style.height = "", t.style.paddingTop = "", t.style.paddingBottom = "", t.style.marginTop = "", t.style.marginBottom = "", t.style.overflow = "", i || (t.style.display = "none"), "function" == typeof o && o()) : window.requestAnimationFrame(l)
//     })
// }

// let sidebarItems = document.querySelectorAll('.sidebar-item.has-sub');
// for(var i = 0; i < sidebarItems.length; i++) {
//     let sidebarItem = sidebarItems[i];
// 	sidebarItems[i].querySelector('.sidebar-link').addEventListener('click', function(e) {
//         e.preventDefault();

//         let submenu = sidebarItem.querySelector('.submenu');
//         if( submenu.classList.contains('active') ) submenu.style.display = "block"

//         if( submenu.style.display == "none" ) submenu.classList.add('active')
//         else submenu.classList.remove('active')
//         slideToggle(submenu, 300)
//     })
// }

// window.addEventListener('DOMContentLoaded', (event) => {
//     var w = window.innerWidth;
//     if(w < 1200) {
//         document.getElementById('sidebar').classList.remove('active');
//     }
// });
// window.addEventListener('resize', (event) => {
//     var w = window.innerWidth;
//     if(w < 1200) {
//         document.getElementById('sidebar').classList.remove('active');
//     }else{
//         document.getElementById('sidebar').classList.add('active');
//     }
// });

// document.querySelector('.burger-btn').addEventListener('click', () => {
//     var w = window.innerWidth;
//     if(w < 1200) {
//         document.getElementById('sidebar').classList.toggle('active');
//     }
// })
// document.getElementById('main-content').addEventListener('click', () => {
//     var w = window.innerWidth;
//     if(w < 1200) {
//         var elem = document.getElementById('sidebar');
//         if (elem.className == "active") {
//             console.log(elem.className);
//             elem.classList.remove(elem.className)
//         }
//     }
// })

// Perfect Scrollbar Init
if (typeof PerfectScrollbar == "function") {
    const container = document.querySelector(".sidebar-wrapper");
    const ps = new PerfectScrollbar(container, {
        wheelPropagation: false,
    });
}

// Scroll into active sidebar
if ($(".sidebar-item.active").length > 0) {
    console.log("scrollIntoView: active");
    document.querySelector(".sidebar-item.active").scrollIntoView(false);
}

$(function () {
    if ($("#datatable").length > 0) {
        var table = $("#datatable").DataTable({
            responsive: true,
        });

        new $.fn.dataTable.FixedHeader(table);
    }

    var showPass = 0;
    $(".btn-show-pass").on("click", function () {
        if (showPass == 0) {
            $(this).next("input").attr("type", "text");
            $(this).find("i").removeClass("bi-eye-slash");
            $(this).find("i").addClass("bi-eye");
            showPass = 1;
        } else {
            $(this).next("input").attr("type", "password");
            $(this).find("i").addClass("bi-eye-slash");
            $(this).find("i").removeClass("bi-eye");
            showPass = 0;
        }
    });

    var showPass2 = 0;
    $(".btn-show-pass-2").on("click", function () {
        if (showPass2 == 0) {
            $(this).next("input").attr("type", "text");
            $(this).find("i").removeClass("bi-eye-slash");
            $(this).find("i").addClass("bi-eye");
            showPass2 = 1;
        } else {
            $(this).next("input").attr("type", "password");
            $(this).find("i").addClass("bi-eye-slash");
            $(this).find("i").removeClass("bi-eye");
            showPass2 = 0;
        }
    });
});

$(document).on("click", ".button-destroy", function (ev) {
    let url = $(this).data("url");
    alertify
        .okBtn("Delete")
        .cancelBtn("Cancel")
        .confirm(
            "Are you sure to delete this data?",
            function (ev) {
                ev.preventDefault();
                deleteData(url);
            },
            function (ev) {
                ev.preventDefault();
            }
        );
});

function deleteData(data) {
    $.ajax({
        url: data,
        type: "GET",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })
        .done(function (response) {
            console.log(response);
            if (response) {
                location.reload();
            } else {
                Toastify({
                    text: "Failed",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#dc3545",
                }).showToast();
            }
        })
        .fail(function (jqXHR, response) {
            const obj = JSON.parse(jqXHR.responseText);
            Toastify({
                text: obj.error,
                duration: 3000,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "#dc3545",
            }).showToast();
        });
}
