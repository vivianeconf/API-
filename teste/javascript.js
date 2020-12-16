$(document).ready(function() {    
    var tabela = $('#tabela').DataTable();

    $('#salvar').click(function (e) { 
        e.preventDefault();
        
        var digitou = $('#digitou').val();

        $.ajax({
            type: "get",
            url: "api.php?quote=" +  digitou,
            dataType: "json",
            success: function (resposta) {     
                var status = resposta.status;
                if (!status) {
                    var frases = JSON.parse(resposta);    
                    $.each(frases, function (index, objeto) { 
                        tabela.row.add(
                            [objeto.quote, objeto.author]
                        ).draw(false);
                    });                    
                } else {
                    alert(resposta.mensagem);
                }
            }
        });        
    });
});