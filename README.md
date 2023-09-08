# nicePlanet

Para executar o projeto, é necessário configurar o php... Esse processo varia de acordo com o sistema operacional, no meu caso eu utilizei o Ubuntu, entao instalei o LAMP.. Nesse video da pra entender melhor as instruções para fazer essa configuração: https://www.youtube.com/watch?v=saMOWPbZncs&t=2s&ab_channel=EstudonautaCursos 

Adicione a pasta do projeto (nicePlanet/login) no caminho: /var/www/html
Todos os arquivos esão na pasta 'login'

abra o http://localhost/phpmyadmin/index.php para verificar o banco de dados, entre com seu usuario e senha.. esse usuario e senha serão adicionados no arquivo "conexão.php"

$usuario = 'usuario';
$senha = 'senha';

crie o banco de dados nicePlanet e importe o dump

acesse: http://localhost/nicePlanet/ e clique em login

no dump está cadastrado o Nome de Usuário: usuarioTeste e senha: 123, para teste
na interface adicione para entrar, caso nao esteja digitado nada ou esteja incorreto, haverá um aviso

voce será redirecionado para a página /cadastros_Pesquisas.php, onde encontrará as opções de cadastrar ou pesquisar Produtores ou Propriedades, com uma mensagem de boas vindas ao Usuário. Há também um link para Sair, que encerra a sessão. Caso haja uma tentativa de acessar as páginas de cadastro ou pesquisas de produtor ou propriedade pelo link, sem estar logado, o arquivo protect.php irá bloquear e dar um aviso de que essaas páginas só estao acessiveis quando o usuário estiver logado

no cadastro de Produtor, digite o ID, o Nome e o CPF do produtor. o ID nao pode se repetir no banco, se ja existir haverá um erro. o CPF tem 11 numeros. Se estiver tudo corretamente haverá uma mensagem indicando que foi salvo com sucesso. E por fim tem um link pra voltar para a página /cadastros_Pesquisas.php

no cadastro de Propriedade o ID e o Cadastro Rural tambem são numéricos mas salvos como varchar, podem ter até 20 digitos. o ID não pode se repetir senao haverá erro.
Se estiver tudo corretamente haverá uma mensagem indicando que foi salvo com sucesso. E por fim tem um link pra voltar para a página /cadastros_Pesquisas.php

Na Pesquisa de Produtor ou Propriedade, basta digitar o ID no Produtor ou da Propriedade, e irá aparecer a tabela com a lista que comece ou o ID digitado. e no fim um link para voltar para /cadastros_Pesquisas.php