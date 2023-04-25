echo "Compilando código..."
cd ./govbr
npm install
npm run build
cd ../

if [ -z "$1" ]
then
    echo "Feito!"
else
    echo "Feito! Movendo arquivos para a pasta destino: $1"
    sudo rm -rf $1/govbr
    sudo cp -r ./govbr $1
    echo "Limpando alguns arquivos que não são necessários para o tema funcionar..."
    sudo rm -f $1/govbr/*.map
    sudo rm -f $1/govbr/package.json
    sudo rm -f $1/govbr/package-lock.json
    sudo rm -rf $1/govbr/node_modules
    sudo rm -rf $1/govbr/assets/sass
    sudo rm -rf $1/govbr/scripts/src
    sudo rm -rf $1/govbr/blocks/*/src
    echo "Pronto!"
fi