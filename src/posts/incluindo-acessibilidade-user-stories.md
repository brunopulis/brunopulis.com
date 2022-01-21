---
title: "Escrevendo User Stories pensando em acessibilidade"
date: "2021-07-07"
categories: 
  - "a11y"
tags: 
  - "acessibilidade"
  - "po"
  - "user-stories"
---

## Introdução

Os métodos ágeis revolucionaram a forma de construir software. Passamos de um modelo sequencial para um interativo e incremental, gerando valor mais rápido. Essa mudança de paradigma trouxe inúmeros benefícios para o ciclo de vida de desenvolvimento, entre ela as histórias de usuários, ou _user stories_.

Neste artigo, iremos refletir como incluir a acessibilidade na escrita das histórias de usuário e como isso pode contribuir para todo o time, gerando assim, uma consciência de uma cultura acessível.

Este artigo foi inspirado numa [_thread_ no perfil Twitter pela Anna Cook](https://twitter.com/annaecook/status/1402258929329917952?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1402258929329917952%7Ctwgr%5E%7Ctwcon%5Es1_c10&ref_url=https%3A%2F%2Fbrunopulis.com%2Fwp-admin%2Fpost.php%3Fpost%3D1139action%3Dedit). Vale a pena acompanhar.

## Definição de Histórias de Usuário

As histórias de usuário são um dos elementos mais importantes das metodologias ágeis. Entretanto, são confundidadas com requisitos de software, o que não é verdade. Afinal, o que é uma história de usuário?

> **_A história do usuário é uma pequena peça de trabalho que representa algum valor para um usuário final e pode ser entregue durante um sprint._**

O principal objetivo deste elemento é inserir os usuários finais no centro da questão e buscar a funcionalidade de acordo com sua percepção. Assim, os desenvolvedores entendem melhor **o quê**, **para quem** e **por que** estão construindo.

Uma forma de escrever boas histórias de usuários é usar o metódo **INVEST** de Bill Walke, que compreende em:

- ****I****ndependent (independente) - não possuem dependencia de outras histórias de usuário;
- ****N****egotiable  (negociável) - existe uma flexibilidade para negociar uma história de usuário, sem um escopo fixo;
- ****V****aluable  (valioso) - cada história de usuário oferece um valor para o negócio e aos usuários;
- ****E****stimable  (estimável) - é muito fácil adivinhar quanto tempo levará o desenvolvimento de uma história de usuário.
- **S**mall (pequeno) - deve passar por todo o ciclo (desenho, codificação, teste) durante um sprint.
- **T**estable  (testável) - deve haver critérios de aceitação claros para verificar se uma história de usuário foi implementada de forma adequada.

Além disso, não existe um formato padrão para sua escrita, porém, muitas empresas escrevem da seguinte forma:

_Como um **\[tipo de usuário\]**, eu quero **\[uma ação\]** para que **\[um benefício/um valor\]**_

### Exemplos de escrita de história de usuário

Como **passageiro**, desejo **vincular o cartão de crédito** no site para **pagar uma viagem com mais rapidez, facilidade e sem dinheiro**.

Desta forma, podemos passar para as próximas etapas de refinamento e alinhamento com o time, mas será que ela engloba as pessoas com deficiência?

## Escrevendo história com acessibilidade

O primeiro passo para escrever histórias pensando em acessibilidade é conhecer os tipos de deficiências, que são:

- **Deficiência física:** engloba vários tipos de limitações, como paraplegia, tetraplegia, paralisia cerebral e amputação;
- **Deficiência auditiva:** redução ou ausência da capacidade de ouvir determinados sons em diferentes graus de intensidade;
- **Deficiência visual**: redução ou ausência total da visão, podendo ser dividida em baixa visão ou cegueira;
- **Deficiência cognitiva**: limitações significativas no funcionamento intelectual e no comportamento adaptativo, que aparecem nas habilidades conceituais, socias e práticas;

Além disso, precisamos ter em mente que as histórias necessitam serem acessíveis para quaisquer colaboradores, desde o designer até o desenvolvedor e todos os envolvidos.

**A narrativa focado no cliente é importante, porém, precisamos elucidar melhor o contexto, como: inserir o escopo da história, descrever a funcionalidade, a justificativa de negócio e o fluxo navegacional do usuário.**

Após identificarmos esses pontos, podemos escrever algumas histórias de exemplo. O exercício é pensar como as soluções de UX podem contribuir para esses usuários.

No processo de refinamento dessas histórias, podemos chegar a discussões bem interessantes, como:

- quais os critérios de sucesso da WCAG serão cobertos;
- quais soluções de interface que devemos projetar;
- como será o fluxo de navegação da interface.

* * *

### **Exemplo de deficiência física**

Uma pessoa com tetraplegia utilizam uma ponteira fixa na cabeça permitindo assim, sua navegação. Para garantir que isso aconteca algumas técnicas devem ser cumpridas, como:

- conteúdo disponível de várias formas;
- navegação clara;
- deve possuir sequência e significado.

Todos esses itens são descritos na WCAG como critérios de sucesso.

**Como**  
usuário com tetraplegia  
  
**Eu quero  
**vincular o cartão de crédito no site  
  
**Para que  
**pagar uma viagem com mais rapidez, facilidade e sem dinheiro

### **Exemplo de deficiência auditiva**

Uma pessoa com deficiência auditiva, deseja ver um vídeo com as novidades do seu jogo favorito. Para garantir que isso aconteca algumas técnicas devem ser cumpridas, como:

- vídeo possuir legendas;
- a linguagem deve ser clara;
- se possível ter um interprete de libras traduzindo o conteúdo;

Todos esses itens são descritos na WCAG como critérios de sucesso.

**Como**  
usuário com deficiência auditiva  
  
**Eu quero  
**ver um vídeo com legendas  
  
**Para que  
**possa conferir as novidades do novo game lançado

### **Exemplo de deficiência visual**

Uma pessoa cega quer selecionar um produto e comprá-lo em um e-commerce. Para garantir que isso aconteça algumas técnicas devem ser cumpridas, como:

- descrever as imagens corretamente;
- hierarquia de cabecalhos bem definida;
- código escrito corretamente;
- titulos e rótulos descritos para seu princípio;
- status das acoes do usuário na interface;
- formulários escritos semanticamente.

Todos esses itens são descritos na WCAG como critérios de sucesso.

**Como**  
uma pessoa cega  
  
**Eu quero  
**selecionar um produto no e-commerce  
  
**Para que  
**para poder comprá-lo

### **Exemplo de deficiência cognitiva**

Uma pessoa com dislexia necessita de dar zoom em uma interface para compreender melhor o conteúdo. Para garantir que isso aconteça algumas técnicas devem ser cumpridas, como:

- conteúdo deve ser acessado de várias formas;
- deve ser robusto o suficiente para se adaptar ao usuário;
- deve permitir o zoom na interface.

Todos esses itens são descritos na WCAG como critérios de sucesso.

**Como**  
uma pessoa dislexia usando o site  
  
**Eu quero  
**poder habilitar o zoom da interface para mais de 200%  
  
**Para que  
**consiga le com facilidade os textos que estão na tela.

## Conclusão

Pensar em histórias de usuário com acessibilidade traz riquezas de detalhes e previsibilidade de possíveis problemas que poderiam surgir futuramente.

Desta forma, conseguimos garantir uma maior qualidade e aumentar o alcance do produto ou servico que estamos desenvolvendo.

Gostaria de deixa um agradecimento especial para o [Raphael Bessa](https://www.linkedin.com/in/raphael-bessa-siqueira/), [Rafael Fernandes](https://www.linkedin.com/in/oindiao/), [Marlon Almeida](https://www.linkedin.com/in/marlonalmeida/) e [Sandyara Peres](https://www.linkedin.com/in/sandyaraperes/) que contribuíram para a construção desse artigo.

**Você já escreveu histórias de usuário pensando em acessibilidade?**  
**Conta nos comentários para mim.**
