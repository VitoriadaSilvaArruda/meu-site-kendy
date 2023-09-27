<?php
// Chamando conexão com banco de dados
require 'conexao.php';
//Acompanha os erros de validação

     $validacao = True;

    if (!empty($_POST)) {       


        if (!empty($_POST['primeira'])) {
            $dado1 = $_POST['primeira'];
        } else {
            $num1Erro = 'Por favor informar 1º número!';
            $validacao = False;
        }

        if (!empty($_POST['segunda'])) {
            $dado2 = $_POST['segunda'];
        } else {
            $num2Erro = 'Por favor informar 2º número!';
            $validacao = False;
        }


        if (!empty($_POST['terceira'])) {
            $dado3 = $_POST['terceira'];
        } else {
            $num1Erro = 'Por favor informar 3º número!';
            $validacao = False;
        }

        if (!empty($_POST['quarta'])) {
            $dado4 = $_POST['quarta'];
        } else {
            $num1Erro = 'Por favor informar 4º número!';
            $validacao = False;
        }

        if (!empty($_POST['quinta'])) {
            $dado5 = $_POST['quinta'];
        } else {
            $num2Erro = 'Por favor informar 5º número!';
            $validacao = False;
        }


        if (!empty($_POST['sexta'])) {
            $dado6 = $_POST['sexta'];
        } else {
            $num2Erro = 'Por favor informar 6º número!';
            $validacao = False;
        }


        if (!empty($_POST['setima'])) {
            $dado7 = $_POST['setima'];
        } else {
            $num2Erro = 'Por favor informar 7º número!';
            $validacao = False;
        }


        if (!empty($_POST['oitava'])) {
            $dado8 = $_POST['oitava'];
        } else {
            $num2Erro = 'Por favor informar 8º número!';
            $validacao = False;
        }

        if (!empty($_POST['nono'])) {
            $dado9 = $_POST['nono'];
        } else {
            $num1Erro = 'Por favor informar 9º número!';
            $validacao = False;
        }

        if (!empty($_POST['decimo'])) {
            $dado10 = $_POST['decimo'];
        } else {
            $num2Erro = 'Por favor informar 10º número!';
            $validacao = False;
        }

        if (!empty($_POST['email'])) {
            $dado11 = $_POST['email'];
        } else {
            $num2Erro = 'Por favor informar 11º número!';
            $validacao = False;
        }




    

//Inserindo no Banco:
    if ($validacao) {


        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO dados (dados1,dados2, dados3, dados4, dados5, dados6, dados7, dados8, dados9, dados10, dados11) 
        VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($dado1,$dado2, $dado3, $dado4, $dado5, $dado6, $dado7, $dado8, $dado9, $dado10, $dado11));
        Banco::desconectar();
        header("Location: resultado.php");
    }

}


   $dado1='';
   $dado2='';
   $dado3='';
   $dado4='';
   $dado5='';
   $dado6='';
   $dado7='';
   $dado8='';
   $dado9='';
   $dado10='';
   $dado11='';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Vocacional</title>
</head>
<link rel="stylesheet" href="formatacao.css">

