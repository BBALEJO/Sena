function validacion(){
    var error=false, msgErrid="", msgErrname="", msgErrtel="";
    id=document.getElementById("idVis").value;
    if(id == null || id.length == 0 || /^\s+$/.test(id)){
        // alert('El campo nombre es obligatorio');
        msgErrid="* Este campo es obligatorio";
      error=true;
    }
    else if(isNaN(id) ) {
        msgErrid="* Este campo solo permite números";
      error=true;
    }
    else if(id.length != 10) {
        msgErrid="* Este campo debe contener 10 digitos";
      error=true;
    }
    else{
        msgErrid="";
    }
        document.getElementById("Errid").innerHTML=msgErrid;


    name=document.getElementById("nomVis").value;
    
    if(name == null || name.length == 0 || /^\s+$/.test(name)){
        // alert('El campo nombre es obligatorio');
        msgErrname="* Este campo es obligatorio";
      error=true;
    }
    else if(/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]*$/.test(name)==false){
        msgErrname="* Este campo solo permite Letras";
      error=true;

    }
    else if(name.length >= 30) {
        msgErrname="* Este campo admite máximo 30 caracteres";
      error=true;
    }
    else{
        msgErrname="";
    }
    document.getElementById("Errname").innerHTML=msgErrname;


    tel=document.getElementById("telVis").value;
    
    if(tel == null || tel.length == 0 || /^\s+$/.test(tel)){
        // alert('El campo nombre es obligatorio');
        msgErrtel="* Este campo es obligatorio";
      error=true;
    }
    else if(isNaN(tel)) {
        msgErrtel="* Este campo solo permite números";
      error=true;
    }
    else if(tel.length <7 || tel.length >10) {
        msgErrtel="* Ingrese un número de telefono fijo o celular valido";
      error=true;
    }
    else if(tel.length >7 && tel.length <10) {
        msgErrtel="* Ingrese un número de telefono fijo o celular valido";
      error=true;
    }
    else{
        msgErrtel="";
    }
    document.getElementById("Errtel").innerHTML=msgErrtel;

    mail=document.getElementById("corVis").value;
    
    if(mail == null || mail.length == 0 || /^\s+$/.test(mail)){
        // alert('El campo nombre es obligatorio');
        document.getElementById("Errmail").innerHTML="* Este campo es obligatorio";
      error=true;
    }
    else if(/[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}/.test(mail)==false){

        document.getElementById("Errmail").innerHTML="* Ingrese un formato de correo valido";
      error=true;
    }
    else{
        document.getElementById("Errmail").innerHTML="";
    }


    sex = document.getElementsByName("sexoVis");

    var seleccionado = false;
    for(var i=0; i<sex.length; i++) {
      if(sex[i].checked) {
        seleccionado = true;
        break;
      }
    }
    if (!seleccionado) {
        document.getElementById("Errsex").innerHTML="* Seleccione una opción";
    }
    else{
        document.getElementById("Errsex").innerHTML="";
    }

    if(error){
        return false;
    }
    return true;

    }