<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<!--     <link rel="stylesheet" href="style/style.css">
 --><!--     <link rel="stylesheet" href="style/login.style.css">
--> <link rel="stylesheet" href="style/dados.css" >
    <title>EEEP Manoel Mano | Dados socioeconômicos</title>
</head>

<body>
<div class="header">
        <div class="container-main-menu">
            <div class="container">
                <div class="row">
                    <div class="bar"></div>
                </div>
                <div class="row">
                    <div class="col-0">
                        <a href="https://www.ceara.gov.br/"><img src="img/logo-governo.svg" alt="Logo do Governo do Ceará"></a>
                        <a href="https://www.instagram.com/eeepmanoelmano/"><img src="img/logo-mm.svg" alt="Logo da EEEP Manoel Mano"></a>
                    </div>
                    <div class="col-2"></div>
                  <!--   <div class="col-sm-2">
                    <div class="btn-group" role="group">
    <button type="button" class="btn">
        Relatórios
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href=""></a></li>
        <li><a class="dropdown-item" href=""></a></li>
    </ul>
</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bcgb">
        <div class="container">
            <br>
           <!--  <h2 class="cnt">Ficha da Matricula</h2> --><p id="cnt2"></p>
            <h1 id="cnt">Ficha de matrícula</h1>
         <!--    <hr class="hr4">
 -->
 <br>
 <br>
 <br>
 <br>
            <div class="row mb-1">
                <div class="col-sm-6">
                    Nome Completo: <input type="text" class="form-control form-control-sm" placeholder="Nome" name="nome" oninput="handleInput(event)" required>
                </div>
                <div class="col-sm-3">
                    <label>Data de Nascimento:</label>
                    <div class="input-group" required>
                        <input type="date" name="DataN" class="form-control form-control form-control-sm" id="dataNascimento" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    Nº do CPF: <input type="text" name="cpfal" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfal" maxlength="11" oninput="mascaraCA('Cpfal')" required>
                </div>
            </div>


            <div class="row mb-1"></div>
            <div class="row mb-1"></div>


            <div class="row mb-1">
                <div class="col-sm-6">
                    <label for="">Curso:</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Enfermagen</option>
  <option value="2">Informática</option>
  <option value="3">Comércio</option>
  <option value="4">Administração</option>
</select>
</div>
<div class="col-sm-6">
                 <p></p>
                </div>
</div>
            <br>
           <!--  <h2 class="cnt" id="cnt">Dados adicionais do aluno</h2>
            <hr class="hr4"> -->
            <p id="cnt2"></p>
            <h1 id="cnt">Dados Adicionais</h1>
            <br>
            <br>
            <br>
            <br>

            <div class="row mb-1">
               
            <div class="col-sm-3">
                    <label for="">Sexo:</label>
            <select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1">Masculino</option>
  <option value="2">Feminino</option>
  <option value="3">Outros</option>
</select>
            </div>

            <div class="col-sm-3">
                    <label for="">Raça:</label>
            <select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1">Branco</option>
  <option value="2">Negro</option>
  <option value="3">Pardo</option>
  <option value="4">Outras...</option>

