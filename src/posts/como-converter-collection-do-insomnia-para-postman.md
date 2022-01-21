---
title: "Como converter uma collection do Insomnia para o Postman"
date: "2021-05-28"
categories: 
  - "qualidade-de-software"
tags: 
  - "api"
  - "insomnia"
  - "postman"
---

Essa semana enfrentei uma situação atípica, precisa de exportar uma _collection_ do Insomnia para o Postman. Minha necessidade era relativa a uma grande quantidade de cenários que iria precisar realizar.  
  
Muitos não sabem mas o Postman permite criarmos uma forma "automatizados" para testar os **_endpoints_** de nossas APIs. Em um outro post eu posso comentar sobre como fazer esse processo.

Ele iria poupar bastante tempo e conseguiria auxiliar o time em outras atividades mais importantes.

O Insomnia se tornou uma das alternativas do velho Postman, porém, prefiro ainda nosso amigo Postman.  
  
Para usar as collections que estavam no Insomnia precisei de exportá-las, porém, ele tem somente três formatos e nenhum deles tem suporte ao Postman.

![Três formatos para exportar uma collection do Insomnia: Insomnia v4 (JSON), Insomnia v4 (Yaml) e HAR](/images/convert-insomnia.png)

Opções de exportação do Insomnia

## Pesquisando

Comecei uma investigação pela internet sobre o tema e descobri que não existia uma alternativa oficial do Insomnia para isso. Talvez seja uma estratégia competitiva, nunca iremos saber.

Encontrei algumas coisas interessantes, inclusive [uma thread](https://github.com/Kong/insomnia/issues/1156) no repositório do Insomnia sobre o tópico. As pessoas estavam discutindo justamente a viabilidade de criar uma forma de exportar collection do Insomnia para o Postman.

O usuário **yaharga**, sugere uma solução que consistia em alterar o código fonte do Insomnia para habilitar o formato do Postman, como eu precisava de isso rápido logo descartei.

A solução também não era nada amigável para quem, somente utiliza o Insomnia para realizar requests em uma API. Geralmente eu fujo de soluções que não são amigáveis, pois o índice de dar um problema maior pode ser bem maior.

## Solução

Nessa thread encontrei um comentário de outro usuário, dizendo que tinha criado um projeto para realizar a exportação. Você pode encontrá-lo no [Github](https://github.com/Vyoam/InsomniaToPostmanFormat).

## Usando o InsomniaToPostmanFormat

Utilizei a solução que foi recomendada na thread e abaixo irie demonstrar o passo a passo para utilizar o projeto.

### Exportando

No Insomnia selecione o formato **Insomnia v4 (JSON),** ele irá gerar um arquivo JSON com a collection desejada.

Após a exportação, clone o repositório do **[InsomniaToPostmanFormat](https://github.com/Vyoam/InsomniaToPostmanFormat)** é necessário ter o Node instalado e configurado em sua máquina.

### Clonando o repositório

O primeiro passo é clonar o repositório que contém o código e criar uma cópia local para realizarmos conversão de forma segura.

git clone git@github.com:Vyoam/InsomniaToPostmanFormat.git

Após o clone do repositório, iremos instalar as dependências armazenadas no _**package.json**_**.** Abra o terminal e digite o seguinte comando:

npm install

### Executando

Após ter exportado a collection do Insomnia devemos incluir ela no mesmo diretório do projeto clonado. Digite o comando:

node convertJsonFile.js <export-insomnia.json>

Após o comando ser executado ele gerará um arquivo de saída com o nome **export-insomnia.postman\_collection.json**.

Um ponto importante para salientar é a versão do Node que o autor utiliza, ele diz que está preso nessa versão por questões do seu **codebase**.

## Conclusão

No meu cenário funcionou perfeitamente, vale lembrar que essa solução não é uma bala de prata e nem algo definitivo. A necessidade é a mãe das oportunidades e o open-source mais uma vez salva o dia.

O Geovane

* * *

Você já precisou de fazer algo semelhante? Utilizou outra solução conta pra mim.
