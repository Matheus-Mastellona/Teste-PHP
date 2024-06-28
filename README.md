O repositório em questão é um programa para a realização de um teste para uma vaga de desenvolvedor back-end, no qual devo encontrar erros, criar uma classe e um objeto com base no arquivo disponibilizado.

Com base no arquivo "arquivo_com_erro.php", foram encontrados 6 erros, conforme comunicado:

1. **Linha 5:** `<form action="idex.php" method="post">` - erro em `"idex.php"`, deve ser `"index.php"`, caso contrário, a aplicação não abrirá corretamente.
2. **Linha 18:** `$address = (get_address($cp));` - erro em `"$cp"`, deve ser `"$cep"`, pois foi a variável criada, em vez de `cp`, o que resulta em "not found". A variável não será encontrada, causando um erro.
3. **Linha 21:** `echo "Rua: $addres->logradoro<br>";` - `addres` está escrito incorretamente, deve ser `address`, e a palavra correta é `logradouro` em vez de `logradoro`. Ao rodar a aplicação, notará que a Rua não será exibida devido a esses dois pontos citados.
4. **Linha 22:** `echo echo "Estado: $adress->uf<br>";` - `adress` está escrito incorretamente, deve ser `address`, pois, caso contrário, a aplicação não exibirá o estado.
5. **Linha 30:** `$url = "http://viacep.com.br/ws$cep/xml/";` - o erro está em `"ws$cep"`, o correto é `".../ws/$cep/..."`. Caso rode o código fornecido, notará o erro, pois a URL não será identificada.

---

Após a análise do código para identificar os erros, realizei a criação da classe `Address`, a instância do objeto solicitado e a chamada do método.

Sabendo que seria um diferencial, criei este repositório para hospedar o código. Além disso, fiz algumas melhorias visuais no código, para que ele ficasse mais fácil de visualizar, mesmo se tratando de uma aplicação simples.
