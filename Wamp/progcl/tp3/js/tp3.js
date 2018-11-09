// http://services.heig-vd.ch/ComemSchedule/ScheduleService.ashx/GetSchedule

$(function () {
    
    var ligne = $(".tmplHoraire").clone().removeClass("tmplHoraire");
    console.log(ligne);
    // point 1
    $('.action').on('click', '.btnHoraire', function () {
        //console.log($(this));
        var cours = $(this).attr('id');
        console.log(cours);
        $.get('proxy.php', {
            cours: cours
        }, function (data) {
            console.log(data);
            // Point 2
            $('tbody').html(""); // Cette fonction va remplacer par rien en fonction du match qu'elle trouve

            // Point 3
            $('ScheduleEntity', data).each(function (index, element) {
                console.log(element);
                var date = $("Date", element).text();
                var periode = $("Period", element).text();
                var room = $("Room", element).text();
                console.log(date);
                console.log(periode);
                console.log(room);
                
                // Point 4
                
                //A FAIRE AVANT DE LE SUPPRIMER ( LIGNE 14)
            })
        })

    });
});