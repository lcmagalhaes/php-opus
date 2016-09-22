<?php

namespace capesesp\pb;

use capesesp\json\OpusJson;

/**
*   Armazena códigos de execução do programa fpbj16
*/

abstract class Fpbj16
{
    const PESSOAS_ENCONTRADAS = 5;
    const PESSOAS_NAO_ENCONTRADAS = 4;
    const NOME_INVALIDO = 3;
    const TAMANHO_MINIMO_INVALIDO = 2;
    const NOME_OBRIGATORIO = 1;
    const FATAL = 0;



    public static function executa($args, $decode = true)
    {
    //    return OpusJson::executa('fpbj16', $args, $decode);

        return json_decode('
            {
              "pessoas": {
                "pessoa": [
                  {
                    "identificacaoPessoa": {
                      "matriculas": {
                        "matriculaSistemaCentral": {
                          "numero": "123456",
                          "seq": "01"
                        }
                      },
                      "nomePessoa": {
                        "nomeCompleto": "João da Silva",
                        "nomeSocial": "Mônica Paloma da Silva "
                      }
                    }
                  },{
                    "identificacaoPessoa": {
                      "matriculas": {
                        "matriculaSistemaCentral": {
                          "numero": "123456",
                          "seq": "01"
                        }
                      },
                      "nomePessoa": {
                        "nomeCompleto": "Mauro João da Silva",
                        "nomeSocial": "Luana da Silva",
                        "nomeCoincide":"Mauro <b>João</b> da Silva"
                      }
                    }
                  }
                ]
              },
              "statusExecucao": {
                "executadoCorretamente": true,
                "mensagens": {
                  "mensagem": [
                    {
                      "codigo": 4,
                      "severidade": "INFO",
                      "mensagem": "Dados retornados",
                      "detalhes": "Dados referente as identificação da Pessoa"
                    }
                  ]
                }
              }
            }

        ');
    }
}