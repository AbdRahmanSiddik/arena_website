(() => {
    (function () {
        "use strict";
        if ($("#tabulator").length) {
            let i = function () {
                    let e = $("#tabulator-html-filter-field").val(),
                        t = $("#tabulator-html-filter-type").val(),
                        l = $("#tabulator-html-filter-value").val();
                    a.setFilter(e, t, l);
                },
                a = new Tabulator("#tabulator", {
                    ajaxURL: "../data/dummy.json",
                    ajaxResponse: function(url, params, response) {
                        console.log(response);
                        return response;
                    },
                    paginationMode: "remote",
                    filterMode: "remote",
                    sortMode: "remote",
                    printAsHtml: !0,
                    printStyled: !0,
                    pagination: !0,
                    paginationSize: 10,
                    paginationSizeSelector: [10, 20, 30, 40],
                    layout: "fitColumns",
                    responsiveLayout: "collapse",
                    placeholder: "No matching records found",
                    columns: [
                        {
                            title: "",
                            formatter: "responsiveCollapse",
                            width: 40,
                            minWidth: 30,
                            hozAlign: "center",
                            resizable: !1,
                            headerSort: !1,
                        },
                        {
                            title: "PRODUCT NAME",
                            minWidth: 200,
                            responsive: 0,
                            field: "name",
                            vertAlign: "middle",
                            print: !1,
                            download: !1,
                            formatter(e) {
                                let t = e.getData();
                                return `<div>
                        <div class="font-medium whitespace-nowrap">${t.name}</div>
                        <div class="text-xs text-slate-500 whitespace-nowrap">${t.category}</div>
                    </div>`;
                            },
                        },
                        {
                            title: "IMAGES",
                            minWidth: 200,
                            field: "images",
                            hozAlign: "center",
                            headerHozAlign: "center",
                            vertAlign: "middle",
                            print: !1,
                            download: !1,
                            formatter(e) {
                                let t = e.getData();
                                return `<div class="flex lg:justify-center">
                            <div class="w-10 h-10 intro-x image-fit">
                            <img alt="Tailwise - Admin Dashboard Template" class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="https://left4code.com/dummy/images/${t.images[0]}">
                            </div>
                            <div class="w-10 h-10 -ml-5 intro-x image-fit">
                            <img alt="Tailwise - Admin Dashboard Template" class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="https://left4code.com/dummy/images/${t.images[1]}">
                            </div>
                            <div class="w-10 h-10 -ml-5 intro-x image-fit">
                            <img alt="Tailwise - Admin Dashboard Template" class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="https://left4code.com/dummy/images/${t.images[2]}">
                            </div>
                        </div>`;
                            },
                        },
                        {
                            title: "REMAINING STOCK",
                            minWidth: 200,
                            field: "remaining_stock",
                            hozAlign: "center",
                            headerHozAlign: "center",
                            vertAlign: "middle",
                            print: !1,
                            download: !1,
                        },
                        {
                            title: "STATUS",
                            minWidth: 200,
                            field: "status",
                            hozAlign: "center",
                            headerHozAlign: "center",
                            vertAlign: "middle",
                            print: !1,
                            download: !1,
                            formatter(e) {
                                let t = e.getData();
                                return `<div class="flex items-center lg:justify-center ${
                                    t.status ? "text-success" : "text-danger"
                                }">
                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> ${
                            t.status ? "Active" : "Inactive"
                        }
                    </div>`;
                            },
                        },
                        {
                            title: "ACTIONS",
                            minWidth: 200,
                            field: "actions",
                            responsive: 1,
                            hozAlign: "center",
                            headerHozAlign: "center",
                            vertAlign: "middle",
                            print: !1,
                            download: !1,
                            formatter() {
                                let e =
                                    $(`<div class="flex items-center lg:justify-center">
                        <a class="flex items-center mr-3 edit" href="javascript:;">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <a class="flex items-center delete text-danger" href="javascript:;">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </a>
                        </div>`);
                                return (
                                    $(e)
                                        .find(".edit")
                                        .on("click", function () {
                                            alert("EDIT");
                                        }),
                                    $(e)
                                        .find(".delete")
                                        .on("click", function () {
                                            alert("DELETE");
                                        }),
                                    e[0]
                                );
                            },
                        },
                        {
                            title: "PRODUCT NAME",
                            field: "name",
                            visible: !1,
                            print: !0,
                            download: !0,
                        },
                        {
                            title: "CATEGORY",
                            field: "category",
                            visible: !1,
                            print: !0,
                            download: !0,
                        },
                        {
                            title: "REMAINING STOCK",
                            field: "remaining_stock",
                            visible: !1,
                            print: !0,
                            download: !0,
                        },
                        {
                            title: "STATUS",
                            field: "status",
                            visible: !1,
                            print: !0,
                            download: !0,
                            formatterPrint(e) {
                                return e.getValue() ? "Active" : "Inactive";
                            },
                        },
                        {
                            title: "IMAGE 1",
                            field: "images",
                            visible: !1,
                            print: !0,
                            download: !0,
                            formatterPrint(e) {
                                return e.getValue()[0];
                            },
                        },
                        {
                            title: "IMAGE 2",
                            field: "images",
                            visible: !1,
                            print: !0,
                            download: !0,
                            formatterPrint(e) {
                                return e.getValue()[1];
                            },
                        },
                        {
                            title: "IMAGE 3",
                            field: "images",
                            visible: !1,
                            print: !0,
                            download: !0,
                            formatterPrint(e) {
                                return e.getValue()[2];
                            },
                        },
                    ],
                });
            a.on("renderComplete", () => {
                createIcons({
                    icons,
                    attrs: { "stroke-width": 1.5 },
                    nameAttr: "data-lucide",
                });
            }),
                window.addEventListener("resize", () => {
                    a.redraw(),
                        createIcons({
                            icons,
                            "stroke-width": 1.5,
                            nameAttr: "data-lucide",
                        });
                }),
                $("#tabulator-html-filter-form")[0].addEventListener(
                    "keypress",
                    function (e) {
                        (e.keyCode ? e.keyCode : e.which) == "13" &&
                            (e.preventDefault(), i());
                    }
                ),
                $("#tabulator-html-filter-go").on("click", function (e) {
                    i();
                }),
                $("#tabulator-html-filter-reset").on("click", function (e) {
                    $("#tabulator-html-filter-field").val("name"),
                        $("#tabulator-html-filter-type").val("like"),
                        $("#tabulator-html-filter-value").val(""),
                        i();
                }),
                $("#tabulator-export-csv").on("click", function (e) {
                    a.download("csv", "data.csv");
                }),
                $("#tabulator-export-json").on("click", function (e) {
                    a.download("json", "data.json");
                }),
                $("#tabulator-export-xlsx").on("click", function (e) {
                    a.download("xlsx", "data.xlsx", { sheetName: "Products" });
                }),
                $("#tabulator-export-html").on("click", function (e) {
                    a.download("html", "data.html", { style: !0 });
                }),
                $("#tabulator-print").on("click", function (e) {
                    a.print();
                });
        }
    })();
})();
