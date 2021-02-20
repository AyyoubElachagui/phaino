$(document).ready( () => {
    //global variables 
    var nom,prenom,adresse,code_postal,lieu,date_naissance,date_naissance ;
    //function for not passing lengths inputs
    function length__(id , size){
        return $(id).val().length <= size ? $(id).val() : null ; 
    }
    //event click envoyer for create certificate
    $('#envoyer').click( (e) => {
        e.preventDefault();
        nom = length__('#nom',43);
        prenom = length__('#prenom',43);
        adresse = length__('#adresse',43);
        code_postal = length__('#code_postal',20);
        $.isNumeric(code_postal) ? code_postal = code_postal : code_postal = null;  
        lieu = length__('#lieu',43);
        date_naissance = length__('#date_naissance',20);
        date_naissance = length__('#lieu_naissance',43);
        motif = $("input[name=motif]:checked").val();
        path  = /^(\d{1,2})(\/)(\d{1,2})(\/)(\d{4})$/;
        date_naissance.match(path) ? date_naissance = date_naissance : date_naissance = null;
        if( nom != null && prenom != null && adresse != null && code_postal != null && lieu != null && date_naissance != null && lieu_naissance != null ){
            alert("nice");
        }else{
            alert("bad");
        }

    } )
} )