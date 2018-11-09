$(function(){
  $('.button_inscription ').on('click', function(){
    var ceBouton = $(this);
    ceBouton.attr('disabled', 'disabled');
    var challenge_id = $(this).attr('data-id');
    if (userid != -1) {
      $.get('inscription.php', {challengeid:challenge_id , userid: userid}, function(data){
        // la personne est deja inscrite
        if (data == "alreadyReg") {
          ceBouton.siblings('.inscription-msg').show();
          ceBouton.attr('title', 'tu es déjà inscrit(e)!');
        } else{
        ceBouton.siblings('.inscription-reussi-msg').show();

ceBouton.parent().siblings(".nbInscrit").children().text(parseInt(ceBouton.parent().siblings(".nbInscrit").children().text()) +1);

}
      });

    } else {
      $(this).siblings('.connexion-msg').show();
    }

  });

});