</select>
            </div>
               
                <div class="col-sm-3">
                    Nacionalidade: <input type="text" name="cpfmae" placeholder="Nacionalidade" class="form-control form-control-sm" id="cpfmae" maxlength="11" oninput="mascaraCM('CpfMae')" required>
                </div>
                  <div class="col-sm-3">
                    Naturalidade: <input type="text" name="cpfmae" placeholder="Naturalidade" class="form-control form-control-sm" id="cpfmae" maxlength="11" oninput="mascaraCM('CpfMae')" required>
                </div>
            </div>
               

            <div class="row mb-1"></div>

            <div class="row mb-1">
                <div class="col-sm-3">
                   Localização: <input type="text" name="emailmae" placeholder="Localização" class="form-control form-control-sm" id="emailmae" maxlength="11" required>
                </div>
                <div class="col-sm-3">
                    Telefone Residencial: <input type="text" name="telefone" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                    Celular 1: <input type="text" name="telefone" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                   E-Mail: <input type="text" name="emailmae" placeholder="example@gmail.com" class="form-control form-control-sm" id="emailmae" maxlength="11" required>
                </div>
                
            </div>

            <div class="row mb-1"></div>
            <div class="row mb-1"></div>
            <div class="row mb-1"></div>




            <div class="row mb-1">
                <div class="col-sm-6">
                    Nome do Pai: <input type="text" class="form-control form-control-sm" placeholder="Nome do Pai" name="nomepai" required>
                </div>
                <div class="col-sm-2">
                    Nº do CPF: <input type="text" name="cpfpai" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfpai" maxlength="11" oninput="mascaraCP('CpfPai')" required>
                </div>
                <div class="col-sm-2">
                    Telefone de contato: <input type="text" name="telefone" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-2">
                    Profissão: <input type="text" name="telefone" placeholder="Profissão" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
            </div>

            <div class="row mb-1"></div>

            <div class="row mb-1">
                <div class="col-sm-6">
                    Nome da Mãe: <input type="text" class="form-control form-control-sm" placeholder="Nome da Mãe" name="nomepai" required>
                </div>
                <div class="col-sm-2">
                    Nº do CPF: <input type="text" name="cpfpai" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfpai" maxlength="11" oninput="mascaraCP('CpfPai')" required>
                </div>
                <div class="col-sm-2">
                    Telefone de contato: <input type="text" name="telefone" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-2">
                    Profissão: <input type="text" name="telefone" placeholder="Profissão" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
            </div>
            <br>

            <p id="cnt2"></p>
            <h1 id="cnt">Dados Complementares</h1>
            <br>
            <br>
            <br>
            <br>

            <div class="row mb-1">

            <div class="col-sm-3">
                    <label for="">Transporte escolar: Utiliza/Não tiliza</label>
            <select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1">Sim</option>
  <option value="2">Não</option>
</select>
         </div>
         <div class="col-sm-3">
                    Responsável pelo transporte: <input type="text" name="telefone" placeholder="Motorista" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                    <label for="">Bolsa família:</label>
            <select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1">Sim</option>
  <option value="2">Não</option>
</select>
         </div>
         <div class="col-sm-3">
                    N° do NIS: <input type="text" name="telefone" placeholder="00000000000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-sm-6">
                    <label for=""> Tipo de deficiência/TGD ou altas habilidades de superdotação:</label>
            <select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1">Sim</option>
  <option value="2">Não</option>
</select>
         </div>
                <div class="col-sm-6">
                    Recursos necessários para participação em avliações externas: <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
            </div>
            <br>

            <p id="cnt2"></p>
            <h1 id="cnt">Detalhamento da matrícula</h1>
            <br>
            <br>
            <br>
            <br>

    
            <div class="row mb-1">
            <div class="col-sm-3">
                   <p id="table"> Ano letivo </p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                   <p id="table1"> Série/Turma </p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                   <p id="table2"> Data da matrícula</p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                   <p id="table3"> Ass. Responsável</p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                </div>
                

                <div class="row mb-1">

<div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>

                <div class="row mb-1">

<div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>

                <div class="row mb-1">

<div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>

                <div class="row mb-1">

<div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>
                <br>



                <p id="cnt2"></p>
            <h1 id="cnt">Progressão parcial</h1>
            <br>
            <br>
            <br>
            <br>

    
            <div class="row mb-1">
            <div class="col-sm-2">
                   <p id="table4"> Ano letivo </p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                   <p id="table5"> Escola </p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-2">
                   <p id="table6"> Série </p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-2">
                   <p id="table7"> Disciplina </p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                   <p id="table8"> Resultado </p> <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                </div>
                

                <div class="row mb-1">

<div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>

                <div class="row mb-1">

<div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>

                <div class="row mb-1">

<div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>

                <div class="row mb-1">

<div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-2">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        <input type="text" name="telefone" placeholder="" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>
                <br>
                <br>

