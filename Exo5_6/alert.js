$(function() {

    $("#form").submit(function(){

       nom = $(this).find("input[name=nom]").val();
       prenom = $(this).find("input[name=prenom]").val();
       email = $(this).find("input[name=email]").val();
       $.post("traitement.php", {nom: nom, prenom: prenom, email: email},function(data ) {

        $("#form").before(data);
       });
       return false;
    });
  });