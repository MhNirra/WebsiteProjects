$(document).ready(function(){
    var $cells = $('#tablilla td');
    $('#bott').click(function() {
        var input = $('#this').val();
        var val = '^(?=.*\\b' + $.trim(input).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
            reg = RegExp(val, 'i'),
            text;
        
        $cells.show().filter(function() {
            text = $(this).text().replace(/\s+/g, ' ');
            if(!reg.test(text) || input == ''){
                $(this).css('background-color','transparent');
            } else {
                $(this).css('background-color','red');
            }
        });
    });

    $('#bot2').click(function() {
        let hombres = $("table td:contains('Masculino')").length;
        let mujeres = $("table td:contains('Femenino')").length;

        $("#cal").text("Masculino: "+hombres+" / Femenino: "+mujeres);
    });
});