<p id="cnt2"></p>
            <h1 id="cnt">Questionário socioeconômico do aluno</h1>
            <br>
            <br>
            <br>
            <br>

            <div class="traco2">
    <p id="traco"></p>
    <h4 id="txt">Dados referentes aos pais ou responsáveis</h4>
    </div>
            <div class="row mb-1">
            <div class="col-sm-3">
                    Idade do Pai: <input type="text" class="form-control form-control-sm" placeholder="Idade do Pai" name="nomepai" required>
                </div>
                <div class="col-sm-3">
                    Profissão: <input type="text" class="form-control form-control-sm" placeholder="Profissão do Pai" name="nomepai" required>
                </div>
                <div class="col-sm-3">
                    <label for="">Escolaridade</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Nenhuma</option>
  <option value="2">Ensino fundamental completo</option>
  <option value="3">Ensino fundamental incompleto</option>
  <option value="4">Ensino médio completo</option>
  <option value="5">Ensino médio incompleto</option>
  <option value="6">Superio completo</option>
  <option value="7">Superior incompleto</option>
</select>
</div>
                <div class="col-sm-3">
                    <label for="">Está empregado:</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Sim</option>
  <option value="2">Não</option>
 
</select>
</div>
</div>

<div class="row mb-1">
            <div class="col-sm-3">
                    Idade da mãe: <input type="text" class="form-control form-control-sm" placeholder="Idade da mãe" name="nomepai" required>
                </div>
                <div class="col-sm-3">
                    Profissão: <input type="text" class="form-control form-control-sm" placeholder="Profissão da mãe" name="nomepai" required>
                </div>
                <div class="col-sm-3">
                    <label for="">Escolaridade</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Nenhuma</option>
  <option value="2">Ensino fundamental completo</option>
  <option value="3">Ensino fundamental incompleto</option>
  <option value="4">Ensino médio completo</option>
  <option value="5">Ensino médio incompleto</option>
  <option value="6">Superio completo</option>
  <option value="7">Superior incompleto</option>
</select>
</div>
                <div class="col-sm-3">
                    <label for="">Está empregada:</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Sim</option>
  <option value="2">Não</option>
 
</select>
</div>
</div>

<div class="traco3">
    <p id="traco1"></p>
    <h5 id="txt2">Caso o aluno tenha outro responsável</h5>
    </div>


    <div class="row mb-1">
            <div class="col-sm-3">
                    Idade: <input type="text" class="form-control form-control-sm" placeholder="Idade" name="nomepai" required>
                </div>
                <div class="col-sm-3">
                    Profissão: <input type="text" class="form-control form-control-sm" placeholder="Profissão" name="nomepai" required>
                </div>
                <div class="col-sm-3">
                    <label for="">Escolaridade</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Nenhuma</option>
  <option value="2">Ensino fundamental completo</option>
  <option value="3">Ensino fundamental incompleto</option>
  <option value="4">Ensino médio completo</option>
  <option value="5">Ensino médio incompleto</option>
  <option value="6">Superio completo</option>
  <option value="7">Superior incompleto</option>
</select>
</div>
                <div class="col-sm-3">
                    <label for="">Está empregado(a):</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Sim</option>
  <option value="2">Não</option>
 
</select>
</div>
<br>
<br>
<br>
<div class="traco2">
    <p id="traco"></p>
    <h4 id="txt">Dados referente a família
    </h4>
    </div>

<div class="row mb-1">
<div class="col-sm-3">
                    <label for="">Moradia</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Própria</option>
  <option value="2">Alugada</option>
  <option value="3">Outra</option>
</select>
</div>
            <div class="col-sm-3">
                    Quantidade de irmãos: <input type="text" class="form-control form-control-sm" placeholder="" name="nomepai" required>
                </div>
                <div class="col-sm-6">
                    Quantidade de pessoas que residem na moradia(incluindo o aluno): <input type="text" class="form-control form-control-sm" placeholder="" name="nomepai" required>
                </div>
