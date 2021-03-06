
$ = jQuery;
$(document).ready(function () {
    // === Sidebar navigation === //

    $('.submenu > a').click(function (e) {
        e.preventDefault();
        var submenu = $(this).siblings('ul');
        var li = $(this).parents('li');
        var submenus = $('#sidebar li.submenu ul');
        var submenus_parents = $('#sidebar li.submenu');
        if (li.hasClass('open')) {
            if (($(window).width() > 768) || ($(window).width() < 479)) {
                submenu.slideUp();
            } else {
                submenu.fadeOut(250);
            }
            li.removeClass('open');
        } else {
            if (($(window).width() > 768) || ($(window).width() < 479)) {
                submenus.slideUp();
                submenu.slideDown();
            } else {
                submenus.fadeOut(250);
                submenu.fadeIn(250);
            }
            submenus_parents.removeClass('open');
            li.addClass('open');
        }
    });

    var ul = $('#sidebar > ul');

    $('#sidebar > a').click(function (e) {
        e.preventDefault();
        var sidebar = $('#sidebar');
        if (sidebar.hasClass('open')) {
            sidebar.removeClass('open');
            ul.slideUp(250);
        } else {
            sidebar.addClass('open');
            ul.slideDown(250);
        }
    });

    // === Resize window related === //
    $(window).resize(function () {
        if ($(window).width() > 479) {
            ul.css({'display': 'block'});
            $('#content-header .btn-group').css({width: 'auto'});
        }
        if ($(window).width() < 479) {
            ul.css({'display': 'none'});
            fix_position();
        }
        if ($(window).width() > 768) {
            $('#user-nav > ul').css({width: 'auto', margin: '0'});
            $('#content-header .btn-group').css({width: 'auto'});
        }
    });

    if ($(window).width() < 468) {
        ul.css({'display': 'none'});
        fix_position();
    }

    if ($(window).width() > 479) {
        $('#content-header .btn-group').css({width: 'auto'});
        ul.css({'display': 'block'});
    }

    // === Search input typeahead === //
    $('#search input[type=text]').typeahead({
        source: ['Dashboard', 'Form elements', 'Common Elements', 'Validation', 'Wizard', 'Buttons', 'Icons', 'Interface elements', 'Support', 'Calendar', 'Gallery', 'Reports', 'Charts', 'Graphs', 'Widgets'],
        items: 4
    });

    // === Fixes the position of buttons group in content header and top user navigation === //
    function fix_position() {
        var uwidth = $('#user-nav > ul').width();
        $('#user-nav > ul').css({width: uwidth, 'margin-left': '-' + uwidth / 2 + 'px'});

        var cwidth = $('#content-header .btn-group').width();
        $('#content-header .btn-group').css({width: cwidth, 'margin-left': '-' + uwidth / 2 + 'px'});
    }

    // === Style switcher === //
    $('#style-switcher i').click(function () {
        if ($(this).hasClass('open')) {
            $(this).parent().animate({marginRight: '-=190'});
            $(this).removeClass('open');
        } else {
            $(this).parent().animate({marginRight: '+=190'});
            $(this).addClass('open');
        }
        $(this).toggleClass('icon-arrow-left');
        $(this).toggleClass('icon-arrow-right');
    });

    $('#style-switcher a').click(function () {
        var style = $(this).attr('href').replace('#', '');
        $('.skin-color').attr('href', 'css/maruti.' + style + '.css');
        $(this).siblings('a').css({'border-color': 'transparent'});
        $(this).css({'border-color': '#aaaaaa'});
    });

    $('.lightbox_trigger').click(function (e) {

        e.preventDefault();

        var image_href = $(this).attr("href");

        if ($('#lightbox').length > 0) {

            $('#imgbox').html('<img src="' + image_href + '" /><p><i class="icon-remove icon-white"></i></p>');

            $('#lightbox').slideDown(500);
        } else {
            var lightbox =
                    '<div id="lightbox" style="display:none;">' +
                    '<div id="imgbox"><img src="' + image_href + '" />' +
                    '<p><i class="icon-remove icon-white"></i></p>' +
                    '</div>' +
                    '</div>';

            $('body').append(lightbox);
            $('#lightbox').slideDown(500);
        }

    });


    $('#lightbox').live('click', function () {
        $('#lightbox').hide(200);
    });
    $('select').select2();

    $('#datepicker1, #datepicker2').datepicker({
        format: "yyyy-mm-dd",
        todayBtn: "linked",
        multidate: false,
        keyboardNavigation: false,
        daysOfWeekDisabled: "5",
        daysOfWeekHighlighted: "5",
        calendarWeeks: true,
        todayHighlight: true,
        autoclose: true
    });

    $("#add_row").on('click', function (e) {
        $.ajax({
            method: "POST",
            url: "get_task_row"
        })
                .done(function (response) {
                    $('#tasks').append(response);
                });
    });

    $("#del_row").on('click', function (e) {
        $('#tasks tr:last').remove();
    });

    $("#open_status").on('click', function (e) {
        var Wid = $(this).attr('data-workorder');
        $.ajax({
            method: "POST",
            url: "/WorkOrders/change_status",
            data: {status: 1, Wid: Wid}
        }).done(function (response) {
            location.reload();
        });
    });

    $("#hold_status").on('click', function (e) {
        var Wid = $(this).attr('data-workorder');
        $.ajax({
            method: "POST",
            url: "/WorkOrders/change_status",
            data: {status: 3, Wid: Wid}
        }).done(function (response) {
            location.reload();
        });
    });

    $("#progress_status").on('click', function (e) {
        var Wid = $(this).attr('data-workorder');
        $.ajax({
            method: "POST",
            url: "/WorkOrders/change_status",
            data: {status: 2, Wid: Wid}
        }).done(function (response) {
            location.reload();
        });
    });

    $("#close_status").on('click', function (e) {
        var Wid = $(this).attr('data-workorder');
        $.ajax({
            method: "POST",
            url: "/WorkOrders/change_status",
            data: {status: 0, Wid: Wid}
        }).done(function (response) {
            location.reload();
        });
    });
});

