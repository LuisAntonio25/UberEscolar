$(document).ready(function() {
    // Máscaras do Form Cadastro de Cliente
    $('.cadClientePage .formContent .block .fields #cep').mask('00000-000');
    $('.cadClientePage .formContent .block .fields #telefone').mask('(00) 00000-0000');

    // Busca de Localzação pelo CEP

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $(".cadClientePage .formContent .block .fields #endereco").val("");
        $(".cadClientePage .formContent .block .fields #estado").val("");
    }

    //Quando o campo cep perde o foco.
    $(".cadClientePage .formContent .block .fields #cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $(".cadClientePage .formContent .block .fields #endereco").val("...");
                $(".cadClientePage .formContent .block .fields #estado").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $(".cadClientePage .formContent .block .fields #endereco").val(dados.logradouro);
                        $(".cadClientePage .formContent .block .fields #estado").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});