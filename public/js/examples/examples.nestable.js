/*
Name: 			UI Elements / Nestable - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	3.1.0
*/

(function($) {

	'use strict';

	/*
	Update Output
	*/
	var updateOutput = function (e) {
		var list = e.length ? e : $(e.target),
			output = list.data('output');

        $.ajax({
            url: '/admin/settings/menu/sort',
            type: 'post',
            data: {post:window.JSON.stringify(list.nestable('serialize'))},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(json) {
                if (json['success']) {
                    new PNotify({
                        title: 'a',
                        text: 'b',
                        type: 'success',
                        hide: true,
                        buttons: {
                            sticker: false
                        }
                    });
                }

            }
        });

		if (window.JSON) {
			output.val(window.JSON.stringify(list.nestable('serialize')));
		} else {
			output.val('JSON browser support required for this demo.');
		}
	};

	/*
	Nestable 1
	*/
	$('#nestable').nestable({
		group: 1,
        maxDepth: 2
    }).on('change', updateOutput);

	/*
	Output Initial Serialised Data
	*/
	$(function() {
		updateOutput($('#nestable').data('output', $('#nestable-output')));
	});

}).apply(this, [jQuery]);
