#Diagrama de Casos de Uso – Sistema de Gerenciamento de Projetos

Atores:
1.	Usuário (Projetista)
2.	Administrador (Gerente)
Casos de Uso:
1.	Usuário (Projetista):
-	Login
-	Consultar Projetos e Status do Projeto
-	Se Inscrever para Projetos
2.	Administrador (Gerente):
-	Login
-	Adicionar Projetos
-	Consultar Projetos e Status do Projeto
-	Excluir Projetos
-	Editar o status de Projetos



 #Diagrama de Fluxo de Processo – Gerenciamento de Projetos
Início
1.	Usuário/Administrador
o	Credenciais válidas?
	Sim: Continuar
	Não: Exibir mensagem de erro
2.	Usuário/Administrador
     	Usuário:
-	Visualizar Projetos
-	Se Inscrever/Finalizar em projetos já existentes

      -	Administrador:
-	Ver Participantes dos Projetos
-	Visualizar Projetos
-	Ver/Editar Status dos Projetos
-	Adicionar/Excluir Projetos
3.	Logout
                              Fim




 
Diagrama de Casos de Uso – Sistema de Gerenciamento de Projetos
Atores:
3.	Usuário (Projetista)
4.	Administrador (Gerente)
Casos de Uso:
3.	Usuário (Projetista):
-	Login
-	Consultar Projetos e Status do Projeto
-	Se Inscrever para Projetos

4.	Administrador (Gerente):
-	Login
-	Adicionar Projetos
-	Consultar Projetos e Status do Projeto
-	Excluir Projetos
-	Editar o status de Projetos



Diagrama de Fluxo de Processo – Gerenciamento de Projetos
Início
4.	Usuário/Administrador
-	Credenciais válidas?
    -Sim: Continuar
      -Não: Exibir mensagem de erro
5.	Usuário/Administrador
    	Usuário:
-	Visualizar Projetos
-	Se Inscrever/Finalizar em projetos já existentes

      Administrador:
-	Ver Participantes dos Projetos
-	Visualizar Projetos
-	Ver/Editar Status dos Projetos
-	Adicionar/Excluir Projetos
6.	Logout
Fim

Diagrama de Fluxo

O diagrama de fluxo descreve o fluxo de processos e decisões no sistema de gerenciamento da biblioteca

Diagrama de Fluxo de Processo – Gerenciamento de Projetos

Inicio

1. Usuário/Admistrador
  -Credenciais válidas?
  -Sim: Continuar
  -Não: Exibir mensagem de erro

2. Usuário/Administrador
      -Usuário:
           -Visualizar Projetos
               -Se Inscrever/Finalizar em projetos já existentes
                   
-Administrador:
 -Ver participantes dos Projetos
   -Visualizar Projetos
      -Ver/Editar Status dos projetos
         -Adicionar/Excluir Projetos
     

 3. Logout
             
      
Fim.    



 
Diagrama de Classes para o Sistema de Ger enciamento de Projetos


1. Classe User
•	Atributos:
-	id: int - Identificador único do usuário (automático, gerado pelo sistema).
-	name: string - Nome completo do usuário.
-	email: string - Endereço de e-mail do usuário.
-	password: string - Senha do usuário (armazenada de forma segura e criptografada).

•	Métodos:
	-login() : boolean: Método responsável por autenticar o usuário com base nas suas credenciais. Retorna true se a autenticação for bem-sucedida e false caso contrário.

	-visualizarProjetos() : Collection<Projeto>: Método que retorna uma coleção de projetos associados ao usuário. Utiliza o relacionamento muitos-para-muitos com a classe Projeto.

	-seInscreverProjeto(projeto: Projeto) : void: Método que permite ao usuário se inscrever em um projeto. Adiciona o projeto à lista de projetos do usuário na tabela de participação.

	-finalizarInscricao(projeto: Projeto) : void: Método que permite ao usuário finalizar a inscrição em um projeto específico, removendo a associação do projeto na tabela de participação.


2. Classe Admin (Herda de User)

•	Métodos Adicionais:
 -adicionarProjeto(projeto: Projeto) : void: Método para criar e adicionar um novo projeto ao sistema. Inclui a criação de uma nova instância da classe Projeto e sua persistência no banco de dados.

-excluirProjeto(projeto: Projeto) : void: Método para remover um projeto existente do sistema, incluindo a eliminação de suas associações e dados relacionados.

-editarStatusProjeto(projeto: Projeto, status: string) : void: Método para atualizar o status de um projeto específico. A mudança é persistida no banco de dados.
-verParticipantesProjeto(projeto: Projeto) : Collection<User>: Método que retorna uma coleção de usuários envolvidos em um projeto específico.

3. Classe Projeto
•	Atributos:
-	id: int - Identificador único do projeto (automático, gerado pelo sistema).
-	nome: string - Nome do projeto.
-	descricao: string - Descrição detalhada do projeto.
-	status: string - Status atual do projeto, como "Em andamento" ou "Concluído".

•	Métodos:
-	atualizarStatus(status: string) : void: Método para atualizar o status do projeto e persistir a mudança no banco de dados.
-	getParticipantes() : Collection<User>: Método que retorna uma coleção de usuários associados ao projeto, utilizando o relacionamento muitos-para-muitos com a classe User.

4. Classe Participacao (Tabela Pivot)
•	Atributos:
-	id: int - Identificador único da participação (automático, gerado pelo sistema).
-	user_id: int - Chave estrangeira referenciando o User.
-	projeto_id: int - Chave estrangeira referenciando o Projeto.
-	status: string - Status da participação do usuário no projeto.

•	Métodos:
-	alterarStatus(status: string) : void: Método para atualizar o status da participação e persistir a mudança na tabela pivot.
Relacionamentos
1.	User e Admin
	Admin é uma especialização de User, herdando todos os atributos e métodos da classe User. A classe Admin possui métodos adicionais para a gestão de projetos.

2.	User e Projeto
	Relacionamento muitos-para-muitos entre User e Projeto, mediado pela tabela pivot participacoes. Em Laravel, isso é gerenciado através do método belongsToMany() do Eloquent.

3.	Projeto e Participacao
	Um Projeto pode ter várias entradas na tabela Participacao, representando as diferentes inscrições de usuários.

4.	User e Participacao
	Um User pode ter várias entradas na tabela Participacao, representando suas inscrições em diferentes projetos.

+--------------------+
|        User        |
+--------------------+
| - id: int          |
| - name: string     |
| - email: string    |
| - password: string |
+--------------------+
| + login() : boolean |
| + visualizarProjetos() : Collection<Projeto> |
| + seInscreverProjeto(projeto: Projeto) : void |
| + finalizarInscricao(projeto: Projeto) : void |
+--------------------+
         ^
         |
         |
+--------------------+
|       Admin        |
+--------------------+
|                    |
+--------------------+
| + adicionarProjeto(projeto: Projeto) : void |
| + excluirProjeto(projeto: Projeto) : void |
| + editarStatusProjeto(projeto: Projeto, status: string) : void |
| + verParticipantesProjeto(projeto: Projeto) : Collection<User> |
+--------------------+

+--------------------+
|      Projeto       |
+--------------------+
| - id: int          |
| - nome: string     |
| - descricao: string|
| - status: string   |
+--------------------+
| + atualizarStatus(status: string) : void |
| + getParticipantes() : Collection<User> |
+--------------------+
         ^
         |
         |
+--------------------+
|   Participacao     |
+--------------------+
| - id: int          |
| - user_id: int     |
| - projeto_id: int  |
| - status: string   |
+--------------------+
| + alterarStatus(status: string) : void |
+--------------------+
