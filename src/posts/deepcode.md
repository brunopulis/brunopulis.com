---
title: "Conhecendo o Deepcode"
date: "2019-12-31"
categories: 
  - "qualidade-de-software"
tags: 
  - "automacao"
  - "code-review"
  - "inteligencia-artificial"
---

Recentemente navegando pelo Youtube vi um vídeo do [Filipe Deschamps](https://www.youtube.com/channel/UCU5JicSrEM5A63jkJ2QvGYw), onde ele mostrou uma ferramenta para avaliar questões de segurança no Code Review chamada DeepCode.

<iframe src="https://www.youtube.com/embed/eeMWZPZGhVk" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

## DeepCode

O DeepCode é uma ferramenta que auxilia no processo de Code Review, ela nos ajuda a desenvolver um code base com qualidade e segurança.  
A diferença e a grande promessa da ferramenta é a utilização de Inteligência Artificial para propor mudanças no code base.

A IA aprende com outros códigos fontes e mapeia as vulnerabilidades criando assim uma base de dados gigantesca com esses achados.

Segundo [o site deles](https://deepcode.ai) foram analisados 100 mil commits e encontrados problemas relacionados a segurança e vulnerabilidades que nenhuma outra ferramenta encontrou.

O algoritmo de Machine Learning deles tem 90% de precisão e o mais interesse dessa ferramenta ela possuí **zero configuração**.

![Deepcode sendo usado em uma avaliação de code review.](/images/deepcode.png)

## Linguagens suportadas

Atualmente eles suportam as linguagens: Javascript, Java, Python e Typescript. Caso a linguagem que você desenvolve não esteja na lista basta [fazer um pedido](https://www.deepcode.ai/feedback?select=1) que será analisado pela equipe deles.

## Extensão para o Visual Code

![](/images/visualcode.png)

Outro recurso bastante interessante é a possibilidade de instalar uma extensão do DeepCode no próprio Visual Code, com ela podemos analisar o código antes mesmo de submeter o mesmo para Code Review.

Para instalar a extensão basta ir no [Visual Studio Marketplace](https://marketplace.visualstudio.com/items?itemName=DeepCode.deepcode) ou atráves do próprio Visual Code na aba de extensões e procurar o DeepCode e instalar.

## Considerações finais

O DeepCode é uma excelente ferramenta que surgiu para guiar um desenvolvimento seguro e de alta qualidade. O algoritmo de Machine Learning é incrível e detecta diversas issues, testei no meu próprio site e tenho obtido resultados bastante interessantes.

Se posso te dar um conselho, teste essa ferramenta e explore os recursos que ela pode oferecer para garantir um software com um alto índice de valor e entrega.

Em breve escreverei como configurar o DeepCode em um projeto open source para garantir qualidade e segurança.

Até mais.

E um bom ano novo.
