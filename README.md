 Implementing Tests Units

Simples desenvolvimento de testes unitários (indepentende de bibliotecas e/ou frameworks). 

Instalação dos requisitos no Ubuntu 12.04 (Precise Pangolin)

sudo add-apt-repository ppa:ondrej/php5 && sudo apt-get update
sudo apt-get install php5 php5-cli php5-xdebug php-pear
sudo pear update-channels && sudo pear upgrade pear
sudo pear config-set auto_discover 1
sudo pear install pear.phpunit.de/PHPUnit

Baixando os fontes
Git

git clone http://github.com/luizhenriquedapieve/Implementing_Tests_Units_PHP.git


Depois disso

cd ./implementing-tests-units-php/race/Tests
phpunit

Pronto agora é refatorar e implementar.


