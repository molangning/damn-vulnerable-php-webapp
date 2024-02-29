trap "trap - SIGTERM && kill -- -$$" SIGINT SIGTERM EXIT

./cloudflared-linux-amd64 tunnel --url http://localhost:8000 &> cloudflared-logs.txt &
php -S localhost:8000 -c $(pwd)/php.ini
