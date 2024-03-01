wget https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64 -O cloudflared-linux-amd64
chmod +x cloudflared-linux-amd64

mkdir -p css
mkdir -p js

curl -o css/bootstrap.min.css https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
curl -o js/bootstrap.bundle.min.js https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js

rm -f db.sqlite
sqlite3 db.sqlite <<'END_SQL'
CREATE TABLE flag (flag NOT NULL);
INSERT INTO flag (flag) VALUES ('DVPW{Y0U_607_DB_FL46!}');
CREATE TABLE user (name TEXT, password TEXT);
INSERT INTO user (name, password) VALUES ('admin', 'superlongadminpassworddontjustcopyandpaste');
END_SQL