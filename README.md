<b><h3>Implementing Units Tests PHP</h3></b>

É um projeto de trabalhado de conclusão de curso em Análise e Desenvolvimento de Sistemas do Instituto Federal Farroupilha - Campus São Vicente do Sul - RS.
O projeto conciste em um simulação de uma corrida de carro, aplicando testes unitários em seus métodos.

<b><h3>Instalação dos requisitos no Ubuntu 12.04 (Precise Pangolin)</h3></b>

<pre>sudo add-apt-repository ppa:ondrej/php5 && sudo apt-get update
sudo apt-get install php5 php5-cli php5-xdebug php-pear
sudo pear update-channels && sudo pear upgrade pear
sudo pear config-set auto_discover 1
sudo pear install pear.phpunit.de/PHPUnit
</pre>

<b><h3>Fontes<br />
Git</h3></b>

<pre>git clone http://github.com/luizhenriquedapieve/Implementing_Units_Tests_PHP.git</pre>

<b><h3>Depois disso</h3></b>

<pre>cd ./Implementing_Units_Tests_PHP/race/Tests
phpunit</pre>

Pronto agora é refatorar e implementar.


