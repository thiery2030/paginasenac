<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac Rio Claro SP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

</head>

<body>
    <header>


        <div class="box1"></div>
        <div class="bola1"></div>
        <div class="bola2"></div>
        <div class="bola3"></div>
        <div class="pesquisa">
        <form action="resposta.php" method="POST">
           
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Pesquisa</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
         
        </div>
        <div class="nome">
            <div class="row">

                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" name="nome" class="validate">
                            <label for="nome">Nome</label>
                        </div>
                    </div>
                    <div class="sobre">
                        <div class="input-field col s6">
                            <input id="sobrenome" name="sobrenome" type="text" class="validate" required />
                              <label for="sobrenome">Sobrenome</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="texto">
            <h2>Cadastro Senac</h2>
        </div>
        <div class="E-mail">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="email" name="email" type="email" class="validate" required />
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="telefone">
                        <div class="input-field col s6">
                            <input id="telefone" name="telefone" type="tel" class="validate" required />
                            <label for="telefone">Telefone</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="curso">
            <div class="input-field col s12">

            <select  name="cursoname" >
       <option>selecionar curso</option>
  
       <option value="Técnico em informática para internet">Técnico em informática para internet</option>
  
       <option value="Técnico em informática">Técnico em informática</option>
  
       <option value="Técnico em computação gráfica">Técnico em computação gráfica</option>

</select>
                
                <label>Curso técnico</label>
            </div>
        </div>
        </div>

        <div class="quadrado">
            <div>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Execel Essencial</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Execel Avançado 1</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Execel Avançado 2</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Python 1 Fundamentos </span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Photoshop</span>
                    </label>
                </p>
</div>
        </div>
        <div class="livre">
            <h3>Curso Livre</h3>
        </div>
        <div class="but">
            <button type="submit" class="waves-effect waves-light btn-large">Enviar</button>
        </div>
        <div class="img">
            <img style="width: 500px; height: 600px;" src="senac.png" alt="">


            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
                document.addEventListener('DOMContentLoaded', function () {
                    var elems = document.querySelectorAll('select');
                    var instances = M.FormSelect.init(elems);
                });

                // Or with jQuery

                $(document).ready(function () {
                    $('select').formSelect();
                });

            </script> 

            
            </form>
    </header>

</body>

</html>