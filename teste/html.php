<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TESTE API</title>
<link rel="stylesheet" href="css.css">
</head>
    <body>
        <form action="php.php" id= "form">
            <strong>Adicione a quantidade quee deseja ler de frases de Breaking bad</strong><br><br>
            <input type="text" name="digitou" id="digitou"><br><br>
            <button id="salvar" type="submit" value="Submit" class="salvar">Salvar</button>
        </form>
            <table id="tabela" class="display">
                <h1>Frases de personagens de Breaking bad</h1>
                <thead>
                    <tr>
                        <th>Frase</th>
                        <th>Autor</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    
        <script src="javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    </body>
</html>