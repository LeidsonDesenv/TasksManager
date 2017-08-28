<h1>Tasks Manager</h1>

<h2>Teste de Programação</h2>
<p>A proposta do projeto é criar um sistema com autenticação, autorização,  criar um CRUD completo, maniputar dados e arquivos</p>

<h2>Nesse primeiro commit apresentei</h2>
<p>Apresentação:</p>
<ul>
<li>
    Criei um Dashboard básico usando as classe do BootStrap.
</li>
<li>Criei uma view para cadastrar novos usuários.</li>
<li> Criei uma view para os usuários se logar.</li>
<li>Na parte superio da tela tem um menu que ainda precisa ser refinado, mas que verifica se o usuário está logado e muda de acordo com isso.</li>
<li>Na tela principal tem os links para criar novas tarefas e gerenciar as já criadas</li>
<li> Somente pode editar ou excluir as tarefas quem as criou </li>
<li>Inclui uma pasta chamada layouts nas view que é para reutilizar um modelo chamado template por toda a aplicação</li>
</ul>

<p><strong>Models</strong></p>

<p>No projeto até o momento tem 2 models User e Task</p>
<p>
Na model User tem as variáveis rules e fillable, uma para as regras de inclusão no banco de dados e a outra pra 'setar' quais campos da tabela podem ser incluidos no banco.<br/>
A model Task ainda não tem a variável rules que precisa ser incluida, mas tem também fillable tem o método author que pega via relacionamento com chave estrangeira o valor name da tabela 'users'.<br/>
Foi configurado no arquivo AuthServiceProvider que fica na pasta provider que o usuário só poderar editar e excluir os arquivos que criou.<br/>
</p>

<p><strong>Controllers</strong></p>

<p>Cada Model tem o próprio controller que separa todas as funções que são executadas de cada rota. <br/>
O  UserController tem apenas os métodos de registro de novo usuário, de consulta e de chamada para as views, e o TaskController tem todas funções de CRUD( adicionar novo item, editar, remover e consultar).
</p>

<p><strong>Espectativas</strong></p>

<p>A propósta para os próximos comits é melhorar a manipulação dos arquivos na hora de registar uma nova tarefa e também de consultar esses arquivos, a maior dificuldade desse projeto até então foi mexer com arquivos que foi uma novidade para mim.<br>
Também pretendo incluir autenticação com redes sociais(facebook, google+, Twitter) com o uso do OAuth e incluir o armazenamento em nuvem no Amazon S3( que demora 24hs pra disponível após criação da conta).
</p>