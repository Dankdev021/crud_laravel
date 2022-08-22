Tópicos importantes

DRIVER do banco = mysql

Por que não usei SQLSERVER ? 
Resposta: o gerenciadorr de pacotes do arch linux que é o AUR e o Pacman não encontraram as atualizações das extensões necessárias para instalação do SQL SERVER

1 - Não foi possível realizar o dump do banco de daods devido uma extensão libldap que não é encontrada pelo Pacman (Gerenciador de pacotes do sistema operacional utilizado)
2 - Sistem operacional utilizado: Arch linux

3- No entanto o projeto pode ser usado normalmente, basta seguir os passos abaixo:

==== PASSOS PARA UTILIZAÇAO ======

1 - possuir uma conexão sql 
2 - possuir um gerenciador de banco de daods
3 - Criar um banco de dados com o nome "Series" (Não é necessário criar nada além do banco pois este sistema utiliza as migrations do laravel)
4 - apos criar o banco basta rodar o comando a baixo em seu editor de texto ou IDE 

=== php artisan migrate ====

Caso você encontre um erro devido a senha, basta acessar o arquivo. env e editar as seguintes variaveis
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Series
DB_USERNAME=root
DB_PASSWORD=123456

Este é o modelo da minha máquina, basta configurar de acordo com a sua conexão


Pronto para uso!
