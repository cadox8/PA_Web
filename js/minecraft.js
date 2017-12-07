$(document).ready(function () {
    var interval = 15000;
    var refresh = function() {
        $.getJSON("http://mcapi.ca/query/mc.projectalpha.es/players", function(json){
            if (json.status !== true) {
                $(".player-count").html("<span class='icon' style='color: springgreen; margin-left: 8px'><i class='fa fa-times'></i></span> <i style='color:#ffd324;'> El servidor está apagado");
            } else {
                $(".player-count").html('<i style="color: yellow; margin-left: 23px">' + json.players.online + '</i> jugadores conectados');
                setTimeout(function(){ $('.player-count').removeClass('zoomIn').addClass('zoomOut') }, 14350);
                setTimeout(function(){ $('.player-count').removeClass('zoomOut').addClass('zoomIn') }, 0);
            }
        });
        setTimeout(function() {
                refresh();
            }, interval);
    }
    refresh();
});