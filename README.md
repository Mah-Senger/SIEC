# SIEC
Trabalho de Conclusão de Curso em Informática <br>
Sistema de Integração Empresa-Candidato (SIEC)

# Passo a Passo Para Rodar o Projeto
* No terminal do vs code, digite "git clone https://github.com/Mah-Senger/SIEC.git" (sem aspas)
* É importante conferir se o terminal ja ta na pasta q vc quer clonar o projeto
* No terminal, realizar a instalação do npm com o `npm install` e atualizar com o `npm update`<br>
**Obs:** é necessário possuir o npm já instalado na máquina. Caso ainda não possue, acesse o site do [Node](https://nodejs.org/en/) e realize o download
* Realize a instalação e a atualização do composer no projeto, usando `composer install`e `composer update`
* Copie o arquivo `.env.example` como `.env` e confira se os dados do banco de dados do arquivo correspondem aos da sua máquina
* Insira as tabelas no banco, utilizando o comando `php artisan migrate`
* Adicione os dados necessários as tabelas ja criadas, com o `php artisan db:seed`
* Inicialize o servidor com o comando `php artisan serve`

# Para fazer o push (de volta para o github)
* git add . (Para adicionar todas as alterações na linha do tempo do projeto)
* git status (Para ver se todas as alterações foram adicionadas, pode pular se quiser)
* git commit -m "digita o q foi feito nesse pedaço de cod" (Explique em uma frase o que foi alterado)
* git push origin <nome da branch q vc ta> (Devolve para o github)

# Importante
* Cada vez que for continuar, pode ser que a versão da sua maquina esteja desatualizada em relação ao github. Então, digite "git pull" (dnv, sem aspas) para atualizar a sua versão. CASO NÃO FAÇA ISSO, VAI PERDER O QUE FEZ.

