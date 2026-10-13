# TESTE_PHP 🐘

Repositório dedicado ao aprendizado e prática dos fundamentos da linguagem **PHP** e conceitos de **Programação Orientada a Objetos (POO)**.

---

## 📁 Estrutura do Projeto

```text
TESTE_PHP/
├── Fundamentos/
│   ├── HeloWorld.php       # Variáveis e estruturas condicionais (if/else)
│   ├── Enquanto.php        # Estrutura de repetição while
│   ├── Para.php            # Estrutura de repetição for
│   ├── Repita.php          # Estrutura de repetição do...while
│   ├── vetor.php           # Criação de arrays e inspeção com var_dump
│   ├── vetot2.php          # Percorrendo arrays com for e count()
│   ├── listar.php          # Percorrendo arrays com foreach
│   └── ComFunção.php       # Declaração e uso de funções com parâmetros e retorno
│
├── exemplo_polimorfism02/
│   ├── Aminal.php          # Classe abstrata Animal com método abstrato emitir_som()
│   ├── Cachorro.php        # Classe Cachorro herdando de Animal
│   ├── vaca.php            # Classe Vaca herdando de Animal
│   └── index.php           # Demonstração prática de Polimorfismo
│
└── README.md               # Documentação do repositório
```

---

## 📖 Conteúdo Abordado

### 1. Fundamentos da Linguagem
- **Variáveis e Tipos**: Declaração e manipulação de variáveis básicas.
- **Condicionais**: Utilização de `if` e `else` para controle de fluxo.
- **Estruturas de Repetição**:
  - `while` (Enquanto)
  - `for` (Para)
  - `do...while` (Repita)
  - `foreach` (Iteração facilitada sobre arrays)
- **Vetores (Arrays)**:
  - Criação de listas (`array(...)`)
  - Contagem de itens com `count()`
  - Depuração formatada com `var_dump()` e `<pre>`
- **Funções**:
  - Modularização de código, passagem de parâmetros e retorno de valores.

### 2. Programação Orientada a Objetos (POO)
- **Classes Abstratas**: Criação de moldes que não podem ser instanciados diretamente (`abstract class`).
- **Herança**: Extensão de classes base através do comando `extends`.
- **Polimorfismo**: Implementação personalizada do método `emitir_som()` em cada classe filha (`Cachorro` e `Vaca`).

---

## 🚀 Como Executar

### Pré-requisitos
- **PHP** instalado (versão 7.4 ou superior recomendada) ou ambiente local como **WampServer**, **XAMPP** ou **Laragon**.

### Execução via Servidor Local (WampServer)
1. Certifique-se de que a pasta do projeto esteja dentro de `c:\wamp64\www\TESTE_PHP`.
2. Inicie os serviços do WampServer.
3. Abra o navegador e acerte as rotas:
   - Fundamentos: `http://localhost/TESTE_PHP/Fundamentos/HeloWorld.php`
   - Polimorfismo: `http://localhost/TESTE_PHP/exemplo_polimorfism02/index.php`

### Execução via Terminal (CLI)
Você também pode rodar os scripts diretamente pela linha de comando:

```bash
# Executando um exemplo de fundamentos
php Fundamentos/HeloWorld.php

# Executando o exemplo de polimorfismo
php exemplo_polimorfism02/index.php
```

---

## 📝 Licença
Distribuído sob a licença [MIT](LICENSE).
