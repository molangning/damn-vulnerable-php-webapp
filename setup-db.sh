rm -f db.sqlite
sqlite3 db.sqlite <<'END_SQL'
CREATE TABLE flag (flag NOT NULL);
INSERT INTO flag (flag) VALUES ('DVPW{Y0U_607_DB_FL46!}');
CREATE TABLE user (name TEXT, password TEXT);
INSERT INTO user (name, password) VALUES ('admin', 'superlongadminpassworddontjustcopyandpaste');
END_SQL