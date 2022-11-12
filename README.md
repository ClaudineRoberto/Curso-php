# PHP (Hypretext Preprocessor)

É uma linguagem server-side, ou seja, ela roda do lado do servidor (back-end), pois ela realiza comunicação com o banco de dados.

Ela é processada no servidor e o resultado do processamento é enviado ao cliente. (quem requisitou) Exemplo:

Arquivo PHP: 2+2

Resposta para o cliente: 4


Todo arquivo PHP terá a extensão .php.


# Aula 1

- Introduçaõ ao PHP.
- Infraestrutura necessária.
- Onde colocar nossos arquivos. 
- Variáveis.
- Tipos de dados.
- Operadores aritméticos.
- Envio/Recebimento de informações entre arquivos.

### Introdução ao PHP
- Documentação oficial no site http://php.net/
- PHP brilha na web, onde 79% da web usa PHP
- PHP pode ser usado para projetos de IoT(internet das coisas), funciona para criar aplicações de linha de comando, criar aplicativos desktop com php.
- PHP é uma linguagem interpretada.

### Infraestrura necessária

- Servidor é um computador que fornce seviços a clientes. Exemplo: serviço de DHCP, onde o servidor fica responsavel por distribuir numeros IP para is clientes (hosts) na rede.
- Sites ficam hospedados em servidores WEB, um servidor web é responsavel por exibir um site quando for solicitado (requisição).
- Iremos utilizar o servidor web chamado APACHE, porem existem outros, como o IIS ou NGINX.
- O banco de dados que vamos usar é o MariaDB (mesma coisa que o MySQL).
- Vamos insatalar o **XAMPP**, esse programa ja instala o APACHE, o PHP e o MariaDB.

### Onde colocar nossos arquivos

- Os arquivos PHP precisam ser executados a partir do servidor, como se você estivesse acessando pela internet
- Para o XAMPP, o local onde devemos colocar nosso arquivos é `C:\xampp\htdocs`, Exemplo: `C:\xampp\htdocs\site\index.php`
- Para executar os arquivos php, precisamos requisitá-los a partir do navegador, digitando `http://localhost/`, Exemplo: `http://localhost/site/index.php`


### Variáveis

- Variavel é um espaço na memoria que damos um nome para armazenar algum valor.
- o PHP é case-sensitive, ou seja, ele diferencia latras maiusculas de minusculas, exemplo: Nome é diferente de nome.
- O nome de uma variavel deve ser significativo de acordo com seu valor. Exemplo: Para uma variavel que armazena a idade de uma pessoa, eu coloco o nome da variavel de $idade.
- No PHP toda variavel começa com $.
- Não utilize espaços, caracteres especiais ou acentos para nomes de variaveis. alguns funcionam, porem é aconselhavel escrever de forma simples. Exemplo: Ao invés de $endereço, utilize $endreco, sem o "ç".


### Tipos de dados

- Os valores em PHP podem ser dividos entre os tipos: 
    - String: Todo texto que estiver dentro de aspas.
    - Integer (inteiro): Todo número inteiro.
    - Float ou Duble: Todo número decimal.
    - Boolean: Valor de Verdadeiro(true)/Falso(false).

