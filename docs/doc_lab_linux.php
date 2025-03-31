<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegando na mão do Dev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        pre {
            background-color: #2d2d2d;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            font-family: "Courier New", monospace;
        }
    </style>
    <p>
        Nesse ambiente, já iniciamos como usuário <b>root</b>, precisamos saber em qual path estamos, para isso execute o comando a seguir :
    
        <pre>pwd</pre>
    </p>
    <p>
        Veja que esta no path <b> / </b>, que é a raiz do sistema operacional, fazendo uma relação direta ao Windows, é equivalente ao <b>c:\</b>.
        Agora use o próximo comando para visualizar o que tem dentro do path <b> / </b> :
    
        <pre>ls</pre>
    </p>
    <p>O que você ve, são diretórios, cada um com sua respectiva função :
        <ul>
            <li>📁 /bin : aqui temos alguns binários que se assemelham aos .exe do Windows, sendo aqui binários que o usuário consegue executar normalmente.</li>
            <li>📁 /boot : arquivos do sistema ds boot.</li>
            <li>📁 /dev : referente a dispositivos, disco, unidades usb, entre outros.</li>
            <li>📁 /etc : aqui ficam os arquivos de configuração do sistema e das aplicações.</li>
            <li>📁 /home : aqui normalmente são criadas as pastas referente aos usuários quando criados/adicionados com uma pasta no /home.</li>
            <li>📁 /lib(lib32,libx32 e lib64) : aqui ficam as bibliotecas e módulos do kernel.</li>
            <li>📁 /mnt e 📁 /media : são onde normalmente montamos unidades de disco.</li>
            <li>📁 /opt : para aplicações não oficiais.</li>
            <li>📁 /sbin : binários do sistema que seria para o superusuário executar.</li>
            <li>📁 /tmp : como o nome sugere, esse path é para arquivos temporários.</li>
            <li>📁 /usr : binários de usuários comuns de sistema e aplicações.</li>
            <li>📁 /var : aqui vão os arquivos de tamanhos variáveis, normalmente arquivos de Log.</li>
        </ul>
        Aprendemos aqui 2 comandos o <b>pwd</b> e o <b>ls</b>, vamos agora aprender alguns comandos básicos:

        <pre>cd</pre>
        Com esse comando podemos navegar entre os diretoŕios, então vamos até o <b>home</b>
        <pre>cd home </pre>

        <b><i>Obs.: Como já estamos no / basta passar cd home, que é o path relativo, quando estamos por exemplo dentro do home e queremos ir para o etc, temos que passar
            o path absoluto, que é o caminho completo, então do home, vá para o etc, que fica dentro do /</i></b> :
        
<script src="../scripts-js/check_answer.js">

</script>
        <div class="question">
            <p>1. Como fazer para sair do /home para o /etc?</p>
            <input class="form-control" type="text" id="q1">
            <button class="btn btn-success" onclick="checkAnswer('q1', 'cd /etc')">Verificar</button>
            <span class="feedback" id="feedback-q1"></span>
        </div>
        </p>
        <p>
            Outro comando importante é o <b>mkdir</b>, com ele podemos criar diretórios, então vá até o home, e crie um diretório com seu nome:
            <pre>mkdir seu-nome</pre>
            Agora delete o diretório que acabou de criar, usando o comando abaixo :
            <pre>rmdir nome-do-diretorio</pre>

            <i>O rmdir funciona apenas em diretórios vazios, se houver algo dentro dele use <b>rm -r nome-do-diretorio</b></i>.

            Outros comandos que também precisamos conhecer são:

            <li>touch : para criarmos arquivos vazios.</li>
            <li>cp : para fazer cópias de arquivos ou diretórios.</li>
            <li>mv : para renomear arquivos,diretórios e mover de um diretório para outro.</li>

            Dentro do path que você esta, crie um arquivo vazio:

            <pre>touch texto.txt</pre>

            <div class="question">
                <p>2. Como você faria para copiar o arquivo texto.txt onde a copia teria o nome de texto_2.txt? <i>cp source dest</i></p>
                <input class="form-control" type="text" id="q2">
                <button class="btn btn-success" onclick="checkAnswer('q2', 'cp texto.txt texto_2.txt')">Verificar</button>
                <span class="feedback" id="feedback-q2"></span>
            </div>

            <div class="question">
                <p>3. Como você faria para mover o arquivo texto_2.txt onde no destino o arquivo tera o nome de texto.txt? <i>mv source /new_name</i></p>
                <input class="form-control" type="text" id="q3">
                <button class="btn btn-success" onclick="checkAnswer('q3', 'mv texto_2.txt /home/texto.txt')">Verificar</button>
                <span class="feedback" id="feedback-q3"></span>
            </div>
        </p>
        <p>
            Assim como o comando <b>rm</b>, serve para remover diretórios, ele também remove arquivos, então, remova o arquivo <b>texto.txt</b>, e mova o arquivo
            texto.txt que esta no / para o /home .
        </p>

        <p>
            Voltando ao comando <b>ls</b>, podemos passar as opções :
            <li>l : use a long listing format</li>
            <li>h : --human-readable</li>
            <li>a : --all | do not ignore entries starting with .</li>

            <pre>ls -lha /</pre>

            Que nos permite ver em detalhes incluindo arquivos ocultos pelo <b>.</b>, onde temos as seguintes informações:

                <pre>-rwxr-xr-x   1 root root    0 Mar 31 11:26 .dockerenv</pre>
                <pre>lrwxrwxrwx   1 root root    7 Jan 26 02:05 bin -> usr/bin</pre>
                <pre>drwxr-xr-x   2 root root 4.0K Apr 18  2022 boot</pre>

                onde :
                <li>l : indica que é um link simbolico(a grosso modo um atalho)</li>
                <li>d : indica que é um diretório</li>

                as demais letras estão relacionadas ao permissionamento, onde:

                <li>- : indica ausência de permissão</li>
                <li>r : indica que o arquivo ou path pode ser lido</li>
                <li>w : indica que o arquivo ou path pode ser escrito</li>
                <li>x : indica que o arquivo pode ser executado</li>

                De forma octal, são representadas como: 
                    <li>0</li>
                    <li>4</li>
                    <li>2</li>
                    <li>1</li>
                Se você fizer uma conta básica de padaria, vai ver que somando os números teremos <b>7</b>, logo o famoso
                <b>chmod 777</b>, indica que você esta dando permissão de leitura,escrita e execução para o dono, grupo e outros, o que é errado...
        </p>

        <p>
            Aprendendo a usar o "temido" Vim<br>
            Para muitas pessoas usar o vim, é tão "complicado" quanto usar o terminal..., crie o arquivo teste.txt

            <pre>vim teste.txt</pre>

            Segue os comandos mais básicos :

            <li>i : para que você possa editar o arquivo aperte a tecla "i" note que na parte inferior esquerda vai ficar como -- INSERT -- .</li>

            <li>esc : para sair do modo insert basta apertar "esc".</li>

            <li>:q : permite que você saia do arquivo desde que não tenha feito alterações, caso tenho alterado use :q! a "!" força a saída.</li>

            <li>:w : permite gravar/salvar a alteração , para salvar e sair do arquivo user :wq .</li>

            <li>yy : copiar linha inteira</li>

            <li>p : colar linha</li>

            <li>dd : deletar linha</li>


        </p>
        <p>Aqui encerramos o básico do básico em Linux, fique a vontade para testar outros comandos e o que mais quiser, neste ambiente
            você pode quebrar, diferente da sua máquina...</p>.
</body>
</html>
