$(function() {

    //	create the menus
    $('#menu').mmenu();
    $('#shoppingbag').mmenu({
        navbar: {
            title: 'Shoppingbag'
        },
        offCanvas: {
            position: 'right'
        }
    });

    //	fire the plugin
    $('.mh-head.first').mhead({
        scroll: {
            hide: 200
        }
    });
    $('.mh-head.second').mhead({
        scroll: false
    });

});