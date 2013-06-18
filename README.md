<b><h3>Implementing Tests Units</h3></b>

Simples desenvolvimento de testes unitários. 

<b><h3>Instalação dos requisitos no Ubuntu 12.04 (Precise Pangolin)</h3></b>

<pre>sudo add-apt-repository ppa:ondrej/php5 && sudo apt-get update
sudo apt-get install php5 php5-cli php5-xdebug php-pear
sudo pear update-channels && sudo pear upgrade pear
sudo pear config-set auto_discover 1
sudo pear install pear.phpunit.de/PHPUnit
</pre>

<b><h3>Fontes<br />
Git</h3></b>

<pre>git clone http://github.com/luizhenriquedapieve/Implementing_Tests_Units_PHP.git</pre>

<b><h3>Depois disso</h3></b>

<pre>cd ./implementing-tests-units-php/race/Tests
phpunit</pre>

Pronto agora é refatorar e implementar.


