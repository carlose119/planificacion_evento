function ajax_get_link(raiz, capa, controller, action, parametro1, parametro2, parametro3) {
    var pathname = window.location.pathname;
    //alert(pathname);
    //alert(window.location);
    var url = pathname.split(raiz);
    //alert(url[0]);

    var parametros = '';
    if (parametro1 != '') {
        parametros += '/' + parametro1;
    }
    if (parametro2 != '') {
        parametros += '/' + parametro2;
    }
    if (parametro3 != '') {
        parametros += '/' + parametro3;
    }
    //(url[0] + controller + '/' + action + parametros, function (d) {
    //d.preventDefault();
    //    alert(d);
    //});
    
    //alert(url[0] + controller + '/' + action + parametros);

    $.get(url[0] + controller + '/' + action + parametros, {}, function (data) {
        $("#" + capa).html(data);
    });
}