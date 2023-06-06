/* Add here all your JS customizations */

(function($) {

    'use strict';

    var datatableInit = function() {

        $('#n').dataTable({
            columnDefs: [
                { orderable: false, targets: [0,4] }
            ],
            order: [[1, 'asc']],
            "columns": [
                { "contentPadding": 0,"width": "10px" },
                null,
                { "width": "200px" },
                { "width": "200px" },
                { "width": "50px" }
            ],
            searchPanes: {
                viewTotal: true,
                i18n: {
                    count: '{total} found',
                    countFiltered: '{shown} ({total})'
                }
            },

        });

        $("#datatable-contacts-locations").dataTable({
            aoColumnDefs: [
                {"aTargets": [0,4], "sClass" : "center"},
                {"aTargets": [0,4], "bSortable": false}
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/admin/pages/contacts/locations/get_json",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "data": function (d) {
                    var filter = $(".filter[data-table-id='datatable-contacts-locations']");

                    if (filter.length) {
                        $.each(filter.data(), function (key, val) {
                            if (key === 'tableId') {
                                return;
                            }

                            d[key] = val;
                        })
                    }
                }
            },
            "drawCallback": function (settings) {
                var response = settings.json;

                if (typeof response.errors != 'undefined'){
                    if (typeof response.errors == 'string') {
                        new PNotify({
                            title: 'error',
                            text: response.errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else if(typeof response.errors == 'object') {
                        var errors = '';
                        $.each(response.errors, function (key, value) {
                            $(".filter[data-table-id='datatable-contacts-locations'] input[name='" + key + "']", ).addClass('has-error');
                            errors += value + "<br>";
                        });

                        new PNotify({
                            title: 'error',
                            text: errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else {
                        console.error('Unsupported error type:', typeof response.errors)
                    }
                }
            },
            aaSorting: [
                [3, 'desc']
            ]
        });

    $("#datatable-news").dataTable({
        aoColumnDefs: [
            {"aTargets": [0,4], "sClass" : "center"},
            {"aTargets": [0,4], "bSortable": false}
        ],
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "/admin/content/news/get_json",
            "type": "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            "data": function (d) {
                var filter = $(".filter[data-table-id='datatable-news']");

                if (filter.length) {
                    $.each(filter.data(), function (key, val) {
                        if (key === 'tableId') {
                            return;
                        }

                        d[key] = val;
                    })
                }
            }
        },
        "drawCallback": function (settings) {
            var response = settings.json;

            if (typeof response.errors != 'undefined'){
                if (typeof response.errors == 'string') {
                    new PNotify({
                        title: 'error',
                        text: response.errors,
                        type: 'error',
                        hide: true,
                        buttons: {
                            sticker: false
                        }
                    });
                } else if(typeof response.errors == 'object') {
                    var errors = '';
                    $.each(response.errors, function (key, value) {
                        $(".filter[data-table-id='datatable-news'] input[name='" + key + "']", ).addClass('has-error');
                        errors += value + "<br>";
                    });

                    new PNotify({
                        title: 'error',
                        text: errors,
                        type: 'error',
                        hide: true,
                        buttons: {
                            sticker: false
                        }
                    });
                } else {
                    console.error('Unsupported error type:', typeof response.errors)
                }
            }
        },
        aaSorting: [
            [3, 'desc']
        ]
    });

        $("#datatable-news-categories").dataTable({
            aoColumnDefs: [
                {"aTargets": [0,3], "sClass" : "center"},
                {"aTargets": [0,3], "bSortable": false}
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/admin/content/news/category/get_json",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "data": function (d) {
                    var filter = $(".filter[data-table-id='datatable-news-categories']");

                    if (filter.length) {
                        $.each(filter.data(), function (key, val) {
                            if (key === 'tableId') {
                                return;
                            }

                            d[key] = val;
                        })
                    }
                }
            },
            "drawCallback": function (settings) {
                var response = settings.json;

                if (typeof response.errors != 'undefined'){
                    if (typeof response.errors == 'string') {
                        new PNotify({
                            title: 'error',
                            text: response.errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else if(typeof response.errors == 'object') {
                        var errors = '';
                        $.each(response.errors, function (key, value) {
                            $(".filter[data-table-id='datatable-news-categories'] input[name='" + key + "']", ).addClass('has-error');
                            errors += value + "<br>";
                        });

                        new PNotify({
                            title: 'error',
                            text: errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else {
                        console.error('Unsupported error type:', typeof response.errors)
                    }
                }
            },
            aaSorting: [
                [2, 'desc']
            ]
        });

        $("#datatable-services").dataTable({
            aoColumnDefs: [
                {"aTargets": [0,4], "sClass" : "center"},
                {"aTargets": [0,4], "bSortable": false}
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/admin/content/services/get_json",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "data": function (d) {
                    var filter = $(".filter[data-table-id='datatable-services']");

                    if (filter.length) {
                        $.each(filter.data(), function (key, val) {
                            if (key === 'tableId') {
                                return;
                            }

                            d[key] = val;
                        })
                    }
                }
            },
            "drawCallback": function (settings) {
                var response = settings.json;

                if (typeof response.errors != 'undefined'){
                    if (typeof response.errors == 'string') {
                        new PNotify({
                            title: 'error',
                            text: response.errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else if(typeof response.errors == 'object') {
                        var errors = '';
                        $.each(response.errors, function (key, value) {
                            $(".filter[data-table-id='datatable-news'] input[name='" + key + "']", ).addClass('has-error');
                            errors += value + "<br>";
                        });

                        new PNotify({
                            title: 'error',
                            text: errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else {
                        console.error('Unsupported error type:', typeof response.errors)
                    }
                }
            },
            aaSorting: [
                [3, 'desc']
            ]
        });

        $("#datatable-pages").dataTable({
            aoColumnDefs: [
                {"aTargets": [0,3], "sClass" : "center"},
                {"aTargets": [0,3], "bSortable": false}
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/admin/pages/page/get_json",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "data": function (d) {
                    var filter = $(".filter[data-table-id='datatable-pages']");

                    if (filter.length) {
                        $.each(filter.data(), function (key, val) {
                            if (key === 'tableId') {
                                return;
                            }

                            d[key] = val;
                        })
                    }
                }
            },
            "drawCallback": function (settings) {
                var response = settings.json;

                if (typeof response.errors != 'undefined'){
                    if (typeof response.errors == 'string') {
                        new PNotify({
                            title: 'error',
                            text: response.errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else if(typeof response.errors == 'object') {
                        var errors = '';
                        $.each(response.errors, function (key, value) {
                            $(".filter[data-table-id='datatable-pages'] input[name='" + key + "']", ).addClass('has-error');
                            errors += value + "<br>";
                        });

                        new PNotify({
                            title: 'error',
                            text: errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else {
                        console.error('Unsupported error type:', typeof response.errors)
                    }
                }
            },
            aaSorting: [
                [3, 'desc']
            ]
        });

        $("#datatable-products").dataTable({
            aoColumnDefs: [
                {"aTargets": [0,4], "sClass" : "center"},
                {"aTargets": [0,5], "bSortable": false}
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/admin/content/products/get_json",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "data": function (d) {
                    var filter = $(".filter[data-table-id='datatable-products']");

                    if (filter.length) {
                        $.each(filter.data(), function (key, val) {
                            if (key === 'tableId') {
                                return;
                            }

                            d[key] = val;
                        })
                    }
                }
            },
            "drawCallback": function (settings) {
                var response = settings.json;

                if (typeof response.errors != 'undefined'){
                    if (typeof response.errors == 'string') {
                        new PNotify({
                            title: 'error',
                            text: response.errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else if(typeof response.errors == 'object') {
                        var errors = '';
                        $.each(response.errors, function (key, value) {
                            $(".filter[data-table-id='datatable-products'] input[name='" + key + "']", ).addClass('has-error');
                            errors += value + "<br>";
                        });

                        new PNotify({
                            title: 'error',
                            text: errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else {
                        console.error('Unsupported error type:', typeof response.errors)
                    }
                }
            },
            aaSorting: [
                [4, 'desc']
            ]
        });

        $("#datatable-product-categories").dataTable({
            aoColumnDefs: [
                {"aTargets": [0,3], "sClass" : "center"},
                {"aTargets": [0,3], "bSortable": false}
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/admin/content/products/category/get_json",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "data": function (d) {
                    var filter = $(".filter[data-table-id='datatable-product-categories']");

                    if (filter.length) {
                        $.each(filter.data(), function (key, val) {
                            if (key === 'tableId') {
                                return;
                            }

                            d[key] = val;
                        })
                    }
                }
            },
            "drawCallback": function (settings) {
                var response = settings.json;

                if (typeof response.errors != 'undefined'){
                    if (typeof response.errors == 'string') {
                        new PNotify({
                            title: 'error',
                            text: response.errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else if(typeof response.errors == 'object') {
                        var errors = '';
                        $.each(response.errors, function (key, value) {
                            $(".filter[data-table-id='datatable-product-categories'] input[name='" + key + "']", ).addClass('has-error');
                            errors += value + "<br>";
                        });

                        new PNotify({
                            title: 'error',
                            text: errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else {
                        console.error('Unsupported error type:', typeof response.errors)
                    }
                }
            },
            aaSorting: [
                [2, 'desc']
            ]
        });

        $("#datatable-advantages").dataTable({
            aoColumnDefs: [
                {"aTargets": [0,3], "sClass" : "center"},
                {"aTargets": [0,4], "bSortable": false}
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/admin/content/advantages/get_json",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "data": function (d) {
                    var filter = $(".filter[data-table-id='datatable-advantages']");

                    if (filter.length) {
                        $.each(filter.data(), function (key, val) {
                            if (key === 'tableId') {
                                return;
                            }

                            d[key] = val;
                        })
                    }
                }
            },
            "drawCallback": function (settings) {
                var response = settings.json;

                if (typeof response.errors != 'undefined'){
                    if (typeof response.errors == 'string') {
                        new PNotify({
                            title: 'error',
                            text: response.errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else if(typeof response.errors == 'object') {
                        var errors = '';
                        $.each(response.errors, function (key, value) {
                            $(".filter[data-table-id='datatable-advantages'] input[name='" + key + "']", ).addClass('has-error');
                            errors += value + "<br>";
                        });

                        new PNotify({
                            title: 'error',
                            text: errors,
                            type: 'error',
                            hide: true,
                            buttons: {
                                sticker: false
                            }
                        });
                    } else {
                        console.error('Unsupported error type:', typeof response.errors)
                    }
                }
            },
            aaSorting: [
                [3, 'desc']
            ]
        });

    };
    $(function() {
        datatableInit();
    });

    $.extend(theme.PluginDatePicker.defaults, {
        format: 'dd.mm.yyyy'
    });

}).apply(this, [jQuery]);
