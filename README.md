<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About


Porém, antes de seguirmos para uma entrevista, precisamos que você avalie um CRUD de Fornecedor e verifique se é possível reproduzir o mesmo.

Pois, este CRUD tem diversos elementos que vão nos ajudar a entender melhor o seu nível técnico.

Ficamos no aguardo da sua avaliação.

Seguem abaixo os dados de acesso:
URL - https://teste.laravelnapratica.com.br/
Usuário - desafio@vercan.com.br
Senha - desafio@vercan

Obs: na tela de Cadastro tem o botão GUIA do CRUD, que irá lhe auxiliar em uma melhor compreensão do projeto.

Conforme nossa ótima interação, a Vercan tem como parte do processo seletivo um teste prático, onde você deve apresentar suas habilidades de forma que nos encante e faça jus a vaga pretendida.

O Teste Prático consiste em reproduzir um CRUD (Criação, Consulta, Atualização e Exclusão), conforme o exemplo abaixo:

Dados de acesso ao Teste Prático:
URL - teste.laravelnapratica.com.br
Usuário - desafio@vercan.com.br
Senha - desafio@vercan
No ambiente demonstrativo você irá ver um CRUD de Fornecedores, no qual há na tela de Cadastro um botão chamado "Guia do CRUD" que irá te orientar em como seguir com o desafio.

Regras do Teste Prático:

## Frontend
HTML, CSS (Bootstrap, Materialize ou Tailwind) e Javascript (Vanilla, jQuery, Vue, Angular ou React);
Utilize um tema Dashboard, temos por padrão o uso do AdminLTE, mas sinta-se à vontade para usar um de sua preferência.
## Backend
PHP 8 e Laravel 9 (ou a última versão do momento);
O projeto pode ser feito de forma tradicional (rota web + blade), API Restful, Inertia ou Livewire.
## Regras de Negócio
O acesso ao seu projeto deve ser permitido apenas ao usuário logado, mas não precisa de um crud de usuário, crie um seed para deixar o mesmo pré-cadastrado;
Utilize os recursos comuns no Laravel, tais como: route, mix, migration, seed, auth, form request, entre outros que julgar necessário.
Os estados e cidades devem ser cadastrados no banco de dados via seed;
Utilize máscara para formatar os campos: CNPJ, CPF e telefone;
Utilize validadores para os campos CNPJ e CPF, a fim de evitar conteúdo inválido, ex CPF: 00.000.000-00
## Diferencial no Projeto
Código Limpo;
Utilizar Design Patterns;
Testes automatizados;
Banco de Dados bem estruturado;
Entidades (Model) com um bom relacionamento.

## Demais Informações
Envie seu projeto via GitHub;
Diariamente os dados do ambiente da Vercan serão apagados;
Dúvidas em geral devem ser tratadas neste e-mail;
Importante deixar claro que, este desafio é parte do processo seletivo e não representa a conquista da vaga.
Por fim, realizar este projeto prático será considerado por nós um espelho da sua capacidade técnica. Ou seja, se por exemplo não for apresentado testes automatizados, iremos simplesmente entender que você ainda não detém este conhecimento e assim por diante.

Aguardo ansiosamente pelo seu projeto e assim conhecer melhor o que você tem a nos oferecer.

Em caso de dúvida, estou à disposição.

Att,

- https://receitaws.com.br/api
- https://developers.receitaws.com.br/#/operations/queryCNPJFree
- https://viacep.com.br/


composer create-project laravel/laravel --prefer-dist laravel-bootstrap
composer require laravel/ui
php artisan ui bootstrap
npm install
npm run dev
php artisan ui bootstrap --auth

php artisan ui bootstrap --auth
npm install bootstrap
npm install sass
npm install sass-loader
npm install && npm run dev

# Informações
## A tabela states contém:

Título, abreviação e slug
Código ISO
Informação populacional

## A tabela cities contém:

Título e slug
DDD das cidades
Código ISO
Informação populacional
Latitude e longitude
Renda per-capita

## A tabela regions contém:

Título e slug

- https://github.com/geekcom/validator-docs
- https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Installation
