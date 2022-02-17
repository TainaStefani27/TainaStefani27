<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- responsável pela formatação, link do CSS -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CADASTRO DE CLIENTE</title>
</head>
<body>
    <!-- responsável pela animação, link do JS-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
        <div class="container">

            <h1>Cadastro de Cliente</h1>
            <hr>
            <!-- a função (class="formgroup") faz com que o formulario fique com preenchimento automático--> 
            <form class="formgroup" action="gravar.php" method="post"> 
                Nome:<br/>
                <br>
                <input type="text" name="nome" placeholder="Nome e sobrenome" class="form-control"/>       
                <br>
                Quantidade de dias:<br/>
                <br>
                <input type="text" name="dias" id="dias" placeholder="Tempo de estadia" class="form-control"/>
                <br>
                Endereço:<br/>
                <br>
                <input type="text" name="endereco" placeholder="Endereço" class="form-control"/>
                <br>
                Telefone:<br/>
                <br>
                <input type="text" name="telefone" placeholder="Celular ou Telefone" class="form-control"/>
                <br>
                Valor da diária:<br/>
                <br>
                <input type="text" name="valordadiaria" id="valordadiaria" placeholder="Diária" class="form-control"/>
                <br>
                Valor a pagar:<br/>
                <br>
                <p type="number" placeholder="À pagar" class="form-control"><span id = "result"></span></p>

                <input type="button" onClick="multiplyBy()" value="ok"/> 
                <br>
                <br>

                <input type="submit" value="Confirmar" class="btn btn-success"/>

            </form>

        </div>


    

        <script>
    function multiplyBy() 
    { 
      num1 = document.getElementById(
        "dias").value;
      num2 = document.getElementById(
        "valordadiaria").value;
      document.getElementById(
        "result").innerHTML = num1 * num2;
    }
  </script>
    <!--(<form> e </form>) é a função para criar 
    formulário dentro do HTML--> 

</body>
</html>