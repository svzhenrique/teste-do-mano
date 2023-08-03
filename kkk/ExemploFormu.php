<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <form action="dados.php" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Idade:</label>
                    <input type="number" name="idade" class="form-control" min="0" max="100">
                </div>

                <div class="mb-3">
                    <label class="form-label">Estado:</label>
                    <select id="estado" name="estado" class="form-control">
                        <optgroup label="Norte">
                            <option value="AC">Acre</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="PA">Pará</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="TO">Tocantins</option>
                        </optgroup>
                        <optgroup label="Nordeste">
                            <option value="AL">Alagoas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="MA">Maranhão</option>
                            <option value="PB">Paraíba</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="SE">Sergipe</option>
                        </optgroup>
                        <optgroup label="Centro-Oeste">
                            <option value="DF">Distrito Federal</option>
                            <option value="GO">Goiás</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                        </optgroup>
                        <optgroup label="Sudeste">
                            <option value="ES">Espírito Santo</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="SP">São Paulo</option>
                        </optgroup>
                        <optgroup label="Sul">
                            <option value="PR">Paraná</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SC">Santa Catarina</option>
                        </optgroup>
                     </select>
                </div>

                    <div class="mb-3">
                        <label class="form-label">Sexo:</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="sexo" value="F"></input>
                            <label class="form-check-label">Feminino</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="sexo" value="M"></input>
                            <label class="form-check-label">Masculino</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="sexo" value="G"></input>
                            <label class="form-check-label">Gambiarra</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Revista:</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="op01" value="MYSQL">
                            <label class="form-check-label">MYSQL</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="op02" value="PHP">
                            <label class="form-check-label">PHP</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="op03" value="HTML">
                            <label class="form-check-label">HTML</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mensagem: </label>
                        <textarea name="ms" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Imagem</label>
                        <input type="file" name="arq" class="form-control"></input>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary"value="enviar"> 
                    </div>
            </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>