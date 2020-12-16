$(document).ready(function() {    
    var tabela = $('#tabela').DataTable();

    $('#salvar').click(function (e) { 
        e.preventDefault();
        
        var digitou = $('#digitou').val();

        $.ajax({
            type: "get",
            url: "api.php?anos=" +  digitou,
            dataType: "JSON",
            success: function (resposta) {     
                var status = resposta.status;
                if (!status) {
                    var frases = JSON.parse(resposta); 
                        tabela.row.add([
                            frases.Valor,
                            frases.Marca,
                            frases.Modelo,
                            frases.AnoModelo,
                            frases.Combustivel,
                            frases.CodigoFipe,
                            frases.MesReferencia,
                            frases.TipoVeiculo,
                            frases.SiglaCombustivel
                            ]).draw(false);
                }else {
                    alert(resposta.mensagem);
                }
            }
        });        
    });

});