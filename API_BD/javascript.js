$(document).ready(function() {    
    var tabela = $('#tabela').DataTable();

    $('#salvar').click(function (e) { 
        e.preventDefault();
        
        var digitou = $('#digitou').val();

        $.ajax({
            type: "get",
            url: "api.php?id=" +  digitou,
            dataType: "JSON",
            success: function (resposta) {     
                var status = resposta.status;
                if (!status) {
                    var frases = JSON.parse(resposta); 
                    $.each(frases, function (index, objeto) { 
                        tabela.row.add([
                            objeto.char_id,
                            objeto.name,
                            objeto.birthday,
                            objeto.occupation,
                            objeto.status,
                            objeto.nickname,
                            objeto.portrayed,
                            objeto.category
                            ]).draw(false);
                    });  
                }else {
                    alert(resposta.mensagem);
                }
            }
        });        
    });

});