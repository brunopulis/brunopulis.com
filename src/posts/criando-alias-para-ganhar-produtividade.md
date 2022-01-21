---
title: "Criando alias para ganhar produtividade"
date: "2020-05-11"
categories: 
  - "dev"
---

* * *

## Introducão

No dia a dia de um desenvolvedor é muito comum repetirmos diversos comandos, fazendo assim, o trabalho um pouco repetitivo. Pensando nisso os alias foram criados como uma forma de encurtar alguns comandos. Nesse post eu te mostro como criar dois alias de forma rápida e prática.

Em nosso cotidiano, digitamos uma infinidade de comandos, seja no código fonte ou no terminal.

A grande maioria desses comandos, são tarefas repetitivas que podem ser otimizados com a criação de alguns `alias`, que assim, tornam nosso dia mais produtivo.

## Exemplo prático

Como analista de teste, utilizo o **git** como versionador de códigos juntamente com o meu time. Dentre algumas tarefas que faço todos os dias e atualizar minha base de código e enviar algumas alterações relacionados aos testes que possuímos.

Além disso, abro alguns pull requests para a melhoria contínua da aplicação.

Para atualizar nosso código usamos o comando `git push` que envia as modificações para o servidor. Todos os dias faço o uso dele, como descrito logo abaixo:

```
git push origin master
```

Todos os dias também, tenho que usar o docker para subir a aplicação e preciso digitar dois comandos que sempre esqueço. 😂

Os dois comandos estão descrito abaixo

```
  # Inicializa o docker
  docker-compose up -d nginx mysql redis workspace

  # Executa o container
  docker-compose exec workspace bash
```

Pensando nisso decidi criar um `alias` para otimizar esse comando e encurtar ele. Pessoalmente eu detesto ter que ficar digitando uma infinidade de comandos no terminal, sou fã de coisas simples, como iniciar um banco de dados com apenas uma única linha.

Com os alias isso é possível, desde que, passamos os paramêtros corretos para o alias. A estrutura do alias consiste em:

```
alias comando_encurtado='comando real'

# exemplo de um comando alias
alias ..="cd .."
```

Ao digitar no terminal `..` ele irá entender que o `..` é um atalho para o `cd ..`. Isso é fantástico, eu posso customizar comandos do sistema operacional e também de aplicações, como por exemplo, iniciar o Visual Code com uma única linha de comando.

Para utilizarmos precisamos configurar os alias em nosso terminal. O arquivo de configuração padrão no Ubuntu é o `.bash_profile`, no meu caso estou usando o `zsh` que é uma outra versão do bash. O ZSH possuí o arquivo de configuração `.zshrc`.

Caso esses arquivos não existem eles devem ser criados com o comando:

```
# Bash padrão
touch .bashrc

# ZSH
touch .zshrc
```

**Importante**, a primeira coisa que iremos fazer e verificar se existe o arquivo de configuração. Caso não exista, devo criar o arquivo conforme acima.

```
# vai para o diretório raiz
cd ~/

# listo os diretórios
ls -lha
```

Se a minha resposta for parecida com essa, então meu arquivo de configuração está criado:

```
-rw-r--r-- 1 pulis 4,5K mai  6 11:49  .zshrc
```

Com o arquivo criado, iremos abri-lo digitando no terminal: `gedit .zshrc` e vou incluir os alias que quero para o docker.

```
alias init='docker-compose up -d nginx mysql redis workspace'
alias run='docker-compose exec workspace bash'

# reiniciando o terminal para aplicar as modificações
source .zshrc
```

Após o terminal reiniciado ele reconhecerá os comandos. Assim digitaria:

```
# inicializando
init

# executando
run
```

## Conclusão

Os comandos alias são poderosos e podem te ajudar bastante no dia a dia. No meu github eu tenho uma [coleção de alias](https://github.com/brunopulis/dotfiles/blob/master/.bash_profile).
