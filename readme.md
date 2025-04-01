<h1>📚 Biblioteca - Sistema de Gestão </h1>

## 📋 Descrição

Sistema de controle de livros desenvolvido em PHP, HTML e CSS e Bootstrap. O sistema permite que professores solicitem livros e que um bibliotecário gerencie esses pedidos etc...

Sistema desenvolvido como parte [Avaliativa](https://github.com/orlandosaraivajr/FATEC_2025_1SEM_DW2/tree/main/avaliacao1) da disciplina Desenvolvimento web II  do curso: <a href="https://fatecararas.cps.sp.gov.br/tecnologia-em-desenvolvimento-de-softwares-multiplataforma/">DSM- Desenvolvimento de software multiplataforma.</a>
<br>
<br>
Professor, <a href="https://github.com/orlandosaraivajr">Orlando Saraiva.</a>

<h3 align="center">✅ Concluído ✅</h3>

 Esse projeto foi desenvolvido com as seguintes tecnologias:

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"/>
</p>

### Para rodar o sistema localmente, siga os passos abaixo:
1. Clone o repositório
2. Coloque a pasta `FATEC_DES_WEB2_2025_Avaliacao1`, na pasta `htdocs` do XAMPP ou WAMP.
3. ligue o servidor local (XAMPP ou WAMP).
4. Acesse o sistema pelo navegador, no endereço: `http://localhost/FATEC_DES_WEB2_2025_Avaliacao1`.
5. Faça o login com as credenciais de Login: **professor**, password: **professor** ou,  Login: **biblio** password: **biblio**, para testar o sistema.

## 💻 Layout do Projeto
<p> Páginas principais apenas:</p>

![](/img/index.jpg)
![](/img/welcome_p.jpg)
![](/img/welcome_b.jpg)
![](/img/cadastro_livros.jpg)
![](/img/livros_cadastrados.jpg)
![](/img/pedidos_livros.jpg)
![](/img/pedidos.jpg)

## 📂 Funcionalidades & Estrutura do Projeto

```bash
/Biblioteca
│── index.php                (Página inicial com login)
│── welcome_p.php            (Painel principal após login do professor)
│── welcome_b.php            (Painel principal após login do blibliotecário)
│── cadastro.php             (Cadastro de livros - Bibliotecário)
│── livros_cadastrados.php   (Listar todos os livros)
│── cadastro_pedido.php      (Cadastrar pedidos - Professores)
│── pedidos_cadastrados.php  (Listar pedidos - Bibliotecário)
│── logout.php               (Encerrar sessão)
│── livros.txt               (Armazena pedidos cadastrados)
│── cadastro_livros.txt      (Armazena livros cadastrados)     
└── redirect.php             (Gestão do botão voltar, de acordo com usuario logado na página livros_cadastrados.php)
```

## ⚠️ Observações

- Não utiliza banco de dados, apenas arquivos .txt para armazenar os dados.
- O sistema foi desenvolvido para fins acadêmicos, não é recomendado para uso em produção.

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

Feito com 💜 por [Lucas Eduardo.](https://linktr.ee/lucas.007)
