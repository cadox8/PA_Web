function getColor(rango) {
    switch (rango) {
        case 7:
            return '<span class="tag is-dev is-large">Desarrollador</span>';
        case 6:
            return '<span class="tag is-danger is-large">Administrador</span>';
        case 5:
            return '<span class="tag is-info is-large">Moderador</span>';
        case 4:
            return '<span class="tag is-warning is-large">Builder</span>';
        case 3:
            return '<span class="tag green2 is-large">YouTuber</span>';
        case 2:
            return '<span class="tag green is-large">Origin</span>';
        case 1:
            return '<span class="tag yellow is-large">VIP</span>';
        default:
            return '<span class="tag is-plain is-large">Usuario</span>';
    }
}

function getKit(kit) {
    switch (kit) {
        case 0:
            return '<span class="icon"><i class="fa fa-ravelry purple"></i></span> Clase <span class="right is-colored">Tanque</span>';
        case 1:
            return '<span class="icon"><i class="fa fa-ravelry purple"></i></span> Clase <span class="right is-colored">Picaro</span>';
        case 2:
			return '<span class="icon"><i class="fa fa-ravelry purple"></i></span> Clase <span class="right is-colored">Cazador</span>';
        case 3:
            return '<span class="icon"><i class="fa fa-ravelry purple"></i></span> Clase <span class="right is-colored">Mago</span>';
        default:
            return '<span class="icon"><i class="fa fa-ravelry purple"></i></span> Clase <span class="right is-colored">Ninguna</span>';
    }
}