</div>
<div class="row mb-1">
<div class="col-sm-3">
                    <label for="">Renda mensal da família</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Menos de 1 salário</option>
  <option value="2">De 1 a 2 salários mínimos</option>
  <option value="3">De 3 a 4 salários mínimos</option>
  <option value="2">De 4 a 5 salários mínimos</option>
  <option value="3">Maior que 5 salários mínimos</option>
</select>
</div>
<div class="col-sm-3">
                    <label for="">Com quem o aluno mora</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Pai</option>
  <option value="2">Mãe</option>
  <option value="3">Outros</option>
</select>
</div>
<div class="col-sm-6">
                    <label for="">O aluno tem computador com acesso a internet?</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Sim</option>
  <option value="2">Não</option>
</select>
</div>
</div>
<br>

<div class="row mb-1">
<div class="col-sm-4">
                    <label for="">A família recebe algum benefício do governo?</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Sim</option>
  <option value="2">Não</option>
</select>
</div>
<div class="col-sm-4">
                    <label for="">Com qual transporte o aluno chega a escola?</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">A pé</option>
  <option value="2">Bicicleta</option>
  <option value="3">Transporte coletivo</option>
  <option value="2">Transporte próprio</option>
  <option value="3">Transporte escolar</option>
</select>
</div>
<div class="col-sm-4">
                    <label for="">Onde o aluno concluiu o ensino fundamental?</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Escola pública</option>
  <option value="2">Escola particular</option>
</select>
</div>
</div>
<br>

<div class="row mb-1">
<div class="col-sm-5">
                    <label for="">Por qual razão optou pela EEEP?</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">É perto da escola</option>
  <option value="2">Pela jornada integral</option>
  <option value="3">Pelo curso técnico</option>
  <option value="4">Pela qualidade de ensino</option>
  <option value="5">Para se preparar para vestibulares</option>
  <option value="6">Para se preparar para jornada de trabalho</option>
</select>
</div>
<div class="col-sm-7">
                    <label for="">O que você sabe sobre o curso profissional que o aluno cursará na escola?</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Nada sei</option>
  <option value="2">Pouco sei</option>
  <option value="3">Tenho noções básicas</option>
  <option value="4">Conheço o curso</option>
</select>
</div>
</div>
<br>


<div class="row mb-1">
<div class="col-sm-5">
                    <label for="">Justifique a escolha do curso profissional que o aluno cursará</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Afinidade do aluno com o curso</option>
  <option value="2">Sugestão da família</option>
  <option value="3">Por ser um curso conceituado no mercado de trabalho</option>
  <option value="4">Não tinha outra opção</option>
</select>
</div>
<div class="col-sm-7">
                    <label for="">Onde você obteve informações sobre o curso profissional que o aluno cursará?</label>
            <select class="form-select" aria-label="Default select example" name="curso">
  <option selected></option>
  <option value="1">Rádio, TV, livros</option>
  <option value="2">Profissionais que atuam na área</option>
  <option value="3">Na própria escola</option>
  <option value="4">Não tive informações</option>
</select>
</div>
</div>
<br>
<br>
<br>

<div class="traco2">
    <p id="traco"></p>
    <h4 id="txt">Dados referente conclusão do formulário
    </h4>
    </div>

       
<div class="row mb-1">
<div class="col-sm-6">
        Nome do responsável do aluno: <input type="text" name="telefone" placeholder="Responsável do aluno" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
<div class="col-sm-6">
        Nome do responsável pela matrícula: <input type="text" name="telefone" placeholder="Responsável pela matrícula" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
                </div>
    <div class="row mb-1">
    <div class="col-sm-6">
        Nome do secretário(a): <input type="text" name="telefone" placeholder="Nome do secretário(a)" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
        Data: <input type="date" name="telefone" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
</div>
<br>






            <br>
            <br>
            <div class="row mb-1">
              <div class="col-sm-8"></div>
                <div class="d-grid gap-2 col-4 mx-auto">
                <button type="button" class="btn btn-outline-success">Enviar</button>
                </div>
            </div>
          

            <br>
            </form>
        </div>

        <br>
    </section>
    <script src="js/mask.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>

</html>