<body id = "tela2">


    <h1 id = "titulo" > BEM-VINDO AO TESTE VOCACIONAL</h1>
    <p id = "primeiro"> CLIQUE NA ALTERNATIVA QUE MAIS LHE REPRESENTE, E SOME OS PONTOS</p>
  
    <form method="POST" action="quiz.php" >

    <table class="opcoes">

    

    <tr class="fotoprincipal">
        <td class="fotoprincipal">
            <img src="./img/principal.html.webp" alt="">
        </td>
    </tr>



        <tr>
            <td class="perguntas">
                O que desperta sua atenção na escola ?
            </td>
        </tr>

        <tr >
            <td>
                <input type="radio" name="primeira" value="Exatas (20)" >Exatas (20)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="primeira" value= "Humanas (30)">Humanas (30)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="primeira" value= "Ciências da natureza (50)">Ciências da natureza (50)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="primeira" value= "Educação Física (40)" >Educação Física (40)
            </td>
        </tr>

 
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>


        <tr>
            <td class="perguntas">
                Como você se identificaria ?
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="segunda" value="Pessoa empática (30)">Pessoa empática (30)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="segunda" value="Pessoa extrovertida(10)">Pessoa extrovertida(10)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="segunda" value="Pessoa esportiva (40)">Pessoa esportiva (40)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="segunda" value="Pessoa introvertida (20)">Pessoa introvertida (20)
            </td>
        </tr>
        



                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>


        
        <tr>
            <td class="perguntas" >Como você se imagina em 10 anos</td>
        </tr>

        

        <tr>
            <td>
                <input type="radio" name="terceira" value="Muito bem financeiramente (10)">Muito bem financeiramente (10)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="terceira" value="Dando continuidado ao trabalho dos meus pais (20)">Dando continuidado ao trabalho dos meus pais (20)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="terceira" value="Fazendo coisas que eu gosto (40)" >Fazendo coisas que eu gosto (40)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="terceira" value="Buscando me aprimorar (50)" >Buscando me aprimorar (50)
            </td>
        </tr>
        


                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>








       
        <tr>
            <td class="perguntas">Quando se referem a mim, como querem que lembrem de você?</td>
        </tr>

        
        <tr>
            <td>
                <input type="radio" name="quarta" value="Pelo meu jeito (30)">Pelo meu jeito (30)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="quarta"value="Pelas minhas conquistas acadêmicas(50)">Pelas minhas conquistas acadêmicas(50)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="quarta" value="Popularidade(10)">Popularidade(10)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="quarta" value="Sobrenome(40)">Sobrenome(40)
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="quarta" value="Não gosto de ser conhecido(20)">Não gosto de ser conhecido(20)
            </td>
        </tr>
        
        

                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>


        <tr>
            <td class="perguntas">Nas minhas relações pessoais procura sempre estar cercado por</td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="quinta" value="Pessoas que atuem na sociedade de forma ética (30)">Pessoas que atuem na sociedade de forma ética (30)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="quinta" value="Pessoas com grau elevado de conhecimento (20)">Pessoas com grau elevado de conhecimento (20)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="quinta" value="Pessoa próximas em quem confio (40)">Pessoa próximas em quem confio (40)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="quinta" value="Pessoas que tenham novidades para contar (50)">Pessoas que tenham novidades para contar (50)
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="quinta" value="Pessoas que gostam de viver bem (10)">Pessoas que gostam de viver bem (10)
            </td>
        </tr>
        



                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>






        <tr>
            <td class="perguntas">O paraíso pra mim é um lugar que </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="sexta" value="Aproveito coisas boas da vida (40)">Aproveito coisas boas da vida (40)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="sexta" value="Onde não há diferenças sociais (30)">Onde não há diferenças sociais (30)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="sexta" value="Fazer as coisas que eu gosto da maneira que eu quero (50)">Fazer as coisas que eu gosto da maneira que eu quero (50)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="sexta" value="Encontrar pessoas famosas (10)">Encontrar pessoas famosas (10)
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="sexta" value="Curtir com quem eu gosto (20)">Curtir com quem eu gosto (20)
            </td>
        </tr>


                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>

        




        <tr>
            <td class="perguntas">O sonho da minha vida é </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="setima" value="Poder desenvolver meus talentos (40)">Poder desenvolver meus talentos (40)
        </tr>

        <tr>

            <td>
                <input type="radio" name="setima" value="Ser respeitado (10)">Ser respeitado (10)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="setima" value="Viver no conforto (50">Viver no conforto (50)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="setima" value="Viver em uma sociedade igualitária (30)">Viver em uma sociedade igualitária (30)
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="setima" value="Ser o melhor naquilo que faço (10)">Ser o melhor naquilo que faço (10)
            </td>
        </tr>

                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    



            <td class="perguntas">Você tem paciência? </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="oitava" value="Sim (10)">Sim (10)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="oitava" value="Não (20)">Não (20)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="oitava" value="Mais ou menos (40)">Mais ou menos (40)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="oitava" value="Um pouco (30)">Um pouco (30)
            </td>
        </tr>
        



                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>


        <tr>

            <td class="perguntas">Você gosta de trabalho em equipe? </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="nono" value="Sim (40)">Sim (40)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="nono" value="Não (20)">Não (20)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="nono" value="Mais ou menos (10)">Mais ou menos (10)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="nono" value="Um pouco (30)">Um pouco (30)
            </td>
        </tr>




                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>





        <tr>

            <td class="perguntas">Você se sacrificaria(deixaria de fazer o que gosta) e colocaria o trabalho em 1° lugar? </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="decimo" value="Sim (10)">Sim (10)
            </td>
        </tr>

        <tr>

            <td>
                <input type="radio" name="decimo" value="Não (30)">Não (30)
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="decimo" value="Claro que sim (20)">Claro que sim (20)
            </td>
        </tr> 

        <tr>
            <td>
                <input type="radio" name="decimo" value="Claro que não (50)">Claro que não (50)
            </td>
        </tr>


                <tr>
                                <td>
                                    <br>
                                </td>
                            </tr>

                <tr>
                    
                <tr>
                                <td>
                                    <br>
                                </td>
                            </tr>

                <tr>

            <td>
                <input type="text" class="email" name= "email" placeholder="Digite seu email">
            </td>
        </tr>

        </form>



                    


<tr>
    <td>
            <input id = "link2" type="submit" name = "submit" value="CONTINUAR" />
    </td>
</tr>

    </table>
    </form>

   
</body>
</html>