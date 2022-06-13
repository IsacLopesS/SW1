
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caraça Transportes</title>
    <link rel="stylesheet"  href="/css/estilo.css">
    <link rel="stylesheet"  href="/css/ascentos.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</head>
<body>
    <header class="header">
        <div class="imgheader">
            <img  src="/imagens/logocaraca.png">
        </div>
        <span class="titulo">Caraça transportes e Turismo</span> 
    </header>
    <!--------------------------------------- CONTEÚDO DA PAGINA ---------------------------------------->
    <div class="menu">
        <img  src="/imagens/menu2.png">
        <span class="pague" >pague</span>
    </div>
    <div class="corpo">
        <div class="titulo-corpo">escolha sua poltrona</div>
        <div class="caixa-de-dados2">
            <div class="center">
                @for ($i = 1; $i < 44; $i++)
              
                    <a data-toggle="modal" data-target="#ExemploModalCentralizado"
                      class="conteudo " id="{{$i}}" >
                        {{ $i }}
                    </a> 
  
                    @if ($i==12 or $i==24 or $i==36)
                        <div class="limpar"></div>  
                    @endif    
                @endfor 
                <a class="limpar"></a>                     
            </div>
            <div class="text-center position-relative bottom-0" >
                <input class="buscar" type="button" value="prosseguir">
            </div> 
          <!-- Modal -->
          <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Dados do passageiro</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <label for="nome_passageiro">Nome do passageiro:</label><br>
                  <input type="text" id="nome_passageiro"><br>

                  <label for="">RG:</label><br>
                  <input type="text" id="rg_passageiro"><br>
                  <label for="">Poltrona:</label><br>
                  <input type="text" value="">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------------ -->
    <footer class="rodape">
        <h3 class = "texto-rodape" >todos os direitos reservados</h3>
    </footer>
    
</body>
</html>