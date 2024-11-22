Documentação do Sistema Loja de Ferramentas
Esta documentação descreve a estrutura, funcionalidade e propósito dos controladores e modelos utilizados no sistema, baseado na plataforma Laravel. O objetivo é fornecer uma visão clara e detalhada do funcionamento do sistema.

1. Controladores
1.1 CarrinhoController
Este controlador gerencia as operações relacionadas ao carrinho de compras do usuário.

Função: add
Descrição: Adiciona um produto ao carrinho do usuário autenticado.
Parâmetros de entrada:
Request $request: Contém os dados enviados pelo formulário, como a quantidade.
Produto $produto: Representa o produto a ser adicionado.
Validação:
quantidade deve ser:
Obrigatório (required).
Numérico (numeric).
Valor mínimo de 1 (min:1).
Lógica:
Os dados são validados.
O produto é associado ao usuário autenticado via Auth::id().
Os dados são salvos na tabela carrinhos.
O usuário é redirecionado para a página do produto com uma mensagem de sucesso.
Mensagem exibida: "Produto adicionado ao Carrinho."
1.2 DashboardController
Este controlador gerencia a exibição da dashboard dos usuários.

Função: index
Descrição: Lista produtos com funcionalidade de pesquisa.
Parâmetros de entrada:
Request $request: Contém a palavra-chave de pesquisa.
Lógica:
Verifica se há um termo de busca.
Filtra produtos cujos campos (nome, descricao, ou categoria) contenham o termo.
Retorna a view usuarios.dashboard com os produtos filtrados.
Funcionalidade especial:
Utiliza o método when para aplicar filtros de forma condicional.
1.3 HomeController
Gerencia a página inicial do sistema.

Função: index
Descrição: Exibe os 5 produtos mais recentes.
Lógica:
Busca os 5 produtos mais recentes no banco de dados com o método take(5).
Retorna a view home com os produtos.
1.4 ProdutoController
Gerencia todas as operações CRUD relacionadas aos produtos.

Função: index
Descrição: Lista todos os produtos cadastrados.
Lógica: Retorna a view produtos.index com todos os produtos.
Função: create
Descrição: Exibe o formulário para cadastrar um novo produto.
Lógica: Retorna a view produtos.create.
Função: store
Descrição: Armazena os dados do formulário no banco de dados.
Validação:
nome: Obrigatório, texto, máximo 255 caracteres.
descricao, categoria: Obrigatórios.
quantidade, preco: Obrigatórios, numéricos.
Lógica:
Valida os dados do formulário.
Salva os dados no banco com Produto::create().
Redireciona para a lista de produtos com mensagem de sucesso.
Função: edit
Descrição: Exibe o formulário de edição de um produto.
Parâmetros de entrada:
Produto $produto: Representa o produto a ser editado.
Lógica: Retorna a view produtos.edit com os dados do produto.
Função: update
Descrição: Atualiza os dados do produto no banco de dados.
Lógica:
Valida os dados recebidos.
Atualiza as informações do produto com $produto->update().
Redireciona para a lista de produtos com mensagem de sucesso.
Função: destroy
Descrição: Remove um produto do banco de dados.
Parâmetros de entrada:
Produto $produto: Representa o produto a ser excluído.
Lógica:
Exclui o produto.
Redireciona para a lista de produtos com mensagem de sucesso.
Função: show
Descrição: Exibe os detalhes de um produto específico.
Parâmetros de entrada:
Produto $produto: Produto cujas informações serão exibidas.
Lógica: Retorna a view produtos.show com os dados do produto.
2. Modelos
2.1 Modelo: Carrinho
Gerencia as interações com a tabela carrinhos.

Atributos:
id_produto: Identifica o produto adicionado ao carrinho.
id_user: Identifica o usuário dono do carrinho.
quantidade: Armazena a quantidade do produto no carrinho.
status: Representa o estado atual do item no carrinho.
Propriedade $fillable:
Permite atribuição em massa dos atributos listados:

id_produto, id_user, quantidade, status.
2.2 Modelo: Produto
Representa a tabela de produtos no banco de dados.

Atributos (não explicitados no trecho fornecido):
id: Identificador único do produto.
nome: Nome do produto.
descricao: Descrição do produto.
categoria: Categoria à qual o produto pertence.
quantidade: Quantidade disponível.
preco: Preço do produto.
3. Banco de Dados
Tabelas Principais
Produtos
Armazena informações de todos os produtos.
Carrinhos
Armazena informações sobre os itens adicionados ao carrinho pelos usuários.
4. Funcionalidades
Usuário:
Pesquisar produtos: Busca por nome, descrição ou categoria.
Adicionar ao carrinho: Inscreve produtos e quantidade.
Visualizar produtos recentes: Exibe novidades na página inicial.
Administrador:
CRUD completo: Gerencia produtos (adicionar, editar, remover).
Visualizar listagens: Acompanha produtos e atualiza informações.
5. Mensagens de Sucesso
Produto criado com sucesso: Após cadastro.
Produto atualizado com sucesso: Após edição.
Produto deletado com sucesso: Após exclusão.
Produto adicionado ao Carrinho: Após inclusão no carrinho.
