# Cadastro de Clientes

Sistema de cadastro de clientes utilizando as tecnologias Laravel e Bootstrap.


## Instalação

Passo 1:
	Clone este repositório, utilizando o comando abaixo:

    git clone https://github.com/thiagocfd/desafio_laravel.git
Passo 2: 
	Utilizando o terminal, acesse o diretório onde você baixou os arquivos do projeto e instale as dependências utilizando o composer.
	

    composer install

Passo 3:
	Crie um arquivo chamado .env, utilizando o arquivo .env.exemple como base.

Passo 4: 
	Crie uma chave de criptografia utilizando o comando:
	

    php artisan key:generate

Passo 5:
	Abra o arquivo .env e atualize os dados de acesso ao banco de dados.
	Ex:
	

    DB_CONNECTION=mysql    
    DB_HOST=127.0.0.1    
    DB_PORT=3306    
    DB_DATABASE=desafio_laravel   
    DB_USERNAME=root
    DB_PASSWORD=
	
Passo 6: 
	Execute os scripts de migração, executando o comando abaixo em seu terminal:
	

    php artisan migrate

Passo 7:
	Para executar o servidor integrado do PHP, execute o seguinte comando:
	

    php artisan serve

 A aplicação estará disponível do endereço:
	 

     http://127.0.0.1:8000

## Criando um novo usuário

Para criar um novo usuário e acessar o sistema, navegue até o endereço:

    http://127.0.0.1:8000/register


