function logar(){
  $(document).ready(function(){
    function login(){   
        let user = $("#username").val();
        let password = $("#password").val();
        //alert("user: " + user + " password: " + password);
        $.post("./php/login.php", {user: user, password: password}, function(data){ 
            if(data == 2){
                btn = $('<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
                error = $("<div/>").addClass("alert alert-warning container-fluid d-flex align-items-center alert-dismissible fade show sumir").html("Campo não preenchido!");
                error.append(btn);
                $("#password_error").append(error);
                $(".alert").fadeTo(5000, 0, null, function(){
                    this.remove();
                });
            } else if(data == 1){
                window.location.href = "./PagInicial.php";   
            } else {
                btn = $('<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
                error = $("<div/>").addClass("alert alert-danger container-fluid d-flex align-items-center alert-dismissible fade show sumir").html("Senha inválida / Usuário inválido");
                error.append(btn);
                $("#password_error").append(error);
                $(".alert").fadeTo(5000, 0, null, function(){
                    this.remove();
                });
            }
        }); 
    }
    $("#access").click(function(){  
        login();          
    })
})
}

