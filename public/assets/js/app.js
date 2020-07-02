$(document).ready(function() {
    // Máscaras do Form Cadastro de Cliente
    $('.cadastroCliente .container #cep').mask('00000-000');
    $('.cadastroCliente .container #telefone').mask('(00) 00000-0000');

    //Máscaras do Form Cadastro de Condutor
    $('.cadastroCondutor .container #cpf').mask('000.000.000-00');
    $('.cadastroCondutor .container #cep').mask('00000-000');
    $('.cadastroCondutor .container #telefone').mask('(00) 00000-0000');
    $('.cadastroCondutor .container #val_cnh').mask('00/00/0000');
    $('.cadastroCondutor .container #val_cnh').mask('00/00/0000');
    $('.cadastroCondutor .container #num_casa').mask('0000');

    // Busca de Localzação pelo CEP

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $(".cadastroCliente .container #endereco").val("");
        $(".cadastroCliente .container #estado").val("");

        $(".cadastroCondutor .container #endereco").val("");
        $(".cadastroCondutor .container #estado").val("");
    }

    //Quando o campo cep perde o foco (Cliente).
    $(".cadastroCliente .container #cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $(".cadastroCliente .container #endereco").val("...");
                $(".cadastroCliente .container #estado").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $(".cadastroCliente .container #endereco").val(dados.logradouro);
                        $(".cadastroCliente .container #estado").val(dados.uf);
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

    //Quando o campo cep perde o foco (Condutor).

    $(".cadastroCondutor .container #cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $(".cadastroCondutor .container #endereco").val("...");
                $(".cadastroCondutor .container #estado").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $(".cadastroCondutor .container #endereco").val(dados.logradouro);
                        $(".cadastroCondutor .container #estado").val(dados.uf);
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